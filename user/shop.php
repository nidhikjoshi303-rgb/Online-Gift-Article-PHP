<?php
include('hhh.php');
?>

<?php
// session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h2 class="text-center mb-4">All Products 🛍️</h2>

    <div class="row">
        <?php

        $result = mysqli_query($con, "SELECT * FROM product_master");

        if($result){
        while($row = mysqli_fetch_assoc($result)){
        ?>
        
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">

                <!-- Product Image -->
                <img src="../admin1/pages/images/<?php echo $row['photo']; ?>" 
                     class="card-img-top" height="200">

                <!-- Product Details -->
                <div class="card-body text-center">
                    
                    <h5 class="card-title"><?php echo $row['pname']; ?></h5>
                    
                    <p class="text-muted">
                        <?php echo substr($row['pdesc'],0,50); ?>...
                    </p>

                    <h6 class="text-success fw-bold">₹<?php echo $row['rate']; ?></h6>

                    <!-- Buttons -->
                    <a href="addtocart.php?id=<?php echo $row['pid']; ?>" 
                       class="btn btn-primary btn-sm">Add to Cart</a>

                    <a href="product_detail.php?id=<?php echo $row['pid']; ?>" 
                       class="btn btn-outline-secondary btn-sm">View</a>

                </div>
            </div>
        </div>

        <?php } } ?>
    </div>
</div>

</body>
</html>

<?php
include('fff.php');
?>