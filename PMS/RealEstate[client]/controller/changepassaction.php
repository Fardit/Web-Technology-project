<?php

$showAlert = false;
$showError = false;

include '_dbconnect.php' ;

if(isset($_POST['changepassword']))
{
	$username = $_POST['username'];

	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
	if($password == $cpassword)
	{
	$query = "UPDATE re SET password = '$password' WHERE username = '$username' ";
	$result = mysqli_query($conn, $query);


	if($result)
	{
        $showAlert = true ;

    }
		
	}
	else
	{
		$showError = "Please type the same password and submit again";
	}
		
	
}

?>