<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="author" content="freelancerhelaluddin100">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Food - Ordaring HTML Web Template">
    <meta name="keywords" content="html template, food, food ordaring, echomarch, food revewring,">
    <title>Food - Ordaring HTML Web Template</title>
    <!-- ====================Favicon============ -->
    <link rel="icon" sizes="32x32" href="img/favicon.png">
    <!-- ==================LINK ALL STYLE ARE HERE=============== -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/font/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/smoothproducts.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/timePic.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
   

</head>

<body>

    <div class='spinner__wrapper' id="spinner__wrapper">
        <img src="{{ asset('frontend') }}/img/Pizza spinning.gif" alt="" class="spiner">
    </div>
    <!-- ==========================Preloder============= -->

    <div class="weapper">
        <!-- ======================================NAVIGATION SECTION================== -->
        <header>
            <nav>
                <div class="header-part header-reduce sticky">
                    <!-- ===============TOP HEADER START============ -->
                    <div class="header-top">
                        <div class="head-container">
                            <div class="header-top-inner">
                                <div class="header-top-left">
                                    <a href="#" class="top-cell"><img src="{{ asset('frontend') }}/img/icon/fon.png" alt="Image not Found"> <span>+1234567890</span></a>
                                    <a href="#" class="top-email"><span>hellokhaddo@khaddo.com</span></a>
                                </div>
                                <!-- header-top left end -->
                                <div class="header-top-right">
                                    <div class="social-top">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="language-menu">
                                        <a href="#" class="current-lang" id="lanId">English <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                        <ul class="language">
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Turkish</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Nederlands</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Français</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Deutsch</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Italiano</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- header-top-right end -->
                            </div>
                            <!-- head-top-inned end -->
                        </div>
                        <!-- head-container end -->
                    </div>
                    <!-- ===============TOP HEADER END============ -->

                    <!-- =================MAIN NAVIGATION START============ -->
                    <div class="header-bottom">
                        <div class="container-fluid custom-padding">
                            <div class="main-nav">
                                <!-- left menu -->
                                <div class="left-menu">
                                    <!-- logo start -->
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ asset('frontend') }}/img/logo.png" alt="Image not Found">
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                    <div class="menu-main">
                                        <ul>
                                            <li class="has-child"><a href="index.html">Home</a></li>
                                            <li class="mega-menu"><a href="#">Menu</a></li>
                                            <li class="has-child"><a href="">Shop</a></li>
                                            <li class="has-child"><a href="#">Pages</a>
                                                <ul class="drop-nav">
                                                    <li><a href="index.html"><i class="fa fa-angle-right"></i> Home Page</a></li>
                                                    <li><a href="single_product.html"><i class="fa fa-angle-right"></i> Single Product</a></li>
                                                    <li><a href="cat-by-product.html"><i class="fa fa-angle-right"></i> Cat By Product</a></li>
                                                    <li><a href="blog.html"><i class="fa fa-angle-right"></i> Blog</a></li>
                                                    <li><a href="blog-single.html"><i class="fa fa-angle-right"></i> Blog Single Post</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right"></i> Checkout</a></li>
                                                    <li><a href="cart.html"><i class="fa fa-angle-right"></i> Cart</a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-angle-right"></i> Wishlist</a></li>
                                                    <li><a href="profile.html"><i class="fa fa-angle-right"></i> Profile</a></li>
                                                    <li><a href="contact.html"><i class="fa fa-angle-right"></i> Contact</a></li>
                                                    <li><a href="login.html"><i class="fa fa-angle-right"></i> Login $ Ragistar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-child"><a href="blog.html">Blog</a></li>
                                            <li class="has-child"><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <!-- main-menu end -->
                                </div>
                                <!-- left menu end  -->
                                <!-- search bar -->
                                <div class="search-part">
                                    <div class="search-box">
                                        <form action="">
                                            <input type="text" name="txt" placeholder="Search">
                                            <input type="submit" name="submit" value=" ">
                                        </form>
                                    </div>
                                </div>
                                <!-- ----------search input end------- -->
                                <!-- header right section start -->
                                <div class="header-info">
                                    <div class="header-info-inner">
                                        <div class="book-table header-collect book-md">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#bookatable"><img src="{{ asset('frontend') }}/img/icon/chair.svg" alt="Image not Found"><span class="count-text">Book a Table</span></a>
                                        </div>

                                        <div class="shop-cart header-collect">
                                            <a href="#"><img src="{{ asset('frontend') }}/img/icon/icon-basket.png" alt="Image not Found"> 2 <span class="count-text"> items - $ 20.89</span></a>
                                            <div class="cart-wrap">
                                                <div class="cart-blog">
                                                    <div class="cart-item">
                                                        <div class="cart-item-left">
                                                            <img src="{{ asset('frontend') }}/img/product/7-600x600.png" alt="Image not Found" class="img-fluid">
                                                        </div>
                                                        <div class="cart-item-right">
                                                            <h6>Caramel Chesse Cake</h6>
                                                            <span>$ 14.00</span>
                                                        </div>
                                                        <a href=""><span class="delete-icon"></span></a>
                                                    </div>
                                                    <div class="cart-item">
                                                        <div class="cart-item-left">
                                                            <img src="{{ asset('frontend') }}/img/product/pizza_2.png" alt="Image not Found" class="img-fluid">
                                                        </div>
                                                        <div class="cart-item-right">
                                                            <h6>Caramel Chesse Cake</h6>
                                                            <span>$ 14.00</span>
                                                        </div>
                                                        <a href=""><span class="delete-icon"></span></a>
                                                    </div>
                                                    <div class="subtotal">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <h6>Subtotal :</h6>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <span>$ 140.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="cart-btn">
                                                        <a href="#" class="btn-black view">VIEW ALL</a>
                                                        <a href="#" class="btn-main checkout">CHECK OUT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- header-info end -->
                                <div class="menu-icon">
                                    <a href="#" class="hambarger">
                                        <span class="bar-1"></span>
                                        <span class="bar-2"></span>
                                        <span class="bar-3"></span>
                                    </a>
                                </div>
                                <!-- mobile menu icon end -->
                            </div>
                            <!-- main nav end -->
                        </div>
                        <!-- container end -->
                    </div>
                    <!-- =================MAIN NAVIGATION END============ -->
                    <!-- ============MOBILE NAVIGATION ========= -->
                    <div class="footer__nav">
                        <ul class="menus">
                            <div class="slider-menu"></div>
                            <li class="">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#M-cart">
                                    <div class="menu-dev">
                                        <img src="{{ asset('frontend') }}/img/icon/shopping-cart.svg" class="mobile-nav-icon" alt="">
                                    </div> <span>Cart</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#M-category">
                                    <div class="menu-dev">
                                        <img src="{{ asset('frontend') }}/img/icon/menu.svg" class="mobile-nav-icon" alt="">
                                    </div> <span>Category</span>
                                </a>
                            </li>
                            <li class="active-icon">
                                <a href="#">
                                    <div class="menu-dev">
                                        <img src="{{ asset('frontend') }}/img/icon/home.svg" class="mobile-nav-icon" alt="">
                                    </div> <span>Home</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#bookatable">
                                    <div class="menu-dev">
                                        <img src="{{ asset('frontend') }}/img/icon/chair.svg" class="mobile-nav-icon" alt="">
                                    </div> <span>Wishlist</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="profile.html">
                                    <div class="menu-dev">
                                        <img src="{{ asset('frontend') }}/img/icon/user.svg" class="mobile-nav-icon" alt="">
                                    </div>
                                    <span>Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- ============MOBILE NAVIGATION END========= -->
                </div>
                <!-- header-part end -->
            </nav>
        </header>

        <!-- =============mobile nav model==== -->
        <!-- ======cart model====== -->
        <div class="modal fade" id="M-cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>

                    <div class="modal-body">
                        <div class="cart-blog mobile-cart-model">
                            <div class="cart-item">
                                <div class="cart-item-left">
                                    <img src="{{ asset('frontend') }}/img/product/7-600x600.png" alt="Image not Found" class="img-fluid">
                                </div>
                                <div class="cart-item-right">
                                    <h6>Caramel Chesse Cake</h6>
                                    <span>$ 14.00</span>
                                </div>
                                <a href=""><span class="delete-icon"></span></a>
                            </div>
                            <div class="cart-item">
                                <div class="cart-item-left">
                                    <img src="{{ asset('frontend') }}/img/product/7-600x600.png" alt="Image not Found" class="img-fluid">
                                </div>
                                <div class="cart-item-right">
                                    <h6>Caramel Chesse Cake</h6>
                                    <span>$ 14.00</span>
                                </div>
                                <a href=""><span class="delete-icon"></span></a>
                            </div>
                            <div class="cart-item">
                                <div class="cart-item-left">
                                    <img src="{{ asset('frontend') }}/img/product/7-600x600.png" alt="Image not Found" class="img-fluid">
                                </div>
                                <div class="cart-item-right">
                                    <h6>Caramel Chesse Cake</h6>
                                    <span>$ 14.00</span>
                                </div>
                                <a href=""><span class="delete-icon"></span></a>
                            </div>
                            <div class="cart-item">
                                <div class="cart-item-left">
                                    <img src="{{ asset('frontend') }}/img/product/pizza_2.png" alt="Image not Found" class="img-fluid">
                                </div>
                                <div class="cart-item-right">
                                    <h6>Caramel Chesse Cake</h6>
                                    <span>$ 14.00</span>
                                </div>
                                <a href=""><span class="delete-icon"></span></a>
                            </div>
                            <div class="subtotal">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h6>Subtotal :</h6>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <span>$ 140.00</span>
                                </div>
                            </div>
                            <div class="cart-btn">
                                <a href="#" class="btn-black view">VIEW ALL</a>
                                <a href="#" class="btn-main checkout">CHECK OUT</a>
                            </div>
                        </div>
                    </div>

                    <div class="success-wrapper"></div>
                </div>
            </div>
        </div>
        <!-- =======category model==== -->
        <div class="modal fade" id="M-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="cart-blog mobile-cart-model">
                            <div class="category-modal">
                                <ul class="category-list-m">
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-11.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category3.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-22.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-33.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-44.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-55.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category3.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category5.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category7.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-11.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-22.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="" class="category-link">
                                            <div class="cat-img"><img src="{{ asset('frontend') }}/img/category/category-33.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-btn">
                                <a href="#" class="btn-black view">VIEW ALL category</a>
                            </div>
                        </div>
                    </div>
                    <div class="success-wrapper"></div>
                </div>
            </div>
        </div>
        <!-- =============mobile nav model end==== -->
        <!-- ======================================NAVIGATION SECTION END================== -->
        <!-- Modal -->
        <div class="modal fade" id="bookatable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="fs-wrapper">
                            <form class="fs-form" method="post">
                                <input type="hidden" name="action" value="flex-reservations-submit">
                                <input type="hidden" name="nonce" value="79835a9b53">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                                        <h2 class="center title ui-field-title">Reservation</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-left">
                                        <label for="timepiker">Time:</label>
                                        <input type="text" class="input-field  timepicker" placeholder="Time">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class=" number">
                                            <label for="pepole">Number Of Pepole:</label>
                                            <input type="number" class="input-field " required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-left">
                                        <div class=" date">
                                            <label for="date">Date:</label>
                                            <input type="date" class="input-field field-date" name="fs_date" required="required">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="text">
                                            <label for="phone">Phone Number:</label>
                                            <input type="text" class="input-field field-text" name="fs_phone" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                                        <div class="text">
                                            <label for="name">Full Name:</label>
                                            <input type="text" class="input-field field-text" name="fs_name" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                                        <div class=" textarea">
                                            <label for="details">Details:</label>
                                            <textarea class="input-field field-textarea" name="fs_message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submin-btn">
                                    <input type="submit" name="fs_submit" class="btn-main" value="BOOK A TABLE">

                                </div>
                        </div>
                    </div>
                    </form>
                    <div class="success-wrapper"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- ==========================Book A Table  form====================== -->

    <!-- =======================================BOOK A TABLE END================ -->
    <!-- =======================================BODY SECTION START================ -->
    <div class="body-wraper">
        <div class="body-inner">
            <!-- ===============================SLIDER SECTION START============== -->
            <section>
                <div class="slider">
                    <div class="slider-bg">
                        <div class="slider-item">
                            <div class="image">
                                <!-- Place your baner backgorund image -->
                                <img src="{{ asset('frontend') }}/img/baner/banner.jpg" alt="Image not Found" class="img-fluid">
                            </div>
                            <div class="love-icon">
                                <!-- Place your small background image here-->
                                <img src="{{ asset('frontend') }}/img/icon/banner_image_1.png" class="love-1 object img-fluid" data-value="5" alt="Image not Found">
                                <img src="{{ asset('frontend') }}/img/icon/banner_image_3.png" class="love-3 object img-fluid" data-value="-3" alt="Image not Found">
                                <img src="{{ asset('frontend') }}/img/icon/welcome_image.png" class="love-2 object img-fluid" data-value="-8" alt="Image not Found">
                            </div>
                            <div class="slider-focus-img">
                                <div class="slider-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-sec">
                                                    <div class="sl-content">
                                                        <h1>UNLIMITED MEDIUM <span>PIZZAS</span></h1>
                                                        <h2>Medium 2-topping* pizza</h2>
                                                        <p>*Additional charge for premium toppings. Minimum of 2 required</p>

                                                        <div class="sl-bt-sec">
                                                            <a href="" class="btn-main">order now</a>

                                                            <p class="n-price">$12.99 <span class="old-pc">$19.99</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ban-food-img">
                                                <!-- Please your baner font image -->
                                                <img src="{{ asset('frontend') }}/img/baner/h1_pizza.png" class="main-img object img-fluid" data-value="4" alt="Image not Found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item end -->
                    </div>
                    <!-- slider bg end -->
                </div>
                <!-- slider end  -->
            </section>
            <!-- ===============================SLIDER SECTION START============== -->
            <!-- ===============================CATEGORY SLIDER=================== -->
            <section>
                <div class="categroy-sec">
                    <div class="category-inner">
                        <div class="container-fluid">
                            <div class="baner-slider owl-carousel owl-theme">
                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category-11.png " alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>Combo</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category-22.png" alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>kids menus</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category-33.png " alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>pizza</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category-44.png " alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>box meals</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category-55.png" alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>burger</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category3.png " alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>chicken</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category5.png " alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>sauces</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cat-item-inner ">
                                        <a href="" class="cat-link ">
                                            <!-- Please your category image here -->
                                            <img src="{{ asset('frontend') }}/img/category/category7.png" alt="Image not Found" class="category-img img-fluid">
                                            <div class="cat-name">
                                                <p>Drinks</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- banar slider end -->
                        </div>
                        <!-- container-fluid end -->
                    </div>
                    <!-- category inner end -->
                </div>
                <!-- catagory sec end -->
            </section>
            <!-- ===============================CATEGORY SLIDER END=============== -->
            <!-- =================================BANNER SECTION START============= -->
            <section>
                <div class="banner-content">
                    <div class="container-fluid">
                        <div class="banner-sec-bg custom-padding">
                            <div class="banner-inner">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                        <div class="baner">
                                            <div class="baner-text">
                                                <h3>Organic Food</h3>
                                                <p>100% Pure Natural Food </p>
                                                <em class="shop-now"><a href="">Shop Now</a></em>
                                            </div>
                                            <div class="banar-image">
                                                <!-- Banar image are insert here -->
                                                <img src="{{ asset('frontend') }}/img/product/gallery_image1-min-1-768x768.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                        <div class="baner">
                                            <div class="baner-text">
                                                <h3>Fresh First Food</h3>
                                                <p>100% Pure Natural Food </p>
                                                <em class="shop-now"><a href="">Shop Now</a></em>
                                            </div>
                                            <div class="banar-image">
                                                <!-- Banar image are insert here -->
                                                <img src="{{ asset('frontend') }}/img/product/gallery_image5-min-768x768.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                        <div class="baner">
                                            <div class="baner-text">
                                                <h3>Organic Food</h3>
                                                <p>100% Pure Natural Food </p>
                                                <em class="shop-now"><a href="">Shop Now</a></em>
                                            </div>
                                            <div class="banar-image">
                                                <!-- Banar image are insert here -->
                                                <img src="{{ asset('frontend') }}/img/product/gallery_image2-min-1-768x768.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <!-- Banner Inner end -->
                        </div>
                        <!-- Banner Sec Bg end  -->
                    </div>
                    <!-- Container end -->
                </div>
                <!-- Banner Content -->
            </section>
            <!-- =================================BANNER SECTION END============= -->
            <!-- =================================TOP RECIPES SECTION START============= -->
            <section>
                <div class="top-recipes">
                    <div class="top-recipes-bg">
                        <div class="container-fluid custom-padding">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sm-baner">
                                        <a href="">
                                            <img src="{{ asset('frontend') }}/img/baner/slice-crispy-pizza-with-meat-cheese.jpg" alt="Baner Image not Found" class="sm-baner-image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="paralex">
                                        <img src="{{ asset('frontend') }}/img/icon/banner_image_2.png" alt="" class="icon-plx" id="top-recipes-top">
                                        <img src="{{ asset('frontend') }}/img/icon/—Pngtree—fast food chicken drumstick fried_5746705.png" alt="" class="icon-plx-2" id="top-recipes-left">
                                    </div>
                                    <div class="top-recipes-inner">
                                        <div class="recipes-head">
                                            <h2>Top Recipes</h2>
                                            <a href="">See All <span class="fas fa-long-arrow-alt-right"></span></a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="product-list-inner">
                                                    <div class="recipes-image">
                                                        <img src="{{ asset('frontend') }}/img/product/img57.png" alt="">
                                                    </div>
                                                    <div class="recipes-details">
                                                        <a href="">
                                                            <h5>BBQ Chicken Breast</h5>
                                                        </a>
                                                        <div class="cat-name-top-recipes">Pasta</div>
                                                        <p class="price"><del>$12.60</del> $8.00</p>

                                                        <div class="buy-sec">
                                                            <ul class="buy-inner">
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="product-list-inner">
                                                    <div class="recipes-image">
                                                        <img src="{{ asset('frontend') }}/img/product/img63.png" alt="">
                                                    </div>
                                                    <div class="recipes-details">
                                                        <a href="">
                                                            <h5>Bacon Burger</h5>
                                                        </a>
                                                        <div class="cat-name-top-recipes">Burger</div>
                                                        <p class="price">$8.00</p>
                                                        <div class="buy-sec">
                                                            <ul class="buy-inner">
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="product-list-inner">
                                                    <div class="recipes-image">
                                                        <img src="{{ asset('frontend') }}/img/product/meat-2.png" alt="">
                                                    </div>
                                                    <div class="recipes-details">
                                                        <a href="">
                                                            <h5>Bluebarry Shake</h5>
                                                        </a>
                                                        <div class="cat-name-top-recipes">Cold Drinks</div>
                                                        <p class="price">$8.00</p>
                                                        <div class="buy-sec">
                                                            <ul class="buy-inner">
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="product-list-inner">
                                                    <div class="recipes-image">
                                                        <img src="{{ asset('frontend') }}/img/product/pizza_1.png" alt="">
                                                    </div>
                                                    <div class="recipes-details">
                                                        <a href="">
                                                            <h5>BBQ Chicken Breast</h5>
                                                        </a>
                                                        <div class="cat-name-top-recipes">Pasta</div>
                                                        <p class="price"><del>$12.60</del> $8.00</p>
                                                        <div class="buy-sec">
                                                            <ul class="buy-inner">
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="product-list-inner">
                                                    <div class="recipes-image">
                                                        <img src="{{ asset('frontend') }}/img/product/img57.png" alt="">
                                                    </div>
                                                    <div class="recipes-details">
                                                        <a href="">
                                                            <h5>BBQ Chicken Breast</h5>
                                                        </a>
                                                        <div class="cat-name-top-recipes">Pasta</div>
                                                        <p class="price"><del>$12.60</del> $8.00</p>
                                                        <div class="buy-sec">
                                                            <ul class="buy-inner">
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="product-list-inner">
                                                    <div class="recipes-image">
                                                        <img src="{{ asset('frontend') }}/img/product/img57.png" alt="">
                                                    </div>
                                                    <div class="recipes-details">
                                                        <a href="">
                                                            <h5>BBQ Chicken Breast</h5>
                                                        </a>
                                                        <div class="cat-name-top-recipes">Pasta</div>
                                                        <p class="price"><del>$12.60</del> $8.00</p>
                                                        <div class="buy-sec">
                                                            <ul class="buy-inner">
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- row end -->
                        </div>
                        <!-- container-fluid end-->
                    </div>
                    <!-- top recipes-bg end-->
                </div>
                <!-- top-recipes end  -->
            </section>
            <!-- =================================TOP RECIPES SECTION END============= -->
            <!-- =================================DISCOUNT SECTION START============= -->
            <section>
                <div class="discount-bg">
                    <div class="container-fluid custom-padding">
                        <div class="discount-inner">
                            <div class="row">
                                <div class="col-md-6 text-section">
                                    <div class="timer-sec">
                                        <h1 class="dis-head">Special Discount For All Food Products</h1>
                                        <p class="dis-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>

                                        <div class="timer">
                                            <ul id="example">
                                                <li>
                                                    <h1 class="days">00</h1>
                                                    <p class="days_text">Days</p>
                                                </li>
                                                <li class="seperator">:</li>
                                                <li>
                                                    <h1 class="hours">00</h1>
                                                    <p class="hours_text">Hours</p>
                                                </li>
                                                <li class="seperator">:</li>
                                                <li>
                                                    <h1 class="minutes">00</h1>
                                                    <p class="minutes_text">Minutes</p>
                                                </li>
                                                <li class="seperator">:</li>
                                                <li>
                                                    <h1 class="seconds">00</h1>
                                                    <p class="seconds_text">Seconds</p>
                                                </li>
                                            </ul>

                                            <a href="" class="btn-main">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 discount-img-sec">
                                    <img src="{{ asset('frontend') }}/img/product/barger.png" alt="" class="discount-img">
                                </div>
                            </div>
                        </div>
                        <!-- discount inner end -->
                    </div>
                    <!-- container end  -->
                </div>
                <!-- discount bg end  -->
            </section>
            <!-- =================================DISCOUNT SECTION END============= -->
            <!-- =================================PRODUCT SECTION START============= -->
            <section>
                <div class="product-bg">
                    <div class="paralex">
                        <img src="{{ asset('frontend') }}/img/icon/shape33.png" alt="" class="icon-plx-4" id="paralex-pd">
                        <img src="{{ asset('frontend') }}/img/icon/shape29.png" alt="" class="icon-plx-5" id="paralex-pd-there">
                        <img src="{{ asset('frontend') }}/img/icon/shape26.png" alt="" class="icon-plx-6" id="paralex-pd-for">
                        <img src="{{ asset('frontend') }}/img/icon/shape32.png" alt="" class="icon-plx-3" id="paralex-pd-tow">
                    </div>
                    <div class="container-fluid custom-padding">
                        <div class="row">
                            <div class="section-head">
                                <h2>All Product</h2>
                            </div>
                        </div>
                        <!-- section  heading row end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="portfolio__menu">
                                    <li><button class="menu active" type="button" data-filter="all">all Product</button></li>
                                    <li><button class="menu" type="button" data-filter=".pizza">Pizza</button></li>
                                    <li><button class="menu" type="button" data-filter=".sushi">sushi</button></li>
                                    <li><button class="menu" type="button" data-filter=".salat">salats</button></li>
                                    <li><button class="menu" type="button" data-filter=".burger">burger</button></li>
                                    <li><button class="menu" type="button" data-filter=".dersest">Dersest</button></li>
                                    <li><button class="menu" type="button" data-filter=".first-fd">first food</button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- product category row end -->

                        <div class="product">
                            <div class="row product-menu">
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix sushi">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/4-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>BBQ Chicken Breast</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="sp-loading"><img src="{{ asset('frontend') }}/img/sp-loading.gif" alt=""><br>LOADING IMAGES</div>
                                                            <div class="sp-wrap">
                                                                <a href="img/product/11.png"><img src="{{ asset('frontend') }}/img/product/11.png" alt=""></a>
                                                                <a href="img/product/4-600x600.png"><img src="{{ asset('frontend') }}/img/product/4-600x600.png" alt=""></a>
                                                                <a href="img/product/6-600x600.png"><img src="{{ asset('frontend') }}/img/product/6-600x600.png" alt=""></a>
                                                                <a href="img/product/7-600x600.png"><img src="{{ asset('frontend') }}/img/product/7-600x600.png" alt=""></a>
                                                                <a href="img/product/8-600x600.png"><img src="{{ asset('frontend') }}/img/product/8-600x600.png" alt=""></a>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="product-details">
                                                                <h2 class="product-name-single">
                                                                    Organic Pizza whth vasitable.........
                                                                </h2>
                                                                <div class="pr-rt">
                                                                    <p class="price-single">$32</p>
                                                                    <div class="rating">
                                                                        <ul>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="far fa-star"></span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <p class="product-descriotion">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                                                of classical Latin literature from 45 BC, making it over 2000 years old.
                                                            </p>
                                                            <hr>
                                                            <div class="cart_extra">
                                                                <div class="cart-product-quantity">
                                                                    <div class="quantity">
                                                                        <button class="qty-count qty-count--minus minus" data-action="minus" type="button">-</button>
                                                                        <input class="product-qty qty" type="text" name="quantity" min="0" max="10" value="1" title="Qty" size="4">
                                                                        <button class="qty-count qty-count--add plus" data-action="add" type="button">+</button>

                                                                    </div>

                                                                </div>
                                                                <div class="cart_btn">
                                                                    <button class="btn-main" type="button">Add to cart</button>
                                                                    <a class="add_wishlist" href="#"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <ul class="product-meta list_none">
                                                                <li>Category: <a href="#">Fresh Fruits</a>, <a href="#">Jiuce</a></li>
                                                                <li>Tags: <a href="#" rel="tag">Fruits</a>, <a href="#" rel="tag">Natural</a>, <a href="#" rel="tag">Organic</a> </li>
                                                            </ul>
                                                            <div class="lh-social-share d-flex">
                                                                <p class="share">Share:</p>
                                                                <ul class="social-ul d-flex">
                                                                    <li><a href="" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-pinterest"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="brand-wrap">
                                                                <h5 class="title-brand">Guaranteed Safe Checkout</h5>
                                                                <img src="{{ asset('frontend') }}/https://demo2wpopal.b-cdn.net/poco/wp-content/uploads/2020/08/trust-symbols.png" data-src="" class="image-responsive lazyloaded">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix salat">
                                    <div class="product-inner pizza">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/6-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Quattro Formaggi</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix salat">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/7-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Breakfast Complete</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix burger">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/8-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Eggs Benedict</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix burger">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/11.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Breakfast Complete</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix dersest">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/product2.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Vegetarian Pasta</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix dersest">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/product3.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Gluten-Free Pasta</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 my-2 col-12 mix first-fd">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('frontend') }}/img/product/product1.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Quattro Formaggi</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <p class="price pt-2"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product end  -->
                    </div>
                    <!-- container end -->
                </div>
                <!-- product-bg end -->
            </section>
            <!-- =================================PRODUCT SECTION END============= -->
            <!-- ============LIFE JEARNY========= -->
            <section>
                <div class="jearny-bg">
                    <div class="bg-filter">
                        <div class="container-fluid custom-padding">
                            <div class="jearny-center">
                                <div class="col-md-10">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="product-jearny-bg">
                                                <img src="{{ asset('frontend') }}/img/icon/pizza.svg" alt="">
                                                <div class="jearny-cotent">
                                                    <div class="">
                                                        <h2>530+</h2>
                                                        <p class="juarny-des">pizza</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="product-jearny-bg">
                                                <img src="{{ asset('frontend') }}/img/icon/burger.svg" alt="">
                                                <div class="jearny-cotent">
                                                    <div class="">
                                                        <h2>180+</h2>
                                                        <p class="juarny-des">burger</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="product-jearny-bg">
                                                <img src="{{ asset('frontend') }}/img/icon/drink.svg" alt="">
                                                <div class="jearny-cotent">
                                                    <div class="">
                                                        <h2>250+</h2>
                                                        <p class="juarny-des">drink</p>
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
            </section>
            <!-- ============LIFE JARNY END========= -->


            <!-- ==================CHEFC===== -->
            <section>
                <div class="chefc-sec my-5">
                    <div class="container-fluid custom-padding">
                        <div class="row">
                            <div class="section-head mb-5">
                                <h2>Our Team</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="chefc-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="chefc-card ">
                                        <div class="chefc-img-div" data-bs-toggle="modal" data-bs-target="#chefc">
                                            <div class="img-view">
                                                <img src="{{ asset('frontend') }}/img/chefc/chefc-1.jpg" alt="" class="chefc-img">
                                            </div>
                                            <div class="view-info">
                                                <p>View Details</p>
                                            </div>
                                        </div>
                                        <div class="chefc-des">
                                            <h3 class="chefc-name">Andy Moore</h3>
                                            <p class="title">
                                                MASTER CHEF IN BROOKLIN
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chefc-card ">
                                        <div class="chefc-img-div" data-bs-toggle="modal" data-bs-target="#chefc">
                                            <div class="img-view">
                                                <img src="{{ asset('frontend') }}/img/chefc/2 (1).jpg" alt="" class="chefc-img">
                                            </div>
                                            <div class="view-info">
                                                <p>View Details</p>
                                            </div>
                                        </div>
                                        <div class="chefc-des">
                                            <h3 class="chefc-name">Royce N. Burton</h3>
                                            <p class="title">
                                                MASTER CHEF IN BROOKLIN
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chefc-card ">
                                        <div class="chefc-img-div" data-bs-toggle="modal" data-bs-target="#chefc">
                                            <div class="img-view">
                                                <img src="{{ asset('frontend') }}/img/chefc/1 (1).jpg" alt="" class="chefc-img">
                                            </div>
                                            <div class="view-info">
                                                <p>View Details</p>
                                            </div>
                                        </div>
                                        <div class="chefc-des">
                                            <h3 class="chefc-name">Jesse M. Wise</h3>
                                            <p class="title">
                                                MASTER CHEF IN BROOKLIN
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="chefc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="fs-wrapper">
                                                <div class="row">
                                                    <div class="col-md-6 my-2">
                                                        <div class="chegc-image">
                                                            <img src="{{ asset('frontend') }}/img/chefc/1.jpg" alt="Image not found">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 my-2">
                                                        <div class="chefc-details">
                                                            <h1 class="chefc-name">Jesse M. Wise</h1>
                                                            <p class="chefc-title">
                                                                MASTER CHEF IN BROOKLIN
                                                            </p>

                                                            <p class="long-description">
                                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Xillum dolore eu fugiat nulla pariatur. olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </p>

                                                            <h5 class="find">Find on Social:</h5>
                                                            <ul class="chefc-social">
                                                                <li><a href="" class="social-link"><span class="fab fa-facebook-f"></span></a></li>
                                                                <li><a href="" class="social-link"><span class="fab fa-twitter"></span></a></li>
                                                                <li><a href="" class="social-link"><span class="fab fa-instagram"></span></a></li>
                                                                <li><a href="" class="social-link"><span class="fab fa-pinterest"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="success-wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- ==================CHEFC END===== -->

            <!-- =================================CLIENT REVIEWS START============= -->
            <section>
                <div class="client-bg">
                    <div class="container-fluid custom-padding">
                        <div class="row">
                            <div class="section-head mb-5">
                                <h2>What your client says</h2>
                            </div>
                        </div>
                        <!-- row end -->
                        <div class="client-body">
                            <div class="row">
                                <div class="client-reviews  owl-carousel owl-theme">
                                    <div class="client-body item">
                                        <div class="column-item elementor-testimonial-item">
                                            <div class="item-box">
                                                <div class="top">
                                                    <div class="details">
                                                        <div class="avatar">
                                                            <div class="elementor-testimonial-image">
                                                                <img src="{{ asset('frontend') }}/img/user/avatar-1.jpg" class="attachment-full size-full lazyloaded" alt="">
                                                                <i aria-hidden="true" class="fas fa-quote-left"></i></div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">Clara</div>
                                                            <div class="job">Design</div>
                                                        </div>
                                                    </div>

                                                    <div class="elementor-testimonial-rating">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="content"> "I am completely blown away. I would also like to say thank you to all your staff. It's really wonderful."</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="client-body item">
                                        <div class="column-item elementor-testimonial-item">
                                            <div class="item-box">
                                                <div class="top">
                                                    <div class="details">
                                                        <div class="avatar">
                                                            <div class="elementor-testimonial-image">
                                                                <img src="{{ asset('frontend') }}/img/user/avatar-2.jpg" class="attachment-full size-full lazyloaded" alt="">
                                                                <i aria-hidden="true" class="fas fa-quote-left"></i></div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">Nina Margaret</div>
                                                            <div class="job">CEO,LH</div>
                                                        </div>
                                                    </div>

                                                    <div class="elementor-testimonial-rating">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="content"> "I am completely blown away. I would also like to say thank you to all your staff. It's really wonderful."</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-body item">
                                        <div class="column-item elementor-testimonial-item">
                                            <div class="item-box">
                                                <div class="top">
                                                    <div class="details">
                                                        <div class="avatar">
                                                            <div class="elementor-testimonial-image">
                                                                <img src="{{ asset('frontend') }}/img/user/avatar-3.jpg" class="attachment-full size-full lazyloaded" alt="">
                                                                <i aria-hidden="true" class="fas fa-quote-left"></i></div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">John Doe</div>
                                                            <div class="job">Design</div>
                                                        </div>
                                                    </div>

                                                    <div class="elementor-testimonial-rating">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="content"> "I am completely blown away. I would also like to say thank you to all your staff. It's really wonderful."</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-body item">
                                        <div class="column-item elementor-testimonial-item">
                                            <div class="item-box">
                                                <div class="top">
                                                    <div class="details">
                                                        <div class="avatar">
                                                            <div class="elementor-testimonial-image">
                                                                <img src="{{ asset('frontend') }}/img/user/avatar-4.jpg" class="attachment-full size-full lazyloaded" alt="">
                                                                <i aria-hidden="true" class="fas fa-quote-left"></i></div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">Rose</div>
                                                            <div class="job">Design</div>
                                                        </div>
                                                    </div>

                                                    <div class="elementor-testimonial-rating">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="content"> "I am completely blown away. I would also like to say thank you to all your staff. It's really wonderful."</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- cliend body end  -->
                    </div>
                    <!-- container end -->
                </div>
                <!-- client-bg end -->
            </section>
            <!-- =================================CLIENT REVIEWS END============= -->
            <!-- =================================DELEVERY SECTION START============= -->
            <div class="middle_footer">
                <div class="container-fluid custom-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="shopping_info">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 col-sm-6 position-relative">
                                        <div class="icon_box icon_box_style2">
                                            <div class="box_icon">
                                                <i class="fas fa-truck"></i>
                                            </div>
                                            <div class="intro_desc">
                                                <h5>Free Delivery</h5>
                                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 position-relative">
                                        <div class="icon_box icon_box_style2">
                                            <div class="box_icon">
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                            <div class="intro_desc">
                                                <h5>30 Day Returns Guarantee</h5>
                                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="icon_box icon_box_style2">
                                            <div class="box_icon">
                                                <i class="far fa-life-ring"></i>
                                            </div>
                                            <div class="intro_desc">
                                                <h5>27/4 Online Support</h5>
                                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col-12 end -->
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>
            <!-- middle footer end -->
            <!-- =================================DELEVERY SECTION END============= -->
            <!-- =================================FOOTER SECTION START============= -->
            <section>
                <footer>
                    <div class="footer-bg">
                        <div class="container-fluid custom-padding">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer_logo">
                                        <a href="index.html">
                                             <img alt="logo" src="{{ asset('frontend') }}/img/logo.png" style="height:30px; width: 130px;"></a>
                                    </div>
                                    <div class="footer_desc">
                                        <p>Phasellus blandit massa enim. elit id varius nunc. Lorems ipsum dolor sit consectetur industry. If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                    <ul class="contact_info list_none">
                                        <li>
                                            <span class="fas fa-mobile-alt"></span>
                                            <p>+123 456 7890</p>
                                        </li>
                                        <li>
                                            <span class="fas fa-envelope"></span>
                                            <a href="mailto:freelancerhelaluddin@gmail.com" class="email">info@yourmail.com</a>
                                        </li>
                                        <li>
                                            <span class="fas fa-map-marker-alt"></span>
                                            <p>123 Street, Old Trafford, NewYork, USA</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4">
                                    <h5 class="widget_title">Information</h5>
                                    <ul class="list_none widget_links">
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Secure Payment</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Top Sellers</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Our Sitemap</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4">
                                    <h5 class="widget_title">Customer Support</h5>
                                    <ul class="list_none widget_links">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Shopping Cart</a></li>
                                        <li><a href="#">Addresses</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Orders History</a></li>
                                        <li><a href="#">Order Tracking</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-4">
                                    <h5 class="widget_title">Instagram</h5>
                                    <ul class="list_none instafeed">
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img2.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img3.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img4.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img5.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img6.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img7.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('frontend') }}/img/blog/insta_img8.jpg" alt="insta_img"><span class="insta_icon"><i class="fab fa-instagram"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->


                        <div class="bottom_footer">
                            <div class="container-fluid custom-padding">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <p class="copyright m-lg-0 text-center">Copyright © 2021 All Rights Reserved </p>
                                    </div>
                                    <div class="col-lg-4 order-lg-first">
                                        <ul class="list_none footer_payment text-center text-lg-left">
                                            <li>
                                                <a href="#"><img src="{{ asset('frontend') }}/img/icon/visa.png" alt="visa"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('frontend') }}/img/icon//discover.png" alt="discover"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('frontend') }}/img/icon//master_card.png" alt="master_card"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('frontend') }}/img/icon//paypal.png" alt="paypal"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('frontend') }}/img/icon//amarican_express.png" alt="amarican_express"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="list_none social_icons radius_social text-center text-lg-right">
                                            <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" class="sc_pinterest"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- bottom footer end -->
                    </div>
                    <!-- footer-bg end -->
                </footer>
                <!-- footer end -->
            </section>
            <!-- =================================FOOTER SECTION END============= -->


        </div>
        <!-- body inner end  -->
    </div>
    <!-- =======================================BODY SECTION END================ -->

    <!-- ==================ALL SCRIPT ARE HERE======================= -->
    <script src="{{ asset('frontend') }}/js/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/timePic.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/mixtup.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/js/smoothproducts.min.js"></script>
    <!-- ======================CUSTOME SCRIPT ARE HERE================== -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>

</body>

</html>