<?php
error_reporting(0);
$showAlert1 = false;
$showErr1 = false;

include '_dbconnect1.php' ;

if(isset($_POST['delete']))
{
	$username = $_POST['username'];
    

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pid = $_POST['pid'];
		
    $query = "DELETE FROM booking WHERE pid = '$pid'  ";
	$result = mysqli_query($conn, $query);


	if($result)
	{	
        
        $showAlert1 = true ;

    }
    	
	
	else
	{
		$showErr1 = "Something went wrong. Please try again.";
	}

}


?>