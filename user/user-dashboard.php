<?php include("hhh.php"); ?>

        <!-- breadcrumb -->

        <div class="site-breadcrumb">

            <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>

            <div class="container">

                <div class="site-breadcrumb-wrap">

                    <h4 class="breadcrumb-title">Dashboard</h4>

                    <ul class="breadcrumb-menu">

                        <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>

                        <li class="active">Dashboard</li>

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
                            <h5>Nidhi Joshi</h5>
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afcec1dbc0c1c6efcad7cec2dfc3ca81ccc0c2">[nidhikjoshi303@gmail.com]</a></p>
                        </div>
                        <ul class="sidebar-list">
                            <li><a class="active" href="user-dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                            <li><a href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
                            <li><a href="order-list.php"><i class="far fa-shopping-bag"></i> My Order List <span class="badge badge-danger">02</span></a></li>
                            <li><a href="wishlist.php"><i class="far fa-heart"></i> My Wishlist <span class="badge badge-danger">02</span></a></li>
                            <li><a href="address-list.php"><i class="far fa-location-dot"></i> Address List</a></li>
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
                        <div class="user-card">
                            <h4 class="user-card-title">Summary</h4>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="dashboard-widget color-1">
                                        <div class="dashboard-widget-info">
                                            <h1>50</h1>
                                            <span>Pending Orders</span>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <i class="fal fa-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dashboard-widget color-2">
                                        <div class="dashboard-widget-info">
                                            <h1>250</h1>
                                            <span>Completed Orders</span>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <i class="fal fa-layer-group"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dashboard-widget color-3">
                                        <div class="dashboard-widget-info">
                                            <h1>$15.80k</h1>
                                            <span>My Balance</span>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <i class="fal fa-wallet"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-card">
                                    <div class="user-card-header">
                                        <h4 class="user-card-title">Recent Orders</h4>
                                        <div class="user-card-header-right">
                                            <a href="order-list.php" class="theme-btn">View All Orders</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#Order No</th>
                                                    <th>Purchased Date</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-info">Pending</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-primary">Processing</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-success">Completed</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-success">Completed</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-success">Completed</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                                    <td>August 20, 2024</td>
                                                    <td>$3,650</td>
                                                    <td><span class="badge badge-success">Completed</span></td>
                                                    <td>
                                                        <a href="order-detail.php" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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