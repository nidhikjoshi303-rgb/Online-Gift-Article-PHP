
<?php
include("connect.php");
$id = $_GET['x'];
$q = mysqli_query($con, "SELECT * FROM category_master WHERE cid=$id");
$row = mysqli_fetch_array($q);
if(isset($_POST['edit'])) {
    $name=$_POST["cname"];
    $photo=$_FILES["txtpic"]['name'];
    $dst='./images/'.$photo;
    $qry = mysqli_query($con, "UPDATE `category_master` SET `cid`=$id,`cname`='$name',`pimg`='$photo',`status`=0 WHERE cid=$id");
    if($qry) {
        move_uploaded_file($_FILES['txtpic']['tmp_name'], $dst);
        header("Location: category_master.php");
        exit;
    }
    else {
        echo "Not Updated"; 
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product - Product Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .update-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .update-card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
        }
        .current-image {
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            border: 3px solid #e9ecef;
        }
        .btn-update {
            background-color: #17a2b8;
            border-color: #17a2b8;
            padding: 12px 30px;
            font-size: 16px;
        }
        .btn-update:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
        .btn-cancel {
            background-color: #6c757d;
            border-color: #6c757d;
            padding: 12px 30px;
            font-size: 16px;
        }
        .btn-cancel:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            font-size: 16px;
        }
        .form-control:focus {
            border-color: #17a2b8;
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.25);
        }
        .page-header {
            background: linear-gradient(135deg, #17a2b8, #138496);
            color: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
        }
        .current-details {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .section-title {
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 2px solid #17a2b8;
            padding-bottom: 10px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="update-container">
            
            <!-- Page Header -->
            <div class="page-header text-center">
                <h1 class="mb-0">
                    <i class="fas fa-edit me-3"></i>
                    Update Product
                </h1>
                <p class="mt-2 mb-0 opacity-75">Modify product information and image</p>
            </div>

            <div class="card update-card">
                <div class="card-body p-4">
                    
                    <!-- Current Product Details -->
                    <div class="current-details">
                        <h4 class="section-title">
                            <i class="fas fa-eye me-2"></i>
                            Current Product Details
                        </h4>
                        
                        <div class="row">
                            <?php
                            include("connect.php");
                            $id = $_GET['x'];
                            $q = mysqli_query($con, "SELECT * FROM category_master WHERE cid=$id");
                            $row = mysqli_fetch_array($q);
                            
                            echo "<div class='col-md-6'>
                                <div class='mb-3'>
                                    <label class='form-label'>Current Product Name:</label>
                                    <div class='p-3 bg-white rounded border'>
                                        <strong>$row[cname]</strong>
                                    </div>
                                </div>
                            </div>";
                            
                            echo "<div class='col-md-6'>
                                <div class='mb-3'>
                                    <label class='form-label'>Current Product Image:</label>
                                    <div class='text-center'>
                                        <img src='./images/$row[pimg]' alt='Current Product' class='img-fluid current-image'>
                                    </div>
                                </div>
                            </div>";

                            ?>
                        </div>
                    </div>

                    <!-- Update Form -->
                    <div>
                        <h4 class="section-title">
                            <i class="fas fa-pencil-alt me-2"></i>
                            Update Information
                        </h4>
                        
                        <!-- ******* PHP ******* -->

                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="productName" class="form-label">
                                            <i class="fas fa-tag me-2"></i>
                                            Product Name
                                        </label>
                                        <input type="text" 
                                               class="form-control" 
                                               id="productName" 
                                               name="cname" 
                                               value="" 
                                               placeholder="Enter product name" 
                                               required>
                                        <div class="form-text">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Update the product name as needed
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="productImage" class="form-label">
                                            <i class="fas fa-image me-2"></i>
                                            Product Image
                                        </label>
                                        <input type="file" 
                                               class="form-control" 
                                               id="productImage" 
                                               name="txtpic" 
                                               accept="image/*">
                                        <div class="form-text">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Choose a new image to replace the current one (optional)
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="alert alert-info d-flex align-items-center" role="alert">
                                <i class="fas fa-lightbulb me-2"></i>
                                <div>
                                    <strong>Note:</strong> If you don't select a new image, the current image will remain unchanged.
                                </div>      
                            </div>

                            <!-- Action Buttons -->
                             <div class="d-flex gap-3 justify-content-center mt-4">
                                <button type="submit" class="btn btn-update text-white" name="edit">
                                    <i class="fas fa-save me-2"></i>
                                    Update Product
                                </button>
                                <a href="category_master.php" class="btn btn-cancel text-white">
                                    <i class="fas fa-times me-2"></i>
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Additional Actions -->
            <div class="text-center mt-4">
                <div class="card">
                    <div class="card-body py-3">
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="category_master.php" class="btn btn-outline-primary">
                                <i class="fas fa-list me-2"></i>
                                Back to Category
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>