<?php 
include 'data/cookies.php'; 
include 'controller/searchaction.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<title>Real Estate</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/style.css">

	<link rel="stylesheet"  href="css/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
	
	<!--header-->
	<header id="header">
		<div class="container">
			<!--logo-->
			<div class="logo" >
				<a href="index.php"><b>REAL <span>ESTATE</span> </b></a>
			</div>
			<!--logo-->
			<!--nav-->
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="view/about.php">About</a></li>
					<li><a href="view/property.php">Property</a></li>
					<li><a href="view/login.php">Login</a></li>
					<li><a href="view/signup.php">Sign up</a></li>
					<li><a href="view/contact.php">Contact</a></li>
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
					<form class="example" action="controller/searchaction.php" method="post">
  					<button type="submit" name="ss"><i class="fa fa-search"></i></button>
					</form>
				</a>
				
				
	</div>

	
	</header>
	<!--header-->


	<!--banner section-->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content">
				<h1>START SEARCHING YOUR <span>REAL ESTATE</span> TODAY</h1>
				<h2>RENT | SELL | BUY</h2>
			</div>
		</div>
	</section>
	<!--banner section-->
	
	<div>
		<img src="images/services.png">
	
	</div>



	<div>
		<h1 class="latest-properties"><b>Latest Properties</b></h1>
	</div>

	<section class="showcase-section">
		<div class="container">

			<div class="row">
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="view/property2.php"><img src="images/property-3.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">PRICE $ 100,000</h2>
						<h3 class="showcaseh3">Long Island, New York</h3>
					</div>
				</div>
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="#"><img src="images/property-6.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">PRICE $ 7,50,000</h2>
						<h3 class="showcaseh3">Jersey City, New Jersey</h3>
					</div>
				</div>
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="#"><img src="images/property-7.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">PRICE $ 1,000,000</h2>
						<h3 class="showcaseh3">New York City, New York</h3>
						
					</div>
				</div>	
			</div>
		</div>
	</section>

	<section class="showcase-section">
		<div class="container">

			<div class="row">
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="view/property1.php"><img src="images/property-1.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">PRICE $ 350,000</h2>
						<h3 class="showcaseh3">Georgia City, Atlanta</h3>
					</div>
				</div>
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="#"><img src="images/property-2.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">PRICE $ 6,50,000</h2>
						<h3 class="showcaseh3">South City, Florida</h3>
					</div>
				</div>
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="#"><img src="images/property-5.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">PRICE $ 7,55,000</h2>
						<h3 class="showcaseh3">Cleveland, Ohio</h3>
						
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!--showcase section-->

	<br><br><br><br><br><br><br><br><br>


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
						<a href="view/agent1.php"><img src="images/agent-1.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">Eric Codin</h2>
						<h3 class="showcaseh3">Long Island, New York</h3>
					</div>
				</div>
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="view/agent1.php"><img src="images/agent-2.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">Jenelia Sans</h2>
						<h3 class="showcaseh3">Jersey City, New Jersey</h3>
					</div>
				</div>
				<!--showcase-->
				<div class="showcase">
					<div class="showcase-detail">
						<a href="view/agent1.php"><img src="images/agent-3.jpg" alt="showcase one"></a>
						<div class="overlay"></div>
						<h2 class="showcaseh2">Julia Vancuv</h2>
						<h3 class="showcaseh3">New York City, New York</h3>
						
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!--showcase section-->

	<br><br><br><br><br><br><br>


	
	<section class="courses-section">
		<div>
		<h1 class="properties"><b>Properties</b></h1>
	</div>
		<div class="container">
			<div class="flex">
				<div class="course">
					<div class="course-box">
						<a href="view/property1.php"><img src="images/property-1.jpg" alt="one"></a>
						<div>
							<h2 class="propertiesh2"><b>PRICE $ 100,000</b></h2>
							<h3 class="propertiesh3">Long Island, New York</h3>
							<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
						</div>
					</div>
				</div>
				<div class="course">
					<div class="course-box">
						<a href="view/property2.php"><img src="images/property-2.jpg" alt="two"></a>
						<div>
							<h2 class="propertiesh2"><b>PRICE $ 7,50,000</b></h2>
							<h3 class="propertiesh3">Jersey City, New Jersey</h3>
							<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
						</div>
					</div>
				</div>
				<div class="course">
					<div class="course-box">
						<a href="#"><img src="images/property-5.jpg" alt="three"></a>
						<div>
							<h2 class="propertiesh2"><b>PRICE $ 1,000,000</b></h2>
							<h3 class="propertiesh3">New York City, New York</h3>
							<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
						</div>
					</div>
				</div>
				<div class="course">
					<div class="course-box">
						<a href="#"><img src="images/property-7.jpg" alt="one"></a>
						<div>
							<h2 class="propertiesh2"><b>PRICE $ 350,000</b></h2>
							<h3 class="propertiesh3">Georgia City, Atlanta</h3>
							<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
						</div>
					</div>
				</div>
				<div class="course">
					<div class="course-box">
						<a href="#"><img src="images/property-6.jpg" alt="two"></a>
						<div>
							<h2 class="propertiesh2"><b>PRICE $ 6,50,000</b></h2>
							<h3 class="propertiesh3">South City, Florida</h3>
							<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary</p>
						</div>
					</div>
				</div>
				<div class="course">
					<div class="course-box">
						<a href="#"><img src="images/property-2.jpg" alt="three"></a>
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

	<div class="testimonial">
		<div>
		<h1 class="latest-properties"><b>Testimonials</b></h1>
	</div>
	<img src="images/testimonial.png">
	</div>



<br><br><br><br>







	
	
	<br><br><br><br><br>



	<div class="footer-section">
		
		<hr class="footerline"></hr>
		<p class="footerp">  Copyright  
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p>
        <div style="width: 54%; float: right;">
    		<img src="images/verifyiii.png"> 
		</div>
              <br>
		<p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
	</div>

	
    <!--p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span>-->



    <script type="text/javascript">
    	window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
    </script>
</body>
</html>