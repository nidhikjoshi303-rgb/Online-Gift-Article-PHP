<?php
include('hhh.php');
include('connect.php');

if (isset($_POST['submit'])) {
    $name   = $_POST['cname'];
    $status = $_POST['status'];

    $pic  = $_FILES['photo']['name'];
    $dst  = "./images/" . $pic;

    $q = mysqli_query(
        $con,
        "INSERT INTO category_master (cname, pimg, status)
         VALUES ('$name', '$pic', '$status')"
    );

    if ($q) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $dst);
        echo "<script>alert('Category Inserted Successfully');</script>";
    } else {
        echo "<script>alert('Insert Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="gu">
<head>
    <meta charset="UTF-8">
    <title>Add Category - Gift Shop</title>
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

        .form-control:focus {
            border-color: #4f6df5;
            box-shadow: 0 0 0 0.2rem rgba(79, 109, 245, 0.25);
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
            transition: 0.3s;
        }

        .btn-save:hover {
            background: linear-gradient(135deg, #3f5ae0, #58b8ff);
            box-shadow: 0 10px 25px rgba(79, 109, 245, 0.4);
        }
    </style>
</head>

<body>

<div class="center-box">
    <div class="card-ui">
        <h3 class="title">Add Category</h3>

        <form method="POST" enctype="multipart/form-data">

            <label class="form-label">Category Name</label>
            <input type="text" name="cname" class="form-control mb-3"
                   placeholder="Enter Category Name" required>

            <label class="form-label">Category Image</label>
            <div class="upload-box mb-3">
                <input type="file" name="photo" class="form-control" required>
            </div>

            <label class="form-label">Status</label>
            <select name="status" class="form-control mb-4">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>

            <button type="submit" name="submit" class="btn-save">
                INSERT CATEGORY
            </button>

        </form>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
