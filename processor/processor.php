<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addtocart':
            extract($_POST);
            echo $id;
            break;
        default:

        break;
    }
}
