<?php
include '../controller/paymentaction.php';
include '../controller/searchaction.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>Payment</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="../css/style.css">

  <link rel="stylesheet"  href="../css/default.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  

  


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
        <strong>Payment Successful!</strong> Your payment has been done.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
  }

?>




  <?php

  
  $nameErr = $phoneErr = $cardnoErr = $cvvErr = $validityErr = "";
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "*Please enter your name";
    }
    

    if (empty($_POST["phone"])) {
      $phoneErr = "Please enter your phone number";     
    }

    if (empty($_POST["cardno"])) {
      $cardnoErr = "Please select card no";
    }

    if (empty($_POST["cvv"])) {      
      $cvvErr = "Please enter your CVV";
    }

    if (empty($_POST["validity"])) {
      $validityErr = "Please enter your validity";
    }

  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

  <div style="text-align: center;">
        <h1>Payment</h1>
        <p>Please input your details for payment.</p>
  </div>

  <form style="margin-left: 200px; " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="payform" method="POST">
    <div >
      
    
      <div class="form-group col-md-5">
        <label for="name"><b>Name</b></label>
        <input class="form-control " style="width:190px;" type="text" placeholder="Enter your name" name="name" required>
        <span><?php echo $nameErr; ?></span>
      </div>

      <br />

      <div class="form-group col-md-5">
        <label for="phone"><b>Phone</b></label>
        <input class="form-control " style="width:190px;" type="text" placeholder="Enter your number" name="phone" required>
        <span><?php echo $phoneErr; ?></span>
      </div>

      <br />

      <div class="form-group col-md-5">
        <label for="cardno"><b>Card no.</b></label>
        <input class="form-control " style="width:175px;" type="text" placeholder="Card number" name="cardno" required>
        <span><?php echo $cardnoErr; ?></span>
      </div>
      <br />

      <div class="form-group col-md-5">
        <label style="text-align: left;" for="cvv"><b>CVV</b></label>
        <input class="form-control" style="width:159px;" type="text" name="cvv" required="" placeholder="CVV" name="cvv" required>
        <span><?php echo $cvvErr; ?></span>
      </div>

      <br />


      <div class="form-group col-md-5">
        <label for="validity"><b>Validity</b></label>
        <input class="form-control" style="width:160px;" type="text" placeholder="month/year" name="validity" required>
        <p>Example : 02/25</p>
        <span><?php echo $validityErr; ?></span>
      </div>

      <br />
      



      <div>
      
        <button name="submit" style="margin-left: 15px;" id="submit" type="submit" value="Save Form" class="btn btn-success "  > Pay</button>
        <button type="button" onClick="document.location.href='welcome.php' " class="btn btn-secondary">Cancel</button>
      </form>

   </div>
      
   </div>


   

   <div style="margin-left: 700px;">
     <br>
      <img style="height:100px;" src="../images/verifylogo.png" alt="">
   </div>

  
<br><br><br><br><br><br>
    <div class="footer-section">
    
    <hr class="footerline"></hr>
    <p class="footerp">© Copyright
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p><br>
    <p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
  </div>


</body>
</html>