<?php include("hhh.php"); ?>

    <!-- breadcrumb -->
    <div class="site-breadcrumb">
        <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
        <div class="container">
            <div class="site-breadcrumb-wrap">
                <h4 class="breadcrumb-title">Add Address</h4>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Add Address</li>
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
                                <img src="assets/img/n3.jpg.jpeg" alt="">
                                <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                                <input type="file" class="profile-img-file">
                            </div>
                            <h5>Nidhi Joshi</h5>
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f4e415b4041466f4a574e425f434a014c4042">[nidhikjoshi303@gmail.com]</a></p>
                        </div>
                        <ul class="sidebar-list">
                            <li><a href="user-dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                            <li><a href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
                            <li><a href="order-list.php"><i class="far fa-shopping-bag"></i> My Order List <span class="badge badge-danger">02</span></a></li>
                            <li><a href="wishlist.php"><i class="far fa-heart"></i> My Wishlist <span class="badge badge-danger">02</span></a></li>
                            <li><a class="active" href="address-list.php"><i class="far fa-location-dot"></i> Address List</a></li>
                            <li><a href="support-ticket.php"><i class="far fa-headset"></i> Support Tickets <span class="badge badge-danger">02</span></a></li>
                            <li><a href="track-order.php"><i class="far fa-map-location-dot"></i> Track My Order</a></li>
                            <li><a href="payment-method.php"><i class="far fa-wallet"></i> Payment Methods</a></li>
                            <li><a href="user-notification.php"><i class="far fa-bell"></i> Notification <span class="badge badge-danger">02</span></a></li>
                            <li><a href="user-message.php"><i class="far fa-envelope"></i> Messages <span class="badge badge-danger">02</span></a></li>
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
                                    <div class="user-card-header">
                                        <h4 class="user-card-title">Add New Address</h4>
                                        <div class="user-card-header-right">
                                            <a href="address-list.php" class="theme-btn"><span class="fas fa-arrow-left"></span>Address List</a>
                                        </div>
                                    </div>
                                    <div class="user-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control" placeholder="Your Full Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="theme-btn"><span class="far fa-save"></span> Save Address</button>
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
    <!-- user dashboard end -->
<?php include("fff.php"); ?>