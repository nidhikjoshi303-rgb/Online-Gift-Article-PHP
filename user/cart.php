<?php
session_start();
include('connect.php');

if(!isset($_SESSION['user_id'])){
    header("location:login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$res = mysqli_query($con, "SELECT a.*, p.pname, p.photo FROM addtocart a 
                            JOIN product_master p ON a.product_id = p.pid
                            WHERE a.user_id='$user_id'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">My Cart 🛒</h2>
    <table class="table table-bordered text-center">
        <tr>
            <th>Product</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        <?php 
        $grand_total = 0;
        while($row = mysqli_fetch_assoc($res)){
            $total = $row['price'] * $row['qty'];
            $grand_total += $total;
        ?>
        <tr>
            <td><?php echo $row['pname']; ?></td>
            <td><img src="../admin1/pages/images/<?php echo $row['photo']; ?>" height="50"></td>
            <td>₹<?php echo $row['price']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td>₹<?php echo $total; ?></td>
            <td>
                <a href="remove_cart.php?id=<?php echo $row['cart_id']; ?>" class="btn btn-danger btn-sm">Remove</a>
            </td>
        </tr>
        <?php } ?>

        <tr>
            <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
            <td colspan="2">₹<?php 
            $_SESSION['total']=$grand_total;
            echo $grand_total; ?></td>
        </tr>
    </table>

    <a href="products.php" class="btn btn-secondary">Continue Shopping</a>
    <a href="./orders/orderconfirm.php" class="btn btn-primary">Place Order</a>
</div>
</body>
</html>