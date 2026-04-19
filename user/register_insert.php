<?php
$con = mysqli_connect("localhost","root","","online_gift");
if(!$con){
    die("Database not connected: " . mysqli_connect_error());
}

// 1. UPDATED PATHS: Pointing directly to your 'phpmailer' folder
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$msg = "";

if(isset($_POST['register'])){
    $uname   = $_POST['fullname'];
    $email   = $_POST['email'];
    $mobno   = $_POST['mobile'];
    $address = $_POST['address'];
    $dob     = $_POST['dob'];
    $gender  = $_POST['gender'];
    $pass    = $_POST['password'];
    $cpass   = $_POST['confirm_password'];
    $pin     = $_POST['pincode'];
    
    // Status is 0 (unverified) until they enter the OTP
    $status = 0; 
    $otp = rand(1000,9999);

    if($pass != $cpass){
        $msg = "Password not matched!";
    } else {
        $photo = "";
        if($_FILES['profile_photo']['name'] != ""){
            $photo = time()."_".$_FILES['profile_photo']['name'];
            move_uploaded_file($_FILES['profile_photo']['tmp_name'], "images/".$photo);
        }

        $q = mysqli_query($con,
        "INSERT INTO user_master 
        (uname,email,mobno,address,dob,pin,gen,pass,photo,otp,status)
        VALUES 
        ('$uname','$email','$mobno','$address','$dob','$pin','$gender','$pass','$photo','$otp','$status')"
        );

        if($q){
            // Initialize PHPMailer
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'giftartical12@gmail.com';
                $mail->Password   = 'okrd ghuj uqic wnzy'; // Make sure this App Password is correct
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;
                
                // 2. FIXED SENDER: Must be your SMTP email, not the user's email
                $mail->setFrom('giftartical12@gmail.com', 'Online Gift Shop');
                $mail->addAddress($email, $uname);
                
                $mail->isHTML(true);
                $mail->Subject = 'Account Verification OTP';
                $mail->Body    = 'Your OTP for account verification is: <b>'.$otp.'</b>';
                
                $mail->send();

                // 3. FIXED REDIRECT: Send them to verify.php with their email in the URL
                header("Location: verify.php?email=$email");
                exit;

            } catch (Exception $e) {
                $msg = "Registration successful, but OTP email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }else{
            $msg = "Database Error: " . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*{box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{ margin:0; min-height:100vh; background:url('1.webp') no-repeat center/cover; display:flex; justify-content:center; align-items:center; }
.form-container{ width:1000px; background:rgba(255,255,255,0.97); border-radius:15px; padding:40px; }
h2{text-align:center;color:#f06292;margin-bottom:20px;}
.form-row{display:flex;gap:20px;margin-bottom:15px;}
.form-group{flex:1;display:flex;flex-direction:column;}
.form-group.full{flex:1 1 100%;}
label{margin-bottom:6px;}
input,select{ padding:12px; border-radius:8px; border:1px solid #ddd; }
button{ margin:20px auto; display:block; background:#f06292; color:#fff; padding:12px 40px; border:none; border-radius:10px; cursor:pointer;}
button:hover{ background:#e91e63;}
.msg{text-align:center;color:green;font-weight:600;margin-bottom:10px;}
.error{text-align:center;color:red;font-weight:600;margin-bottom:10px;}
</style>
</head>

<body>
<div class="form-container">
<h2>Create Your Account</h2>

<?php if($msg!=""){ ?>
<div class="error"><?php echo $msg; ?></div>
<?php } ?>

<form method="POST" enctype="multipart/form-data">
<div class="form-row">
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="fullname" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" required>
    </div>
    <div class="form-group">
        <label>Pincode</label>
        <input type="text" name="pincode" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group full">
        <label>Address</label>
        <input type="text" name="address" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>DOB</label>
        <input type="date" name="dob" required>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group full">
        <label>Profile Photo</label>
        <input type="file" name="profile_photo">
    </div>
</div>

<button type="submit" name="register">Register</button>
</form>
</div>
</body>
</html>