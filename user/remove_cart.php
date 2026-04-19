<?php
session_start();
include('connect.php');

if(!isset($_SESSION['user_id'])){
    header("location:login.php");
    exit;
}

$cart_id = $_GET['id'];
mysqli_query($con, "DELETE FROM addtocart WHERE cart_id='$cart_id'");

header("location:cart.php");
exit;
?>