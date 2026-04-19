<?php
session_start();
include('connect.php');

if (!$con) {
    die("DB not connected");
}

if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("location:shop.php");
    exit;
}

$pid = mysqli_real_escape_string($con, $_GET['id']);

$res = mysqli_query($con, "SELECT * FROM product_master WHERE pid='$pid'");

if (!$res || mysqli_num_rows($res) == 0) {
    die("Product not found");
}

$product = mysqli_fetch_assoc($res);
$price = $product['rate'];

$check = mysqli_query($con, "SELECT * FROM addtocart WHERE user_id='$user_id' AND product_id='$pid'");

if ($check && mysqli_num_rows($check) > 0) {
    mysqli_query($con, "UPDATE addtocart SET qty = qty + 1 WHERE user_id='$user_id' AND product_id='$pid'");
} else {
    mysqli_query($con, "INSERT INTO addtocart (user_id, product_id, qty, price) 
    VALUES ('$user_id', '$pid', 1, '$price')");
}

header("location:cart.php");
exit;