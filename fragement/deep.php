
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
        $bookid = array_column($_SESSION['cart'])
    } else {
    }
}
