<?php

session_start();

include "../includes/db_connect.inc.php";

if(!isset($_SESSION['userid']))
{
    header("location: ../LoginPage/login.php");
}


$name = $address = $email =$phone = $nameError = $addressError= $emailError= $phoneError = "";

$sql = "select * from admin where id = '".$_SESSION['userid']."';";

$result = mysqli_query($conn,$sql);

if($row= mysqli_fetch_assoc($result))
{
    $name = $row['Name']; 
    $email = $row['Email'];
    $address = $row['Address'];
    $phone = $row['Phone'];
}


$flag =0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST['update']))
    {   
        $flag= 0;

        $updateName = htmlspecialchars($_POST["name"]);
        $updateEmail = htmlspecialchars($_POST["email"]);
        $updateAddress = htmlspecialchars($_POST["address"]);
        $updatePhone =  htmlspecialchars($_POST["phone"]);


        if(empty($updateName))
        {
            $nameError = "Name Can't be Empty";
            $flag =1;
        }
        if(empty($updateEmail))
        {
            $emailError = "Email Can't be Empty";
            $flag =1;
        }
        if(empty($updateAddress))
        {
            $addressError = "Address Can't be Empty";
            $flag =1;
        }
        if(empty($updatePhone))
        {
            $phoneError = "Phone Can't be Empty";
            $flag =1;
        }


        if($flag==0)
        {
            if($updateName==$name && $updateAddress == $address && $updateEmail== $email && $updatePhone== $phone)
            {
                echo "<script>alert(\"Nothing To Update\")</script>";
                $flag=1;
            }




            if($flag==0)
            {
                $sql = "UPDATE `admin` SET `Name` = '".$updateName."' , email = '".$updateEmail."' , phone = '".$updatePhone."' , address = '".$updateAddress."' WHERE `admin`.`Id` = '".$_SESSION['userid']."';";

                mysqli_query($conn,$sql);

                echo "<script>

                    if(confirm(\"Update Successful\"))
                    {
                        window.location.replace(\"changeInfo.php\");
                    }
                    else
                    {
                        window.location.replace(\"changeInfo.php\");
                    }</script>";



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
    <link rel="stylesheet" href="../CSS/changeInfo.css">
    

    <script>
    function goingBack()
    {
        window.location.replace("home.php");
    

    }
    </script>

</head>
<body>
    <div class= btn1>
<a href="../index.php">Home</a>
</div>

    <div><label for="oldPass">ID: </label></div>
    <div>
    <input disabled type="text" name="id"  value="<?php echo $_SESSION['userid']?>" >
    </div>   


<form method="POST">
    <div class= form-group>
    <div><label for="oldPass">Name: </label></div>
    
    <div>
    <input type="text" name="name"  value="<?php echo $name?>" required>
    <p class="error" value=""><?php echo $nameError ?></p>
    </div>
    </div>

    <div class=form-group>
    <div><label for="oldPass" >Email: </label>
    </div>
    <div>
    <input type="email" name="email" value="<?php echo $email?>"  required>
    <p class="error" value=""><?php echo $emailError ?></p></div>
    </div>
    
    <div class= form-group>
    <div><label for="oldPass">Phone: </label></div>
    <div><input type="text" name="phone" value="<?php echo $phone?>"  required>
    <p class="error" value=""><?php echo $phoneError ?></p></div>
    </div>

    <div class= form-group>
    <div><label for="oldPass">Address: </label></div>
    <div><input type="text" name="address" value="<?php echo $address?>" required>
    <p class="error" value=""><?php echo $addressError ?></p></div>
    </div>

    <input class="btn2" type="submit" value="Update" name= "update">

</form>


    <button class="btn" onclick="goingBack()">Profile</button>

<a href="../Logout/logout.php"><button class="btn3" name = "logOutBtn" >Log Out</button></a>

</body>
</html>