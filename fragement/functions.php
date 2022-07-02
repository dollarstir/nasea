<?php

 initsession();

// created on 4th June , 2022
// Author : Frederick Ennin (Dollarstir)
//
// Email: kpin463@gmail.com
include 'deep.php';

function logiccategory()
{
    $cot = fetchAll('category');
    $c = '';
}
function begin($title)
{
    echo '<!doctype html>
    <html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nasea Book - '.$title.'</title>
        <meta name="description" content="Nasea books is one of the Best E-book stores in the world">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="main/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="main/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="main/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="main/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="main/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="main/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="main/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="main/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="main/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="main/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="main/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="main/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="main/favicon/favicon-16x16.png">
<link rel="manifest" href="main/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="main/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="main/css/bootstrap.min.css">
        <!-- animate css -->
        '.Yolk::uicore('cssa').'
        <link rel="stylesheet" href="main/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="main/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="main/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="main/css/font-awesome.min.css">
        <!-- flexslider.css-->
        <link rel="stylesheet" href="main/css/flexslider.css">
        <!-- chosen.min.css-->
        <link rel="stylesheet" href="main/css/chosen.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="main/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="main/css/responsive.css">
        <!-- modernizr css -->
        
        <script src="main/js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>';
}

function footer()
{
    $app = app();
    echo '  <footer>
    <!-- footer-top-start -->
    <div class="footer-top">
        <!--<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top-menu bb-2">
                        <nav>
                            <ul>
                                <li><a href="main/#">home</a></li>
                                <li><a href="main/#">Enable Cookies</a></li>
                                <li><a href="main/#">Privacy and Cookie Policy</a></li>
                                <li><a href="main/#">contact us</a></li>
                                <li><a href="main/#">blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!-- footer-top-start -->
    <!-- footer-mid-start -->
    <div class="footer-mid ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Products</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="main/about.html">About us</a></li>
                                        <li><a href="main/#">Prices drop </a></li>
                                        <li><a href="main/#">New products</a></li>
                                        <li><a href="main/#">Best sales</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Our company</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="contact">Contact us</a></li>
                                        <!--<li><a href="">Sitemap</a></li>-->
                                        <li><a href="books">books</a></li>
                                        <li><a href="account">My account </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Your account</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="contact">Addresses</a></li>
                                        <!--<li><a href="">Credit slips </a></li>-->
                                        <li><a href="main/#"> Orders</a></li>
                                        <li><a href="main/#">Personal info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-footer mrg-sm">
                        <div class="footer-title mb-20">
                            <h3>STORE INFORMATION</h3>
                        </div>
                        <div class="footer-contact">
                            <p class="adress">
                                <span>'.$app['appname'].'</span>
                                '.$app['appaddress'].'
                            </p>
                            <p><span>Call us now:</span> '.$app['appcontact'].'</p>
                            <p><span>Email:</span> '.$app['appemail'].'</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-mid-end -->
    <!-- footer-bottom-start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row bt-2">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="copy-right-area">
                        <p>&copy; '.date('Y').' <strong> '.$app['appname'].'</strong>  by <a href="https://github.com/dollarstir" target="_blank"><strong>Dollarsoft</strong></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="payment-img text-right">
                        <a href=""><img src="main/img/momo.png" alt="payment" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-end -->
</footer>';
}

function scripts()
{
    echo '<!-- jquery latest version -->
    <script src="main/js/vendor/jquery-1.12.4.min.js"></script>
    '.Yolk::uicore('jsa').'
    <!-- popper js -->
    <script src="main/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="main/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="main/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="main/js/jquery.meanmenu.js"></script>
    <!-- wow js -->
    <script src="main/js/wow.min.js"></script>
    <!-- jquery.parallax-1.1.3.js -->
    <script src="main/js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countdown.min.js -->
    <script src="main/js/jquery.countdown.min.js"></script>
    <!-- jquery.flexslider.js -->
    <script src="main/js/jquery.flexslider.js"></script>
    <!-- chosen.jquery.min.js -->
    <script src="main/js/chosen.jquery.min.js"></script>
    <!-- jquery.counterup.min.js -->
    <script src="main/js/jquery.counterup.min.js"></script>
    <!-- waypoints.min.js -->
    <script src="main/js/waypoints.min.js"></script>
    <!-- plugins js -->
    <script src="main/js/plugins.js"></script>
    <!-- main js -->
    <script src="main/js/main.js"></script>
    <script src="processor/processor.js"></script>
    ';
}

// footer2

