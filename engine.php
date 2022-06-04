<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('nasea.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('nasea.php', $context);
        }
    ),
]);
$router->launch();
