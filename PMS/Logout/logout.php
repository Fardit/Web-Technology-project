<?php

session_start();

$id = $_SESSION['logOutId'];

$_SESSION = array();
session_destroy();


if($id!=1)
{

    header("location: ../LoginPage/login.php");
}
else
{
    header("location: ../index.php");
}


?>
