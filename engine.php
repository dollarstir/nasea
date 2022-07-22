<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/nasea.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('main/nasea.php', $context);
        }
    ),

    new Route(
        '/books',
        function ($context) {
            return Viewer::view('main/products.php', $context);
        }
    ),

    new Route(
        '/cart',
        function ($context) {
            return Viewer::view('main/mycart.php', $context);
        }
    ),

    new Route(
        '/checkout',
        function ($context) {
            return Viewer::view('main/mycheckout.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('main/contactus.php', $context);
        }
    ),

    new Route(
        '/aboutus',
        function ($context) {
            return Viewer::view('main/about.php', $context);
        }
    ),

    new Route(
        '/completeorder/{token}',
        function ($context) {
            return Viewer::view('main/pay.php', $context);
        }
    ),

    new Route(
        '/login',
        function ($context) {
            return Viewer::view('main/auth.php', $context);
        }
    ),

    new Route(
        '/ignitor',
        function ($context) {
            return Viewer::view('main/paypros.php', $context);
        }
    ),

    new Route(
        '/account',
        function ($context) {
            return Viewer::view('main/myaccount.php', $context);
        }
    ),

    new Route(
        '/mylink',
        function ($context) {
            return Viewer::view('yolkassets/upload/book2.pdf', $context);
        }
    ),

    new Route(
        '/product/{id}',
        function ($context) {
            return Viewer::view('main/myproduct.php', $context);
        }
    ),

    new Route(
        '/author/{id}',
        function ($context) {
            return Viewer::view('main/byauthor.php', $context);
        }
    ),

    new Route(
        '/category/{id}',
        function ($context) {
            return Viewer::view('main/bycategory.php', $context);
        }
    ),

    new Route(
        '/poem/{id}',
        function ($context) {
            return Viewer::view('main/peomd.php', $context);
        }
    ),

    new Route(
        '/poems',
        function ($context) {
            return Viewer::view('main/mypeoms.php', $context);
        }
    ),

    new Route(
        '/search',
        function ($context) {
            return Viewer::view('main/bookquery.php', $context);
        }
    ),

    // admin routes

    new Route(
        '/auth',
        function ($context) {
            return Viewer::view('backend/authorization.php', $context);
        }
    ),

    new Route(
        '/dashboard',
        function ($context) {
            return Viewer::view('backend/nadmin.php', $context);
        }
    ),

    new Route(
        '/users',
        function ($context) {
            return Viewer::view('backend/viewUsers.php', $context);
        }
    ),

    new Route(
        '/newcategory',
        function ($context) {
            return Viewer::view('backend/addCategory.php', $context);
        }
    ),

    new Route(
        '/viewcategories',
        function ($context) {
            return Viewer::view('backend/viewCategory.php', $context);
        }
    ),

    new Route(
        '/newauthor',
        function ($context) {
            return Viewer::view('backend/addAuthor.php', $context);
        }
    ),

    new Route(
        '/viewauthors',
        function ($context) {
            return Viewer::view('backend/viewAuthor.php', $context);
        }
    ),

    new Route(
        '/newbook',
        function ($context) {
            return Viewer::view('backend/addBooks.php', $context);
        }
    ),

    new Route(
        '/viewbooks',
        function ($context) {
            return Viewer::view('backend/viewBooks.php', $context);
        }
    ),

    new Route(
        '/vieworders',
        function ($context) {
            return Viewer::view('backend/viewOrders.php', $context);
        }
    ),

    new Route(
        '/viewsales',
        function ($context) {
            return Viewer::view('backend/viewSales.php', $context);
        }
    ),
    new Route(
        '/viewallsales',
        function ($context) {
            return Viewer::view('backend/viewAlls.php', $context);
        }
    ),
    new Route(
        '/editsales',
        function ($context) {
            return Viewer::view('backend/updatesales.php', $context);
        }
    ),

    new Route(
        '/viewtransactions',
        function ($context) {
            return Viewer::view('backend/viewTransaction.php', $context);
        }
    ),

    new Route(
        '/newcoupon',
        function ($context) {
            return Viewer::view('backend/addCoupons.php', $context);
        }
    ),

    new Route(
        '/viewcoupons',
        function ($context) {
            return Viewer::view('backend/viewCoupons.php', $context);
        }
    ),

    new Route(
        '/viewreviews',
        function ($context) {
            return Viewer::view('backend/viewReview.php', $context);
        }
    ),

    new Route(
        '/newads',
        function ($context) {
            return Viewer::view('backend/addAds.php', $context);
        }
    ),

    new Route(
        '/viewads',
        function ($context) {
            return Viewer::view('backend/viewAds.php', $context);
        }
    ),

    new Route(
        '/newpoem',
        function ($context) {
            return Viewer::view('backend/addPoem.php', $context);
        }
    ),

    new Route(
        '/viewpoems',
        function ($context) {
            return Viewer::view('backend/viewPoems.php', $context);
        }
    ),

    new Route(
        '/viewmessages',
        function ($context) {
            return Viewer::view('backend/viewMessages.php', $context);
        }
    ),

    new Route(
        '/editabout',
        function ($context) {
            return Viewer::view('backend/editabout.php', $context);
        }
    ),

    new Route(
        '/editcontact',
        function ($context) {
            return Viewer::view('backend/editContact.php', $context);
        }
    ),

    new Route(
        '/app',
        function ($context) {
            return Viewer::view('backend/appSettings.php', $context);
        }
    ),

    new Route(
        '/social',
        function ($context) {
            return Viewer::view('backend/socialSettings.php', $context);
        }
    ),

    new Route(
        '/profile',
        function ($context) {
            return Viewer::view('backend/profileSettings.php', $context);
        }
    ),

    new Route(
        '/authenticate',
        function ($context) {
            return Viewer::view('backend/myLogin.php', $context);
        }
    ),

    new Route(
        '/adminlogin',
        function ($context) {
            return Viewer::view('backend/myLogin.php', $context);
        }
    ),

    new Route(
        '/adminauth',
        function ($context) {
            return Viewer::view('backend/myLogin.php', $context);
        }
    ),

    new Route(
        '/adminsign',
        function ($context) {
            return Viewer::view('backend/myLogin.php', $context);
        }
    ),

    new Route(
        '/editcat',
        function ($context) {
            return Viewer::view('backend/updatecat.php', $context);
        }
    ),

    new Route(
        '/editauthor',
        function ($context) {
            return Viewer::view('backend/updateauthor.php', $context);
        }
    ),

    new Route(
        '/editbook',
        function ($context) {
            return Viewer::view('backend/updatebook.php', $context);
        }
    ),
]);
$router->launch();
