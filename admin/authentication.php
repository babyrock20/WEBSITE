<?php
session_start();
include('config/dbcon.php');
if(!isset($_SESSION['auth'])){
    $_SESSION['message'] = "Login to Access Dashboard";
    header("Location: index.php");
    exit(0);
}


?>