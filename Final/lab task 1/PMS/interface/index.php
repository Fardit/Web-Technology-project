<?php

session_start();


//--- SESSION VALIDATION---\\

if(!isset($_SESSION['userid']))
{
    header("location:../LoginPage/login.php"); 
    die();
}
//CREATING DESTINATION

//----

if(!isset($_SESSION['userid']))
  {
  header("location:../LoginPage/login.php"); 
  die();
  }
  
  else
  {
    if(!isset($_SESSION['userid'])){
      header("location:../LoginPage/login.php");
      die();
    }
    else
    {
      $imageDestination = '../Media/Admin/'.$_SESSION['userid'];
          
      if(!is_dir($imageDestination))
      {
        mkdir($imageDestination,0777,true);

        $fp = fopen("../Media/Admin/".$_SESSION['userid']."/index.php", 'w');
    		fwrite($fp, '<?php header("location:../../../LoginPage/login.php") ?>');
    		fclose($fp);
      }

      
    }
}

//--- SESSION VALIDATION---\\

if(isset($_GET['logOut']))
  {
    session_destroy();
    header("location:../LoginPage/login.php");
    die();
  }


if($_SERVER["REQUEST_METHOD"]=="POST")
{

  

  if(isset($_POST['submit']))
  {
    $image = $_FILES['image'];



    $image_name = $_FILES['image']['name'];
    $imageError = $_FILES['image']['error'];
    $image_tmpName = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $imageType = $_FILES['image']['type'];

    $imageExt = explode('.', $image_name);
    $imageActualExt = strtolower(end($imageExt));

    $allowedType = array('jpg','jpeg','png');


    if (in_array($imageActualExt, $allowedType))
    {

      if($imageError===0)
      { 

        if($image_size<10000000)
        {

          $imageUploadName = uniqid('',true).".".$imageActualExt;

          $imageDestination = '../Media/Admin/'.$_SESSION['userid'];
          
          if(!is_dir($imageDestination))
          {
            mkdir($imageDestination,0777,true);
            $fp = fopen("../Media/Admin/".$_SESSION['userid']."/index.php", 'w');
      			fwrite($fp, '<?php header("location:../../../login.php") ?>');
      			fclose($fp);
          }

          $imageDestination = '../Media/Admin/'.$_SESSION['userid']."/".$imageUploadName;

          move_uploaded_file($image_tmpName,$imageDestination);

          header("Refresh:0");
        }
        else
        {
          $flag = 2;
        }
      }
      else
      {
        $flag=1;
      }
    }
    else
    {
      $flag = 1;
    }



  }
  if(isset($_POST['delete']))
  {
    unlink($_POST['delete']);
  }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="" type=""> 
	<title>Admin Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1">





</head>


<body>
<?php require "../includes/header.php"; ?>

	<!-- -------------------------------------------------------------- -->

	<section id="board">

		<h1 class="header">Admin Profile</h1>
	
    <?php

     


      $dirOpener = opendir("../Media/Admin/".$_SESSION['userid']."/");

      $dirOpener2 = "../Media/Admin/".$_SESSION['userid'];
      
      $fi = new FilesystemIterator($dirOpener2, FilesystemIterator::SKIP_DOTS);
      
      if(iterator_count($fi)<=1)
      {
          echo  "<h1 class=\"header\" align=\"Center\">UPLOADS A PROFILE PICTURE <br> JPG,PNG UPTO 10 MB</h1>" ;
        }
        else
        { 
            $count = 0;
            while(($entry = readdir($dirOpener)) !== false)
            {
                
                
                if($entry !='.' && $entry !='..' && $entry !='index.php')
                {
                    $count++;
                    echo "<div class=\"cont_files\"><h1 class=\"filename\">Profile Picture</h1>";
                    echo "<a target=\"_blank\" href=\"../Media/Admin/".$_SESSION['userid']."/".$entry."\"> <embed src =\"../Media/Admin/".$_SESSION['userid']."/".$entry."\" style=\"width: 300px; height:300px;\"></a><br>";
                    
                    echo "<form method=\"POST\">"."<button class=\"cancelBtn\" type=\"Submit\" name=\"delete\" value=\"../Media/Admin/".$_SESSION['userid']."/".$entry."\"".">Delete</button></form> </div>" ;
                }
            }
        }
        
        ?>
    <?php

$dirOpener2 = "../Media/Admin/".$_SESSION['userid'];
$fi = new FilesystemIterator($dirOpener2, FilesystemIterator::SKIP_DOTS);


if(iterator_count($fi)>=2)
{
    
}
else
{
    echo "<form method=\"POST\" enctype=\"multipart/form-data\">
    
    <input class =\"submit_btn\" type=\"file\" name=\"image\">
    
    <button class=\"submit_btn\" type=\"submit\" name=\"submit\">Upload Image</button>
    
    
    </form>";
}
?>

	</section>
    <br><br><br>

<a href="./?logOut=1"><button  style="width:100px;height:25px;color:white;background-color:black;" type="submit" name="logOut">LogOut</button></a>

</body>
</html>