function footer2()
{
    $app = app();
    echo '  <footer>
    <!-- footer-top-start -->
    <div class="footer-top">
        <!--<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top-menu bb-2">
                        <nav>
                            <ul>
                                <li><a href="main/#">home</a></li>
                                <li><a href="main/#">Enable Cookies</a></li>
                                <li><a href="main/#">Privacy and Cookie Policy</a></li>
                                <li><a href="main/#">contact us</a></li>
                                <li><a href="main/#">blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!-- footer-top-start -->
    <!-- footer-mid-start -->
    <div class="footer-mid ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Products</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="main/about.html">About us</a></li>
                                        <li><a href="main/#">Prices drop </a></li>
                                        <li><a href="main/#">New products</a></li>
                                        <li><a href="main/#">Best sales</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Our company</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="contact">Contact us</a></li>
                                        <!--<li><a href="">Sitemap</a></li>-->
                                        <li><a href="books">books</a></li>
                                        <li><a href="account">My account </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Your account</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="contact">Addresses</a></li>
                                        <!--<li><a href="">Credit slips </a></li>-->
                                        <li><a href="main/#"> Orders</a></li>
                                        <li><a href="main/#">Personal info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-footer mrg-sm">
                        <div class="footer-title mb-20">
                            <h3>STORE INFORMATION</h3>
                        </div>
                        <div class="footer-contact">
                            <p class="adress">
                                <span>'.$app['appname'].'</span>
                                '.$app['appaddress'].'
                            </p>
                            <p><span>Call us now:</span> '.$app['appcontact'].'</p>
                            <p><span>Email:</span> '.$app['appemail'].'</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-mid-end -->
    <!-- footer-bottom-start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row bt-2">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="copy-right-area">
                        <p>&copy; '.date('Y').' <strong> '.$app['appname'].'</strong>  by <a href="https://github.com/dollarstir" target="_blank"><strong>Dollarsoft</strong></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="payment-img text-right">
                        <a href=""><img src="../main/img/momo.png" alt="payment" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-end -->
</footer>';
}

function scripts2()
{
    echo '<!-- jquery latest version -->
    <script src="../main/js/vendor/jquery-1.12.4.min.js"></script>
    '.Yolk::uicore('jsa').'
    <!-- popper js -->
    <script src="../main/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../main/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="../main/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="../main/js/jquery.meanmenu.js"></script>
    <!-- wow js -->
    <script src="../main/js/wow.min.js"></script>
    <!-- jquery.parallax-1.1.3.js -->
    <script src="../main/js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countdown.min.js -->
    <script src="../main/js/jquery.countdown.min.js"></script>
    <!-- jquery.flexslider.js -->
    <script src="../main/js/jquery.flexslider.js"></script>
    <!-- chosen.jquery.min.js -->
    <script src="../main/js/chosen.jquery.min.js"></script>
    <!-- jquery.counterup.min.js -->
    <script src="../main/js/jquery.counterup.min.js"></script>
    <!-- waypoints.min.js -->
    <script src="../main/js/waypoints.min.js"></script>
    <!-- plugins js -->
    <script src="../main/js/plugins.js"></script>
    <!-- main js -->
    <script src="../main/js/main.js"></script>
    <script src="../processor/processor2.js"></script>
    ';
}
function topbars()
{
    $soday = (!isset($_SESSION['user'])) ? '<li><a href="login">Sign in</a></li>' : '<li><button class="logout">Logout</button></li>';

    return '<!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="language-area">
                        <ul>
                           <!-- <li><img src="main/img/flag/1.jpg" alt="flag" /><a href="main/#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="main/#"><img src="main/img/flag/2.jpg" alt="flag" />france</a></li>
                                        <li><a href="main/#"><img src="main/img/flag/3.jpg" alt="flag" />croatia</a></li>
                                    </ul>
                                </div>
                            </li>-->
                           <!-- <li><a href="main/#">USD $<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub dolor">
                                    <ul>
                                        <li><a href="main/#">EUR €</a></li>
                                        <li><a href="main/#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="account-area text-right">
                        <ul>
                            <li><a href="account">My Account</a></li>
                            <li><a href="checkout">Checkout</a></li>
                            '.$soday.'
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search entire store here..." />
                            <a href="main/#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="home"><img src="yolkassets/upload/logo.png" alt="logo" style="width:200px;height:150px;" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="my-cart">
                        <ul>
                            <li><a href="main/#"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <span id ="cartcount">'.countcart().'</span>
                                <div class="mini-cart-sub">
                                    <div class="cart-product" id="minicart">
                                        '.minicart().'
                                        
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Total <span id="cartot">&#8373;'.carttotal().'</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a class="view-cart" href="cart">view cart</a>
                                        <a href="checkout">Check out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->';
}

