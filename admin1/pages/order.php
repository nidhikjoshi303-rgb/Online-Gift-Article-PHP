<?php
session_start();
include('connect.php');

// // Optional: check if admin is logged in
// if(!isset($_SESSION['admin_id'])){
//     header("location:login.php");
//     exit;
// }

// Fetch orders using the details saved DURING the order, not their profile
$res = mysqli_query($con, "
    SELECT order_id, user_id, uname, email, phone AS mobno, total_amount, status, order_date
    FROM order_master 
    ORDER BY order_date DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">All Orders 📝</h2>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($res)){ ?>
            <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['uname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobno']; ?></td>
                <td>₹<?php echo $row['total_amount']; ?></td>
                <td>
                    <?php echo $row['status']; ?>
                    <br>
                    <a href="update_order.php?id=<?php echo $row['order_id']; ?>" class="btn btn-sm btn-warning mt-1">Update Status</a>
                </td>
                <td><?php echo date("d M, Y H:i", strtotime($row['order_date'])); ?></td>
                <td>
                    <a href="view_order_details.php?id=<?php echo $row['order_id']; ?>" class="btn btn-sm btn-info">View Details</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>