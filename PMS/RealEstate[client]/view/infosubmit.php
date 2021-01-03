<?php
include '../controller/searchaction.php';
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Submitted!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    
    <div class="container my-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Hey - <?php echo $_SESSION['username'] ?></h4>
            <p>Your information submitted/updated successfully!</p>
            <div>
                <a href="editprofile.php">Edit your profile</a>
            </div>
            <div>
            <button type="button" onClick="document.location.href='viewinfo.php' " class="btn btn-primary">View</button>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    

</body>

</html>