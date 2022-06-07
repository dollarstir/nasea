<?php

// created on 4th June , 2022
// Author : Frederick Ennin (Dollarstir)
//
// Email: kpin463@gmail.com

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
        <link rel="shortcut icon" type="image/x-icon" href="main/img/favicon.png">
    
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="main/css/bootstrap.min.css">
        <!-- animate css -->
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
    echo '  <footer>
    <!-- footer-top-start -->
    <div class="footer-top">
        <div class="container">
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
        </div>
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
                                        <li><a href="main/contact.html">Contact us</a></li>
                                        <li><a href="main/#">Sitemap</a></li>
                                        <li><a href="main/#">Stores</a></li>
                                        <li><a href="main/register.html">My account </a></li>
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
                                        <li><a href="main/contact.html">Addresses</a></li>
                                        <li><a href="main/#">Credit slips </a></li>
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
                                <span>My Company</span>
                                Your address goes here.
                            </p>
                            <p><span>Call us now:</span> 0123456789</p>
                            <p><span>Email:</span> demo@example.com</p>
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
                        <p>&copy; 2021 <strong> Koparion </strong> Mede with ❤️ by <a href="https://github.com/dollarstir" target="_blank"><strong>Dollarsoft</strong></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="payment-img text-right">
                        <a href="main/#"><img src="main/img/1.png" alt="payment" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-end -->
</footer>';
}

