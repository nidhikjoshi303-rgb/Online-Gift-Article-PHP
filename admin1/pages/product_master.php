<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <?php include('hhh.php'); ?>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 20px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .table-container {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
        
        .table thead th {
            background-color: #343a40;
            color: white;
            border: none;
            padding: 15px 12px;
            font-weight: 600;
            font-size: 14px;
        }
        
        .table tbody td {
            padding: 12px;
            vertical-align: middle;
            border-bottom: 1px solid #e9ecef;
            font-size: 14px;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .product-image {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            object-fit: cover;
            border: 2px solid #e9ecef;
        }
        
        .product-name {
            font-weight: 600;
            color: #495057;
            margin-bottom: 3px;
        }
        
        .product-sku {
            font-size: 12px;
            color: #6c757d;
        }
        
        .price {
            font-weight: 700;
            color: #28a745;
            font-size: 16px;
        }
        
        .stock-badge {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 20px;
        }
        
        .stock-in {
            background-color: #d4edda;
            color: #155724;
        }
        
        .stock-low {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .stock-out {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .category-badge {
            background-color: #e9ecef;
            color: #495057;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 12px;
        }
        
        .btn-sm {
            margin: 2px;
            padding: 5px 10px;
            font-size: 12px;
        }
        
        .actions-cell {
            min-width: 150px;
        }
        
        .table-title {
            color: #343a40;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }
        
        .stats-row {
            margin-bottom: 25px;
        }
        
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #28a745;
        }
        
        .stat-number {
            font-size: 28px;
            font-weight: 700;
            color: #28a745;
        }
        
        .stat-label {
            color: #6c757d;
            font-size: 14px;
            margin-top: 5px;
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                font-size: 12px;
            }
            
            .product-image {
                width: 40px;
                height: 40px;
            }
            
            .btn-sm {
                padding: 3px 6px;
                font-size: 11px;
            }
            
            .stats-row {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="mb-0 text-light">Product Management</h1>
            <p class="mb-0 mt-2">View and manage all products in your inventory</p>
        </div>
        
        <!-- Table Container -->
        <div class="table-container">
            <h2 class="table-title ">All Products</h2>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Product Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Product</th>
                            <th scope="col">Subcategory</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("connect.php");
						$q = mysqli_query($con,"select s.sname,p.* from subcategory_master s, product_master p where s.sid=p.sid");
                        while($row = mysqli_fetch_array($q)) {
                        ?>
                        <tr>
                            <td><?php echo $row['pid'];?></td>
                            <td>
                                <img src="../../admin1/pages/proimages/<?php echo $row['photo'];?>" alt="Product" class="product-image">
                            </td>
                            <td>
                                <div class="product-name"><?php echo $row['pname'];?></div>
                                <div class="product-sku"><?php echo $row['pdesc'];?></div>
                            </td>
                            <td><span class="category-badge"><?php echo $row['sname'];?></span></td>
                            <td><span class="price">Rs.<?php echo $row['rate'];?></span></td>
                            <td><?php echo $row['pdate'];?></td>
                            <td class="actions-cell">
                                <a href="product_update.php?x=<?php echo $row['pid']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="product_delete.php?x=<?php echo $row['pid']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <?php
                        }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>