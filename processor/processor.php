<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';
require '../fragement/admin.php';
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

        case 'login1':
                extract($_POST);
                $password = md5($password);
                if (authenticate('users', [['email', '=', $login]]) == 'success' || authenticate('users', [['phone', '=', $login]]) == 'success') {
                    if (loginauth('users', 'user', [['email', '=', $login], ['password', '=', $password]], 'AND') == 'success') {
                        echo 'loginsuccess1';
                    } else {
                        echo ' Invalid credentials';
                    }
                } else {
                    echo 'Login credentials does not exist';
                }
                break;
        case 'logout':
            if (logout('user') == 'success') {
                echo 'logout';
            }
            break;

        case 'order':
            extract($_POST);

            if (!isset($password)) {
                $password = '';
            }
            orderregister($fname, $lname, $email, $phone, $country, $address, $city, $password);

            break;

        case 'paysuccess':
            extract($_POST);

            echo $toekn;

            break;

        case 'prodpreview':
            extract($_POST);
            previewproduct($id);
            break;

        case 'updateuser':
            extract($_POST);
            session_start();
            $id = $_SESSION['user']['id'];
            updateuser($id, $fname, $lname, $email, $password, $newpass, $repass);

            break;
        case 'downloadbook':
            extract($_POST);
            downloadlink($id);
            break;

        case 'updatebill':
            extract($_POST);
            session_start();
            $id = $_SESSION['user']['id'];
            updatebill($id, $phone, $city, $state, $country, $address);
            break;

        case 'newsletter':
            extract($_POST);
            newsletter($email);
            break;

        case 'addcategory':
            extract($_POST);
            addcategory($catname);
            break;

        case 'deletecategory':
            extract($_POST);

            deletecategory($id);

            break;

        case 'addauthor':
            extract($_POST);
            addauthor($authname, $authnumner, $authemail);
            break;

        case 'deleteauthor':
            extract($_POST);

            deleteauthor($id);

            break;

        case 'addbook':
            extract($_POST);
            addbook($title, $author, $description, $category, $price);
            break;

        case 'deletebook':
            extract($_POST);
            deletebook($id);
            break;

        case 'editsale':
            extract($_POST);
            editsale($id, $totalavl, $amw, $amtw);
            break;

        default:

        break;
    }
 }
