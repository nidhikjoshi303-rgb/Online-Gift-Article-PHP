<?php
include('hhh.php');
include('connect.php');

// Get product id from URL
if(!isset($_GET['id'])){
    header("location:products.php");
    exit;
}

$pid = $_GET['id'];

// Fetch product data
$res = mysqli_query($con, "SELECT * FROM product_master WHERE pid='$pid'");
if(mysqli_num_rows($res) == 0){
    echo "Product not found";
    exit;
}

$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['pname']; ?> - Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">🎁 GiftShop</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Product Detail -->
<div class="container mt-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="../admin1/pages/images/<?php echo $row['photo']; ?>" 
                 class="img-fluid rounded" alt="<?php echo $row['pname']; ?>">
        </div>

        <!-- Product Info -->
        <div class="col-md-6">
            <h2><?php echo $row['pname']; ?></h2>
            <h4 class="text-success">₹<?php echo $row['rate']; ?></h4>
            <p><strong>Available Quantity:</strong> <?php echo $row['qty']; ?></p>
            <p><?php echo $row['pdesc']; ?></p>
            <p><strong>Added On:</strong> <?php echo date("d M, Y", strtotime($row['pdate'])); ?></p>

            <!-- Add to Cart -->
            <a href="addtocart.php?id=<?php echo $row['pid']; ?>" class="btn btn-primary btn-lg mt-3">
                🛒 Add to Cart
            </a>

            <a href="shop.php" class="btn btn-secondary btn-lg mt-3">Back to Products</a>
        </div>
    </div>
</div>
<?php 
include('fff.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>