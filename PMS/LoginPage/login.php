<?php
session_start();
include "../includes/db_connect.inc.php";


if(isset($_SESSION['userid']))
{
	header("location: ../interface/");
	die();
}

$user = $password = $loginError ="";
$flag = 0;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$flag = 0;
	if(isset($_POST['loginBtn']))
	{
		
		$user = htmlspecialchars($_POST["user"]);
		$password = htmlspecialchars($_POST["password"]);
		
		if(empty($user) || empty($password))
		{
			$loginError = "Please Enter Login Info";
			$flag = 1;
		}

		if($flag==0)
		{
			$sql = "select * from admin where id = '$user' or email = '$user'";
			
			$result = mysqli_query($conn,$sql);
		
			if(mysqli_num_rows($result)<=0)
			{
				$loginError = "Login Credentials Error";
				$flag = 1;
			}
			if($flag==0)
			{
				if($row=mysqli_fetch_assoc($result))
				{
					
					if($password==$row['Password'])
					{
						$_SESSION['userid'] = $row['Id'];
						header("location: ../interface/");
						echo "<script>alert(\"Login Succesfull\")</script>";


					}
					else
					{
						$loginError = "Login Credentials Error";
						$flag = 1;
					}
				}

			}
			
		}

	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">
<link rel="stylesheet" href="login.css">
<body>
<div class="container">

<a href="../index.php">Home</a>


<h1>PLease Login Here</h1>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<div class="form-group">
<div><label for="Id/Email">ID / EMAIL :</label></div>
</div>
<input type="text" name="user" id = "user" required>

<div class="form-group">
<div><label for="Password">PASSWORD :</label></div>
</div>
<input type="password" name="password" id = "password" required>

<p><?php echo $loginError; ?></p>

<button class="btn" type="submit" name = "loginBtn" >log In</button>

</form>
</div>	
</body>
</html>
