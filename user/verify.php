<?php
$con = mysqli_connect("localhost","root","","online_gift");

if (!isset($_GET['email'])) {
    die("Email missing from URL. Please register again or use the link from your email.");
}

$email = mysqli_real_escape_string($con, $_GET['email']);

if (isset($_POST['verify'])) {
    $otp = trim($_POST['otp']);

    $sql = "SELECT * FROM user_master WHERE email='$email' AND otp='$otp'";
    $q = mysqli_query($con, $sql);

    if (mysqli_num_rows($q) > 0) {
        // Success! Update status to 1 and clear OTP
        mysqli_query($con, "UPDATE user_master SET status=1, otp=0 WHERE email='$email'");
        
        echo "<script>
                alert('Verification Successful! You can now log in.');
                window.location.href='login.php';
              </script>";
        exit;
    } else {
        $error = "Invalid OTP. Please check your email.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 col-md-4">
    <div class="card p-3 shadow">
        <h4 class="text-center">Verify OTP</h4>
        <p class="text-center text-muted">Sent to: <?php echo htmlspecialchars($email); ?></p>
        <form method="post">
            <input type="text" name="otp" class="form-control mb-3" placeholder="Enter OTP" required>
            <button name="verify" class="btn btn-success w-100">Verify</button>
        </form>
        <?php if(isset($error)) echo "<div class='alert alert-danger mt-3'>$error</div>"; ?>
    </div>
</div>

</body>
</html>