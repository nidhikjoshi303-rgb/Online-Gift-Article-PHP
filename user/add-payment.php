<?php include("hhh.php"); ?>

     <!-- breadcrumb -->
     <div class="site-breadcrumb">
         <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
         <div class="container">
             <div class="site-breadcrumb-wrap">
                 <h4 class="breadcrumb-title">Add Payment</h4>
                 <ul class="breadcrumb-menu">
                     <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                     <li class="active">Add Payment</li>
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
                              <h5>Nidhi joshi</h5>
                              <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3d32283332351c39243d312c3039723f3331">[nidhikjoshi303@gmail.com]</a></p>
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
                                          <h4 class="user-card-title">Add New Payment</h4>
                                          <div class="user-card-header-right">
                                              <a href="payment-method.php" class="theme-btn"><span class="fas fa-arrow-left"></span>Payment Method</a>
                                          </div>
                                      </div>
                                      <div class="user-form">
                                          <form action="#">
                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label>Name On Card</label>
                                                          <input type="text" class="form-control">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label>Card Number</label>
                                                          <input type="text" class="form-control">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label>Expire Date</label>
                                                          <input type="text" class="form-control">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label>CVC</label>
                                                          <input type="text" class="form-control">
                                                      </div>
                                                  </div>
                                              </div>
                                              <button type="submit" class="theme-btn"><span class="far fa-save"></span> Save Payment</button>
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