
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
    if (isset($_SESSION['cart'])) {
        $bookid = array_column($_SESSION['cart'], 'bookid');
        if (!in_array($id, $bookid)) {
            $count = count($_SESSION['cart']);
            $cartitem = [
                'bookid' => $id,
                'bookname' => 'bookname',
                'bookcover' => 'bookcover.jpg',
                'bookprice' => 20,
            ];

            $_SESSION['cart'][$count] = $cartitem;

            echo 'addedtocart';
        } else {
            echo 'Item already in cart';
        }
    } else {
        $cartitem = [
            'bookid' => $id,
            'bookname' => 'bookname',
            'bookcover' => 'bookcover.jpg',
            'bookprice' => 20,
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
        $total = '0.00';
    }

    return $total;
}
