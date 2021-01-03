<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header class="header">
            <!-- left box for logo -->
            <div class="left">
                <img src="property.png" alt="">
                <div>pms</div>
            </div>
            <!-- mid box for navigation -->
            <div class="mid">
                <ul class="navbar">
                    <li><a href="#" class="active">Home</a> </li>
                    <li><a href="#">About US</a></li>
                    <li><a href="#">Poperty</a> </a></li>
                    <li><a href="#">Contract US</a></li>
                </ul>
            </div>
            
            <!-- right box for buttons -->
            <div class=right>
                <?php 
                    if(!isset($_SESSION['userid']))
                    {
                        echo "<a href=\"LoginPage/\"><button>Log In</button></a>";
                        echo "<a href=\"RegistrationPages/\"><button>Sign up</button></a>";
                    }
                    else
                    {
                        echo "<a href=\"interface/\"><button>Profile</button></a>";
                        echo "<a href=\"Logout/logout.php\"><button>Logout</button></a>";
                        $_SESSION['logOutId']= 1;
                    }
                ?>
            </div>
  </header>  
    <div class="container">
        <h1>Welcome to Property Management System</h1>
            
     </div>
</body>
</html>