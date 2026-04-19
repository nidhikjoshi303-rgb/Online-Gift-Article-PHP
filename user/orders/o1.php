<?php
    session_start();
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body {
    background: url('http://all4desktop.com/data_images/original/4236532-background-images.jpg');
    font-family: 'Roboto Condensed', sans-serif;
    color: #262626;
    margin: 5% 0;
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.d-flex {
    display: flex;
    flex-direction: row;
    background: #f6f6f6;
    border-radius: 0 0 5px 5px;
    padding: 25px;
}

form {
    flex: 4;
}

.Yorder {
    flex: 2;
}

.title {
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
    background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
    background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
    background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
    background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
    border-radius: 5px 5px 0 0;
    padding: 20px;
    color: #f6f6f6;
}

h2 {
    margin: 0;
    padding-left: 15px;
}

.required {
    color: red;
}

label,
table {
    display: block;
    margin: 15px;
}

label>span {
    float: left;
    width: 25%;
    margin-top: 12px;
    padding-right: 10px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
select {
    width: 70%;
    height: 30px;
    padding: 5px 10px;
    margin-bottom: 10px;
    border: 1px solid #dadada;
    color: #888;
}

select {
    width: 72%;
    height: 45px;
    padding: 5px 10px;
    margin-bottom: 10px;
}

.Yorder {
    margin-top: -25px;
    height: 806px;
    padding: 20px;
    border: 1px solid #dadada;
}

table {
    margin: 0;
    padding: 0;
}

th {
    border-bottom: 1px solid #dadada;
    padding: 10px 0;
}

tr>td:nth-child(1) {
    text-align: left;
    color: #2d2d2a;
}

tr>td:nth-child(2) {
    text-align: right;
    color: #52ad9c;
}

td {
    /* border-bottom: 1px solid #dadada; */
    padding: 25px 25px 25px 0;
}

.jp {
    border-bottom: 1px solid #dadada;
    padding: 25px 25px 25px 0;
}

p {
    display: block;
    color: #888;
    margin: 0;
    padding-left: 25px;
}

.Yorder>div {
    padding: 15px 0;
}

.m {
    margin-left: 441px;
    width: 20%;
    margin-top: 10px;
    padding: 10px;
    border: none;
    border-radius: 7px;
    background: #007bff;

    color: #fff;
    font-size: 15px;
    font-weight: bold;
}

.m:hover {
    cursor: pointer;
    background: #5195A8;
    transition: all .15s ease-in-out;
}
</style>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
     include('connect.php');
        if(isset($_POST['submit']))
        {
            $uid=$_SESSION['uid'];
            $uname=$_POST['uname'];
            $address=$_POST['address'];
            $zipcode=$_POST['zipcode'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $acc_total=$_SESSION['acc_total'];
            $pa_total=$_SESSION['pa_total'];
            $total5=$_SESSION['total5'];
            $qua=$_SESSION['pa_qty'];
            $qua2=$_SESSION['acc_qty'];
            $cpdid=$_SESSION['cpdid'];
            $cadid=$_SESSION['cadid'];
            $_SESSION['uname']=$uname;



        // echo $acc_total . $paa_total .$total5;   
        
        $q=mysqli_query($con,"insert into order_master values('',$uid,'$uname','$address','$zipcode','$phone','$email',$acc_total,$pa_total,'$total5',0)");
            if($q)
            {
                // echo "<script>alert('Inserted......');</script>";
                header('location:../paymentmode.php');
                // echo "<script>window.location.assign('meet_our_team.php');</script>";

              
            }
            else
            {
            echo "<script>alert('Not Inserted.....plz try again....');</script>";
            }   
            $q4=mysqli_query($con,"update car_accessories_details set qty=qty-$qua2 where cadid=$cadid");
            $q5=mysqli_query($con,"update car_parts_details set qty=qty-$qua where cpdid=$cpdid");
            
        }

?>
    <div class="container">
        <div class="title">
            <h2>Order Summary</h2>
        </div>
        <div class="d-flex">
            <form action="" method="POST">
                <label>
                    <span class="fname">First Name <span class="required">*</span></span>
                    <input type="text" name="uname" id="uname">
                </label>
                <label>
                    <span>Street Address <span class="required">*</span></span>
                    <input type="text" name="address" id="address" required>
                </label>
                <label>
                    <span>Postcode / ZIP <span class="required">*</span></span>
                    <input type="text" name="zipcode" id="zipcode">
                </label>
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="tel" name="phone" id="phone">
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="email" name="email" id="email">
                </label>

                <input type="submit" class="m" name="submit" id="submit" value="Place Order" data-bs-toggle="modal"
                    data-bs-target="#myModal">
                <div class="order" style="margin-top: 26px; margin-right: 15px; height: 357px; width: 578px;">
                    <img src="../img/o2.png">
                </div>

            </form>
            <div class="Yorder">
                <table>
                    <tr>
                        <th colspan="2">Your order Value</th>
                    </tr>
                    <tr>
                        <td class="jp"> Parts Subtotal</td>
                        <td class="jp">
                            &#8377;<?php 
                                include('connect.php');
                                $uid=$_SESSION['uid'];
                                $total=0;
                                $q3=mysqli_query($con,"select subtotal from pacart where uid=$uid");
                                
                                while($row3=mysqli_fetch_array($q3))
                                {
                                    $total=$total+$row3['subtotal'];
                                    
                                }
                                
                                echo $total;
                            ?>
                        </td>
                    </tr>
                    <td class="jp"> Accessaries Subtotal</td>
                    <td class="jp">
                        &#8377;<?php 
                                include('connect.php');
                                $uid=$_SESSION['uid'];
                                $q2=mysqli_query($con,"select subtotal1 from acccart where uid=$uid");
                                $total1=0;
                                while($row2=mysqli_fetch_array($q2))
                                {
                                    $total1=$total1+$row2['subtotal1'];
                                }
                                echo  $total1; 
                        ?>
                    </td>
                    </tr>
                    <tr>
                        <td class="jp">Shipping</td>
                        <td class="jp">Free shipping</td>
                    </tr>
                    <tr>
                        <td class="jp">Total</td>
                        <td class="jp">
                            &#8377;<?php 
                                $uid=$_SESSION['uid'];
                                $total5=$total+$total1;
                                echo $total5;
                            ?>
                        </td>
                    </tr>
                </table><br>
                <div>
                    <table>
                        <tr>
                            <td>Payment Mode We Provided</td>
                        </tr>
                        <tr style="margin-right: 10px;">
                            <td><img src="../img/mbanking.png" height="100px" width="100px"></td>
                            <td><img src="../img/upi2.png" height="120px" width="120px"></td>
                        </tr>
                        <tr>
                            <td><img src="../img/spay.png" height="100px" width="140px"></td>

                            <td><img src="../img/card2.png" height="130px" width="130px"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Payment We accpected</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                     

                        <input type="text">
                        <input type="text">
                    </div>
                    <div>
                        Mobile Banking
                    </div>
                    <div>
                        Upi
                    </div>
                    <div>
                        Scan and Pay
                    </div>
                    <div>
                        Credit/Debit Card
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Pay Now</button>
                </div>

            </div>
        </div>
    </div> -->

</body>

</html>

<script>
// function pay_now() {
//     var name = jQuery('#name').val();
//     var amt = jQuery('#amt').val();

//     jQuery.ajax({
//         type: 'post',
//         url: 'payment_process.php',
//         data: "amt=" + amt + "&name=" + name,
//         success: function(result) {
//             var options = {
//                 "key": "rzp_test_bTajuEVcxNgH51",
//                 "amount": amt * 100,
//                 "currency": "INR",
//                 "name": "Total Car Care",
//                 "description": "Test Transaction",
//                 "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
//                 "handler": function(response) {
//                     jQuery.ajax({
//                         type: 'post',
//                         url: 'payment_process.php',
//                         data: "payment_id=" + response.razorpay_payment_id,
//                         success: function(result) {
//                             window.location.href = "thank_you.php";
//                         }
//                     });
//                 }
//             };
//             var rzp1 = new Razorpay(options);
//             rzp1.open();
//         }
//     });
// }
</script>