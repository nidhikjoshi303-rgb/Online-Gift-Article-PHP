<?php
include('hhh.php');
include('connect.php');
?>

<!DOCTYPE html>
<html lang="gu">
<head>
    <meta charset="UTF-8">
    <title>Category View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .table-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            padding: 25px;
        }

        .page-title {
            font-weight: 700;
            color: #2c2f4a;
            border-bottom: 2px solid #4f6df5;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        table th {
            background: #4f6df5;
            color: #fff;
            text-align: center;
            vertical-align: middle;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        .cat-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #e3e8ff;
        }

        .btn-edit {
            background: #4f6df5;
            color: #fff;
        }

        .btn-edit:hover {
            background: #3f5ae0;
            color: #fff;
        }

        .btn-delete {
            background: #ff4d4f;
            color: #fff;
        }

        .btn-delete:hover {
            background: #d9363e;
            color: #fff;
        }
    </style>
</head>

<body>

<div class="container my-5">
    <div class="table-card">

        <h3 class="page-title text-center">Category View</h3>

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Category</th>
                        <th>Photo</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $i = 1;
                $q = mysqli_query($con, "SELECT * FROM category_master");

                while ($row = mysqli_fetch_array($q)) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td>
                            <img src="./images/<?php echo $row['pimg']; ?>" class="cat-img">
                        </td>
                        <td>
                            <a href="category_update.php?x=<?php echo $row['cid']; ?>" 
                               class="btn btn-edit btn-sm">
                               <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="category_delete.php?x=<?php echo $row['cid']; ?>" 
                               class="btn btn-delete btn-sm"
                               onclick="return confirm('Are you sure to delete?')">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
