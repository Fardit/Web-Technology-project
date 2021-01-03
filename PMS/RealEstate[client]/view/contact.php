<?php
include '../controller/searchaction.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>Contact</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="../css/style.css">

  <link rel="stylesheet"  href="../css/default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
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


  <br><br><br><br><br><br>

    <div>
    <h1 class="properties">Contact Us</h1>
    </div>


    <div style="margin-left: 174px; margin-right: 350px;">
      <p >Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</p>
    </div>



    <div>
      <img src="../images/contact-1.png">
    </div>


    <br><br><br>

<div>
    <h1 class="latest-properties"><b>Best Agents</b></h1>
  </div>
  <br>

  <section class="showcase-section">
    <div class="container">

      <div class="row">
  <!--showcase-->
        <div class="showcase">
          <div class="showcase-detail">
            <a href="agent1.php"><img src="../images/agent-1.jpg" alt="showcase one"></a>
            <div class="overlay"></div>
            <h2 class="showcaseh2">Eric Codin</h2>
            <h3 class="showcaseh3">Long Island, New York</h3>
          </div>
        </div>
        <!--showcase-->
        <div class="showcase">
          <div class="showcase-detail">
            <a href="agent1.php"><img src="../images/agent-2.jpg" alt="showcase one"></a>
            <div class="overlay"></div>
            <h2 class="showcaseh2">Jenelia Sans</h2>
            <h3 class="showcaseh3">Jersey City, New Jersey</h3>
          </div>
        </div>
        <!--showcase-->
        <div class="showcase">
          <div class="showcase-detail">
            <a href="agent1.php"><img src="../images/agent-3.jpg" alt="showcase one"></a>
            <div class="overlay"></div>
            <h2 class="showcaseh2">Julia Vancuv</h2>
            <h3 class="showcaseh3">New York City, New York</h3>
            
          </div>
        </div>  
      </div>
    </div>
  </section>
  <!--showcase section-->








<br><br><br><br><br><br>
    <div class="footer-section">
    
    <hr class="footerline"></hr>
    <p class="footerp">© Copyright
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p><br>
    <p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
  </div>


</body>
</html>