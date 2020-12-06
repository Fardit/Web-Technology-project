<?php
session_start();
include "../includes/db_connect.inc.php";


if(isset($_SESSION['userid']))
{
	header("location:../interface/");
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
		
		if(empty($user)|| empty($password))
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
						header("location:../interface/");
						


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
<body>
<?php require "../includes/header.php"; ?>

<div align="center">
<h1>PMS LOGIN</h1>
<br>
<br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<label for="Id/Email">ID / EMAIL</label>
<br>
<input type="text" name="user" id="" required>
<br>
<br>
<label for="Password">PASSWORD</label >
<br>
<input type="password" name="password" id="" required>
<br>
<br>

<p style="color:red;"><?php echo $loginError; ?></p>

<input style="width:100px; height:25px;" type="submit" name="loginBtn" value="Log In">

</form>

</div>
	
</body>
</html>