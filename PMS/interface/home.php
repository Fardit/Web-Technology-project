<?php
session_start();
include "../includes/db_connect.inc.php";

$_SESSION['logOutId'] = 0;

$name = $address = $email =$phone = "";

$sql = "select * from admin where id = '".$_SESSION['userid']."';";

$result = mysqli_query($conn,$sql);

if($row= mysqli_fetch_assoc($result))
{
    $name = $row['Name']; 
    $email = $row['Email'];
    $address = $row['Address'];
    $phone = $row['Phone'];
}



if(isset($_SESSION['userid']))
{
}
else
{
    header("location:../LoginPage/login.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST['delButton']))
    {


        $sql = "DELETE FROM admin WHERE id = ".$_SESSION['userid'].";";

        mysqli_query($conn,$sql);

        echo "<script>

        if(confirm(\"Id deleted\"))
        {
            window.location.replace(\"../Logout/logout.php\");
        }
        {
            window.location.replace(\"../Logout/logout.php\");
        }
        </script>";

    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Document</title>
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
   
</head>
<body>
    

<div class=btn>
<a href="../index.php">Home</a>
</div>
<div class=info>
<p>Admin id: <?php echo $_SESSION['userid'] ?></p>
<p>Name: <?php echo $name ?></p>
<p>Email: <?php echo $email ?></p>
<p>Phone: <?php echo $phone ?></p>
<p>Addres: <?php echo $address ?></p>
</div>





<a href="../RegistrationPages/index.php"><button class="btn1" >Add Admin</button></a><br>
<a href="changeInfo.php"><button class="btn2" >Change Info</button></a><br>
<a href="changePassword.php"><button class="btn3">Change Password</button></a><br>

<form action="" method="POST">


    <button  class="btn4"  id="delButton" name = "delButton">Delete my account</button>

</form>
<a href="../Logout/logout.php"><button class="btn5" name = "logOutBtn" >Log Out</button></a>


</body>


<script>

    $(document).ready(function(){

    $('#delButton').click(function(){
    if(confirm('Confirm Deleting Account?'))
    {

    } //provide an alert to the screen
    else
    {
        return false;
    }
    });

    });
    </script>

</html>