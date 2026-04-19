<?php
session_start();
$con = mysqli_connect("localhost","root","","online_gift");
if(!$con){
    die("Database not connected");
}

$msg = "";
$success = false;

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $q = mysqli_query($con,"SELECT * FROM user_master WHERE email='$email' and pass='$pass' AND status=1");
    $row = mysqli_fetch_assoc($q);
$cnt=mysqli_num_rows($q);
if($cnt>0){
            $_SESSION['user_id']   = $row['uid'];
            $_SESSION['uname'] = $row['uname'];
            $success = true;   // for SweetAlert
        }else{
            $msg = "Wrong Password!";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Online Gift</title>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
*{box-sizing:border-box;font-family:'Roboto',sans-serif;margin:0;padding:0;}
body{
    min-height:100vh;
    background:url('1.webp') no-repeat center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
}
.form-container{
    width:500px;
    background:rgba(255,255,255,0.95);
    border-radius:12px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,.2);
}
h2{text-align:center;color:#f06292;margin-bottom:25px;}
.form-group{display:flex;flex-direction:column;margin-bottom:20px;}
label{margin-bottom:5px;font-weight:600;}
input{
    padding:12px;
    border-radius:8px;
    border:1px solid #ddd;
}
button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#f06292;
    color:#fff;
    font-size:16px;
    cursor:pointer;
}
button:hover{background:#e91e63;}
.error{text-align:center;color:red;font-weight:600;margin-bottom:10px;}
a{display:block;text-align:center;margin-top:15px;color:#f06292;text-decoration:none;}
</style>
</head>

<body>

<div class="form-container">
<h2>Login to Your Account</h2>

<?php if($msg!=""){ ?>
<div class="error"><?php echo $msg; ?></div>
<?php } ?>

<form method="POST">
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required>
    </div>

    <button type="submit" name="login">Login</button>
</form>

<a href="register_insert.php">Don't have an account? Register</a>
<a href="#">Forgot Password?</a>
</div>

<?php if($success){ ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Login Successful!',
    text: 'Welcome back 🎉',
    confirmButtonColor: '#f06292'
}).then(()=>{
    window.location = "index.php";
});
</script>
<?php } ?>

</body>
</html>
