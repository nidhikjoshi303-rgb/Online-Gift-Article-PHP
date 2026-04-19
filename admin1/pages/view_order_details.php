<?php
session_start();
include('connect.php');

// if(!isset($_SESSION['admin_id'])){
//     header("location:login.php");
//     exit;
// }

$order_id = $_GET['id'];

// Fetch order details with product info
$res = mysqli_query($con, "
    SELECT od.qty, od.price, p.pname
    FROM order_details od
    JOIN product_master p ON od.product_id = p.pid
    WHERE od.order_id='$order_id'
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Order #<?php echo $order_id; ?> Details</h2>
    <table class="table table-bordered text-center mt-3">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php
        $grand_total = 0;
        while($row = mysqli_fetch_assoc($res)){
            $total = $row['qty'] * $row['price'];
            $grand_total += $total;
        ?>
        <tr>
            <td><?php echo $row['pname']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td>₹<?php echo $row['price']; ?></td>
            <td>₹<?php echo $total; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3" class="text-end"><strong>Grand Total:</strong></td>
            <td>₹<?php echo $grand_total; ?></td>
        </tr>
    </table>

    <a href="/giftshop/admin1/pages/deshbord.php" class="btn btn-primary">Go to Dashboard</a>
</div>
</body>
</html>