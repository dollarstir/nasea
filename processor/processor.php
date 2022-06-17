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
            coupon($code);
            break;

        case 'discount':
            initsession();
            echo discount();
            break;

        case 'message':
            extract($_POST);
            sendmessage($name, $email, $subject, $message);
            break;

        case 'login':
            extract($_POST);
            $password = md5($password);
            if (authenticate('users', [['email', '=', $login]]) == 'success' || authenticate('users', [['phone', '=', $login]]) == 'success') {
                if (loginauth('users', 'user', [['email', '=', $login], ['password', '=', $password]], 'AND') == 'success') {
                    echo 'loginsuccess';
                } else {
                    echo ' Invalid credentials';
                }
            } else {
                echo 'Login credentials does not exist';
            }
            break;
        default:

        break;
    }
 }
