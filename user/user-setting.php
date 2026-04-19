<?php include("hhh.php"); ?>

  <!-- breadcrumb -->
  <div class="site-breadcrumb">
      <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
      <div class="container">
          <div class="site-breadcrumb-wrap">
              <h4 class="breadcrumb-title">Settings</h4>
              <ul class="breadcrumb-menu">
                  <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                  <li class="active">Settings</li>
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
                          <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8e819b808186af8a978e829f838ac18c8082">[nidhikjoshi303@gmail.com]</a></p>
                      </div>
                      <ul class="sidebar-list">
                          <li><a href="user-dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                          <li><a href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
                          <li><a href="order-list.php"><i class="far fa-shopping-bag"></i> My Order List <span class="badge badge-danger">02</span></a></li>
                          <li><a href="wishlist.php"><i class="far fa-heart"></i> My Wishlist <span class="badge badge-danger">02</span></a></li>
                          <li><a href="address-list.php"><i class="far fa-location-dot"></i> Address List</a></li>
                          <li><a href="support-ticket.php"><i class="far fa-headset"></i> Support Tickets <span class="badge badge-danger">02</span></a></li>
                          <li><a href="track-order.php"><i class="far fa-map-location-dot"></i> Track My Order</a></li>
                          <li><a href="payment-method.php"><i class="far fa-wallet"></i> Payment Methods</a></li>
                          <li><a href="user-notification.php"><i class="far fa-bell"></i> Notification <span class="badge badge-danger">02</span></a></li>
                          <li><a href="user-message.php"><i class="far fa-envelope"></i> Messages <span class="badge badge-danger">02</span></a></li>
                          <li><a class="active" href="user-setting.php"><i class="far fa-gear"></i> Settings</a></li>
                          <li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-9">
                  <div class="user-wrapper">
                      <div class="user-card user-setting">
                          <h4 class="user-card-title">Settings</h4>
                          <div class="row">
                              <div class="col-lg-6">
                                  <h6 class="mb-3">Privacy Setting</h6>
                                  <div class="privacy-setting">
                                      <form action="#">
                                          <div class="form-check form-switch">
                                              <input class="form-check-input" name="privacy-setting" value="1" type="checkbox" role="switch" id="privacy-setting-1" checked>
                                              <label class="form-check-label" for="privacy-setting-1">Enable Messages</label>
                                          </div>
                                          <div class="form-check form-switch">
                                              <input class="form-check-input" name="privacy-setting" value="2" type="checkbox" role="switch" id="privacy-setting-2">
                                              <label class="form-check-label" for="privacy-setting-2">I Want To Receive Email Notify</label>
                                          </div>
                                          <div class="form-check form-switch">
                                              <input class="form-check-input" name="privacy-setting" value="3" type="checkbox" role="switch" id="privacy-setting-3" checked>
                                              <label class="form-check-label" for="privacy-setting-3">Hide My Phone Number From Public</label>
                                          </div>
                                          <div class="form-check form-switch">
                                              <input class="form-check-input" name="privacy-setting" value="4" type="checkbox" role="switch" id="privacy-setting-4">
                                              <label class="form-check-label" for="privacy-setting-4">I Want To Receive Message</label>
                                          </div>
                                          <div class="form-check form-switch">
                                              <input class="form-check-input" name="privacy-setting" value="5" type="checkbox" role="switch" id="privacy-setting-5" checked>
                                              <label class="form-check-label" for="privacy-setting-5">Make My Profile Private</label>
                                          </div>
                                          <div class="my-4">
                                              <button type="submit" class="theme-btn"><span class="far fa-gear"></span>Update Settings</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <h6 class="mb-3">Delete Account</h6>
                                  <div class="user-form">
                                      <form action="#">
                                          <div class="form-group">
                                              <select class="select mb-4">
                                                  <option value="">Choose Reason</option>
                                                  <option value="1">Reason One</option>
                                                  <option value="2">Reason Two</option>
                                                  <option value="3">Reason Three</option>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <textarea class="form-control" cols="30" rows="4" placeholder="Describe Your Reason"></textarea>
                                          </div>
                                          <button type="submit" class="theme-btn"><span class="far fa-trash-can"></span>Delete Account</button>
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