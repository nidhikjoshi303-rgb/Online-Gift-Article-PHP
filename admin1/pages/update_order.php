<?php
session_start();
include('connect.php');

// if(!isset($_SESSION['admin_id'])){
//     header("location:login.php");
//     exit;
// }

$order_id = $_GET['id'];

if(isset($_POST['update'])){
    $status = $_POST['status'];
    mysqli_query($con,"UPDATE order_master SET status='$status' WHERE order_id='$order_id'");
    header("location:order.php");
    exit;
}

// Fetch current status
$res = mysqli_query($con,"SELECT status FROM order_master WHERE order_id='$order_id'");
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Order Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Update Order #<?php echo $order_id; ?> Status</h2>

    <form method="post" class="mt-3 w-50">
        <select name="status" class="form-select mb-3">
            <option value="Pending" <?php if($row['status']=='Pending') echo 'selected'; ?>>Pending</option>
            <option value="Shipped" <?php if($row['status']=='Shipped') echo 'selected'; ?>>Shipped</option>
            <option value="Delivered" <?php if($row['status']=='Delivered') echo 'selected'; ?>>Delivered</option>
            <option value="Cancelled" <?php if($row['status']=='Cancelled') echo 'selected'; ?>>Cancelled</option>
        </select>
        <button type="submit" name="update" class="btn btn-primary">Update Status</button>
        <a href="orders.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>