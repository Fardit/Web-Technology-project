<?php

$showAlert = false;
$showError = false;


    if(isset($_POST['submit']))
    {
      include '_dbconnect2.php';
    
    
    
    

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $cardno = $_POST['cardno'];
    $cvv = $_POST['cvv'];
    $validity = $_POST['validity'];
    

    
        $sql = "INSERT INTO payment VALUES('$name', '$phone', '$cardno', '$cvv', '$validity')";
        $result = mysqli_query($conn, $sql);
        if($result){
          
            $showAlert = true ;
        }
        else{
          //showError = "Something went wrong. Please try again.";
          $showError = "Payment method error. Please try again. " ;
        }
    }

    
?>



