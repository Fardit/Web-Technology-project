<?php

$showAlert = false;
$showError = false;


    if(isset($_POST['submit']))
    {
      include '_dbconnect1.php';
    
    
    $username = $_POST['username'];
    

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pid = $_POST['pid'];

    
        $sql = "INSERT INTO booking VALUES('$username','$name', '$phone', '$gender', '$email', '$address', '$pid')";
        $result = mysqli_query($conn, $sql);
        if($result){
          
            $showAlert = true ;
        }
        else{
          
          $showError = "Your booking has been canceled. " ;
        }
    }

    
?>



