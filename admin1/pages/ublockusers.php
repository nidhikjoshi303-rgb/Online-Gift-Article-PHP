<?php
include('connect.php');
$uid=$_GET['x'];
$q=mysqli_query($con,"update user_master set status=0 where uid=$uid");
if($q)
    header('location:active-users.php');
?>