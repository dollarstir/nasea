
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
                'bookcover' => 'bookcover.png',
                'bookprice' => 20,
            ];

            $_SESSION['cart'][$count] = $cartitem;

            echo 'added to cart';
        } else {
            echo 'Item already in cart';
        }
    } else {
        $cartitem = [
            'bookid' => $id,
            'bookname' => 'bookname',
            'bookcover' => 'bookcover.png',
            'bookprice' => 20,
        ];

        $_SESSION['cart'][0] = $cartitem;
    }
}
