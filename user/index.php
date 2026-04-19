<?php
include('hhh.php');
?>
<?php
include('hero.php');
?>
<?php
include('connect.php');
?>
        <!-- category area -->
        <!-- <div class="category-area py-80">  -->
            <!-- <div class="container"> -->
                <!-- <div class="category-slider owl-carousel owl-theme"> -->
                    <!-- ?php -->
<!-- // $sql = "SELECT * FROM category_master"; -->
<!-- // $result = mysqli_query($con, $sql); -->
<!-- // while($row = mysqli_fetch_assoc($result)){ -->
<!-- // ?> -->
                    <!--<div class="category-item"> -->
                        <!-- <a href="#"> -->
                            <!-- <div class="category-info"> -->
                                <!-- <div class="icon"> -->
                                    <!-- ?php -->
                                        <!-- // echo "<img src='1.webp  ".$row['pimg']."' alt=''>";     -->
<!-- // ?> -->
                                    <!-- <!-</div --> 
                                <!-- <div class="content"> -->
                                    <!-- <h4>?php echo $row['cname']; ?></h4> -->
                                    <!-- <p>30 Items</p> -->
                                <!-- </div> -->
                            <!-- </div> -->
                        <!-- </a> -->
                    <!-- </div> -->
                                <!-- ?php } ?> -->
<!--  -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
        <!-- category area end -->

            <!-- category area -->

       <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Category Bar</title>

<style>

/* Page style */
body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f5f5f5;
    padding:40px;
}

/* Main Category Bar */
.top-category-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#f2f2f2;
    border:2px solid #ff6b81;
    border-radius:12px;
    padding:20px;
}

/* Each Item */
.category-item{
    text-align:center;
    flex:1;
    position:relative;
}

/* Icons */
.category-item img{
    width:45px;
    margin-bottom:8px;
}

/* Text */
.category-item p{
    margin:0;
    font-size:14px;
    color:#333;
}

/* Vertical Divider */
.category-item:not(:last-child)::after{
    content:"";
    position:absolute;
    right:0;
    top:15%;
    height:70%;
    width:2px;
    background:#ff6b81;
}

/* Hover Effect */
.category-item:hover{
    transform:scale(1.05);
    transition:0.3s;
}

</style>
</head>

<body>

<div class="top-category-bar">

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/same_day_delivery_d_tiles_5_1752491524627">
<p>Same Day Delivery</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/cakes_d_tiles_5_1752491586517">
<p>Cakes</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/flowers_d_tiles_5_1752491548433">
<p>Flowers</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/personalized_d_tiles_5_1752491616977">
<p>Personalized</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/plants_d_tiles_5_1752491632143">
<p>Plants</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/new_arrivals_d_tiles_5_1754895238100">
<p>New Arrivals</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/international_d_tiles_5_1752491645111">
<p>International</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt0prodlp/banners/bulk/corp._gifts_d_tiles_5_1752491657355">
<p>Corp. Gifts</p>
</div>

</div>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gift Categories</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f5f5f5;
    padding:40px;
}

/* Category Section */
.category-row{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:white;
    padding:20px 30px;
}

/* Category Item */
.category-item{
    text-align:center;
    width:150px;
}

/* Circle Image */
.category-item img{
    width:110px;
    height:110px;
    border-radius:50%;
    object-fit:cover;
    background:#f3f3f3;
    padding:10px;
}

/* Text */
.category-item p{
    margin-top:10px;
    font-size:14px;
    color:#333;
}

/* Hover Effect */
.category-item:hover{
    transform:scale(1.08);
    transition:0.3s;
}

</style>
</head>

<body>

<div class="category-row">

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt4prodlp/banners/igp_luxe__d_polaroid_5_1759300356005">
<p>IGP Luxe</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt4prodlp/banners/chaitra_navratri_d_polaroid_5_1773815936102">
<p>Chaitra Navratri</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt4prodlp/banners/freshlyarrivedcakes_d_polaroid_5_1767003899611">
<p>Freshly Arrived Cakes</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt4prodlp/banners/photo_frames_d_polaroid_5_1772101733159">
<p>Photo Frames & Gifts</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt4prodlp/banners/balloon_decor_d_polaroid_5_1773319288914">
<p>Balloon Decor</p>
</div>

<div class="category-item">
<img src="https://cdnnew.igp.com/f_auto,q_auto:eco,t_pnopt4prodlp/banners/premium_gourmet_delights_d_polaroid_5_1758694777710">
<p>Premium Gourmet Delights</p>
</div>

