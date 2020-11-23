<?php 
session_start();
include "../includes/db_connect.inc.php";
$flag = 0 ; 
$Admin_Name = "";
$Password = "";
$Phone ="";
$Email = "";
$Address = "";
$ConfirmPassword = "";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>
</head>
<body>
<?php require "../includes/header.php"; ?>

	<?php
	  	$Admin_NameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Admin_Name"])) {
				  $Admin_NameError = " is required";
				  $flag = 1;
			}
			else {
				
				$Admin_Name =  $_REQUEST["Admin_Name"];
			}
		} 
	?>
	<?php
	  	$EmailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Email"])) {
				  $EmailError = "This field is required";
				  $flag = 1;
			}
			else {
				
				$Email =  $_REQUEST["Email"];
			}
		} 
	?>
	<?php
	  	$AddressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Address"])) {
				  $AddressError = "This field is required";
				  $flag = 1;
			}
			else {
				
				$Address =  $_REQUEST["Address"];
			}
		} 
	?>
	<?php
	  	$PhoneError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Phone"])) {
				  $PhoneError = "This field is required";
				  $flag = 1;
			}
			else {
				
				$Phone =  $_REQUEST["Phone"];
			}
		} 
	?>
	<?php
	  	$PasswordError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Password"])) {
				  $PasswordError = "This field is required";
				  $flag = 1;
			}
			else {
				
				$Password =  $_REQUEST["Password"];
			}
		} 
	?>
	<?php
	  	$ConfirmPasswordError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["ConfirmPassword"])) {
				  $ConfirmPasswordError = "This field is required";
				  $flag = 1;
			}
			else {
				
				$ConfirmPassword =  $_REQUEST["ConfirmPassword"];
			}
		} 
	?>
	<?php 
	if($Password === $ConfirmPassword)
	{}
	else{
		$ConfirmPasswordError = "Please Try again";
	}
	?>

	<div align="center">
	<h1>ADMIN REGISTRATION PAGE</h1>
	<br>
	<br>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">



	<label>Admin Name:</label>
	<br>
	 <input type="text" name="Admin_Name" value = "<?php echo $Admin_Name; ?>" >
	<br>
    <span><?php echo $Admin_NameError; ?></span><br>


	<label>Email:</label>
	<br>
	 <input type="text" name="Email" value = "<?php echo $Email; ?>" >
	<br>
    <span><?php echo $EmailError; ?></span><br>
	<br>

	<label>Address:</label>
	<br>
	<textarea name="Address"> <?php echo $Address; ?> </textarea>

    <br>
    <span><?php echo $AddressError; ?></span><br>


    <label>Phone:</label>
	<br>
	 <input type="text" name="Phone" value = "<?php echo $Phone; ?>" >
	<br>
    <span><?php echo $PhoneError; ?></span><br>

	<label>Password:</label>
	<br>
	 <input type="text" name="Password" >
	<br>
    <span><?php echo $PasswordError; ?></span><br>

	<label>Confirm Password:</label>
	<br>
	 <input type="text" name="ConfirmPassword" >
	<br>
    <span><?php echo $ConfirmPasswordError; ?></span><br>


	

	<input style="height:25px;width:100px;background-color:blue;" type="Submit">
	
	</form>
	</div>
</body>
<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$insertquery = "INSERT INTO `admin` (`Id`, `Name`, `Phone`, `Email`, `Address`,`Password`) VALUES (NULL, '".$_POST['Admin_Name']."', '".$_POST['Phone']."','".$_POST['Email']."', '".$_POST['Address']."','".$_POST['Password']."');";

		if($flag == 0){
			mysqli_query($conn, $insertquery );


		} 
	}
?>
</html>