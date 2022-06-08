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
]);
$router->launch();
