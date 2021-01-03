<?php 
require '../controller/signupaction.php' ;

include '../controller/searchaction.php';

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>Sign up</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="../css/style.css">

  <link rel="stylesheet"  href="../css/default.css">
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  



<script type="text/javascript" src="../js/signupaction.js"></script>

</head>

<body>
  
  <!--header-->
  <header id="header">
    <div class="container">
      <!--logo-->
      <div class="logo" >
        <a href="../index.php"><b>REAL <span>ESTATE</span> </b></a>
      </div>
      <!--logo-->
      <!--nav-->
      <nav>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="property.php">Property</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign up</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
        <!--nav-->
        <!--social list-->
        <div class="social-list">
          <ul>
            <li><a href="www.facebook.com" ><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="www.linkedin.com" ><i class="fa fa-linkedin"></i></a></li>
            <li><a href="www.twitter.com" ><i class="fa fa-twitter"></i></a></li>
            <li><a href="www.pinterest.com" ><i class="fa fa-pinterest"></i></a></li>
            
          </ul>
        </div>
        <!--social list-->
        <a href="view/search.php">
          <form class="example" action="../controller/searchaction.php" method="post">
            <button type="submit" name="ss"><i class="fa fa-search"></i></button>
          </form>
        </a>
        
  </div>

  
  </header>
  <!--header-->




  <?php
  if ($showAlert) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }
  if ($error) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
       ' . $error . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }
  ?>



<?php
         // define variables and set to empty values
        $nameErr = $phoneErr = $emailErr = $genderErr =    $addressErr = $usernameErr = $passwordErr =    $confrimpasswordErr = "";
         
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (empty($_POST["username"])) {
               $usernameErr = "*Email is required";
            }
            
            if (empty($_POST["password"])) {
               $passwordErr = "*Password is required";
            }

            if (empty($_POST["confrimpassword"])) {
               $confirmpasswordErr = "*Password is required";
            }
            if (empty($_POST["name"])) {
               $nameErr = "*Name is required";
            }
            if (empty($_POST["phone"])) {
               $phoneErr = "*Phone is required";
            }
            if (empty($_POST["email"])) {
               $emailErr = "*Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "*Invalid email format"; 
               }
            }
            if (empty($_POST["address"])) {
               $addressErr = "*Address is required";
            }
            
            
            if (empty($_POST["gender"])) {
               $genderErr = "*Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }

          }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>
 


  <div class="container">
    <h1 class="text-center">Signup to our website</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="signup_form" method="post" onsubmit="return validateForm()" style="display:flex; flex-direction:column; align-items:center;">
      


      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input placeholder="Enter your name" type="text" class="form-control" id="name" aria-describedby="username" name="name" required>
        <span><?php echo $nameErr; ?></span>

      </div>

      <div class="form-group col-md-6">
        <label for="phone">Phone</label>
        <input placeholder="Enter your phone number" type="text" class="form-control" id="phone" aria-describedby="phone" name="phone" required>
        <span><?php echo $phoneErr; ?></span>

      </div>

      <div class="form-group col-md-6">
        <label>Gender</label>
        <input style="margin-left: 50px; color: #2eca6a;" id="gender" type="radio" name="gender"  value="male" >  <b>Male</b> 

        <input style="margin-left: 70px; color: #2eca6a;" type="radio" name="gender" id="gender" value="female" > <b>Female</b> 
        
        <span><?php echo $genderErr; ?></span>
      </div>

      <div class="form-group col-md-6">
        <label for="email">Email </label>
        <input placeholder="Enter your email" type="email" class="form-control" id="email" aria-describedby="email" name="email" id="email"  required>
        <span><?php echo $emailErr; ?></span>

      </div>

      <div class="form-group col-md-6">
        <label for="address">Address</label>
        <input placeholder="Enter your address" type="text" class="form-control" id="address" aria-describedby="address" name="address" id="address" required>
        <span><?php echo $addressErr; ?></span>

      </div>

      <div class="form-group col-md-6">
        <label for="username">Email address</label>
        <input placeholder="Enter your email @ as username" type="email" class="form-control" id="username" aria-describedby="username" name="username"  required>
        <span><?php echo $usernameErr; ?></span>

      </div>
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input placeholder="Enter your password" type="password" class="form-control" id="password" name="password" required>
        <span><?php echo $passwordErr; ?></span>
      </div>
      <div class="form-group col-md-6">
        <label for="cpassword">Confrim Password</label>
        <input placeholder="Confrim password" type="password" class="form-control" id="cpassword" name="cpassword" required><br>
        <span><?php echo $passwordErr; ?></span>
        <small id="cpassword" class="form-text text-muted">Please type the same password.</small>
      </div>

      <button name="signup" style="margin-left: 15px;" id="submit" type="submit" value="Save Form" class="btn btn-success col-md-6"  > Signup</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  

  <br><br><br><br><br><br>
    <div class="footer-section">
    
    <hr class="footerline"></hr>
    <p class="footerp">© Copyright
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p><br>
    <p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
  </div>


</body>
</html>