function topbars()
{
    return '<!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="language-area">
                        <ul>
                            <li><img src="main/img/flag/1.jpg" alt="flag" /><a href="main/#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="main/#"><img src="main/img/flag/2.jpg" alt="flag" />france</a></li>
                                        <li><a href="main/#"><img src="main/img/flag/3.jpg" alt="flag" />croatia</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="main/#">USD $<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub dolor">
                                    <ul>
                                        <li><a href="main/#">EUR €</a></li>
                                        <li><a href="main/#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="account-area text-right">
                        <ul>
                            <li><a href="main/my-account.html">My Account</a></li>
                            <li><a href="main/checkout.html">Checkout</a></li>
                            <li><a href="main/login.html">Sign in</a></li>
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
                        <a href="main/index.html"><img src="main/img/logo/logo.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="my-cart">
                        <ul>
                            <li><a href="main/#"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <span>2</span>
                                <div class="mini-cart-sub">
                                    <div class="cart-product">
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="main/#"><img src="main/img/product/1.jpg" alt="book" /></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="main/#">Joust Duffle Bag</a></h5>
                                                <p>1 x £60.00</p>
                                            </div>
                                            <div class="cart-icon">
                                                <a href="main/#"><i class="fa fa-remove"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="main/#"><img src="main/img/product/3.jpg" alt="book" /></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="main/#">Chaz Kangeroo Hoodie</a></h5>
                                                <p>1 x £52.00</p>
                                            </div>
                                            <div class="cart-icon">
                                                <a href="main/#"><i class="fa fa-remove"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Total <span>£12.00</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a class="view-cart" href="main/cart.html">view cart</a>
                                        <a href="main/checkout.html">Check out</a>
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
    return '<!-- mobile-menu-area-start -->
    <div class="mobile-menu-area d-lg-none d-block fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul id="nav">
                                <li><a href="main/index.html">Home</a>
                                    <ul>
                                        <li><a href="main/index.html">Home-1</a></li>
                                        <li><a href="main/index-2.html">Home-2</a></li>
                                        <li><a href="main/index-3.html">Home-3</a></li>
                                        <li><a href="main/index-4.html">Home-4</a></li>
                                        <li><a href="main/index-5.html">Home-5</a></li>
                                        <li><a href="main/index-6.html">Home-6</a></li>
                                        <li><a href="main/index-7.html">Home-7</a></li>
                                    </ul>
                                </li>
                                <li><a href="main/product-details.html">Book</a>
                                    <ul>
                                        <li><a href="main/shop.html">Tops & Tees</a></li>
                                        <li><a href="main/shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="main/shop.html">Jackets & Coats</a></li>
                                        <li><a href="main/shop.html">Fashion Jackets</a></li>
                                        <li><a href="main/shop.html">Crochet</a></li>
                                        <li><a href="main/shop.html">Sleeveless</a></li>
                                        <li><a href="main/shop.html">Stripes</a></li>
                                        <li><a href="main/shop.html">Sweaters</a></li>
                                        <li><a href="main/shop.html">hoodies</a></li>
                                        <li><a href="main/shop.html">Heeled sandals</a></li>
                                        <li><a href="main/shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Flat sandals</a></li>
                                        <li><a href="main/shop.html">Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Long Sleeve</a></li>
                                        <li><a href="main/shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Sleeveless</a></li>
                                        <li><a href="main/shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="main/shop.html">Hoodies</a></li>
                                        <li><a href="main/shop.html">Jackets</a></li>
                                    </ul>
                                </li>
                                <li><a href="main/product-details.html">Audio books</a>
                                    <ul>
                                        <li><a href="main/shop.html">Tops & Tees</a></li>
                                        <li><a href="main/shop.html">Sweaters</a></li>
                                        <li><a href="main/shop.html">Hoodies</a></li>
                                        <li><a href="main/shop.html">Jackets & Coats</a></li>
                                        <li><a href="main/shop.html">Long Sleeve</a></li>
                                        <li><a href="main/shop.html">Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Sleeveless</a></li>
                                        <li><a href="main/shop.html">Sweaters</a></li>
                                        <li><a href="main/shop.html">Hoodies</a></li>
                                        <li><a href="main/shop.html">Wedges</a></li>
                                        <li><a href="main/shop.html">Vests</a></li>
                                        <li><a href="main/shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="main/shop.html">Sleeveless</a></li>
                                        <li><a href="main/shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="main/shop.html">Hoodies</a></li>
                                    </ul>
                                </li>
                                <li><a href="main/product-details.html">children’s books</a>
                                    <ul>
                                        <li><a href="main/shop.html">Shirts</a></li>
                                        <li><a href="main/shop.html">Florals</a></li>
                                        <li><a href="main/shop.html">Crochet</a></li>
                                        <li><a href="main/shop.html">Stripes</a></li>
                                        <li><a href="main/shop.html">Shorts</a></li>
                                        <li><a href="main/shop.html">Dresses</a></li>
                                        <li><a href="main/shop.html">Trousers</a></li>
                                        <li><a href="main/shop.html">Jeans</a></li>
                                        <li><a href="main/shop.html">Heeled sandals</a></li>
                                        <li><a href="main/shop.html">Flat sandals</a></li>
                                        <li><a href="main/shop.html">Wedges</a></li>
                                        <li><a href="main/shop.html">Ankle boots</a></li>
                                    </ul>
                                </li>
                                <li><a href="main/#">blog</a>
                                    <ul>
                                        <li><a href="main/blog.html">Blog</a></li>
                                        <li><a href="main/blog-details.html">blog-details</a></li>
                                    </ul>
                                </li>
                                <li><a href="main/product-details.html">Page</a>
                                    <ul>
                                        <li><a href="main/shop.html">shop</a></li>
                                        <li><a href="main/shop-list.html">shop list view</a></li>
                                        <li><a href="main/product-details.html">product-details</a></li>
                                        <li><a href="main/product-details-affiliate.html">product-affiliate</a></li>
                                        <li><a href="main/blog.html">blog</a></li>
                                        <li><a href="main/blog-details.html">blog-details</a></li>
                                        <li><a href="main/contact.html">contact</a></li>
                                        <li><a href="main/about.html">about</a></li>
                                        <li><a href="main/login.html">login</a></li>
                                        <li><a href="main/register.html">register</a></li>
                                        <li><a href="main/my-account.html">my-account</a></li>
                                        <li><a href="main/cart.html">cart</a></li>
                                        <li><a href="main/compare.html">compare</a></li>
                                        <li><a href="main/checkout.html">checkout</a></li>
                                        <li><a href="main/wishlist.html">wishlist</a></li>
                                        <li><a href="main/404.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->';
}

// logical navbar by dollarstir
function navbar($pid)
{
    echo topbars();
    echo mainmenu($pid);
    echo mobilemenu();
}
