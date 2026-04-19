<?php include("hhh.php"); ?>

   <!-- breadcrumb -->
   <div class="site-breadcrumb">
       <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
       <div class="container">
           <div class="site-breadcrumb-wrap">
               <h4 class="breadcrumb-title">Payment Methods</h4>
               <ul class="breadcrumb-menu">
                   <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                   <li class="active">Payment Methods</li>
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
                                <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2b3bca6bdbcbb92b7aab3bfa2beb7fcb1bdbf">[nidhikjoshi303@gmail.com]</a></p>
                            </div>
                            <ul class="sidebar-list">
                                <li><a href="user-dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                                <li><a href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
                                <li><a href="order-list.php"><i class="far fa-shopping-bag"></i> My Order List <span class="badge badge-danger">02</span></a></li>
                                <li><a href="wishlist.php"><i class="far fa-heart"></i> My Wishlist <span class="badge badge-danger">02</span></a></li>
                                <li><a href="address-list.php"><i class="far fa-location-dot"></i> Address List</a></li>
                                <li><a href="support-ticket.php"><i class="far fa-headset"></i> Support Tickets <span class="badge badge-danger">02</span></a></li>
                                <li><a href="track-order.php"><i class="far fa-map-location-dot"></i> Track My Order</a></li>
                                <li><a class="active" href="payment-method.php"><i class="far fa-wallet"></i> Payment Methods</a></li>
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
                                            <h4 class="user-card-title">Payment Methods</h4>
                                            <div class="user-card-header-right">
                                                <a href="add-payment-method.php" class="theme-btn"><span class="far fa-plus-circle"></span>Add Payment</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Card Info</th>
                                                        <th>Card Holder Name</th>
                                                        <th>Card Number</th>
                                                        <th>Expire Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-list-img w-25">
                                                                <img class="rounded-3" src="assets/img/payment/amex.svg" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="table-list-code">khushi kalsariya</span></td>
                                                        <td>1234***********</td>
                                                        <td>10/2024</td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Edit"><i class="far fa-pen"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm rounded-2" data-tooltip="tooltip" title="Delete"><i class="far fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-list-img w-25">
                                                                <img class="rounded-3" src="assets/img/payment/mastercard.svg" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="table-list-code">vivek rakholiya</span></td>
                                                        <td>1234***********</td>
                                                        <td>10/2024</td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Edit"><i class="far fa-pen"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm rounded-2" data-tooltip="tooltip" title="Delete"><i class="far fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-list-img w-25">
                                                                <img class="rounded-3" src="assets/img/payment/visa.svg" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="table-list-code">Ranjana Khusava</span></td>
                                                        <td>1234***********</td>
                                                        <td>10/2024</td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Edit"><i class="far fa-pen"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm rounded-2" data-tooltip="tooltip" title="Delete"><i class="far fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-list-img w-25">
                                                                <img class="rounded-3" src="assets/img/payment/paypal.svg" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="table-list-code">Nidhi Joshi</span></td>
                                                        <td>1234***********</td>
                                                        <td>10/2024</td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Edit"><i class="far fa-pen"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm rounded-2" data-tooltip="tooltip" title="Delete"><i class="far fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-list-img w-25">
                                                                <img class="rounded-3" src="assets/img/payment/discover.svg" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="table-list-code">pratik singh</span></td>
                                                        <td>1234***********</td>
                                                        <td>10/2024</td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Edit"><i class="far fa-pen"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm rounded-2" data-tooltip="tooltip" title="Delete"><i class="far fa-trash-can"></i></a>
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