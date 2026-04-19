<?php include("hhh.php"); ?>

     <!-- breadcrumb -->
     <div class="site-breadcrumb">
        <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
        <div class="container">
            <div class="site-breadcrumb-wrap">
                <h4 class="breadcrumb-title">Track My Order</h4>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Track My Order</li>
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
                                <img src="https://res.cloudinary.com/dfglchdhs/image/upload/v1773636103/v2messenger/chat/1773636108609.jpg" alt="">
                                <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                                <input type="file" class="profile-img-file">
                            </div>
                            <h5>Nidhi joshi</h5>
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3657584259585f76534e575b465a531855595b">[nidhikjoshi303@gmail.com]</a></p>
                        </div>
                        <ul class="sidebar-list">
                            <li><a href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
                            <li><a href="my-order.php"><i class="far fa-shopping-bag"></i> My Orders</a></li>
                            <li><a href="wishlist.php"><i class="far fa-heart"></i> My Wishlist</a></li>
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
                                <div class="user-card user-track-order">
                                    <h4 class="user-card-title">Track My Order</h4>
                                    <div class="track-order-content">
                                        <h5>Tracking Order Number: <span>#28VR5K59</span></h5>
                                        <div class="track-order-info">
                                            <a href="#"><span>Shipped Via:</span> Express Shipping</a>
                                            <a href="#"><span>Status:</span> Checking Quality</a>
                                            <a href="#"><span>Expected Date:</span> August 27, 2026</a>
                                        </div>
                                        <div class="track-order-step">
                                            <div class="step-item completed">
                                                <div class="step-icon">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </div>
                                                <h6>Confirmed Order</h6>
                                            </div>
                                            <div class="step-item completed">
                                                <div class="step-icon">
                                                    <i class="fal fa-cog"></i>
                                                </div>
                                                <h6>Processing Order</h6>
                                            </div>
                                            <div class="step-item completed">
                                                <div class="step-icon">
                                                    <i class="fal fa-check-circle"></i>
                                                </div>
                                                <h6>Quality Check</h6>
                                            </div>
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <i class="fal fa-truck-fast"></i>
                                                </div>
                                                <h6>Product Dispatched</h6>
                                            </div>
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <i class="fal fa-home"></i>
                                                </div>
                                                <h6>Product Delivered</h6>
                                            </div>
                                        </div>
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