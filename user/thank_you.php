<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Order Success</title>

<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body{
background:#f2f2f2;
}

.payment{
border-radius:20px;
background:#fff;
padding:40px;
text-align:center;
margin-top:120px;
box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

.check{
width:80px;
height:80px;
border-radius:50%;
background:#28a745;
color:white;
font-size:40px;
line-height:80px;
margin:auto;
}

.btn-home{
margin-top:20px;
padding:10px 25px;
border:none;
background:#007bff;
color:white;
border-radius:8px;
}

.btn-home:hover{
background:#0056b3;
}

</style>

</head>

<body>

<div class="container">

<div class="row">

<div class="col-md-6 mx-auto">

<div class="payment">

<div class="check">
<i class="fa fa-check"></i>
</div>

<h2 class="mt-3">Payment Successful!</h2>

<p>Thank you for your order.</p>

<p><b>Team Gift Shop</b></p>

<a href="../index.php">
<button class="btn-home">Go To Home</button>
</a>

</div>

</div>

</div>

</div>

</body>
</html>