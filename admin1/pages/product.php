<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <?php include('hhh.php');?>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 2rem 0;
        }
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e9ecef;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-container">
                <div class="form-header">
                    <h2>Add New Product</h2>
                    <p class="text-muted">Fill in the product details</p>
                </div>

<?php
include("connect.php");

if(isset($_POST['insprod'])) {

    $sid   = $_POST['txt_sid'];   // correct
    $name  = $_POST['pname'];
    $pdesc   = $_POST['pdesc'];
    $qty   = $_POST['qty'];
    $rate  = $_POST['rate'];
    $pdate = $_POST['pdate'];

    $pic = $_FILES['txtpic']['name'];
    $dst = "./proimages/".$pic;

    $q = mysqli_query($con,"INSERT INTO product_master(sid, pname, pdesc, qty, rate, pdate, photo, status)VALUES($sid,'$name','$pdesc','$qty','$rate','$pdate','$pic',0)");

    if($q) {
        move_uploaded_file($_FILES['txtpic']['tmp_name'], $dst);
        echo '<div class="alert alert-success">Product inserted successfully!</div>';
    } else {
        echo '<div class="alert alert-danger">Product insertion failed!</div>';
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Subcategory</label>
            <select name="txt_sid" class="form-select" required>
                <option value="">Select Subcategory</option>
                <?php
                $q = mysqli_query($con,"SELECT * FROM subcategory_master");
                while($row = mysqli_fetch_array($q)) {
                    echo "<option value='$row[sid]'>$row[sname]</option>";
                }
                ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Product Name</label>
            <input type="text" name="pname" class="form-control" required>
        </div>
    </div>

    <div class="mt-3">
        <label class="form-label">Product Description</label>
        <textarea name="pdesc" class="form-control"></textarea>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <label class="form-label">Quantity</label>
            <input type="number" name="qty" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Rate</label>
            <input type="number" name="rate" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Date</label>
            <input type="date" name="pdate" class="form-control" required>
        </div>
    </div>

    <div class="mt-3">
        <label class="form-label">Product Photo</label>
        <input type="file" name="txtpic" class="form-control" required>
    </div>

    <div class="text-center mt-4">
        <button type="submit" name="insprod" class="btn btn-primary">
            Add Product
        </button>
    </div>
</form>

            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include('footer.php');?>
