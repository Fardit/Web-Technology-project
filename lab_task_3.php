<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>
	<?php
	  	$Student_IdError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Student_Id"])) {
				  $Student_IdError = " is required";
			}
			else {
				echo "Student Id is: " . $_REQUEST["Student_Id"];
			}
		} 
	?>
	<?php
	  	$Student_NameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Student_Name"])) {
				  $Student_NameError = " is required";
			}
			else {
				echo "Student Name is: " . $_REQUEST["Student_Name"];
			}
		} 
	?>
	<?php
	  	$GenderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Gender"])) {
				  $GenderError = "This field is required";
			}
			else {
				echo "Gender is: " . $_REQUEST["Gender"];
			}
		} 
	?>
	<?php
	  	$Student_EmailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Student_Email"])) {
				  $Student_EmailError = "This field is required";
			}
			else {
				echo "Student Email is: " . $_REQUEST["Student_Email"];
			}
		} 
	?>
	<?php
	  	$AddressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Address"])) {
				  $AddressError = "This field is required";
			}
			else {
				echo "Address is: " . $_REQUEST["Address"];
			}
		} 
	?>
	<?php
	  	$CityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["City"])) {
				  $CityError = "This field is required";
			}
			else {
				echo "City is: " . $_REQUEST["City"];
			}
		} 
	?>
	<?php
	  	$State_Province_RegionError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["State_Province_Region"])) {
				  $State_Province_RegionError = "This field is required";
			}
			else {
				echo "State / Province / Region is: " . $_REQUEST["State_Province_Region"];
			}
		} 
	?>
	<?php
	  	$CountryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Country"])) {
				  $CountryError = "This field is required";
			}
			else {
				echo "Country is: " . $_REQUEST["Country"];
			}
		} 
	?>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<label>Student Id:<label>
	 <br>
	 <input type="text" name="Student_Id" required>
	<br>
	<span><?php echo $Student_IdError; ?></span><br>


	<label>Student Name:</label>
	<br>
	 <input type="text" name="Student_Name" required>
	<br>
	<span><?php echo $Student_NameError; ?></span>
	<br>


	<label>Gender:</label>
	<br>
	 <input type="radio" name="Gender" value="male" required>Male
	<br>
	<input type="radio" name="Gender" value="female" required>Female
	<span><?php echo $GenderError; ?></span><br>
	<br>

	<label>Student Email:</label>
	<br>
	 <input type="text" name="Student_Email" required>
	<br>
	<span><?php echo $Student_EmailError; ?></span>
	<br>

	<label>Address:</label>
	<br>
	<input type="text" name="Address" required>
	<span><?php echo $AddressError; ?></span>

	<p style="font-size:8px;">Street Address </p>
	<input type="text" name="Street_Address">

	<p style="font-size:8px;">Address Line 2 </p>
	<input type="text" name="Street_line_2">
	
	<p style="font-size:8px;">City</p>
	<input type="text" name="City" required>
	<span><?php echo $CityError; ?></span>

	<p style="font-size:8px;">State / Province / Region</p>
	<input type="text" name="State_Province_Region" required>
	<span><?php echo $State_Province_RegionError; ?></span>

	<p style="font-size:8px;">Zip / Postal Code</p>
	<input type="text" name="Zip / Postal Code">

	<p style="font-size:8px;">Country</p>

	<select name="Country" id="Country">
		<option value="Bangladesh">Bangladesh</option>
		<option value="India">India</option>
		<option value="Pakistan">Pakistan</option>
    </select>
	<span><?php echo $CountryError; ?></span>

	<br>

    <br>

	<input type="Submit" value = "Save Form">
	</form>
</body>
</html>