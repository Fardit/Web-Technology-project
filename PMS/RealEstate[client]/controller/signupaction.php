<?php
error_reporting(0);
$showAlert = false;
$showError = false;
$error = false;

    if(isset($_POST['signup']))
    {
      include '_dbconnect.php';
    
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    //$exists=false;
    $existSql = "SELECT * FROM re WHERE username = '$username' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if($numExistRows > 0){
        $showError = "Username Already Exists.";
    }
    else{
        if(($password == $cpassword)){
          $sql = "INSERT INTO re VALUES('$username','$password', '$name', '$phone', '$gender', '$email', '$address')";
          $result = mysqli_query($conn, $sql);
          if($result){
            $showAlert = true ;
          }
          else
          {
            $error = "Please check again!";
          }
        }
        else{
          $showError = "Password do not match";
        }
    }
    }
?>