</div>

</body>
</html>
       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

       

        <!-- category area end-->


                <!-- category area -->
        <!-- <div class="category-area py-80">  -->
            <!-- <div class="container"> -->
                <!-- <div class="category-slider owl-carousel owl-theme"> -->
                    <!-- ?php -->
<!-- // $sql = "SELECT * FROM category_master"; -->
<!-- // $result = mysqli_query($con, $sql); -->
<!-- // while($row = mysqli_fetch_assoc($result)){ -->
<!-- // ?> -->
                    <!--<div class="category-item"> -->
                        <!-- <a href="#"> -->
                            <!-- <div class="category-info"> -->
                                <!-- <div class="icon"> -->
                                    <!-- ?php -->
                                        <!-- // echo "<img src='1.webp  ".$row['pimg']."' alt=''>";     -->
<!-- // ?> -->
                                    <!-- <!-</div --> 
                                <!-- <div class="content"> -->
                                    <!-- <h4>?php echo $row['cname']; ?></h4> -->
                                    <!-- <p>30 Items</p> -->
                                <!-- </div> -->
                            <!-- </div> -->
                        <!-- </a> -->
                    <!-- </div> -->
                                <!-- ?php } ?> -->
<!--  -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
        <!-- category area end -->


            <!-- category area -->
             

        <!-- trending item -->
        <div class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Trending Items</h2>
                            <a href="#">View More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-wrap item-2 wow fadeInUp" data-wow-delay=".25s">
                    <div class="product-slider owl-carousel owl-theme">
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type new">New</span>
                                <a href="shop-single.php"><img src="assets/img/product/01.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>Rs.270.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type hot">Hot</span>
                                <a href="shop-single.php"><img src="assets/img/product/02.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>Rs.280.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type oos">Out Of Stock</span>
                                <a href="shop-single.php"><img src="assets/img/product/03.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>Rs.300.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type discount">10% Off</span>
                                <a href="shop-single.php"><img src="assets/img/product/04.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.250.00</del>
                                        <span>Rs.190.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="shop-single.php"><img src="assets/img/product/05.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>Rs.250.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="shop-single.php"><img src="assets/img/product/06.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>Rs.250.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trending item end -->


        <!-- mid banner -->
        <div class="mid-banner py-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-6 wow fadeInDown" data-wow-delay=".25s">
                        <div class="banner-item">
                            <img src="assets/img/banner/mid-banner-1.jpg" alt="">
                            <div class="banner-content">
                                <p>Single Gift</p>
                                <h3>Get Single Gift Sale <br> Up To <span>40%</span> Off</h3>
                                <a href="#" class="theme-btn theme-btn2">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                        <div class="banner-item">
                            <img src="assets/img/banner/mid-banner-2.jpg" alt="">
                            <div class="banner-content">
                                <p>Occasion Gift</p>
                                <h3>Get Occasion Gift Sale <br> Up To <span>50%</span> Off</h3>
                                <a href="#" class="theme-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mid banner end -->


        <!-- feature area -->
        <div class="feature-area pb-100">
            <div class="container wow fadeInUp" data-wow-delay=".25s">
                <div class="feature-wrap">
                    <div class="row g-0">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-truck"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Free Delivery</h4>
                                    <p>Orders Over $120</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-sync"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Get Refund</h4>
                                    <p>Within 30 Days Returns</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-wallet"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Safe Payment</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>24/7 Support</h4>
                                    <p>Feel Free To Call Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- popular item -->
        <div class="product-area pb-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="small-banner mt-2 wow fadeInLeft" data-wow-delay=".25s">
                            <div class="banner-item">
                                <img src="assets/img/banner/side-banner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                                <div class="site-heading-inline item-tab">
                                    <h2 class="site-title">Popular Items</h2>
                                    <ul class="nav nav-pills" id="item-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="item-tab1" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab1" type="button" role="tab"
                                                aria-controls="pill-item-tab1" aria-selected="true">Home & Living</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="item-tab2" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab2" type="button" role="tab"
                                                aria-controls="pill-item-tab2" aria-selected="false">Garment Care</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="item-tab3" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab3" type="button" role="tab"
                                                aria-controls="pill-item-tab3" aria-selected="false">Gifts Box</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="item-tab4" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab4" type="button" role="tab"
                                                aria-controls="pill-item-tab4" aria-selected="false">Occasion Gifts</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                            <div class="tab-pane show active" id="pill-item-tab1" role="tabpanel" aria-labelledby="item-tab1"
                                tabindex="0">
                                <div class="row g-4 item-2">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type new">New</span>
                                                <a href="shop-single.php"><img src="assets/img/product/14.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.265.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type hot">Hot</span>
                                                <a href="shop-single.php"><img src="assets/img/product/07.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.278.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type oos">Out Of Stock</span>
                                                <a href="shop-single.php"><img src="assets/img/product/24.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.345.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type discount">10% Off</span>
                                                <a href="shop-single.php"><img src="assets/img/product/15.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <del>Rs.250.00</del>
                                                        <span>Rs.190.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pill-item-tab2" role="tabpanel" aria-labelledby="item-tab2" tabindex="0">
                                <div class="row g-4 item-2">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type new">New</span>
                                                <a href="shop-single.php"><img src="assets/img/product/15.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.320.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type hot">Hot</span>
                                                <a href="shop-single.php"><img src="assets/img/product/16.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.350.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type oos">Out Of Stock</span>
                                                <a href="shop-single.php"><img src="assets/img/product/17.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.360.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type discount">10% Off</span>
                                                <a href="shop-single.php"><img src="assets/img/product/18.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <del>Rs.450.00</del>
                                                        <span>Rs.290.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pill-item-tab3" role="tabpanel" aria-labelledby="item-tab3" tabindex="0">
                                <div class="row g-4 item-2">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type new">New</span>
                                                <a href="shop-single.php"><img src="assets/img/product/19.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.450.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type hot">Hot</span>
                                                <a href="shop-single.php"><img src="assets/img/product/20.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.265.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type oos">Out Of Stock</span>
                                                <a href="shop-single.php"><img src="assets/img/product/21.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.245.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type discount">10% Off</span>
                                                <a href="shop-single.php"><img src="assets/img/product/22.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <del>Rs.450.00</del>
                                                        <span>Rs.290.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pill-item-tab4" role="tabpanel" aria-labelledby="item-tab4" tabindex="0">
                                <div class="row g-4 item-2">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type new">New</span>
                                                <a href="shop-single.php"><img src="assets/img/product/24.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.750.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type hot">Hot</span>
                                                <a href="shop-single.php"><img src="assets/img/product/25.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.550.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type oos">Out Of Stock</span>
                                                <a href="shop-single.php"><img src="assets/img/product/26.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rs.650.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <span class="type discount">10% Off</span>
                                                <a href="shop-single.php"><img src="assets/img/product/27.png" alt=""></a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                            data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Quick View"><i class="far fa-eye"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                        <a href="#" data-bs-placement="right" data-tooltip="tooltip"
                                                            title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <del>Rs.450.00</del>
                                                        <span>Rs.290.00</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                            data-tooltip="tooltip" title="Add To Cart">
                                                            <i class="far fa-shopping-bag"></i>
                                                </button>
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
        <!-- popular item end -->


        <!-- deal area -->
        <div class="deal-area2 bg pt-20 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Best Deals For <span>This Week</span></h2>
                            <div class="deal-countdown">
                                <div class="countdown" data-countdown="2025/12/30"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
                    <div class="product-slider owl-carousel owl-theme">
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type new">New</span>
                                <a href="shop-single.php"><img src="assets/img/product/01.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.650.00</del>
                                        <span>Rs.490.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type hot">Hot</span>
                                <a href="shop-single.php"><img src="assets/img/product/02.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.650.00</del>
                                        <span>Rs.490.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type oos">Out Of Stock</span>
                                <a href="shop-single.php"><img src="assets/img/product/03.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.650.00</del>
                                        <span>Rs.490.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type discount">10% Off</span>
                                <a href="shop-single.php"><img src="assets/img/product/04.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.650.00</del>
                                        <span>Rs.490.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="shop-single.php"><img src="assets/img/product/05.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.650.00</del>
                                        <span>Rs.490.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="shop-single.php"><img src="assets/img/product/06.png" alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                                class="far fa-arrows-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.php">Special Gift Box</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <del>Rs.650.00</del>
                                        <span>Rs.490.00</span>
                                    </div>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                            data-tooltip="tooltip" title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- deal area end -->


        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <div class="img-1">
                                    <img src="assets/img/about/01.jpg" alt="">
                                </div>
                                <img class="img-2" src="assets/img/about/02.jpg" alt="">
                                <img class="img-3" src="assets/img/about/03.jpg" alt="">
                            </div>
                            <div class="about-experience">
                                <div class="about-experience-icon">
                                    <img src="assets/img/icon/experience.svg" alt="">
                                </div>
                                <b>30 Years Of <br> Experience</b>
                            </div>
                            <div class="about-shape">
                                <img src="assets/img/shape/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="flaticon-drive"></i> About Us
                                </span>
                                <h2 class="site-title">
                                    We Provide Best And Quality <span>Gifts Box</span> Product For You
                                </h2>
                            </div>
                            <p>
                                We are standard text ever since the when an unknown printer took a galley of type and
                                scrambled it to make a type
                                specimen book. It has survived not only five but also the leap into electronic remaining
                                essentially by injected humour unchanged.
                            </p>
                            <div class="about-list">
                                <ul>
                                    <li><i class="fas fa-check-double"></i> Streamlined Shipping Experience</li>
                                    <li><i class="fas fa-check-double"></i> Affordable Modern Design</li>
                                    <li><i class="fas fa-check-double"></i> Competitive Price & Easy To Shop</li>
                                    <li><i class="fas fa-check-double"></i> We Made Awesome Products</li>
                                </ul>
                            </div>
                            <a href="contact.php" class="theme-btn mt-4">Discover More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- big banner -->
        <div class="big-banner">
            <div class="container wow fadeInUp" data-wow-delay=".25s">
                <div class="banner-wrap" style="background-image: url(assets/img/banner/big-banner.jpg);">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="banner-content">
                                <div class="banner-info">
                                    <h6>Mega Collections</h6>
                                    <h2>Huge Sale Up To <span>40%</span> Off</h2>
                                    <p>at our outlet stores</p>
                                </div>
                                <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- big banner end -->


        <!-- gallery-area -->
        <div class="gallery-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Gallery</span>
                            <h2 class="site-title">Let's Check Our Photo <span>Gallery</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 popup-gallery">
                    <div class="col-md-4 col-lg-3">
                        <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/01.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/01.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/02.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/02.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/03.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/03.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/04.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/04.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/05.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/05.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/06.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/06.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/07.jpg" alt="">
                                <a class="popup-img gallery-link" href="assets/img/gallery/07.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-area end -->


        <!-- testimonial area -->
        <div class="testimonial-area bg ts-bg py-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Testimonials</span>
                            <h2 class="site-title">What Our Client <span>Say's</span> About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                    <div class="testimonial-item">
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/01.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Sylvia H Green</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of long passages available but the content majority have
                                suffered to the editor page when looking at its layout alteration in some injected.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/02.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Gordo Novak</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of long passages available but the content majority have
                                suffered to the editor page when looking at its layout alteration in some injected.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/03.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Reid E Butt</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of long passages available but the content majority have
                                suffered to the editor page when looking at its layout alteration in some injected.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/04.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Parker Jimenez</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of long passages available but the content majority have
                                suffered to the editor page when looking at its layout alteration in some injected.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/05.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Heruli Nez</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of long passages available but the content majority have
                                suffered to the editor page when looking at its layout alteration in some injected.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->


        <!-- blog area -->
        <div class="blog-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Blog</span>
                            <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/01.jpg" alt="Thumb">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 12, 2024</span>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variations passage available majority suffered.</a>
                                </h4>
                                <p>There are many variations available the majority have suffered alteration randomised
                                    words.</p>
                                <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/02.jpg" alt="Thumb">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 15, 2024</span>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 3.1k Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">Contrary to popular belief making simply random piece latin.</a>
                                </h4>
                                <p>There are many variations available the majority have suffered alteration randomised
                                    words.</p>
                                <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/03.jpg" alt="Thumb">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 18, 2024</span>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 1.6k Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#"> If you are going use passage you need sure there middle text.</a>
                                </h4>
                                <p>There are many variations available the majority have suffered alteration randomised
                                    words.</p>
                                <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->


        <!-- newsletter area -->
        <div class="newsletter-area pb-100">
            <div class="container wow fadeInUp" data-wow-delay=".25s">
                <div class="newsletter-wrap">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="newsletter-content">
                                <h3>Get <span>20%</span> Off Discount Coupon</h3>
                                <p>By Subscribe Our Newsletter</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email Address">
                                        <button class="theme-btn" type="submit">
                                            Subscribe <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->

    </main>
<?php
include('fff.php');
?>