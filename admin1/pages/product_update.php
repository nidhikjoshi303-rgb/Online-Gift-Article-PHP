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
        
        .form-header h2 {
            color: #495057;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        
        .form-control, .form-select {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 0.6rem 0.8rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }
        
        .btn-primary {
            border-radius: 5px;
            padding: 0.6rem 2rem;
            font-weight: 500;
        }
        
        .alert {
            border-radius: 5px;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-container">
                    <div class="form-header">
                        <h2>Update Product</h2>
                        <p class="text-muted">Fill in the product details</p>
                    </div>
                    <?php
                        include("connect.php");
                        $pid = $_GET["x"];
                        // $q = mysqli_query($con, "select * from product_master where pid=$id");
                        // $q=mysqli_query($con,"select c.,p. from category_master c,product_master p where c.cid=p.cid and p.pid=$id");

                        $q=mysqli_query($con,"select s.*,p.* from subcategory_master s, product_master p where s.sid=p.sid and p.pid=$pid");

                        $row = mysqli_fetch_array($q);

                        if (isset($_POST['editprod'])) {
                            // $cid = $_POST['txtcategory'];
                            // $name = $_POST['categoryName'];
                            // $desc = $_POST['pdesc'];
                            // $qty = $_POST['qty'];
                            // $rate = $_POST['rate'];
                            
                            // $photo = $_FILES['categoryPhoto']['name'];
                            // $dst = './images/' . $photo;


                            $pname = $_POST['pname'];
                            $rate = $_POST['rate'];
                            $qty = $_POST['qty'];
                            $desc = $_POST['pdes'];
                            $pdate = $_POST['pdate'];
                            $sid = $_POST['txt_sid'];
                            $photo = $_FILES['txtpic']['name'];
                            $dst = './proimages/' . $photo;                

                            $q = mysqli_query($con, "UPDATE `product_master` SET `sid`=$sid,`pname`='$pname',`pdesc`='$desc',`qty`='$qty',`rate`='$rate',`pdate`='$pdate',`photo`='$photo',`status`= 0 WHERE pid=$pid ");
                            if ($q) {
                                move_uploaded_file($_FILES['txtpic']['tmp_name'], $dst);
                                // header("location:product_view.php");
                                echo "
                              <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                                <script>
                                    window.location.href='product_master.php'
                                </script>
                              ";

                            } else {
                                echo "<br>Not Updated";
                            }
                        }
                    ?>


                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ddlcategory" class="form-label">Category</label>
                                    <select id="ddlcategory" name="txt_sid" class="form-select" required>
                                        <option value="">Select Category</option>
                                        <?php
                                            $q = mysqli_query($con, "SELECT * FROM subcategory_master");
                                            while($row = mysqli_fetch_array($q)) {
                                                echo "<option value=$row[sid]>$row[sname]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pname" class="form-label">Product Name</label>
                                    <input type="text" id="pname" name="pname" class="form-control" placeholder="Enter product name" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="pdes" class="form-label">Product Description</label>
                            <textarea id="pdes" name="pdes" class="form-control" rows="3" placeholder="Enter product description"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="qty" class="form-label">Quantity</label>
                                    <input type="number" id="qty" name="qty" class="form-control" placeholder="0" min="0" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rate</label>
                                    <input type="number" id="rate" name="rate" class="form-control" placeholder="0.00" step="0.01" min="0" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="pdate" class="form-label">Date</label>
                                    <input type="date" id="pdate" name="pdate" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="txtpic" class="form-label">Product Photo</label>
                            <input type="file" name="txtpic" id="txtpic" class="form-control" accept="image/*" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="editprod" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('footer.php');?>