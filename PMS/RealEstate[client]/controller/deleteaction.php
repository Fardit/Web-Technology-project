<?php

$showAlert = false;
include '_dbconnect.php' ;

if(isset($_POST['delete']))
{
	$username = $_POST['username'];

	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
	if($password == $cpassword)
	{
		
        $query = "DELETE FROM re WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($conn, $query);


			if($result)
			{	
        
        	header("location:signup.php");

    		}
    	
	}
	else
	{
		$showAlert = "Username or password incorrect";
	}

}


?>