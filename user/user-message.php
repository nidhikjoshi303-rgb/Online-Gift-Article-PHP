<?php include("hhh.php"); ?>

     <!-- breadcrumb -->
     <div class="site-breadcrumb">
         <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
         <div class="container">
             <div class="site-breadcrumb-wrap">
                 <h4 class="breadcrumb-title">Messages</h4>
                 <ul class="breadcrumb-menu">
                     <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                     <li class="active">Messages</li>
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
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abcac5dfc4c5c2ebced3cac6dbc7ce85c8c4c6">[Nidhikjoshi303@gmail.com]</a></p>
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
                            <li><a class="active" href="user-message.php"><i class="far fa-envelope"></i> Messages <span class="badge badge-danger">02</span></a></li>
                            <li><a href="user-setting.php"><i class="far fa-gear"></i> Settings</a></li>
                            <li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="user-wrapper">
                        <div class="user-card user-message">
                            <div class="user-card-header">
                                <h4 class="user-card-title">Messages</h4>
                                <div class="user-card-header-right">
                                    <div class="header-account">
                                        <div class="dropdown">
                                            <div data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="assets/img/account/01.jpg" alt="">
                                            </div>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="far fa-ban"></i> Block Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="far fa-message-slash"></i> Mute Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="far fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="message-wrapper">
                                        <div class="message-inbox">
                                            <ul class="message-list">
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s1.jpeg" alt="">
                                                            <span class="message-status online"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Mohini Joshi</h5>
                                                                <span>just now</span>
                                                            </div>
                                                            <p>Hello, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s2.jpeg.jpeg" alt="">
                                                            <span class="message-status offline"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Rinkesh Joshi</h5>
                                                                <span>15 min ago</span>
                                                            </div>
                                                            <p>Hi, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="message-active">
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s3.jpeg.jpeg" alt="">
                                                            <span class="message-status busy"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Priya Joshi</h5>
                                                                <span>5 hours ago</span>
                                                            </div>
                                                            <p>Hello, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s4.jpeg.jpeg" alt="">
                                                            <span class="message-status online"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Jay Oza</h5>
                                                                <span>Yesterday</span>
                                                            </div>
                                                            <p>Hi, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s5.jpeg.jpeg" alt="">
                                                            <span class="message-status busy"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Padmaja Oza</h5>
                                                                <span>2 week ago</span>
                                                            </div>
                                                            <p>Hello, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s6.jpeg.jpeg" alt="">
                                                            <span class="message-status online"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Hetvi Oza</h5>
                                                                <span>1 months ago</span>
                                                            </div>
                                                            <p>Hi, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s7.jpeg.jpeg" alt="">
                                                            <span class="message-status offline"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Sagar Dave</h5>
                                                                <span>Sep 11, 2024</span>
                                                            </div>
                                                            <p>Hello, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s8.jpeg.jpeg" alt="">
                                                            <span class="message-status online"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Vidhi Dave</h5>
                                                                <span>Sep 15, 2024</span>
                                                            </div>
                                                            <p>Hi, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s9.jpeg.jpeg" alt="">
                                                            <span class="message-status busy"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Jaynam Dave </h5>
                                                                <span>Sep 20, 2024</span>
                                                            </div>
                                                            <p>Hello, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s10.jpeg.jpeg" alt="">
                                                            <span class="message-status busy"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Vini Trivedi</h5>
                                                                <span>Sep 25, 2024</span>
                                                            </div>
                                                            <p>Hi, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s6.jpeg.jpeg" alt="">
                                                            <span class="message-status offline"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Keyur Joshi</h5>
                                                                <span>Sep 26, 2024</span>
                                                            </div>
                                                            <p>Hello, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="message-avatar">
                                                            <img src="assets/img/account/s12.jpeg.jpeg" alt="">
                                                            <span class="message-status online"></span>
                                                        </div>
                                                        <div class="message-by">
                                                            <div class="message-by-content">
                                                                <h5>Hemish Trivedi</h5>
                                                                <span>Sep 28, 2024</span>
                                                            </div>
                                                            <p>Hi, It is a long establish fact that a reader will distracted</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            <div class="message-content-info">
                                                <div class="message-item">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s7.jpeg.jpeg" alt="">
                                                    </div>
                                                    <div class="message-description">
                                                        <p>
                                                            Hello, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-item me">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s6.jpeg.jpeg" alt="">
                                                        </div>
                                                    <div class="message-description">
                                                        <p>
                                                            There are many variations of passages available but the majority have suffered alteration in some form by injected humour.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-item">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s7.jpeg.jpeg" alt="">
                                                    </div>
                                                    <div class="message-description">
                                                        <p>
                                                            We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-item me">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s6.jpeg.jpeg" alt="">
                                                    </div>
                                                    <div class="message-description">
                                                        <p>
                                                            So blinded by desire that they cannot foresee the pain and trouble that are bound to ensue.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-item">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s7.jpeg.jpeg" alt="">
                                                    </div>
                                                    <div class="message-description">
                                                        <p>
                                                            In a free hour when our power of choice is untra and when nothing prevents our being able.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-item me">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s6.jpeg.jpeg" alt="">
                                                    </div>
                                                    <div class="message-description">
                                                        <p>
                                                            We like best every pleasure is to be welcomed and every pain avoided in certain circums and owing to the claims of duty.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-item">
                                                    <div class="message-avatar">
                                                        <img src="assets/img/account/s7.jpeg.jpeg" alt="">
                                                    </div>
                                                    <div class="message-description">
                                                        <p>
                                                            The obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-reply">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <textarea cols="40" rows="3" class="form-control"
                                                        placeholder="Your Message"></textarea>
                                                    </div>
                                                    <button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span> Send Message</button>
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
        </div>
    </div>
    <!-- user dashboard end -->
     
<?php include("fff.php"); ?>