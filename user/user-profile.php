<?php include("hhh.php"); ?>

<style>

/* PROFILE IMAGE PERFECT STYLE */

.sidebar-profile-img{
    position: relative;
    width: 120px;
    height: 120px;
    margin: auto;
}

.sidebar-profile-img img{
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #fff;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.profile-img-btn{
    position: absolute;
    bottom: 0;
    right: 0;
    background: #ff4d6d;
    color: #fff;
    border: none;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
}

.profile-img-file{
    display: none;
}

.sidebar-top{
    text-align: center;
    padding: 30px 20px;
}

</style>

<!-- breadcrumb -->
<div class="site-breadcrumb">
    <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
    <div class="container">
        <div class="site-breadcrumb-wrap">
            <h4 class="breadcrumb-title">My Profile</h4>
            <ul class="breadcrumb-menu">
                <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                <li class="active">My Profile</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- user dashboard -->
<div class="user-area pt-100 pb-80">
<div class="container">
<div class="row">

<div class="col-lg-3">

<div class="sidebar">

<div class="sidebar-top">

<div class="sidebar-profile-img">

<img src="https://res.cloudinary.com/dfglchdhs/image/upload/v1773636103/v2messenger/chat/1773636108609.jpg">

<button type="button" class="profile-img-btn">
<i class="far fa-camera"></i>
</button>

<input type="file" class="profile-img-file">

</div>

<h5>Nidhi Joshi</h5>

<p>nidhikjoshi303@gmail.com</p>

</div>

<ul class="sidebar-list">
<li><a href="user-dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a class="active" href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
<li><a href="order-list.php"><i class="far fa-shopping-bag"></i> My Order List</a></li>
<li><a href="wishlist.php"><i class="far fa-heart"></i> My Wishlist</a></li>
<li><a href="address-list.php"><i class="far fa-location-dot"></i> Address List</a></li>
<li><a href="support-ticket.php"><i class="far fa-headset"></i> Support Tickets</a></li>
<li><a href="track-order.php"><i class="far fa-map-location-dot"></i> Track My Order</a></li>
<li><a href="payment-method.php"><i class="far fa-wallet"></i> Payment Methods</a></li>
<li><a href="user-notification.php"><i class="far fa-bell"></i> Notification</a></li>
<li><a href="user-message.php"><i class="far fa-envelope"></i> Messages</a></li>
<li><a href="user-setting.php"><i class="far fa-gear"></i> Settings</a></li>
<li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
</ul>

</div>

</div>


<div class="col-lg-9">

<div class="user-wrapper">

<div class="row">

<div class="col-lg-12">

<div class="user-card">

<h4 class="user-card-title">Profile Info</h4>

<div class="user-form">

<form action="#">

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" value="Nidhi">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" value="Joshi">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" value="nidhikjoshi303@gmail.com">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Phone</label>
<input type="text" class="form-control" value="+91 9099 509 910">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" value="Surat, INDIA">
</div>
</div>

</div>

<button type="submit" class="theme-btn">
<span class="far fa-user"></span> Save Changes
</button>

</form>

</div>
</div>
</div>


<div class="col-lg-12">

<div class="user-card">

<h4 class="user-card-title">Change Password</h4>

<div class="user-form">

<form action="#">

<div class="row">

<div class="col-md-12">
<div class="form-group">
<label>Old Password</label>
<input type="password" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>Re-Type Password</label>
<input type="password" class="form-control">
</div>
</div>

</div>

<button type="submit" class="theme-btn">
<span class="far fa-key"></span> Change Password
</button>

</form>

</div>
</div>

</div>

</div>

</div>

</div>

</div>
</div>
</div>

<?php include("fff.php"); ?>