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
            initsession();
            echo minicart();
            break;
        case 'carttotal':
            initsession();
            echo carttotal();
            break;

        case 'cartsubtotal':
            initsession();
            echo cartsubtotal();
            break;

        case 'viewmaincart':
            initsession();
            echo viewcartmain();
            break;

        case 'checkoutcart':
            initsession();
            echo checkoutcart();
            break;

        case 'applycoupon':
            extract($_POST);
            coupon(3);
            break;

        case 'discount':
            initsession();
            echo discount();
            break;
        default:

        break;
    }
 }
