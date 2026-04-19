<?php
    session_start();
    
    // include('../smtp/PHPMailerAutoload.php');
    
    // function smtp_mailer($to,$subject, $msg){
    //     $mail = new PHPMailer(); 
    //     $mail->IsSMTP(); 
    //     $mail->SMTPAuth = true; 
    //     $mail->SMTPSecure = 'tls'; 
    //     $mail->Host = "smtp.gmail.com";
    //     $mail->Port = 587; 
    //     $mail->IsHTML(true);
    //     $mail->CharSet = 'UTF-8';
    //     //$mail->SMTPDebug = 2; 
    //     $mail->Username = "infinitexagro@gmail.com";
    //     $mail->Password = "egnn cras qzwc usjn";
    //     $mail->SetFrom("infinitexagro@gmail.com ");
    //     $mail->Subject = $subject;
    //     $mail->Body =$msg;
    //     $mail->AddAddress($to);
    //     $mail->SMTPOptions=array('ssl'=>array(
    //         'verify_peer'=>false,
    //         'verify_peer_name'=>false,
    //         'allow_self_signed'=>false
    //     ));
    //     if(!$mail->Send()){
    //         echo $mail->ErrorInfo;
    //     }
    // }
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
    background:rgb(70, 219, 20);

    color: #fff;
    font-size: 15px;
    font-weight: bold;
}

.m:hover {
    cursor: pointer;
    background:rgb(67, 126, 31);
    transition: all .15s ease-in-out;
}
</style>
<html>

<body>
    <?php
        $con=mysqli_connect("localhost","root","","online_gift");
        $uid=$_SESSION['user_id'];

       
        if(isset($_POST['submit']))
        {
            $uname=$_POST['uname'];
            $_SESSION['uname']=$uname;

            $address=$_POST['address'];
            $zipcode=$_POST['zipcode'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            // $subtotal=$_SESSION['subtotal'];
            $total=$_SESSION['total'];
            $to = $_POST['email'];
            $_SESSION['email'] = $email;
            $subject = "ORDER SUMMARY";
            
            $odate=date('Y-m-d');
        // echo $acc_total . $paa_total .$total5;   
      //  echo "insert into order_master values('',$uid,'$uname','$address','$zipcode','$phone','$email',$subtotal,$total,0)";
            $q=mysqli_query($conn,"insert into order_master values('',$uid,$total,0,'$odate')");
            if ( $q)
             {
               // echo smtp_mailer($to,$subject,$msg);
                header('location:paymentmode.php');

            } else {
                echo "<script>alert('Not Inserted.....plz try again....');</script>";

            }

           
            // $q4=mysqli_query($con,"update car_accessories_details set qty=qty-$qua2 where cadid=$cadid");
            // $q5=mysqli_query($con,"update car_parts_details set qty=qty-$qua where cpdid=$cpdid");
            // $q7=mysqli_query($con,"delete from acccart where uid=$uid");
            // $q7=mysqli_query($con,"delete from pacart where uid=$uid");
            
        }

?>
    <div class="container">
        <div class="title">
            <h2>Order Summary</h2>
        </div>
        <div class="d-flex">
            <?php
             $q1=mysqli_query($con,"select * from user_master where uid=$uid");
             $row1=mysqli_fetch_array($q1);
            ?>
            <form action="" method="POST">
                <label>
                    <span class="fname">First Name <span class="required">*</span></span>
                    <input type="text" name="uname" id="uname" value="<?php echo $row1['uname'];?>">
                </label>
                <label>
                    <span>Street Address <span class="required">*</span></span>
                    <input type="text" name="address" id="address" value="<?php echo $row1['address'];?>" required>
                </label>
                <label>
                    <span>Postcode / ZIP <span class="required">*</span></span>
                    <input type="text" name="zipcode" id="zipcode" value="<?php echo $row1['pin'];?>">
                </label>
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="tel" name="phone" id="phone" value="<?php echo $row1['mobno'];?>">
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="email" name="email" id="email" value="<?php echo $row1['email'];?>">
                </label>

                <input type="submit" class="m" name="submit" id="submit" value="Place Order" onclick="pay_now()">
                <div class="order" style="margin-top: 26px; margin-right: 15px; height: 357px; width: 578px;">
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
                              //  include('connect.php');
                                // $uid=$_SESSION['uid'];
                                // $total=0;
                                // $q3=mysqli_query($con,"select subtotal from pacart where uid=$uid");
                                
                                // while($row3=mysqli_fetch_array($q3))
                                // {
                                //     $total=$total+$row3['subtotal'];
                                    
                                // }
                                
                                echo $_SESSION['total'];
                            ?>
                        </td>
                    </tr>
                    <!-- <td class="jp"> Accessaries Subtotal</td>
                    <td class="jp">
                        &#8377;<?php 
                                // include('connect.php');
                                // $uid=$_SESSION['uid'];
                                // $q2=mysqli_query($con,"select subtotal1 from acccart where uid=$uid");
                                // $total1=0;
                                // while($row2=mysqli_fetch_array($q2))
                                // {
                                //     $total1=$total1+$row2['subtotal1'];
                                // }
                                echo  $total; 
                        ?>
                    </td>
                    </tr> -->

                    <tr>
                        <td class="jp">Shipping</td>
                        <td class="jp">100 rs</td>
                    </tr>
                    <tr>
                        <td class="jp">Total</td>
                        <td class="jp">
                            &#8377;<?php 
                                // $uid=$_SESSION['uid'];
                                // $total5=$total+$total1;
                            $t= $_SESSION['total'];
                            echo $t+100;
                            ?>
                        </td>
                    </tr>

                </table><br>
                <div>
                    <!-- <table>
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
                    </table> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- <script>
function pay_now() {
    var name = jQuery('#name').val();
    var amt = jQuery('#amt').val();

    jQuery.ajax({
        type: 'post',
        url: 'payment_process.php',
        data: "amt=" + amt + "&name=" + name,
        success: function(result) {
            var options = {
                "key": "rzp_test_bTajuEVcxNgH51",
                "amount": amt * 100,
                "currency": "INR",
                "name": "Total Car Care",
                "description": "Test Transaction",
                "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                "handler": function(response) {
                    jQuery.ajax({
                        type: 'post',
                        url: 'payment_process.php',
                        data: "payment_id=" + response.razorpay_payment_id,
                        success: function(result) {
                            window.location.href = "thank_you.php";
                        }
                    });
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    });
}
</script> -->