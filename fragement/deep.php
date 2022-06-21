
<?php

    // *************************************

    // Developer   : Frederick Ennin (Dollarstir)
    // Started on : 8th June ,2022
    // email : kpin463@gmail.com
    // github: https://github.com/dollarstir

    // *************************************

function addtocart($id)
{
    initsession();
    $dt = customfetch('books', [['id', '=', $id]]);
    $book = $dt[0];

    if (isset($_SESSION['cart'])) {
        $bookid = array_column($_SESSION['cart'], 'bookid');
        if (!in_array($id, $bookid)) {
            $count = count($_SESSION['cart']);
            $cartitem = [
                'bookid' => $id,
                'bookname' => $book['title'],
                'bookcover' => $book['front'],
                'bookback' => $book['back'],
                'bookprice' => $book['price'],
            ];

            $_SESSION['cart'][$count] = $cartitem;

            echo 'addedtocart';
        } else {
            echo 'Item already in cart';
        }
    } else {
        $cartitem = [
                'bookid' => $id,
                'bookname' => $book['title'],
                'bookcover' => $book['front'],
                'bookback' => $book['back'],
                'bookprice' => $book['price'],
        ];

        $_SESSION['cart'][0] = $cartitem;

        echo 'addedtocart';
    }
}

function viewcartmain()
{
    $tc = '';
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $tc .= '<tr>
            <td class="product-thumbnail"><a href="#"><img src="yolkassets/upload/'.$value['bookcover'].'" alt="man" /></a></td>
            <td class="product-name"><a href="#">'.$value['bookname'].'</a></td>
            <td class="product-price"><span class="amount">&#8373;'.$value['bookprice'].'</span></td>
            <!--<td class="product-quantity"><input type="number" value="1"></td>-->
            <!--<td class="product-subtotal">£165.00</td>-->
            <td class="product-remove"><button id="'.$value['bookid'].'" class="removefromcart" style="border:none;"><i class="fa fa-trash" style="color:red;"></i></button></td>
        </tr>';
        }
    } else {
        $tc .= '<p style="text-align:center;font-weight:bold;">Empty Cart</p>';
    }
    $tc .= '';

    return $tc;
}

function deletefromcart($id)
{
    session_start();
    foreach ($_SESSION['cart'] as $keys => $values) {
        if ($values['bookid'] == $id) {
            unset($_SESSION['cart'][$keys]);
            echo 'removedfromcart';
        }
    }
}

function minicart()
{
    $tt = '';
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $tt .= '<div class="single-cart">
            <div class="cart-img">
                <a href="main/#"><img src="yolkassets/upload/'.$value['bookcover'].'" alt="book" /></a>
            </div>
            <div class="cart-info">
                <h5><a href="main/#">'.$value['bookname'].'</a></h5>
                <p>&#8373;'.$value['bookprice'].'</p>
            </div>
            <div class="cart-icon">
                <button id="'.$value['bookid'].'" class="removefromcart" style="border:none;background-color:transparent;"><i class="fa fa-remove" style="color:red;font-weight:bold;"></i></button>
            </div>
        </div>';
        }

        $tt .= '';
    } else {
        $tt .= '<p style="text-align:center;font-weight:bold;">Empty Cart</p>';
    }

    return $tt;
}

function checkoutcart()
{
    $tt = '';
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $tt .= '<tr class="cart_item">
            <td class="product-name">
                '.$value['bookname'].' <strong class="product-quantity"> × 1</strong>
            </td>
            <td class="product-total">
                <span class="amount">&#8373;'.$value['bookprice'].'</span>
            </td>
        </tr>';
        }

        $tt .= '';
    } else {
        $tt .= '';
    }

    return $tt;
}

function countcart()
{
    if (!empty($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    } else {
        $count = '0';
    }

    return $count;
}

function carttotal()
{
    if (!empty($_SESSION['cart'])) {
        $total = 0.00;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total = $total + $value['bookprice'];
        }
    } else {
        $total = 0.00;
    }

    if (!empty($_SESSION['coupon'])) {
        $coupon = $_SESSION['coupon'];
        $percent = ($coupon / 100) * $total;
    } else {
        $percent = 0.00;
    }
    $fin = ($total - $percent);

    return $fin;
}

function cartsubtotal()
{
    if (!empty($_SESSION['cart'])) {
        $total = 0.00;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total = $total + $value['bookprice'];
        }
    } else {
        $total = 0.00;
    }

    return $total;
}

function discount()
{
    if (!empty($_SESSION['coupon'])) {
        $cp = $_SESSION['coupon'];
    } else {
        $cp = 0.00;
    }

    return $cp;
}

function coupon($code)
{
    $cp = customfetch('coupon', [['coupname', '=', $code]]);
    if (empty($cp)) {
        echo 'Coupon code is incorrect';
    } else {
        $cp1 = customfetch('coupon', [['status', '=', 'active']]);
        if (empty($cp1)) {
            echo 'Coupon code already used';
        } else {
            initsession();
            $amount = $cp[0]['percentage'];
            $_SESSION['coupon'] = $amount;

            $up = update('coupon', ['status' => 'expired'], ['id' => $cp[0]['id']]);

            if ($up == 'success') {
                echo 'couponapplied';
            }
        }
    }
    // initsession();
    // $_SESSION['coupon'] = $amount;

    // echo 'couponapplied';
}

// sending message form contact page
function sendmessage($name, $email, $subject, $message)
{
    echo $res = insert('messages',
     [
         'name' => $name,
         'email' => $email,
         'subject' => $subject,
        'message' => $message, ]
);
}

function user()
{
    // session_start();
    $id = $_SESSION['user']['id'];

    $res = customfetch('users', [['id', '=', $id]]);
    $u = $res[0];

    return $u;
}

function orders()
{
    session_start();
    $token = uniqid('NABK');
    // discount
    $discount = $_SESSION['coupon'];

    $main = (100 - $discount) / 100;
    // userid
    $uid = $_SESSION['user']['id'];

    // todays date
    $dateadded = date('jS F, Y');
    // paystatus
    $paystatus = 'unpaid';
    // order status
    $status = 'pending';

    foreach ($_SESSION['cart'] as $key => $value) {
        $id = $value['bookid'];
        $sel = customfetch('books', [['id', '=', $id]]);
        $row = $sel[0];
        // extract($row);
        // getting author details
        $authorid = $row['id'];
        $cos = customfetch('authors', [['id', '=', $authorid]]);
        $ra = $cos[0];
        extract($ra);
        // discountprice
        $discountprice = ($value['bookprice'] - $main);
        $record = [
            'token' => $token,
            'bid' => $value['bookid'],
            'uid' => $uid,
            'bookname' => $value['bookname'],
            'authorid' => $authorid,
        'authorname' => $authorname,
     ];
        insert('orders');
    }
}
