<?php
$con = mysqli_connect("localhost", "root", "", "online_gift");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>