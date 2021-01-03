

<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>View Info</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="../css/style.css">

  <link rel="stylesheet"  href="../css/default.css">
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
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
         // define variables and set to empty values
        $usernameErr =  "";
         
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (empty($_POST["username"])) {
               $usernameErr = "*Email is required";
            }
          }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>
<br>
    <div class="container">
    <h2 style="text-align: center;">Enter username to view info.</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="signup_form" method="post">

        <div style="float: left;" class="form-group col-md-4">
        <label for="username">Email address</label>
        <input placeholder="Enter your email @ as username" type="email" class="form-control" id="username" aria-describedby="username" name="username"  required>
        <span><?php echo $usernameErr; ?></span>
        </div>
      
      <div>
    <button style="margin-right: 647px; margin-top: 32px; float: right; " id="submit" name="submit" type="submit" value="Save Form" class="btn btn-success col-md-1"  > Submit</button>
    </div>
    </form>
    </div>



<br><br>



    <?php

            include '../controller/_dbconnect.php' ;

        if(isset($_POST['submit']))
        {
             $username = $_POST['username'];

            $query = "SELECT *FROM re WHERE username = '$username' ";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Error " . mysqli_error($conn));
                exit();
            }
            while($row = mysqli_fetch_array($result))
            { 
            ?>
            
    <section class="courses-section">
    <div>
    <h1 style="text-align: center;">Profile</h1>
    </div>
    <div class="container">
      <div class="flex">
        <div class="course">
          <div class="course-box-view">
            <a href="#"><img src="../images/profile.png" alt="one"></a><br>

            

            <div style="text-align: left; margin-left: 50px;">
              <p><b>Name : <?php echo  $row['name'];  ; ?> </b></p>
              <p><b>Phone : <?php echo  $row['phone']; ?> </b></p>
              <p><b>Gender : <?php echo  $row['gender']; ?> </b></p>
              <p><b>Email : <?php echo  $row['email']; ?> </b></p>
              <p><b>Address : <?php echo  $row['address']; ?> </b></p>
            </div>

            <?php

            }

        }

            ?>

          </div>
        </div>
      </div>
    </div>
  </section>
    







    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer-section">
    
    <hr class="footerline"></hr>
    <p class="footerp">© Copyright
              <span class="color-a"><b>REAL </b></span> <span class="color-b"> <b>ESTATE </b></span> All Rights Reserved.</p><br>
    <p class="footerp1">Designed by <span><a  class="color-a" href="#">Sibbir Hossain</a></span></p>
  </div>


</body>
</html>
