<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="../images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>Search Seller</title>

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
         
        $nameErr =  "";
         
         
         if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            if (empty($_POST["name"])) {
               $nameErr = "*Name is required";
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
    <h2 style="text-align: center;">Enter name </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  >

        <div style="float: left;" class="form-group col-md-4">
        <label for="name">Name</label>
        <input placeholder="Enter name" type="text" class="form-control" id="name" aria-describedby="username" name="name"  required>
        <span><?php echo $nameErr; ?></span>
        </div>
      
      <div>
    <button style="margin-right: 582px; margin-top: 31px; float: right; " id="submit" name="submit" type="submit" value="Save Form" class="btn btn-success "  > Search </button>
    </div>
    </form>
    </div>



<br><br>

    <?php

            include '../controller/_dbconnect5.php' ;

        if(isset($_POST['submit']))
        {
             $name = $_POST['name'];

            $query = "SELECT *FROM agent WHERE name = '$name' ";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Error " . mysqli_error($conn));
                exit();
            }
            while($row = mysqli_fetch_array($result))
            { 
            ?>

      <table class="table">

          <tr>
          <th>Address</th>
          <th>Phone</th>
          <th>Link</th>
          </tr> 

          

             <tr>
               <td><?php echo $row['address']; ?></td>
               <td><?php echo $row['phone']; ?></td>
               
               <td><a class="btn btn-primary" href="agent1.php">Click</a></td>
             </tr>

             <?php
           }

         }
         ?>

      </table>
      
    


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