function mainmenu($pid)
{
    $pages = [
        'Home' => 'home',
        'Books' => 'books',
        'Categories' => [
            'Poem' => 'poem',
            'History' => 'history',
            'Romance' => 'romance',
        ],
        'About' => 'aboutus',
        'Contact' => 'contact',
        'Free Peoms' => 'poems',
        'View Cart' => 'cart',
    ];

    $tt = '<!-- main-menu-area-start -->
    <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul>';
    $num = 0;
    foreach ($pages as $key => $value) {
        ++$num;

        if (is_array($value)) {
            $tt .= ($pid == $num) ? ' <li class="active"><a href="#">'.$key.'<i class="fa fa-angle-down"></i></a>
            <div class="sub-menu sub-menu-2">
                <ul>' : '<li><a href="#">'.$key.'<i class="fa fa-angle-down"></i></a>
                <div class="sub-menu sub-menu-2">
                    <ul>';
            foreach ($value as $key1 => $value1) {
                $tt .= '<li><a href="'.$value1.'">'.$key1.'</a></li>';
            }

            $tt .= '  </ul>
            </div>
        </li>';
        } else {
            $tt .= ($pid == $num) ? '<li class="active">
            <a href="'.$value.'">'.$key.'</i></a>
                
            </li>' : '<li>
            <a href="'.$value.'">'.$key.'</i></a>
                
            </li>';
        }
    }
    $tt .= '</ul>
                        </nav>
                    </div>
                   <!-- <div class="safe-area">
                        <a href="main/product-details.html">sales off</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->';

    return $tt;
}

function mobilemenu()
{
    $pages = [
        'Home' => 'home',
        'Books' => 'books',
        'Categories' => [
            'Poem' => 'poem',
            'History' => 'history',
            'Romance' => 'romance',
        ],
        'About' => 'aboutus',
        'Contact' => 'contact',
        'Free Peoms' => 'poems',
        'View Cart' => 'cart',
    ];

    $mb = '<!-- mobile-menu-area-start -->
    <div class="mobile-menu-area d-lg-none d-block fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
             
                        <ul id="nav">
                                <li><a href="home">Home</a></li>
                                <li><a href="books">Books</a></li>
                                <li><a href="#">Categories</a>
                                    <ul>';
    $res = fetchAll('category');
    foreach ($res as $row) {
        $mb .= '<li><a href="category/'.strtolower($row['catname']).'">'.$row['catname'].'</a></li>';
    }
    $mb .= ' </ul>
                                </li>
                                <li><a href="aboutus">About</a>
                                    
                                </li>
                                <li><a href="contact">Contact</a>
                                    
                                </li>
                                <li><a href="poems">Free Peoms</a>
                                    
                                </li>
                                <li><a href="cart">View Cart</a>
                                   
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->';

    return $mb;
}

// logical navbar by dollarstir
function navbar($pid)
{
    echo topbars();
    echo mainmenu($pid);
    echo mobilemenu();
}
function contactdetials()
{
    $res = fetchAll('settings');
    $row = $res[0];

    return $row;
}

function aboutpage()
{
    $res = fetchAll('aboutpage');
    $res = $res[0];

    return $res;
}
function books($limit = '')
{
    if ($limit == '') {
        $res = customfetch('books', [['status', '=', 'active']], '', ['id' => 'DESC']);
    } else {
        $res = customfetch('books', [['status', '=', 'active']], '', ['id' => 'DESC'], 8);
    }

    foreach ($res as $row) {
        echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <!-- single-product-start -->
        <div class="product-wrapper mb-40">
            <div class="product-img">
                <a href="product/'.$row['id'].'">
                    <img src="yolkassets/upload/'.$row['front'].'" alt="book" class="primary" />
                </a>
                <div class="quick-view">
                    <button id="'.$row['id'].'" class="btn btn-success previewbtn" style="background-color: rgb(240, 124, 41) !important;border:none;"  data-target="#productModal" data-toggle="modal" title="Quick View">
                        <i class="fa fa-search-plus"></i>
                    </button>
                </div>
                <div class="product-flag">
                    <ul>
                        <li><span class="sale">new</span></li>
                        <li><span class="discount-percentage">-5%</span></li>
                    </ul>
                </div>
            </div>
            <div class="product-details text-center">
                <div class="product-rating">
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <h4><a href="product/'.$row['id'].'">'.$row['title'].'</a></h4>
                <div class="product-price">
                    <ul>
                        <li>&#8373; '.$row['price'].'</li>
                    </ul>
                </div>
            </div>
            <div class="product-link">
                <div class="product-button">
                    <button title="Add to cart" id="'.$row['id'].'"  class ="btn btn-success addtocart" style="background-color: rgb(240, 124, 41) !important;border:none;"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-end -->
    </div>';
    }
}
function app()
{
    $s = fetchAll('settings');
    $ss = $s[0];

    return $ss;
}

