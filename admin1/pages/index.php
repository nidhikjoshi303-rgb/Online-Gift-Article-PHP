<?php
include 'connect.php';
if(isset($_POST['btnlogin'])) {
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $q = mysqli_query($con, "SELECT * FROM admin_master WHERE email='$email' AND pass='$pass'");
    $row=mysqli_fetch_array($q);
    // $_SESSION['uid'] = $row[0];
    $cnt = mysqli_num_rows($q);
    if($cnt > 0) {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['uname'] = $row[1];
      $_SESSION['mail'] = $email;
      $_SESSION['photo'] = $row[5];
      header('location:deshbord.php');
    }
    else {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>Email or Password not Same!...</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Style CSS -->
<style>
      *,
  *:before,
  *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Nunito", sans-serif;
  }

  body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(
      135deg,
      #ff8a65,
      #ffb74d,
      #ffc107
    ); /* Karma gradient */
  }

  input,
  button {
    border: none;
    background: none;
  }

  .cont {
    overflow: hidden;
    position: relative;
    width: 900px;
    height: 650px; /* Increased height for more fields */
    background: linear-gradient(
      135deg,
      #fff3e0,
      #ffe0b2
    ); /* Karma light gradient */
    box-shadow: 0 25px 50px rgba(255, 138, 101, 0.3),
      0 15px 25px rgba(255, 183, 77, 0.2);
    border-radius: 20px;
  }

  .form {
    position: relative;
    width: 640px;
    height: 100%;
    padding: 30px 30px; /* Reduced top padding */
    transition: transform 1.2s ease-in-out;
    overflow-y: auto; /* Allow scrolling if needed */
  }

  h2 {
    width: 100%;
    font-size: 30px;
    text-align: center;
    color: #ff6f00; /* Karma orange */
    margin-bottom: 20px;
    font-weight: 700;
  }

  label {
    display: block;
    width: 260px;
    margin: 20px auto 0; /* Reduced margin */
    text-align: center;
  }

  label span {
    font-size: 14px;
    font-weight: 600;
    color: #ff8a65;
    text-transform: uppercase;
  }

  input {
    display: block;
    width: 100%;
    margin-top: 8px;
    font-size: 16px;
    padding: 8px 0;
    background: rgba(255, 255, 255, 0.8);
    border: none;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(255, 138, 101, 0.1);
    transition: all 0.3s ease;
  }

  input:focus {
    outline: none;
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 4px 15px rgba(255, 138, 101, 0.2);
    transform: translateY(-2px);
  }

  /* Photo Selection Section Styles */
  .photo-section {
    width: 260px;
    margin: 20px auto 0;
  }

  .photo-options {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
  }

  .photo-btn {
    flex: 1;
    padding: 14px 20px;
    margin: 0 3px;
    border: 2px solid #ff8a65;
    border-radius: 25px;
    background: transparent;
    color: #ff6f00;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
    min-height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
  }

  .photo-btn:hover,
  .photo-btn.active {
    background: linear-gradient(135deg, #ff8a65, #ffb74d);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(255, 138, 101, 0.3);
  }

  .upload-area {
    border: 3px dashed #ff8a65;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    background: linear-gradient(
      135deg,
      rgba(255, 248, 225, 0.8),
      rgba(255, 236, 179, 0.6)
    );
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .upload-area:hover {
    border-color: #ff6f00;
    background: linear-gradient(
      135deg,
      rgba(255, 248, 225, 1),
      rgba(255, 236, 179, 0.8)
    );
    transform: scale(1.02);
    box-shadow: 0 5px 20px rgba(255, 138, 101, 0.2);
  }

  .upload-area.dragover {
    border-color: #ff6f00;
    background: linear-gradient(
      135deg,
      rgba(255, 138, 101, 0.1),
      rgba(255, 183, 77, 0.1)
    );
    transform: scale(1.05);
  }

  .upload-icon {
    font-size: 28px;
    color: #ff8a65;
    margin-bottom: 12px;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }

  .upload-text {
    color: #ff6f00;
    font-size: 13px;
    font-weight: 600;
  }

  input[type="file"] {
    display: none;
  }

  .online-photos {
    display: none;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
    margin-top: 15px;
    padding: 15px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    backdrop-filter: blur(10px);
  }

  .online-photos.active {
    display: grid;
  }

  .photo-option {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    border: 3px solid transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    object-fit: cover;
    box-shadow: 0 3px 10px rgba(255, 138, 101, 0.2);
  }

  .photo-option:hover {
    border-color: #ff8a65;
    transform: scale(1.15) rotate(5deg);
    box-shadow: 0 6px 20px rgba(255, 138, 101, 0.4);
  }

  .photo-option.selected {
    border-color: #ff6f00;
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.8), 0 0 0 6px #ff6f00,
      0 8px 25px rgba(255, 111, 0, 0.4);
    transform: scale(1.1);
  }

  .selected-photo {
    margin-top: 15px;
    text-align: center;
    padding: 15px;
    background: rgba(255, 255, 255, 0.4);
    border-radius: 15px;
    backdrop-filter: blur(10px);
  }

  .selected-photo img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 4px solid #ff8a65;
    object-fit: cover;
    box-shadow: 0 5px 20px rgba(255, 138, 101, 0.3);
  }

  .selected-photo-name {
    margin-top: 8px;
    font-size: 12px;
    color: #ff6f00;
    font-weight: 700;
  }

  .remove-photo {
    background: linear-gradient(135deg, #ff6f00, #ff8a65);
    color: white;
    border: none;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    margin-top: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
  }

  .remove-photo:hover {
    background: linear-gradient(135deg, #e65100, #ff6f00);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 111, 0, 0.4);
  }

  button {
    display: block;
    margin: 0 auto;
    width: 260px;
    height: 36px;
    border-radius: 30px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
  }

  .submit {
    margin-top: 30px; /* Reduced margin */
    margin-bottom: 20px; /* Reduced margin */
    text-transform: uppercase;
    font-weight: 600;
    background: linear-gradient(
      135deg,
      #ff8a65,
      #ffb74d,
      #ffc107
    ); /* Karma gradient */
    transition: 0.5s;
    box-shadow: 0 4px 15px rgba(255, 138, 101, 0.3);
  }

  .submit:hover {
    background: linear-gradient(135deg, #ff6f00, #ff8a65, #ffb74d);
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(255, 138, 101, 0.4);
  }

  .social-media {
    width: 100%;
    text-align: center;
    margin-top: 20px;
  }

  .social-media ul {
    list-style: none;
  }

  .social-media ul li {
    display: inline-block;
    cursor: pointer;
    margin: 15px 8px;
    transition: transform 0.3s ease;
  }

  .social-media ul li:hover {
    transform: scale(1.2) rotate(5deg);
  }

  .social-media img {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(255, 138, 101, 0.2);
    transition: all 0.3s ease;
  }

  .social-media img:hover {
    box-shadow: 0 5px 15px rgba(255, 138, 101, 0.4);
  }

  .sub-cont {
    overflow: hidden;
    position: absolute;
    left: 640px;
    top: 0;
    width: 900px;
    height: 100%;
    padding-left: 260px;
    background: linear-gradient(
      135deg,
      #fff8e1,
      #ffecb3
    ); /* Karma light gradient */
    transition: transform 1.2s ease-in-out;
  }

  .cont.s-signup .sub-cont {
    transform: translate3d(-640px, 0, 0);
  }

  .img {
    overflow: hidden;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 260px;
    height: 100%;
    padding-top: 360px;
  }

  .img:before {
    content: "";
    position: absolute;
    right: 0;
    top: 0;
    width: 900px;
    height: 100%;
    background-image: url("https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=900&q=80");
    background-size: cover;
    background-position: center;
    transition: transform 1.2s ease-in-out;
  }

  .img:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      135deg,
      rgba(255, 138, 101, 0.6),
      rgba(255, 183, 77, 0.4)
    ); /* Karma overlay */
  }

  .cont.s-signup .img:before {
    transform: translate3d(640px, 0, 0);
  }

  .img-text {
    z-index: 2;
    position: absolute;
    left: 0;
    top: 50px;
    width: 100%;
    padding: 0 20px;
    text-align: center;
    color: #fff3e0;
    transition: transform 1.2s ease-in-out;
  }

  .cont.s-signup .img-text.m-up {
    transform: translateX(520px);
  }

  .img-text.m-in {
    transform: translateX(-520px);
  }

  .cont.s-signup .img-text.m-in {
    transform: translateX(0);
  }

  .sign-in {
    padding-top: 65px;
    transition-timing-function: ease-out;
  }

  .cont.s-signup .sign-in {
    transition-timing-function: ease-in-out;
    transition-duration: 1.2s;
    transform: translate3d(640px, 0, 0);
  }

  .img-btn {
    overflow: hidden;
    z-index: 2;
    position: relative;
    width: 100px;
    height: 36px;
    margin: 0 auto;
    background: transparent;
    color: #fff3e0;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
  }

  .img-btn:after {
    content: "";
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 2px solid #fff3e0;
    border-radius: 30px;
  }

  .img-btn span {
    position: absolute;
    left: 0;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    transition: transform 1.2s;
  }

  .img-btn span.m-in {
    transform: translateY(-72px);
  }

  .cont.s-signup .img-btn span.m-in {
    transform: translateY(0);
  }

  .cont.s-signup .img-btn span.m-up {
    transform: translateY(72px);
  }

  .sign-up {
    transform: translate3d(-900px, 0, 0);
    padding-top: 20px; /* Reduced top padding for sign-up */
  }

  .cont.s-signup .sign-up {
    transform: translate3d(0, 0, 0);
  }

  /* Custom scrollbar for better look */
  .form::-webkit-scrollbar {
    width: 6px;
  }

  .form::-webkit-scrollbar-track {
    background: rgba(255, 224, 178, 0.1);
    border-radius: 10px;
  }

  .form::-webkit-scrollbar-thumb {
    background: rgba(230, 81, 0, 0.3);
    border-radius: 10px;
  }

  .form::-webkit-scrollbar-thumb:hover {
    background: rgba(230, 81, 0, 0.5);
  }

</style>    
</head>
<body>
    <div class="cont">
    <div class="form sign-in">
      <h2>Log in Administer</h2>
      <form action="" method="post">
        <label>
            <span>Email Address</span>
            <input type="email" name="txtemail">
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="txtpass">
        </label>
        <button class="submit" type="submit" name="btnlogin">Sign In</button>
      </form>

      <div class="social-media">
        <ul>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"></li>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Logo_of_Twitter.svg" alt="Twitter"></li>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn"></li>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"></li>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h1>New here?</h1>
          <p>Sign up and discover</p>
        </div>
        <div class="img-text m-in">
          <h1>One of us?</h1>
          <p>Just sign in</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Become a Administer!</h2>
        <?php
        include 'connect.php';
        if(isset($_POST['btn_insert'])) {
            $uname=$_POST['txtuname'];
            $email=$_POST['txtemail'];
            $pass=$_POST['txtpassword'];
            $photo=$_FILES['txtphoto']['name'];
            $dst='./images/'.$photo;
            $q=mysqli_query($con, "INSERT INTO `admin_master`(`aid`, `name`, `email`, `pass`, `status`, `photo`) VALUES (NULL ,'$uname','$email','$pass',0,'$photo')");
            // "INSERT INTO `admin_master`(`aid`, `name`, `email`, `pass`, `status`, `photo`) VALUES (NULL ,'$uname','$email','$pass',0,'$photo')"
            if($q)
            {
                
                move_uploaded_file($_FILES["txtphoto"]['tmp_name'], $dst);
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>You Register!...</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            }
            else    
            {
                echo "Not inserted";
            }
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data" novalidate>
            <label>
                <span>Name</span>
                <input type="text" name="txtuname" required>
            </label>
            <label>
                <span>Email</span>
                <input type="email" name="txtemail" required>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="txtpassword" required>
            </label>
            <label>
                <span>Confirm Password</span>
                <input type="password" name="confirm_password" required>
            </label>
            <div class="photo-section">
                <div class="photo-options">
                    <button type="button" class="photo-btn active" onclick="showUpload()">Upload</button>
                    <button type="button" class="photo-btn" onclick="showOnlinePhotos()">Choose Online</button>
                </div>
                
                <div class="upload-area" id="uploadArea" onclick="document.getElementById('photoUpload').click()">
                    <div class="upload-icon">📸</div>
                    <div class="upload-text">Click to upload or drag & drop</div>
                    <input type="file" id="photoUpload" name="txtphoto" accept="image/*" onchange="handleFileUpload(this)">
                </div>

                <div class="online-photos" id="onlinePhotos">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 1" class="photo-option" onclick="selectPhoto(this, 'Business Man')">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616c041f22d?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 2" class="photo-option" onclick="selectPhoto(this, 'Professional Woman')">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 3" class="photo-option" onclick="selectPhoto(this, 'Creative Woman')">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 4" class="photo-option" onclick="selectPhoto(this, 'Young Professional')">
                    <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 5" class="photo-option" onclick="selectPhoto(this, 'Confident Woman')">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 6" class="photo-option" onclick="selectPhoto(this, 'Modern Man')">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 7" class="photo-option" onclick="selectPhoto(this, 'Friendly Woman')">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 8" class="photo-option" onclick="selectPhoto(this, 'Professional Man')">
                    <img src="https://images.unsplash.com/photo-1557053910-d9eadeed1c58?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 9" class="photo-option" onclick="selectPhoto(this, 'Stylish Woman')">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 10" class="photo-option" onclick="selectPhoto(this, 'Tech Professional')">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 11" class="photo-option" onclick="selectPhoto(this, 'Designer Woman')">
                    <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671d66?w=150&h=150&fit=crop&crop=face&auto=format" alt="Photo 12" class="photo-option" onclick="selectPhoto(this, 'Creative Man')">
                </div>

                <div class="selected-photo" id="selectedPhotoDiv" style="display: none;">
                    <img id="selectedPhotoImg" src="" alt="Selected">
                    <div class="selected-photo-name" id="selectedPhotoName"></div>
                    <button type="button" class="remove-photo" onclick="removePhoto()">Remove</button>
                </div>
            </div>
            <button type="submit" class="submit" name="btn_insert">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>
<script>
  // Toggle between login and signup
  document.querySelector(".img-btn").addEventListener("click", function () {
  document.querySelector(".cont").classList.toggle("s-signup");
  });

  // Photo selection functions
  let selectedPhotoData = null;

  function showUpload() {
    document
      .querySelectorAll(".photo-btn")
      .forEach((btn) => btn.classList.remove("active"));
    event.target.classList.add("active");
    document.getElementById("uploadArea").style.display = "block";
    document.getElementById("onlinePhotos").classList.remove("active");
    clearSelection();
  }

  function showOnlinePhotos() {
    document
      .querySelectorAll(".photo-btn")
      .forEach((btn) => btn.classList.remove("active"));
    event.target.classList.add("active");
    document.getElementById("uploadArea").style.display = "none";
    document.getElementById("onlinePhotos").classList.add("active");
    clearSelection();
  }

  function selectPhoto(img, name) {
    // Remove previous selections
    document.querySelectorAll(".photo-option").forEach((photo) => {
      photo.classList.remove("selected");
    });

    // Select current photo
    img.classList.add("selected");

    // Show selected photo
    const selectedDiv = document.getElementById("selectedPhotoDiv");
    const selectedImg = document.getElementById("selectedPhotoImg");
    const selectedName = document.getElementById("selectedPhotoName");

    selectedImg.src = img.src;
    selectedName.textContent = name;
    selectedDiv.style.display = "block";

    selectedPhotoData = {
      src: img.src,
      name: name,
      type: "online",
    };
  }

  function handleFileUpload(input) {
    if (input.files && input.files[0]) {
      const file = input.files[0];
      const reader = new FileReader();

      reader.onload = function (e) {
        const selectedDiv = document.getElementById("selectedPhotoDiv");
        const selectedImg = document.getElementById("selectedPhotoImg");
        const selectedName = document.getElementById("selectedPhotoName");

        selectedImg.src = e.target.result;
        selectedName.textContent = file.name;
        selectedDiv.style.display = "block";

        selectedPhotoData = {
          src: e.target.result,
          name: file.name,
          type: "upload",
          file: file,
        };
      };

      reader.readAsDataURL(file);
    }
  }

  function removePhoto() {
    const selectedDiv = document.getElementById("selectedPhotoDiv");
    selectedDiv.style.display = "none";

    // Clear file input
    document.getElementById("photoUpload").value = "";

    // Clear online photo selections
    document.querySelectorAll(".photo-option").forEach((photo) => {
      photo.classList.remove("selected");
    });

    selectedPhotoData = null;
  }

  function clearSelection() {
    removePhoto();
  }

  // Drag and drop functionality
  const uploadArea = document.getElementById("uploadArea");

  uploadArea.addEventListener("dragover", function (e) {
    e.preventDefault();
    uploadArea.classList.add("dragover");
  });

  uploadArea.addEventListener("dragleave", function (e) {
    e.preventDefault();
    uploadArea.classList.remove("dragover");
  });

  uploadArea.addEventListener("drop", function (e) {
    e.preventDefault();
    uploadArea.classList.remove("dragover");

    const files = e.dataTransfer.files;
    if (files.length > 0 && files[0].type.startsWith("image/")) {
      document.getElementById("photoUpload").files = files;
      handleFileUpload(document.getElementById("photoUpload"));
    }
  });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>