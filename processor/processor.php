<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addtocart':
            echo 'hi';
            break;
        default:

        break;
    }
}
