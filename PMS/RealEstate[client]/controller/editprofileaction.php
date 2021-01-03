<?php

$showAlert = false;
$showError = false;

include '_dbconnect.php' ;

if(isset($_POST['update']))
{
  $username = $_POST['username'];

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $query = "UPDATE re SET name = '$name', phone = '$phone', gender = '$gender', email = '$email', address = '$address' WHERE username = '$username' ";
  $result = mysqli_query($conn, $query);


  if($result)
  {
        $showAlert = true ;

    }
  else
  { 
    
    $showError = "Something went wrong. Please try again!";
  }
    
  
}

?>