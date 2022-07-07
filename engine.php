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
]);
$router->launch();
