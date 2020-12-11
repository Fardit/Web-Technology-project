<?php    
    
include "../model/connection.php";    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        echo "An Id is required";
    }
    else{
        $id=$_POST["id"];
        $idF=true;
    }
    if (empty($_POST["uname"])) {
        echo "A username is required";
    }
    else{
        $uname=$_POST["uname"];
        $unameF=true;
    }
    if (empty($_POST["password"])) {
        echo "A Password is required";
    }
    else{
        $password=$_POST["password"];
        $passwordF=true;
    }
    if (empty($_POST["email"])) {
        echo "An Email is required";
    }
    else{
        $email=$_POST["email"];
        $emailF=true;
    }
    if (empty($_POST["dob"])) {
        echo "An DOB is required";
    }
    else{
        $dob=$_POST["dob"];
        $dobF=true;
    }
   $sqlquerry= "INSERT INTO `registration form` (`id`, `User Name`, `Password`, `Email`, `DOB`) VALUES (null, $uname, $password, $dob, $email)";
}

   if(isset($_GET['id'])){    
$sql = "delete from registration where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <table style="border:1 px solid black;" width = "100%" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>User Name</td>        
                <td>Password</td>    
                <td>Confirm Password</td>    
                <td>Email</td>    
                <td>DOB</td>    
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>