function topbars1()
{
    $soday = (!isset($_SESSION['user'])) ? '<li><a href="login">Sign in</a></li>' : '<li><button class="logout">Logout</button></li>';

    return '<!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="language-area">
                        <ul>
                           <!-- <li><img src="main/img/flag/1.jpg" alt="flag" /><a href="main/#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="main/#"><img src="main/img/flag/2.jpg" alt="flag" />france</a></li>
                                        <li><a href="main/#"><img src="main/img/flag/3.jpg" alt="flag" />croatia</a></li>
                                    </ul>
                                </div>
                            </li>-->
                           <!-- <li><a href="main/#">USD $<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub dolor">
                                    <ul>
                                        <li><a href="main/#">EUR €</a></li>
                                        <li><a href="main/#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="account-area text-right">
                        <ul>
                            <li><a href="../account">My Account</a></li>
                            <li><a href="../checkout">Checkout</a></li>
                            '.$soday.'
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search entire store here..." />
                            <a href="main/#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="../home"><img src="../main/img/logo/logo.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="my-cart">
                        <ul>
                            <li><a href="../cart"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <span id ="cartcount">'.countcart().'</span>
                                <div class="mini-cart-sub">
                                    <div class="cart-product" id="minicart">
                                        '.minicart().'
                                        
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Total <span id="cartot">&#8373;'.carttotal().'</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a class="view-cart" href="cart">view cart</a>
                                        <a href="checkout">Check out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->';
}

function mainmenu1($pid)
{
    $pages = [
        'Home' => 'home',
        'Books' => 'books',
        'Categories' => [
            'Poem' => 'poem',
            'History' => 'history',
            'Romance' => 'romance',
        ],
        'About' => 'aboutus',
        'Contact' => 'contact',
        'Free Peoms' => 'poems',
        'View Cart' => 'cart',
    ];

    $tt = '<!-- main-menu-area-start -->
    <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul>';
    $num = 0;
    foreach ($pages as $key => $value) {
        ++$num;

        if (is_array($value)) {
            $tt .= ($pid == $num) ? ' <li class="active"><a href="#">'.$key.'<i class="fa fa-angle-down"></i></a>
            <div class="sub-menu sub-menu-2">
                <ul>' : '<li><a href="#">'.$key.'<i class="fa fa-angle-down"></i></a>
                <div class="sub-menu sub-menu-2">
                    <ul>';
            foreach ($value as $key1 => $value1) {
                $tt .= '<li><a href="../'.$value1.'">'.$key1.'</a></li>';
            }

            $tt .= '  </ul>
            </div>
        </li>';
        } else {
            $tt .= ($pid == $num) ? '<li class="active">
            <a href="../'.$value.'">'.$key.'</i></a>
                
            </li>' : '<li>
            <a href="../'.$value.'">'.$key.'</i></a>
                
            </li>';
        }
    }
    $tt .= '</ul>
                        </nav>
                    </div>
                   <!-- <div class="safe-area">
                        <a href="main/product-details.html">sales off</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->';

    return $tt;
}

function mobilemenu1()
{
    $pages = [
        'Home' => 'home',
        'Books' => 'books',
        'Categories' => [
            'Poem' => 'poem',
            'History' => 'history',
            'Romance' => 'romance',
        ],
        'About' => 'aboutus',
        'Contact' => 'contact',
        'Free Peoms' => 'poems',
        'View Cart' => 'cart',
    ];

    $mb = '<!-- mobile-menu-area-start -->
    <div class="mobile-menu-area d-lg-none d-block fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
             
                        <ul id="nav">
                                <li><a href="../home">Home</a></li>
                                <li><a href="../books">Books</a></li>
                                <li><a href="#">Categories</a>
                                    <ul>';
    $res = fetchAll('category');
    foreach ($res as $row) {
        $mb .= '<li><a href="../category/'.strtolower($row['catname']).'">'.$row['catname'].'</a></li>';
    }
    $mb .= ' </ul>
                                </li>
                                <li><a href="../aboutus">About</a>
                                    
                                </li>
                                <li><a href="../contact">Contact</a>
                                    
                                </li>
                                <li><a href="../poems">Free Peoms</a>
                                    
                                </li>
                                <li><a href="../cart">View Cart</a>
                                   
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->';

    return $mb;
}

// logical navbar by dollarstir
function navbar1($pid)
{
    echo topbars1();
    echo mainmenu1($pid);
    echo mobilemenu1();
}
