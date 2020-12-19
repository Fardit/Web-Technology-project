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
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$insertquery = "INSERT INTO `admin` (`Id`, `Name`, `Phone`, `Email`, `Address`,`Password`) VALUES (NULL, '".$_POST['Admin_Name']."', '".$_POST['Phone']."','".$_POST['Email']."', '".$_POST['Address']."','".$_POST['Password']."');";

	if($flag == 0){
		mysqli_query($conn, $insertquery );


	} 
}
?>

<!DOCTYPE html>
<html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Prperty Management Sysytem</title>
		<script>
			function validate()
			{
				var flag =0;
				var Admin_Name = document.getElementById('Admin_Name').value;
				if(Admin_Name ==""){
					document.getElementById('errorMsg').innerHTML = "Name is empty";
					document.getElementById('errorMsg');
					flag = 1;

				}


				var Password = document.getElementById('Password').value;
					if(Password==""){
						document.getElementById('errorMsg1').innerHTML = "Password is empty";
						document.getElementById('errorMsg1');
						flag = 1;
					}

				var Email = document.getElementById('Email').value;
				if(Email==""){
					document.getElementById('errorMsg2').innerHTML = "Email is empty";
					document.getElementById('errorMsg2');
					flag = 1;
				}

				var Address = document.getElementById('Address').value;
				if(Address==""){
					document.getElementById('errorMsg3').innerHTML = "Address is empty";
					document.getElementById('errorMsg3');
					flag = 1;
				}

				var ConfirmPassword = document.getElementById('ConfirmPassword').value;
				if(ConfirmPassword==""){
					document.getElementById('errorMsg4').innerHTML = "ConfirmPassword is empty";
					document.getElementById('errorMsg4');
					flag = 1;
				}

				var Phone = document.getElementById('Phone').value;
				if(Phone==""){
					document.getElementById('errorMsg5').innerHTML = "Phone Number is empty";
					document.getElementById('errorMsg5');
					flag = 1;

				}
				if (flag=1){
					return false;
				}
				else
				return true;
			}
		</script>
    </head>
	</head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">
    <link rel="stylesheet" href="style.css">
	<body>
	
	<header clsss = "header">
		<div class="left">
            <img src="property.png" alt="">
            <div>pms</div>
        </div>

		<div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a> </li>
                <li><a href="#">About US</a></li>
                <li><a href="#">Poperty</a> </a></li>
                <li><a href="#">Contract US</a></li>
            </ul>
        </div>
			<a href="login.php" target="_blank">
            <div class="right">    
                <button class="btn">Log In</button>
            </div>
            </a>
	</header>
	<?php
	  	$Admin_NameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Admin_Name"])) {
				  $Admin_NameError = "Admin Name is required";
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
				  $EmailError = "Email is required";
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
				  $AddressError = "Address is required";
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
				  $PhoneError = "Phone number is required";
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
				  $PasswordError = "password is required";
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
				  $ConfirmPasswordError = "Confirm Password field is required";
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

	<div class="container">
	<div><h1>ADMIN REGISTRATION PAGE</h1></div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


	<div class="form-group">
	<div><label>Admin Name:</label></div>
	<div><input type="text" name="Admin_Name" id="Admin_Name" placeholder="Firstname & Lastname" value = "<?php echo $Admin_Name; ?>" ></div>
	</div>
	<p id ="errorMsg"></p>
    <span><?php echo $Admin_NameError; ?></span>

	<div class="form-group">
	<div><label>Email Address:</label></div>
	<div><input type="text" name="Email" id="Email" placeholder="Email address" value = "<?php echo $Email; ?>" ></div>
	</div>
	<p id ="errorMsg1"></p>
    <span><?php echo $EmailError; ?></span>

	<div class="form-group">
	<div><label>Address:</label></div>
	<div><textarea name="Address" id="Address" placeholder="Parmanent address"><?php echo $Address; ?></textarea></div>
	</div>
	<p id ="errorMsg2"></p>
    <span><?php echo $AddressError; ?></span>

	<div class="form-group">
    <div><label>Phone Number:</label></div>
	<div><input type="text" name="Phone" id="Phone" placeholder="Phone number" value = "<?php echo $Phone; ?>" ></div>
	</div>
	<p id ="errorMsg3"></p>
    <span><?php echo $PhoneError; ?></span>

	<div class="form-group">
	<div><label>Password:</label></div>
	<div><input type="text" placeholder="Password" name="Password" id="Password"></div>
	</div>
	<p id ="errorMsg4"></p>
    <span><?php echo $PasswordError; ?></span>

	<div class="form-group">
	<div><label>Confirm Password:</label></div>
	<div><input type="text" placeholder="Confirm password" name="ConfirmPassword" id="ConfirmPassword"></div>
	</div>
	<p id ="errorMsg5"></p>
    <span><?php echo $ConfirmPasswordError; ?></span>

	<div><input type="Submit" onclick="validate()"></div>
	</form>	
	</div>
	</div>
</body>
</html>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$insertquery = "INSERT INTO `admin` (`Id`, `Name`, `Phone`, `Email`, `Address`,`Password`) VALUES (NULL, '".$_POST['Admin_Name']."', '".$_POST['Phone']."','".$_POST['Email']."', '".$_POST['Address']."','".$_POST['Password']."');";

	if($flag == 0){
		mysqli_query($conn, $insertquery );


	} 
}
?>