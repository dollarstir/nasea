<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addtocart':
            extract($_POST);
            echo $myData;
            break;
        default:

        break;
    }
}
