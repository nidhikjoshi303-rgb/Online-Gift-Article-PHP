<html>
<body>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">
    body {
        background: #f2f2f2;
    }

    .payment {
        border: 1px solid #f2f2f2;
        height: 280px;
        border-radius: 20px;
        background: #fff;
    }

    .payment_header {
        background: #7AB3E1;
        padding: 20px;
        border-radius: 20px 20px 0px 0px;

    }

    .check {
        margin: 0px auto;
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background: #fff;
        text-align: center;
    }

    .check i {
        vertical-align: middle;
        line-height: 50px;
        font-size: 30px;
    }

    .content {
        text-align: center;
    }

    .content h1 {
        font-size: 25px;
        padding-top: 25px;
    }

    .content a {
        width: 200px;
        height: 35px;
        color: #fff;
        border-radius: 10px;
        padding: 5px 10px;
        background: #007bff;
        transition: all ease-in-out 0.3s;
    }

    .content a:hover {
        text-decoration: none;
        background: #7AB3E1;
    }
    </style>

<?php
session_start();
$con=mysqli_connect("localhost","root","","online_gift");

$uid=$_SESSION['user_id'];

if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $address=$_POST['address'];
    $zipcode=$_POST['zipcode'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $total=$_SESSION['total'];
    $odate=date('Y-m-d');

    $_SESSION['uname']=$uname;
    $_SESSION['email']=$email;

    $q=mysqli_query($con,"INSERT INTO order_master 
    (user_id,name,address,zipcode,phone,email,total_amount,status,order_date) 
    VALUES 
    ('$uid','$uname','$address','$zipcode','$phone','$email','$total',0,'$odate')");

    if($q){
        header('location:paymentmode.php');
        exit();
    } else {
        die("Insert Error: ".mysqli_error($con));
    }
}
?> 
   
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <form method="POST">
                    <div class="content">
                        <h1>Payment Success !</h1>
                        <p>Thank you by,</p>
                        <div>
                            <p>Team InfinitexAgro</p>
                        <form method=post>
                            <h6>
                            <button type="button" onclick="window.location.href='/giftshop/user/index.php'">Go to Home</button>
                        </form>    
                    </div> 
                        </a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
