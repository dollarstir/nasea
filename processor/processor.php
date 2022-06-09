<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'addtocart':
            extract($_POST);
            // echo $id;
            addtocart($id);

            break;

        case 'removecart':
            extract($_POST);
            deletefromcart($id);
            break;

        case 'countcart':
            initsession();
            echo countcart();
            break;

        case 'viewcart':
            break;
        default:

        break;
    }
 }
