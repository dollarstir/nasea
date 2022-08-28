
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
// mini cart for sub
function minicart1()
{
    $tt = '';
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $tt .= '<div class="single-cart">
            <div class="cart-img">
                <a href="main/#"><img src="../yolkassets/upload/'.$value['bookcover'].'" alt="book" /></a>
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

function paycart($token)
{
    $tt = '';
    $cart = customfetch('orders', [['token', '=', $token]]);
    foreach ($cart as $key => $value) {
        $tt .= '<tr class="cart_item">
        <td class="product-name">
            '.$value['bookname'].' <strong class="product-quantity"> × 1</strong>
        </td>
        <td class="product-total">
            <span class="amount">&#8373;'.$value['discountprice'].'</span>
        </td>
    </tr>';
    }

    return $tt;
}

function paytotal($token)
{
    $t = customfetch('orders', [['token', '=', $token]]);
    $total = 0;

    foreach ($t as $key) {
        $total += $key['discountprice'];
    }
    // $total .= '';

    return $total;
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

// checking if users is logged in
function orderregister($fname, $lname, $email, $phone, $country, $password)
{
    error_reporting(0);
    if ($fname == '' || $lname == '' || $email == '' || $phone == '' || $country == '') {
        echo 'Áll fields are required';
    } else {
        if (trim($password) != '') {
            $ck = authenticate('users', [['email', '=', $email]]);
            if ($ck == 'success') {
                echo 'User Account Already exist . login instead';
            } else {
                $name = $fname.' '.$lname;
                $detail = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'country' => $country,

                'password' => md5($password),
                ];
                $add = insert('users', $detail);

                if ($add == 'success') {
                    if (loginauth('users', 'user', [['email', '=', $email], ['password', '=', md5($password)]], 'AND') == 'success') {
                        orders();
                    } else {
                        echo 'Failed to login';
                    }
                } else {
                    echo 'Failed to Create Account';
                }
            }
        } else {
            orders();
        }
    }
}

function ordernumber($token)
{
    $c = customfetch('orders', [['token', '=', $token]]);
    $cc = $c[0];

    return $cc['orderno'];
}

function orders()
{
    session_start();
    $cos = countall('orders');
    // var_dump(cos);
    $nn = ($cos + 1);
    $orderno = 'NASBK'.$nn;
    $token = uniqid('NABK');
    // discount
    if (!isset($_SESSION['coupon'])) {
        $discount = 0;
    } else {
        $discount = $_SESSION['coupon'];
    }
    $main = (100 - $discount) / 100;
    // userid
    $uid = $_SESSION['user']['id'];

    // todays date
    $myorderdate = date('jS F, Y');
    // paystatus
    $paystatus = 'unpaid';
    // order status
    $status = 'pending';

    $msg = '';

    if (isset($_SESSION['cart'])) {
        // var_dump($value)
        foreach ($_SESSION['cart'] as $key => $value) {
            $discountprice = $value['bookprice'] * $main;
            $id = $value['bookid'];
            $sel = customfetch('books', [['id', '=', $id]]);
            $row = $sel[0];
            // extract($row);
            // getting author details
            $authorid = $row['author'];
            //     var_dump($authorid);
            $ot = customfetch('authors', [['id' => $authorid]]);
            $raut = $ot[0];
            extract($raut);
            $record = [
                'token' => $token,
                'orderno' => $orderno,
                'bid' => $value['bookid'],
                'uid' => $uid,
                'bookname' => $value['bookname'],
                'authorid' => $authorid,
                'authorname' => $raut['authname'],
                'authornumber' => $authnumber,
                'front' => $value['bookcover'],
                'back' => $value['bookback'],
                'price' => $value['bookprice'],
                'discountprice' => $discountprice,
                'discount' => $discount,
                'dateadded' => $myorderdate,
                'paystatus' => $paystatus,
                'status' => $status,
            ];

            $msg .= insert('orders', $record);
        }
    } else {
        $msg .= 'emptycart';
    }

    $msg .= '';

    if (strpos($msg, 'success') !== false) {
        unset($_SESSION['cart']);
        unset($_SESSION['coupon']);
        echo $token;
    } elseif ($msg == 'emptycart') {
        echo 'Your cart is empty';
    } else {
        echo $msg;
    }
}

function previewproduct($id)
{
    $re = customfetch('books', [['id', '=', $id]]);
    $book = $re[0];
    $authorid = $book['author'];
    $ot = customfetch('authors', [['id', '=', $authorid]]);
    $au = $ot[0];
    echo'<div class="col-md-5 col-sm-5 col-xs-12">
    <div class="modal-tab">
        <div class="product-details-large tab-content">
            <div class="tab-pane active" id="image-1">
                <img src="yolkassets/upload/'.$book['front'].'" alt="" />
            </div>
            <div class="tab-pane" id="image-2">
                <img src="yolkassets/upload/'.$book['back'].'" alt="" />
            </div>
            <!--<div class="tab-pane" id="image-3">
                <img src="main/img/product/quickview-l3.jpg" alt="" />
            </div>
            <div class="tab-pane" id="image-4">
                <img src="main/img/product/quickview-l5.jpg" alt="" />
            </div>-->
        </div>
        <div class="product-details-small quickview-active owl-carousel">
            <a class="active" href="#image-1"><img src="yolkassets/upload/'.$book['front'].'" alt="" /></a>
            <a href="#image-2"><img src="yolkassets/upload/'.$book['back'].'" alt="" /></a>
            <!--<a href="main/#image-3"><img src="main/img/product/quickview-s3.jpg" alt="" /></a>
            <a href="main/#image-4"><img src="main/img/product/quickview-s5.jpg" alt="" /></a>-->
        </div>
    </div>
</div>
<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="modal-pro-content">
        <h3>'.$book['title'].'</h3>
        <p>Author: <small>'.$au['authname'].'</small></p><br>
        <p><div class="price">
            <span>GH&#8373; '.$book['price'].'</span>
        </div></p>

        
        <p>'.$book['description'].'</p>
        <!--<div class="quick-view-select">
            <div class="select-option-part">
                <label>Size*</label>
                <select class="select">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                </select>
            </div>
            <div class="quickview-color-wrap">
                <label>Color*</label>
                <div class="quickview-color">
                    <ul>
                        <li class="blue">b</li>
                        <li class="red">r</li>
                        <li class="pink">p</li>
                    </ul>
                </div>
            </div>
        </div>-->
        
           
            <button class="btn btn-primary addtocart" id="'.$id.'"  style="background-color: rgb(240, 124, 41) !important;border:none; margin :10px!important;">Add to cart</button>
        
        <span><i class="fa fa-check"></i> In stock</span>
    </div>
</div>';
}

function updateuser($id, $fname, $lname, $email, $password, $newpass, $repass)
{
    if ($fname == '' || $lname == '' || $email == '') {
        echo 'this field cannot be empty';
    } else {
        if ($password == '' && $newpass != '' && $repass != '') {
            echo 'please enter current password';
        } elseif ($password != '' && $newpass == '' && $repass == '') {
            echo 'New password cannot be empty';
        } elseif ($password != '' && $newpass != '' && $repass != '') {
            $record = ['name' => $fname.' '.$lname,
                        'email' => $email,
                        'password' => md5($newpass),
                ];
            if (authenticate('users', [['password', '=', md5($password)]]) == 'success') {
                if ($newpass == $repass) {
                    if (update('users', $record, ['id' => $id]) == 'success') {
                        echo 'Updated Successfully';
                    } else {
                        echo 'Failed to update user';
                    }
                } else {
                    echo 'Password do not match';
                }
            } else {
                echo 'Incorerct password';
            }
        } else {
            $record = ['name' => $fname.' '.$lname,
                        'email' => $email,
                ];

            if (update('users', $record, ['id' => $id]) == 'success') {
                echo 'Updated Successfully';
            } else {
                echo 'Failed to update user';
            }
        }
    }
}

function download()
{
    // session_start();
    $id = $_SESSION['user']['id'];
    $d = customfetch('orders', [['uid', '=', $id], ['status', '=', 'complete']], 'AND', ['id' => 'DESC']);
    if (is_null($d)) {
        echo 'Nothing Download yet';
    } else {
        foreach ($d as $key) {
            $coso = customfetch('books', [['id', '=', $key['bid']]]);
            if (strtotime($key['dateadded']) < strtotime(date('jS F, Y')) == true) {
                $e = 'Yes';
            } else {
                $e = 'No';
            }
            echo '<tr>
            <td>'.$key['bookname'].'</td>
            <td>'.$key['dateadded'].'</td>
            <td>'.$e.'</td>
            <td><a class="btn btn-sqr" href="yolkassets/upload/'.$coso[0]['link'].'" download><i
                        class="fa fa-cloud-download"></i>
                    Download File</a></td>
        </tr>';
        }
    }
}

function downloadlink($id)
{
    if (authenticate('orders', [['id', '=', $id], ['status', '=', 'complete']], 'AND') == 'success') {
        $c = customfetch('orders', [['id', '=', $id]]);
        $coo = $c[0];
        $c1 = customfetch('books', [['id', '=', $coo['bid']]]);
        $cc = $c1[0];

        echo 'downloading';
    // echo '<script>window.location="yolkassets/upload/'.$cc['link'].'"</script>';
    } else {
        echo 'Have no permission to download this file';
    }
}

function updatebill($id, $phone, $city, $state, $country, $address)
{
    if ($phone == '') {
        echo ' Phone Number cannot be empty';
    } else {
        $record = [
            'phone' => $phone,
            'city' => $city,
            'state' => $city,
            'country' => $country,
            'address' => $address,
        ];
        if (update('users', $record, ['id' => $id]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to update address';
        }
    }
}

function orderlist()
{
    $id = $_SESSION['user']['id'];
    $c = customfetch('orders', [['uid', '=', $id]]);

    foreach ($c as $key) {
        echo '<tr>
        <td>'.$key['orderno'].'</td>
        <td>'.$key['dateadded'].'</td>
        <td>'.$key['status'].'</td>
        <td>&#8373;'.$key['discountprice'].'</td>
        <!--<td><a href="" class="btn btn-sqr">View</a>-->
        </td>
    </tr>';
    }
}

function review($uid, $bid, $feedback)
{
    if ($uid == '') {
        echo 'You need to login before review';
    } else {
        if ($feedback == '') {
            echo 'You cannot post empty review';
        } else {
            $dataa = date('jS F, Y');
            $dd = ['bid' => $bid, 'uid' => $uid, 'feedback' => $feedback, 'dateadded' => $dataa];
            if (insert('reviews', $dd) == 'success') {
                echo 'reviewed';
            } else {
                echo 'something went wrong';
            }
        }
    }
}

function adverts($type, $limit)
{
    $ad = customfetch('ads', [['type', '=', $type], ['status', '=', 'active']], 'AND', ['id' => 'DESC'], $limit);
    foreach ($ad as $row) {
        if ($type == 'double') {
            echo '<div class="banner-static-area bg ptb-100">
            <div class="container">
                <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
            <div class="banner-shadow-hover xs-mb">
                <a href="'.$row['link'].'" target="blank"><img src="yolkassets/upload/'.$row['adimage'].'" alt="banner" /></a>
            </div>
        </div>
                    
                    <!-- <div class="col-lg-6 col-md-6 col-12">
                        <div class="banner-shadow-hover">
                            <a href="main/#"><img src="main/img/banner/9.jpg" alt="banner" /></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>';

        //     echo '<div class="col-lg-6 col-md-6 col-12">
        //     <div class="banner-shadow-hover xs-mb">
        //         <a href="'.$row['link'].'" target="blank"><img src="yolkassets/upload/'.$row['adimage'].'" alt="banner" /></a>
        //     </div>
        // </div>';
        } elseif ($type == 'side') {
            echo'<div class="banner-img-2">
            <a href="'.$row['link'].'"><img src="yolkassets/upload/'.$row['adimage'].'" alt="banner" /></a>
        </div>';
        } elseif ($type == 'single') {
            echo' <div class="banner-area-5 mtb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-img-2">
                            
                        <a href="'.$row['link'].'"><img style="width:100%;height:200px;" src="yolkassets/upload/'.$row['adimage'].'" alt="banner" /></a>
                        </div>
                    </div>
    
                    
                </div>
            </div>
        </div>';
            // echo '<a href="'.$row['link'].'"><img style="width:100%;height:200px;" src="yolkassets/upload/'.$row['adimage'].'" alt="banner" /></a>';
        }
    }
}

function randomads()
{
    $adt = allrandom('category', 3);
    foreach ($adt as $cat) {
        $at = randomfetch('books', [['category', '=', $cat['id']]], '', 5);
        echo'<div class="col-lg-3 col-md-4 col-12">
        <div class="section-title-2 mb-30">
            <h3>'.$cat['catname'].'</h3>
        </div>
        <div class="product-active-2 owl-carousel">
            <div class="product-total-2">';
        foreach ($at as $row) {
            echo '<div class="single-most-product bd mb-18">
            <div class="most-product-img">
            <a href="product/'.$row['id'].'"><img src="yolkassets/upload/'.$row['front'].'" alt="book" /></a>
            </div>
            <div class="most-product-content">
                <div class="product-rating">
                    <ul>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <h4><a href="product/'.$row['id'].'">'.$row['title'].'</a></h4>
                <div class="product-price">
                    <ul>
                        <li>'.$row['price'].'</li>
                        
                    </ul>
                </div>
            </div>
        </div>';
        }

        echo' </div>
           
        </div>
    </div>';
    }
}

function newsletter($email)
{
    if ($email == '') {
        'email cannot be empty';
    } elseif (authenticate('newsletter', [['emails', '=', $email]]) == 'success') {
        echo 'Email already on the list';
    } else {
        if (insert('newsletter', ['emails' => $email]) == 'success') {
            echo 'newslettersuccess';
        } else {
            echo 'failed to join the list try again';
        }
    }
}

function recentpoem()
{
    $add = fetchAll('blog', ['id' => 'DESC'], 10);
    foreach ($add as $key) {
        echo '<div class="col-lg-12">
        <div class="single-post">
            <div class="post-img">
                <a href=""><img src="yolkassets/upload/'.$key['image'].'" alt="post" /></a>
               <!-- <div class="blog-date-time">
                    <span class="day-time">06</span>
                    <span class="moth-time">Dec</span>
                </div>-->
            </div>
            <div class="post-content">
                <h3><a href="">'.$key['title'].'</a></h3>
               <!-- <span class="meta-author"> Demo koparion </span>-->
                <p>'.substr($key['description'], 0, 100).'....</p>
            </div>
        </div>
    </div>';
    }
}

function categorypluscount($type)
{
    $c = fetchAll('category');
    $mb = '';

    foreach ($c as $cat) {
        $cc = customcount('books', [['category', '=', $cat['id']]]);

        if ($type == 'main') {
            $mb .= '<li><a href="category/'.$cat['id'].'">'.$cat['catname'].'<span>('.$cc.')</span></a></li>';
        } elseif ($type == 'sub') {
            $mb .= '<li><a href="../category/'.$cat['id'].'">'.$cat['catname'].'<span>('.$cc.')</span></a></li>';
        }
    }
    $mb .= '';

    echo $mb;
}

function authorpluscount($type)
{
    $c = fetchAll('authors');
    $mb = '';

    foreach ($c as $cat) {
        $cc = customcount('books', [['author', '=', $cat['id']]]);

        if ($type == 'main') {
            $mb .= '<li><a href="author/'.$cat['id'].'">'.$cat['authname'].'<span>('.$cc.')</span></a></li>';
        } elseif ($type == 'sub') {
            $mb .= '<li><a href="../author/'.$cat['id'].'">'.$cat['authname'].'<span>('.$cc.')</span></a></li>';
        }
    }
    $mb .= '';

    echo $mb;
}

function bycatpage($id, $type, $limit = '', $page = 1)
{
    if ($limit == '') {
        $res = paginage('books', ['id' => 'DESC'], 10, $page);
    } else {
        $res = customepaginate('books', [['category', '=', $id]], '', ['id' => 'DESC'], $limit, $page);
    }
    // var_dump($res);
    foreach ($res as $row) {
        if ($type == 'main') {
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <!-- single-product-start -->
        <div class="product-wrapper mb-40">
            <div class="product-img">
                <a href="product/'.$row['id'].'">
                    <img loading="lazy" src="yolkassets/upload/'.$row['front'].'" alt="book" class="primary" />
                </a>
                <div class="quick-view">
                    <button id="'.$row['id'].'" class="btn btn-success previewbtn" style="background-color: rgb(240, 124, 41) !important;border:none;"  data-target="#productModal" data-toggle="modal" title="Quick View">
                        <i class="fa fa-search-plus"></i>
                    </button>
                </div>
                <div class="product-flag">
                    <ul>
                        <li><span class="sale">new</span></li>
                        <li><span class="discount-percentage">-5%</span></li>
                    </ul>
                </div>
            </div>
            <div class="product-details text-center">
                <div class="product-rating">
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <h4><a href="product/'.$row['id'].'">'.$row['title'].'</a></h4>
                <div class="product-price">
                    <ul>
                        <li>&#8373; '.$row['price'].'</li>
                    </ul>
                </div>
            </div>
            <div class="product-link">
                <div class="product-button">
                    <button title="Add to cart" id="'.$row['id'].'"  class ="btn btn-success addtocart" style="background-color: rgb(240, 124, 41) !important;border:none;"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li><a href="product/'.$row['id'].'" title="Details"><i class="fa fa-external-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-end -->
    </div>';
        } elseif ($type == 'sub') {
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <!-- single-product-start -->
        <div class="product-wrapper mb-40">
            <div class="product-img">
                <a href="../product/'.$row['id'].'">
                    <img loadin="lazy" src="/yolkassets/upload/'.$row['front'].'" alt="book" class="primary" />
                </a>
                <div class="quick-view">
                    <button id="'.$row['id'].'" class="btn btn-success previewbtn" style="background-color: rgb(240, 124, 41) !important;border:none;"  data-target="#productModal" data-toggle="modal" title="Quick View">
                        <i class="fa fa-search-plus"></i>
                    </button>
                </div>
                <div class="product-flag">
                    <ul>
                        <li><span class="sale">new</span></li>
                        <li><span class="discount-percentage">-5%</span></li>
                    </ul>
                </div>
            </div>
            <div class="product-details text-center">
                <div class="product-rating">
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <h4><a href="../product/'.$row['id'].'">'.$row['title'].'</a></h4>
                <div class="product-price">
                    <ul>
                        <li>&#8373; '.$row['price'].'</li>
                    </ul>
                </div>
            </div>
            <div class="product-link">
                <div class="product-button">
                    <button title="Add to cart" id="'.$row['id'].'"  class ="btn btn-success addtocart" style="background-color: rgb(240, 124, 41) !important;border:none;"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li><a href="../product/'.$row['id'].'" title="Details"><i class="fa fa-external-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-end -->
    </div>';
        }
    }
}

function byauthpage($id, $type, $limit = '', $page = 1)
{
    if ($limit == '') {
        $res = paginage('books', ['id' => 'DESC'], 10, $page);
    } else {
        $res = customepaginate('books', [['author', '=', $id]], '', ['id' => 'DESC'], $limit, $page);
    }
    // var_dump($res);
    foreach ($res as $row) {
        if ($type == 'main') {
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <!-- single-product-start -->
        <div class="product-wrapper mb-40">
            <div class="product-img">
                <a href="product/'.$row['id'].'">
                    <img loading="lazy" src="yolkassets/upload/'.$row['front'].'" alt="book" class="primary" />
                </a>
                <div class="quick-view">
                    <button id="'.$row['id'].'" class="btn btn-success previewbtn" style="background-color: rgb(240, 124, 41) !important;border:none;"  data-target="#productModal" data-toggle="modal" title="Quick View">
                        <i class="fa fa-search-plus"></i>
                    </button>
                </div>
                <div class="product-flag">
                    <ul>
                        <li><span class="sale">new</span></li>
                        <li><span class="discount-percentage">-5%</span></li>
                    </ul>
                </div>
            </div>
            <div class="product-details text-center">
                <div class="product-rating">
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <h4><a href="product/'.$row['id'].'">'.$row['title'].'</a></h4>
                <div class="product-price">
                    <ul>
                        <li>&#8373; '.$row['price'].'</li>
                    </ul>
                </div>
            </div>
            <div class="product-link">
                <div class="product-button">
                    <button title="Add to cart" id="'.$row['id'].'"  class ="btn btn-success addtocart" style="background-color: rgb(240, 124, 41) !important;border:none;"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li><a href="product/'.$row['id'].'" title="Details"><i class="fa fa-external-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-end -->
    </div>';
        } elseif ($type == 'sub') {
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <!-- single-product-start -->
        <div class="product-wrapper mb-40">
            <div class="product-img">
                <a href="../product/'.$row['id'].'">
                    <img loadin="lazy" src="/yolkassets/upload/'.$row['front'].'" alt="book" class="primary" />
                </a>
                <div class="quick-view">
                    <button id="'.$row['id'].'" class="btn btn-success previewbtn" style="background-color: rgb(240, 124, 41) !important;border:none;"  data-target="#productModal" data-toggle="modal" title="Quick View">
                        <i class="fa fa-search-plus"></i>
                    </button>
                </div>
                <div class="product-flag">
                    <ul>
                        <li><span class="sale">new</span></li>
                        <li><span class="discount-percentage">-5%</span></li>
                    </ul>
                </div>
            </div>
            <div class="product-details text-center">
                <div class="product-rating">
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <h4><a href="../product/'.$row['id'].'">'.$row['title'].'</a></h4>
                <div class="product-price">
                    <ul>
                        <li>&#8373; '.$row['price'].'</li>
                    </ul>
                </div>
            </div>
            <div class="product-link">
                <div class="product-button">
                    <button title="Add to cart" id="'.$row['id'].'"  class ="btn btn-success addtocart" style="background-color: rgb(240, 124, 41) !important;border:none;"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li><a href="../product/'.$row['id'].'" title="Details"><i class="fa fa-external-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-end -->
    </div>';
        }
    }
}

function poem()
{
    $re = fetchAll('blog', ['id' => 'DESC']);

    foreach ($re as $row) {
        $c = customcount('comments', [['postid', '=', $row['id']]]);
        echo '<div class="single-blog-post">
        <div class="author-destils mb-30">
            <div class="author-left">
                <div class="author-img">
                    <a href="#"><img loadin="lazy" src="yolkassets/upload/'.$row['image'].'" alt="man" /></a>
                </div>
                <div class="author-description">
                    <p>Posted by: 
                        <a href="#"><span>Admin</span>in</a>
                        
                    </p>
                    <span>'.$row['dateadded'].'</span>
                </div>
            </div>
            <!--<div class="author-right">
                <span>Share this:</span>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>-->
        </div>
        <div class="blog-img mb-30">
            <a href="poem/'.$row['id'].'"><img src="yolkassets/upload/'.$row['image'].'" alt="blog"  style="width:100%;height:400px"/></a>
        </div>
        <div class="single-blog-content">
            <div class="single-blog-title">
                <h3><a href="poem/'.$row['id'].'">'.$row['title'].'</a></h3>
            </div>
            <div class="blog-single-content">
                <p>'.substr($row['description'], 0, 100).'...</p>
            </div>
        </div>
        <div class="blog-comment-readmore">
            <div class="blog-readmore">
                <a href="poem/'.$row['id'].'">Read more<i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="blog-com">
                <a href="poem/'.$row['id'].'">'.$c.' comment(s)</a>
            </div>
        </div>
    </div>';
    }
}

function poemcomment($id)
{
    $cpost = customfetch('blog', [['id', '=', $id]]);
    $cmost = $cpost[0];
    $ccom = customfetch('comments', [['postid', '=', $id]], '', ['id' => 'DESC']);
    foreach ($ccom as $row) {
        echo '<li>
    <div class="public-comment">
        <div class="comment-img">
            <a href="#"><img src="../yolkassets/upload/'.$cmost['image'].'" alt="man" /></a>
        </div>
        <div class="public-text">
            <div class="single-comm-top">
                <a href="">'.$row['cname'].'</a>
                <p>'.$row['addedon'].'</p>
            </div>
            <p>'.$row['message'].'</p>
        </div>
    </div>
</li>';
    }
}

function commentpoem($postid, $cname, $cmail, $message)
{
    if ($cname == '' || $cmail == '' || $message == '') {
        echo 'All field must be filled';
    } else {
        $addedon = date('jS F, Y');
        if (insert('comments', ['postid' => $postid, 'cname' => $cname, 'cmail' => $cmail, 'message' => $message, 'addedon' => $addedon]) == 'success') {
            echo 'commentsuccess';
        } else {
            echo 'Failed to post comment';
        }
    }
}

function blogrecent()
{
    $bg = fetchAll('blog', ['id' => 'DESC'], 6);
    foreach ($bg as $row) {
        echo '<li><a href="../poem/'.$row['id'].'">'.$row['title'].'</a></li>';
    }
}

function viewinfo($data)
{
    $res = fetchAll('settings');

    echo $res[0][$data];
}
