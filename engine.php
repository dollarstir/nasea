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
]);
$router->launch();
