<?php
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
    

<br>
<div style="text-align: center;">
<h2  >Select Your Card</h2>
    <a href="payment.php"><img   src="../images/visacard.png" alt="Visa Card" ></a>
    <img src="../images/gap.png" alt="">
    <a href="payment.php"><img src="../images/mastercard.png" alt="MasterCard" ></a>
</div>


<br><br><br><br><br><br><br>


<div style="float: right; margin-right: 50px;">
    <a href="#"><img style="width: 50px; margin-right: 5px;"   src="../images/verifiedby.jpg"  ></a>
    <a href="#"><img style="width: 50px; margin-right: 5px;"   src="../images/visal.png" alt="Visa Card" ></a>
    
    <a href="#"><img style="width: 50px; margin-right: 5px;" src="../images/mcl.png" alt="MasterCard" ></a>
    <a href="#"><img style="width: 50px; margin-right: 5px;"   src="../images/ael.png" alt="American Express" ></a>
    <a href="#"><img style="width: 50px; margin-right: 5px;" src="../images/upl.png" alt="Union Pay" ></a>
    <a href="#"><img style="width: 50px; margin-right: 5px;"   src="../images/qcl.png" alt="Qcash" ></a>
    <a href="#"><img style="width: 50px; margin-right: 5px;" src="../images/dml.png" alt="Dmoney" ></a>
    
</div>

    <br><br>  <br>
    <div class="footer-section">
    
    <hr class="footerline"></hr>
    <p class="footerp">© Copyright
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p><br>
    <p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
  </div>


</body>
</html>