<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <?php include("hhh.php"); ?>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .table thead th {
            background-color: #495057;
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
        }
        
        .table tbody td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid #dee2e6;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            /* background: linear-gradient(45deg, #667eea, #764ba2); */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
        }
        
        .badge {
            font-size: 12px;
            padding: 8px 12px;
        }
        
        .status-active {
            background-color: #28a745;
        }
        
        .status-inactive {
            background-color: #dc3545;
        }
        
        .status-pending {
            background-color: #ffc107;
            color: #212529;
        }
        
        .btn-sm {
            margin: 2px;
            padding: 6px 12px;
        }
        
        .actions-cell {
            min-width: 140px;
        }
        
        .table-title {
            color: #495057;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                font-size: 14px;
            }
            
            .user-avatar {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }
            
            .btn-sm {
                padding: 4px 8px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="mb-0 text-light">User Management</h1>
            <p class="mb-0 mt-2">Manage and view all system users</p>
        </div>
        
        <!-- Table Container -->
        <div class="table-container">
            <h2 class="table-title">All Users</h2>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">User Id</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("connect.php");
						$q = mysqli_query($con, "select * from user_master where status=1");
                        while($row = mysqli_fetch_array($q)) {
                        ?>
                        <tr>
                            <td><?php echo $row['uid'];?></td>
                            <td>
                                <div class="user-avatar">
                                    <img src="../../user/pages/uimages/<?php echo $row['photo'];?>" alt="404" class="text-dark">
                                </div>
                            </td>
                            <td><?php echo $row['uname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><a href="ublockusers.php?x=<?php echo $row[0]; ?>" class="btn btn-danger btn-sm">Unblock</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>