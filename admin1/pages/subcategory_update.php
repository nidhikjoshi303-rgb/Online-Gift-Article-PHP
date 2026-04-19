<?php
include("connect.php");

$sid = $_GET['x'];
$q = mysqli_query($con, "SELECT * FROM subcategory_master WHERE sid=$sid");
$row = mysqli_fetch_array($q);

if(isset($_POST['edit'])) {

    $name = $_POST["sname"];
    $cid  = $_POST["cid"];

    // Image Upload
    if($_FILES["txtpic"]['name'] != "") {
        $photo = $_FILES["txtpic"]['name'];
        $dst = './images/'.$photo;
        move_uploaded_file($_FILES['txtpic']['tmp_name'], $dst);
    } else {
        $photo = $row['photo']; // keep old image
    }

    $qry = mysqli_query($con, "UPDATE subcategory_master 
        SET sname='$name',
            cid='$cid',
            photo='$photo',
            status=0 
        WHERE sid=$sid");

    if($qry) {
        header("Location: subcategory_master.php");
        exit;
    } else {
        echo "<script>alert('Not Updated');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Subcategory</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
.update-card{
border-radius:15px;
box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
.current-image{
height:200px;
object-fit:cover;
border-radius:10px;
border:2px solid #ddd;
}
.save-btn{
padding:12px 40px;
font-size:16px;
font-weight:600;
}
</style>
</head>

<body class="bg-light">

<div class="container py-5">
<div class="card update-card p-4">

<h3 class="text-center text-primary mb-4">
<i class="fas fa-edit me-2"></i> Update Subcategory
</h3>

<!-- Current Details -->
<div class="row mb-4">
<div class="col-md-6">
<label class="fw-bold">Current Name:</label>
<div class="border p-2 rounded bg-white">
<?php echo $row['sname']; ?>
</div>
</div>

<div class="col-md-6 text-center">
<label class="fw-bold">Current Image:</label><br>
<img src="./images/<?php echo $row['photo']; ?>" class="img-fluid current-image">
</div>
</div>

<hr>

<!-- Update Form -->
<form method="POST" enctype="multipart/form-data">

<div class="row">

<!-- Category Dropdown -->
<div class="col-md-6 mb-3">
<label class="form-label fw-bold">Select Category</label>
<select name="cid" class="form-control" required>
<option value="">-- Select Category --</option>

<?php
$cat = mysqli_query($con, "SELECT * FROM category_master");
while($crow = mysqli_fetch_array($cat)){
?>
<option value="<?php echo $crow['cid']; ?>"
<?php if($crow['cid'] == $row['cid']) echo "selected"; ?>>
<?php echo $crow['cname']; ?>
</option>
<?php } ?>
</select>
</div>

<!-- Subcategory Name -->
<div class="col-md-6 mb-3">
<label class="form-label fw-bold">Subcategory Name</label>
<input type="text"
name="sname"
class="form-control"
value="<?php echo $row['sname']; ?>"
required>
</div>

<!-- Image -->
<div class="col-md-6 mb-3">
<label class="form-label fw-bold">Change Image (Optional)</label>
<input type="file"
name="txtpic"
class="form-control"
accept="image/*">
<small class="text-muted">
If no image selected, old image will remain same.
</small>
</div>

</div>

<div class="alert alert-info mt-3">
<strong>Note:</strong> If you don't select a new image, the current image will remain unchanged.
</div>

<!-- SAVE BUTTON -->
<div class="text-center mt-4">
<button type="submit" name="edit" class="btn btn-success save-btn">
<i class="fas fa-save me-2"></i> Save Changes
</button>

<a href="subcategory_master.php" class="btn btn-secondary save-btn">
<i class="fas fa-arrow-left me-2"></i> Cancel
</a>
</div>

</form>

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>