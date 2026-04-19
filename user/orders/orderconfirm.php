<?php
    session_start();
    
    // Connect to database
    $con = mysqli_connect("localhost", "root", "", "online_gift");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $uid = $_SESSION['user_id'];

    if(isset($_POST['submit'])) {
        // 1. Get the form data safely to prevent SQL injection
        $uname   = mysqli_real_escape_string($con, $_POST['uname']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
        $phone   = mysqli_real_escape_string($con, $_POST['phone']);
        $email   = mysqli_real_escape_string($con, $_POST['email']);
        
        $total   = $_SESSION['total'];
        $odate   = date('Y-m-d H:i:s'); // Full datetime
        
        // Save to session for the payment page
        $_SESSION['uname'] = $uname;
        $_SESSION['email'] = $email;

        // 2. Insert the main order into order_master
        $query_master = "INSERT INTO order_master (user_id, uname, address, zipcode, phone, email, total_amount, status, order_date) 
                         VALUES ('$uid', '$uname', '$address', '$zipcode', '$phone', '$email', '$total', 'Pending', '$odate')";
                  
        if (mysqli_query($con, $query_master)) {
            
            // 3. Get the ID of the order we just created
            $order_id = mysqli_insert_id($con);

            // 4. Move items from 'addtocart' to 'order_details'
            $cart_query = mysqli_query($con, "SELECT product_id, qty, price FROM addtocart WHERE user_id = '$uid'");
            
            if(mysqli_num_rows($cart_query) > 0) {
                while ($cart_item = mysqli_fetch_assoc($cart_query)) {
                    $pid   = $cart_item['product_id'];
                    $qty   = $cart_item['qty'];
                    $price = $cart_item['price'];
                    
                    // Insert each cart item into order_details
                    mysqli_query($con, "INSERT INTO order_details (order_id, product_id, qty, price) 
                                        VALUES ('$order_id', '$pid', '$qty', '$price')");
                }
            }

            // 5. Empty the user's cart now that the order is placed
            mysqli_query($con, "DELETE FROM addtocart WHERE user_id = '$uid'");

            // 6. Redirect to the payment page
            header('location:paymentmode.php');
            exit; 
            
        } else {
            echo "<script>alert('Error placing order: " . mysqli_error($con) . "');</script>";
        }
    }
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

form { flex: 4; }
.Yorder { flex: 2; }

.title {
    background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
    border-radius: 5px 5px 0 0;
    padding: 20px;
    color: #f6f6f6;
}

h2 { margin: 0; padding-left: 15px; }
.required { color: red; }
label, table { display: block; margin: 15px; }
label>span { float: left; width: 25%; margin-top: 12px; padding-right: 10px; }

input[type="text"], input[type="tel"], input[type="email"], select {
    width: 70%;
    height: 30px;
    padding: 5px 10px;
    margin-bottom: 10px;
    border: 1px solid #dadada;
    color: #888;
}

.Yorder {
    margin-top: -25px;
    height: auto;
    min-height: 400px;
    padding: 20px;
    border: 1px solid #dadada;
}

table { margin: 0; padding: 0; width: 100%; }
th { border-bottom: 1px solid #dadada; padding: 10px 0; }
tr>td:nth-child(1) { text-align: left; color: #2d2d2a; }
tr>td:nth-child(2) { text-align: right; color: #52ad9c; }
td { padding: 25px 25px 25px 0; }
.jp { border-bottom: 1px solid #dadada; padding: 25px 25px 25px 0; }

.m {
    margin-left: 25%;
    width: 30%;
    margin-top: 10px;
    padding: 10px;
    border: none;
    border-radius: 7px;
    background: rgb(70, 219, 20);
    color: #fff;
    font-size: 15px;
    font-weight: bold;
}
.m:hover { cursor: pointer; background: rgb(67, 126, 31); transition: all .15s ease-in-out; }
</style>
<html>
<body>
    <div class="container">
        <div class="title">
            <h2>Order Summary</h2>
        </div>
        <div class="d-flex">
            <?php
             $q1 = mysqli_query($con,"select * from user_master where uid='$uid'");
             $row1 = mysqli_fetch_array($q1);
            ?>
            <form action="" method="POST">
                <label>
                    <span class="fname">First Name <span class="required">*</span></span>
                    <input type="text" name="uname" id="uname" value="<?php echo $row1['uname'];?>" required>
                </label>
                <label>
                    <span>Street Address <span class="required">*</span></span>
                    <input type="text" name="address" id="address" value="<?php echo $row1['address'];?>" required>
                </label>
                <label>
                    <span>Postcode / ZIP <span class="required">*</span></span>
                    <input type="text" name="zipcode" id="zipcode" value="<?php echo $row1['pin'];?>" required>
                </label>
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="tel" name="phone" id="phone" value="<?php echo $row1['mobno'];?>" required>
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="email" name="email" id="email" value="<?php echo $row1['email'];?>" required>
                </label>

                <input type="submit" class="m" name="submit" id="submit" value="Place Order">
            </form>
            
            <div class="Yorder">
                <table>
                    <tr>
                        <th colspan="2">Your order Value</th>
                    </tr>
                    <tr>
                        <td class="jp"> Parts Subtotal</td>
                        <td class="jp">
                            &#8377;<?php echo $_SESSION['total']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="jp">Shipping</td>
                        <td class="jp">100 rs</td>
                    </tr>
                    <tr>
                        <td class="jp"><strong>Total</strong></td>
                        <td class="jp">
                            <strong>&#8377;<?php 
                                $t = $_SESSION['total'];
                                echo $t + 100;
                            ?></strong>
                        </td>
                    </tr>
                </table><br>
            </div>
        </div>
    </div>
</body>
</html>