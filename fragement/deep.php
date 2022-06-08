
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

function viewcartmain()
{
    if (!empty($_SESSION['cart'])) {
        $total = 0;

        foreach ($_SESSION['cart'] as $key => $value) {
            echo '<tr>
            <td class="product-thumbnail"><a href="#"><img src="yolkassets/upload/'.$value['bookcover'].'" alt="man" /></a></td>
            <td class="product-name"><a href="#">'.$value['bookname'].'</a></td>
            <td class="product-price"><span class="amount">&#8373'.$value['price'].'</span></td>
            <!--<td class="product-quantity"><input type="number" value="1"></td>-->
            <!--<td class="product-subtotal">£165.00</td>-->
            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
        </tr>';
        }
    }
}

function deletefromcart($id)
{
    foreach ($_SESSION['cart'] as $keys => $values) {
        if ($values['item_id'] == $_GET['id']) {
            unset($_SESSION['cart'][$keys]);
            echo 'Item Removed';
        }
    }
}
