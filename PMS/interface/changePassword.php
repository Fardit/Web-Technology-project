<?php

session_start();

include "../includes/db_connect.inc.php";

if(!isset($_SESSION['userid']))
{
    header("location: ../LoginPage/login.php");
}

$oldPass = $newPass = $cfmNewPass = $oldPassError = $newPassError = $cfmNewPassError = "";
$flag =0;


if($_SERVER["REQUEST_METHOD"] == "POST")
{



    if(isset($_POST['confirmBtn']))
    {
        $flag =0;

        $oldPass = htmlspecialchars($_POST["oldPass"]);
        $newPass = htmlspecialchars($_POST["newPass"]);
        $cfmNewPass = htmlspecialchars($_POST["cfmNewPass"]);


        $sql = "Select * from admin where id ='".$_SESSION['userid']."' and password = '".$oldPass."';";

    
        $result = mysqli_query($conn,$sql);


        if(empty($oldPass))
        {
            $oldPassError = "Field can't be empty";
            $flag =1;
        }

        if(empty($newPass))
        {
            $newPassError = "Field can't be empty";
            $flag =1;
        }

        if(empty($cfmNewPass))
        {
            $cfmNewPassError = "Field can't be empty";
            $flag =1;
        }



        if($flag==0)
        {

            if(mysqli_num_rows($result)<=0)
            {
                $oldPassError = "OLD Password is Wrong";
                $flag = 1;
            }
        
            if($flag==0)
            {
                if($newPass != $cfmNewPass)
                {
                    $cfmNewPassError = "Password doesn't match!";
                    $flag = 1;
                }

                if($flag ==0)
                {
                    $updateQuery = "UPDATE admin SET Password = '".$newPass."' WHERE Id ='".$_SESSION['userid']."';";
                    mysqli_query($conn,$updateQuery);

                    
                echo "<script>
                
                
                
                

                if(confirm(\"PASSWORD UPDATED! New Password is: ".$newPass."\"))
                {
                    window.location.replace(\"home.php\");
                }
                else
                {
                    window.location.replace(\"home.php\");
                }
                
                
                
                
                </script>";


                }
            }
        
        }
        


    }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/changePassword.css">

    <script>
    function goingBack()
    {
        window.history.back();
    

    }
    </script>

</head>
<body>
<div class=btn1>
<a href="../index.php">Home</a>
</div>


<button class="btn" onclick="goingBack()">Back</button>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

<div class=form>


<div><label for="oldPass">Old Password: </label></div>

<div><input type="text" name="oldPass" id="" required></div>

<p class="error" value=""><?php echo $oldPassError ?></p>

<div><label for="oldPass" >New Password: </label></div>
<div><input type="text" name="newPass" id="" required></div>
<p class="error" value=""><?php echo $newPassError ?></p>

<div><label for="oldPass">Confirm New Password: </label></div>
<div><input type="text" name="cfmNewPass" id="" required></div>
<p class="error" value=""><?php echo $cfmNewPassError ?></p>



<input class="btn2" type="submit" value="Confirm" name="confirmBtn">

</form>
</div>

<a href="../Logout/logout.php"><button class="btn" name = "logOutBtn" >Log Out</button></a>

</body>
</html>