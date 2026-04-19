<?php
include('hhh.php');
include('connect.php');

if (isset($_POST['submit'])) {
    $cid  = $_POST['cid'];
    $cname = $_POST['sname'];
    $status = $_POST['status'];

    $pic  = $_FILES['photo']['name'];
    $dst  = "./images/" . $pic;

    $q = mysqli_query(
        $con,
        "INSERT INTO subcategory_master VALUES ('',$cid, '$cname', '$pic', $status)"
    );

    if ($q) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $dst);
        echo "<script>alert('Subcategory Inserted Successfully');</script>";
    } else {
        echo "<script>alert('Insert Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="gu">
<head>
    <meta charset="UTF-8">
    <title>Add Subcategory - Gift Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e3ecff, #f8fbff);
            min-height: 100vh;
        }

        .center-box {
            position: fixed;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 420px;
            padding: 15px;
        }

        .card-ui {
            background: #ffffff;
            padding: 35px;
            border-radius: 22px;
            box-shadow: 0 25px 60px rgba(79, 109, 245, 0.25);
            border: none;
        }

        .title {
            text-align: center;
            font-weight: 700;
            color: #2c2f4a;
            margin-bottom: 25px;
            border-bottom: 2px solid #4f6df5;
            padding-bottom: 10px;
        }

        .form-label {
            font-weight: 600;
            color: #2c2f4a;
        }

        .form-control {
            border-radius: 12px;
            padding: 10px;
            border: 2px solid #e3e8ff;
        }

        .upload-box {
            background: #f2f5ff;
            padding: 12px;
            border: 2px dashed #4f6df5;
            border-radius: 12px;
        }

        .btn-save {
            background: linear-gradient(135deg, #4f6df5, #6ec6ff);
            color: #fff;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="center-box">
    <div class="card-ui">
        <h3 class="title">Add Subcategory</h3>

        <form method="POST" enctype="multipart/form-data">

            <!-- Category Dropdown -->
            <label class="form-label">Select Category</label>
            <select name="cid" class="form-control mb-3" required>
                <option value="">-- Select Category --</option>
                <?php
                $cat = mysqli_query($con,"SELECT * FROM category_master");
                while($row = mysqli_fetch_assoc($cat))
                {
                ?>
                    <option value="<?php echo $row['cid']; ?>">
                        <?php echo $row['cname']; ?>
                    </option>
                <?php } ?>
            </select>

            <label class="form-label">Subcategory Name</label>
            <input type="text" name="sname" class="form-control mb-3"
                   placeholder="Enter Subcategory Name" required>

            <label class="form-label">Subcategory Image</label>
            <div class="upload-box mb-3">
                <input type="file" name="photo" class="form-control" required>
            </div>

            <label class="form-label">Status</label>
            <select name="status" class="form-control mb-4">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>

            <button type="submit" name="submit" class="btn-save">
                INSERT SUBCATEGORY
            </button>

        </form>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>