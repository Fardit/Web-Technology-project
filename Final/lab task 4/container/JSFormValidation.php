<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["uname"])) {
			echo "User name is empty";		
		}
		else {
			echo "User Name is: " . $_REQUEST["uname"];
		}
	} 
?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_REQUEST["id"])) {
		echo "Id is empty";		
	}
	else {
		echo "Id is: " . $_REQUEST["id"];
	}
} 
?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_REQUEST["email"])) {
		echo "Email is empty";		
	}
	else {
		echo "Email is: " . $_REQUEST["Email"];
	}
} 
?>

<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["password"])) {
			echo "Password is empty";		
		}
		else {
			echo "Password is: " . $_REQUEST["password"];
		}
	} 
?>

<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["dob"])) {
			echo "DOB is empty";		
		}
		else {
			echo "DOB is: " . $_REQUEST["dob"];
		}
	} 
?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			JS Form Validation
		</title>
		<script>
			function validate() {
				var flag =0;
				var x = document.getElementById('uname').value;
				var x1 = document.getElementById('id').value;
				var x2= document.getElementById('email').value;
				var x3= document.getElementById('password').value;
				var x4= document.getElementById('dob').value;
				if(x == "") {
					document.getElementById('errorMsg').innerHTML = "User Name is empty";
					document.getElementById('errorMsg').style.color = "red";
					flag=1;	
				}
				if(x1 == "") {
					document.getElementById('errorMsg1').innerHTML = "Id is empty";
					document.getElementById('errorMsg1').style.color = "red";
					flag=1;		
				}
				if(x2 == "") {
					document.getElementById('errorMsg2').innerHTML = "Email is empty";
					document.getElementById('errorMsg2').style.color = "red";
					flag=1;		
				}
				if(x3 == "") {
					document.getElementById('errorMsg3').innerHTML = "Password is empty";
					document.getElementById('errorMsg3').style.color = "red";
					flag=1;		
				}
				if(x4 == "") {
					document.getElementById('errorMsg4').innerHTML = "DOB is empty";
					document.getElementById('errorMsg4').style.color = "red";
					flag=1;	
				
				}
				if (flag=1){
					return false;
				}
				else
				return true;
			}
		</script>
	</head>
	<body>
		<h1> JS Form Validation </h1>
		<formuser="jsForm" action="/wt/JSValidation.php" method="POST">
			Id: <input type="text" id="id" name="id">
		<p id="errorMsg1"> </p>
			<br>

		<formuser name="jsForm" action="/wt/JSValidation.php" method="POST">
			User Name: <input type="text" id="uname" name="uname">
			<p id="errorMsg"> </p>
			<br>

		<formuser name="jsForm" action="/wt/JSValidation.php" method="POST">
			Email: <input type="text"id="email" name="email">
			<p id="errorMsg2"> </p>
			<br>

		<formuser name="jsForm" action="/wt/JSValidation.php" method="POST">
			Password: <input type="text" id="password" name="password">
			<p id="errorMsg3"> </p>
			<br>

		<formuser name="jsForm" action="/wt/JSValidation.php" method="POST">
			DOB: <input type="text" id="dob" name="dob">
			<p id="errorMsg4"> </p>
			<br>

			<input onclick="validate()" type="submit" value="Submit">
		</form>
	</body>
</html>