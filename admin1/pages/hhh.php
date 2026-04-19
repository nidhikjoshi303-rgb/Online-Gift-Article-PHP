<?php
session_start();
if(!isset($_SESSION['uname']) && !isset($_SESSION['mail'])) {
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  
<!-- Mirrored from themewagon.github.io/DattaAble/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Jun 2025 05:41:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Home | Datta Able Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta Able is trending dashboard template made using Bootstrap 5 design framework. Datta Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="https://themewagon.github.io/DattaAble/assets/images/favicon.svg" type="image/x-icon" />

     <!-- [Font] Family -->
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
  <style>
    .menu-icon {
        margin-right: 10px;
        font-size: 16px;
    }
    /* Menu link base */
      .nav-link {
          position: relative;
          display: flex;
          align-items: center;
          padding: 12px 20px;
          color: #cfd8e3;
          text-decoration: none;
      }

      /* Active background */
      .nav-item.active > .nav-link {
          background-color: #2c3e50;
          color: #ffffff;
      }

      /* Left vertical active column */
      .nav-item.active > .nav-link::before {
          content: "";
          position: absolute;
          left: 0;
          top: 0;
          width: 4px;
          height: 100%;
          background-color: #ffffff;
      }



  </style>

  
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
  <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
    <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header flex items-center py-4 px-6 h-header-height">
      <a href="deshbord.php" class="b-brand flex items-center gap-3">
        <!-- ========   Change your logo from here   ============ -->
        <img src="123.png" class="img-fluid logo"  alt="logo" />
        <!-- <img src="https://themewagon.github.io/DattaAble/assets/images/favicon.svg" class="img-fluid logo logo-sm" alt="logo" /> -->
      </a>
    </div>
    <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item">
        <li class="pc-item">
          <a href="deshbord.php" class="pc-link">
            <span class="pc-micon">
              <i data-feather="home"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span
              class="pc-mtext">Category</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu"><a href="category_insert.php" class="pc-link">Add<span class="pc-arrow"></span></a></li>
              <li class="pc-item pc-hasmenu"><a href="category_master.php" class="pc-link">View<span class="pc-arrow"></i></span></a></li>
          </ul>
        </li>
                <li class="pc-item pc-hasmenu">

          <a href="#" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span

              class="pc-mtext">Subcategory</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>

          <ul class="pc-submenu">

            <li class="pc-item pc-hasmenu"><a href="subcategory_insert.php" class="pc-link">Add<span class="pc-arrow"></span></a></li>

              <li class="pc-item pc-hasmenu"><a href="subcategory_master.php" class="pc-link">View<span class="pc-arrow"></i></span></a></li>

          </ul>

        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span
              class="pc-mtext">Product</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu"><a href="product.php" class="pc-link">Add<span class="pc-arrow"></span></a></li>
              <li class="pc-item pc-hasmenu"><a href="product_master.php" class="pc-link">View<span class="pc-arrow"></i></span></a></li>
          </ul>
        </li>
        <!-- <li class="pc-item pc-caption"> -->
          <!-- <label>Pages</label> -->
          <!-- <i data-feather="monitor"></i> -->
        <!-- </li> -->
        <!-- <li class="pc-item pc-hasmenu">
          <a href="users.php" class="pc-link" target="_blank">
            <span class="pc-micon"> <i data-feather="user-plus"></i></span>
            <span class="pc-mtext">Users</span>
          </a>
        </li> -->
        <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon"> <i data-feather="user-plus"></i></span>
                <span class="pc-mtext">Users</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              </a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a class="pc-link" href="active-users.php" target="_blank">
                    <span class="pc-mtext">Active Users</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a class="pc-link" href="blocked-users.php" target="_blank">
                    <span class="pc-mtext">Blocked Users</span>
                  </a>
                </li>
              </ul>
              <!-- <li class="nav-item active"> -->
                  <!-- <a href="contactus.php" class="nav-link"> -->
                      <!-- <i class="fa-solid fa-envelope menu-icon"></i> -->
                      <!-- <span class="menu-title">Contact Us</span> -->
                  <!-- </a> -->
              <!-- </li> -->
              <!-- <li class="nav-item"> -->
                  <!-- <a href="contactus_view.php" class="nav-link"> -->
                      <!-- <i class="fa-solid fa-envelope menu-icon"></i> -->
                      <!-- <span class="menu-title">Contact Messages</span> -->
                  <!-- </a> -->
              <!-- </li> -->
<!--  -->
          <!-- </li> -->
          <!-- </li> -->
           <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon"> <i data-feather="user-plus"></i></span>
                <span class="pc-mtext">View Orders</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              </a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a class="pc-link" href="order.php" target="_blank">
                    <span class="pc-mtext">Orders</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a class="pc-link" href="blocked-users.php" target="_blank">
                    <span class="pc-mtext">Blocked Users</span>
                  </a>
                </li>
              </ul>
        
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow"><!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup lg:hidden">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-2 py-1">
          <input type="search" class="form-control !border-0 !shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="bell"></i>
        <span class="badge bg-success-500 text-white rounded-full z-10 absolute right-0 top-0">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown p-2">
        <div class="dropdown-header flex items-center justify-between py-4 px-5">
          <h5 class="m-0">Notifications</h5>
          <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
        </div>
        <div class="dropdown-body header-notification-scroll relative py-4 px-5"
          style="max-height: calc(100vh - 215px)">
          <p class="text-span mb-3">Today</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                <div class="shrink-0">
                  <img class="img-radius w-12 h-12 rounded-0" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image" />
                </div>
                <div class="grow">
                  <span class="float-end text-sm text-muted">2 min ago</span>
                  <h5 class="text-body mb-2">UI/UX Design</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                <div class="shrink-0">
                  <img class="img-radius w-12 h-12 rounded-0" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image" />
                </div>
                <div class="grow">
                  <span class="float-end text-sm text-muted">1 hour ago</span>
                  <h5 class="text-body mb-2">Message</h5>
                  <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-span mb-3 mt-4">Yesterday</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                <div class="shrink-0">
                  <img class="img-radius w-12 h-12 rounded-0" src="../assets/images/user/avatar-3.jpg" alt="Generic placeholder image" />
                </div>
                <div class="grow ms-3">
                  <span class="float-end text-sm text-muted">2 hour ago</span>
                  <h5 class="text-body mb-2">Forms</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                <div class="shrink-0">
                  <img class="img-radius w-12 h-12 rounded-0" src="../assets/images/user/avatar-4.jpg" alt="Generic placeholder image" />
                </div>
                <div class="grow ms-3">
                  <span class="float-end text-sm text-muted">12 hour ago</span>
                  <h5 class="text-body mb-2">Challenge invitation</h5>
                  <p class="mb-2">
                    <strong>Jonny aber</strong>
                    invites to join the challenge
                  </p>
                  <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm btn-primary">Accept</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                <div class="shrink-0">
                  <img class="img-radius w-12 h-12 rounded-0" src="../assets/images/user/avatar-5.jpg" alt="Generic placeholder image" />
                </div>
                <div class="grow ms-3">
                  <span class="float-end text-sm text-muted">5 hour ago</span>
                  <h5 class="text-body mb-2">Security</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-2">
          <a href="#!" class="text-danger-500 hover:text-danger-600 focus:text-danger-600 active:text-danger-600">
            Clear all Notifications
          </a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" data-pc-auto-close="outside" aria-expanded="false">
        <i data-feather="user"></i>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2 overflow-hidden">
        <div class="dropdown-header flex items-center justify-between py-4 px-5 bg-primary-500">
          <div class="flex mb-1 items-center">
            <div class="shrink-0">
              <!-- <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="w-10 rounded-full" /> -->
            </div>
            <?php
            echo "<div class='grow ms-3'>
              <h6 class='mb-1 text-white'>$_SESSION[uname]</h6>
              <span class='text-white'>$_SESSION[mail]</span>
            </div>";
            ?>
          </div>
        </div>
        <div class="dropdown-body py-4 px-5">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">

            <div class="grid my-3">
              <button class="btn btn-primary flex items-center justify-center">
                <a href="http://localhost/giftshop/admin1/pages/">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="px-3">Logout</span>
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <!-- [ breadcrumb ] end -->
</div>
<?php include('footer.php');?>