<?php 

$db_user = "localhost";
$db_pass = "";
$db_name = "user2";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST)){

	$name 		= $_POST['name'];
	$gender 		= $_POST['gender'];
	$email 			= $_POST['email'];
	$phone	= $_POST['phone'];
	$address		= $_POST['address'];

		$sql = "INSERT INTO user2 (name, phone, email, gender, address ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $phone, $email, $gender, $address]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}

?>