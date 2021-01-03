<?php
include '../controller/searchaction.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>Property</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="../css/style.css">

  <link rel="stylesheet"  href="../css/default.css">
  
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

  <div class="card" style="width: 70rem; margin-left:9rem;">
    <img style="height:470px; width:1118px;" src="../images/property-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">$1,00,000</h5>
      <p class="card-text">This is a knock down unit and  great opportunity for carpenters or contractors...to design a Coop to fit your needs..plans can  include a garage. We are welcoming all CASH offers.  Enjoy the many amenities this community offers:  Security/Cameras, Security walks through Community, beach, playground, track, basketball court, volunteer Fire House, Community room for meetings and events for shareholders, deli, corporation on premises and express bus pick up and drop off in the community.</p>
      <a href="sellerinfo1.php" class="btn btn-success">Contect Seller</a>
      <a href="bookinginfo.php" class="btn btn-success">Request Booking</a>
      <a href="paymentgateway.php" class="btn btn-success">Payment</a>
    </div>
  </div>




  <br><br><br>

    <section class="courses-section">
    <div>
    <h1 class="properties"><b>Other Properties</b></h1>
    </div>
    <div class="container">
      <div class="flex">
        <div class="course">
          <div class="course-box">
            <a href="property1.php"><img src="../images/property-2.jpg" alt="two"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,50,000</b></h2>
              <h3 class="propertiesh3">Jersey City, New Jersey</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-5.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 1,000,000</b></h2>
              <h3 class="propertiesh3">New York, New York</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-7.jpg" alt="one"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 350,000</b></h2>
              <h3 class="propertiesh3">Georgia City, Atlanta</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-6.jpg" alt="two"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 6,50,000</b></h2>
              <h3 class="propertiesh3">South City, Florida</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-2.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>

        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-4.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-10.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-8.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>

        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-2.jpg" alt="two"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,50,000</b></h2>
              <h3 class="propertiesh3">Jersey City, New Jersey</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-1.jpg" alt="one"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 100,000</b></h2>
              <h3 class="propertiesh3">Long Island, New York</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-7.jpg" alt="one"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 350,000</b></h2>
              <h3 class="propertiesh3">Georgia City, Atlanta</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-2.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-10.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="course-box">
            <a href="#"><img src="../images/property-8.jpg" alt="three"></a>
            <div>
              <h2 class="propertiesh2"><b>PRICE $ 7,55,000</b></h2>
              <h3 class="propertiesh3">Cleveland, Ohio</h3>
              <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>





















  <br><br><br><br><br><br>
    <div class="footer-section">
    
    <hr class="footerline"></hr>
    <p class="footerp">© Copyright
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p><br>
    <p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
  </div>


</body>
</html>