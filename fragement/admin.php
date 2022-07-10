<?php

function adminhead($title)
{
    echo '<!DOCTYPE html>
    <html lang="zxx">
    
    <head>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Nasea Admin - '.$title.'</title>
    
    
        <link rel="stylesheet" href="backend/css/bootstrap1.min.css" />

        '.Yolk::uicore('cssa').'
    
        <link rel="stylesheet" href="backend/vendors/themefy_icon/themify-icons.css" />
    
        <link rel="stylesheet" href="backend/vendors/niceselect/css/nice-select.css" />
    
        <link rel="stylesheet" href="backend/vendors/owl_carousel/css/owl.carousel.css" />
    
        <link rel="stylesheet" href="backend/vendors/gijgo/gijgo.min.css" />
    
        <link rel="stylesheet" href="backend/vendors/font_awesome/css/all.min.css" />
        <link rel="stylesheet" href="backend/vendors/tagsinput/tagsinput.css" />
    
        <link rel="stylesheet" href="backend/vendors/datepicker/date-picker.css" />
        <link rel="stylesheet" href="backend/vendors/vectormap-home/vectormap-2.0.2.css" />
    
        <link rel="stylesheet" href="backend/vendors/scroll/scrollable.css" />
    
        <link rel="stylesheet" href="backend/vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="backend/vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="backend/vendors/datatable/css/buttons.dataTables.min.css" />
    
        <link rel="stylesheet" href="backend/vendors/text_editor/summernote-bs4.css" />
    
        <link rel="stylesheet" href="backend/vendors/morris/morris.css">
    
        <link rel="stylesheet" href="backend/vendors/material_icon/material-icons.css" />
    
        <link rel="stylesheet" href="backend/css/metisMenu.css">
    
        <link rel="stylesheet" href="backend/css/style1.css" />
        <link rel="stylesheet" href="backend/css/colors/default.css" id="colorSkinCSS">
    </head>';
}

function adminscript()
{
    echo '<script src="backend/js/jquery1-3.4.1.min.js"></script>

    <script src="backend/js/popper1.min.js"></script>

    <script src="backend/js/bootstrap.min.js.php"></script>

    <script src="backend/js/metisMenu.js"></script>

    <script src="backend/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="backend/vendors/chartlist/Chart.min.js"></script>

    <script src="backend/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="backend/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="backend/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="backend/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="backend/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="backend/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="backend/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="backend/vendors/datatable/js/jszip.min.js"></script>
    <script src="backend/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="backend/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="backend/vendors/datatable/js/buttons.php5.min.js"></script>
    <script src="backend/vendors/datatable/js/buttons.print.min.js"></script>

    <script src="https://demo.dashboardpack.com/sales-html/vendors/datepicker/datepicker.js"></script>
    <script src="backend/vendors/datepicker/datepicker.en.js"></script>
    <script src="backend/vendors/datepicker/datepicker.custom.js"></script>
    <script src="backend/js/chart.min.js"></script>
    <script src="https://demo.dashboardpack.com/sales-html/vendors/chartjs/roundedBar.min.js"></script>

    <script src="backend/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="backend/vendors/tagsinput/tagsinput.js"></script>

    <script src="backend/vendors/text_editor/summernote-bs4.js"></script>
    <script src="backend/vendors/am_chart/amcharts.js"></script>

    <script src="backend/vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="backend/vendors/scroll/scrollable-custom.js"></script>

    <script src="https://demo.dashboardpack.com/sales-html/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <script src="https://demo.dashboardpack.com/sales-html/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

    <script src="https://demo.dashboardpack.com/sales-html/vendors/apex_chart/apex-chart2.js"></script>
    <script src="https://demo.dashboardpack.com/sales-html/vendors/apex_chart/apex_dashboard.js"></script>
    <script src="https://demo.dashboardpack.com/sales-html/vendors/echart/echarts.min.js"></script>
    <script src="backend/vendors/chart_am/core.js"></script>
    <script src="backend/vendors/chart_am/charts.js"></script>
    <script src="backend/vendors/chart_am/animated.js"></script>
    <script src="backend/vendors/chart_am/kelly.js"></script>
    <script src="backend/vendors/chart_am/chart-custom.js"></script>

    <script src="https://demo.dashboardpack.com/sales-html/js/dashboard_init.js"></script>
    <script src="backend/js/custom.js"></script>
    '.Yolk::uicore('jsa').'
    <script src="processor/processor.js"></script>
    ';
}

function customers()
{
    $res = fetchAll('users');
    foreach ($res as $row) {
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['name'].'</a></th>
        <td>'.$row['email'].'</td>
        <td>'.$row['phone'].'</td>
        <td>'.$row['country'].'</td>
        <td>'.$row['address'].'</td>
        <td>'.$row['city'].'</td>
        <!-- <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

function addcategory($catname)
{
    if (empty(trim($catname))) {
        echo 'Category name cannot be empty';
    } else {
        if (insert('category', ['catname' => $catname]) == 'success') {
            echo 'success';
        } else {
            echo 'Failed to Add Category';
        }
    }
}

function categories()
{
    $res = fetchAll('category');
    foreach ($res as $row) {
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['id'].'</a></th>
        <td>'.$row['catname'].'</td>
       
         <td><button id="'.$row['id'].'"  class="btn btn-danger delcategory"><i class="fa fa-trash"></i></td> 
    </tr>';
    }
}

function deletecategory($id)
{
    if ($del = delete('category', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete Category';
    }
}

// add author
function addauthor($authname, $authnumber, $authemail)
{
    if (empty(trim($authname)) || empty(trim($authnumber)) || empty(trim($authemail))) {
        echo 'All filed must be field';
    } else {
        if (authenticate('authors', [['authnumber', '=', $authnumber], ['authemail', '=', $authemail]], 'OR') == 'success') {
            echo 'Author already added';
        } else {
            $record = [
                'authname' => $authname,
                'authnumber' => $authnumber,
                'authemail' => $authemail,
                'dateadded' => date('jS F, Y'),
                'withdrawal' => 0,
            ];
            if (insert('authors', $record) == 'success') {
                echo 'success';
            } else {
                'Failed to add Author';
            }
        }
    }
}

// view author list
function authors()
{
    $res = fetchAll('authors');

    foreach ($res as $row) {
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['authname'].'</a></th>
        <td>'.$row['authnumber'].'</td>
        <td>'.$row['authemail'].'</td>
        
         <td><button id="'.$row['id'].'"  class="btn btn-danger delauthor"><i class="fa fa-trash"></i></a></button></td>
    </tr>';
    }
}

function deleteauthor($id)
{
    if ($del = delete('authors', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete Author';
    }
}

// select authors
function selectauthors()
{
    $re = fetchAll('authors');
    foreach ($re as $row) {
        echo '
        <option value="'.$row['id'].'">'.$row['authname'].'('.$row['authnumber'].')</option>
        ';
    }
}

function selectcategory()
{
    $res = fetchAll('category');
    foreach ($res as $row) {
        echo ' <option value="'.$row['id'].'">'.$row['catname'].'</option>';
    }
}

function addbook($title, $author, $description, $category, $price)
{
    if (empty(trim($title)) || empty($author) || empty($category) || empty(trim($price))) {
        echo 'All fields are required';
    } else {
        if (empty($_FILES['front']['name']) || empty($_FILES['back']['name']) || empty($_FILES['link']['name'])) {
            echo 'All documents must be uploaded';
        } else {
            $record = [
                'title' => $title,
                'author' => $author,
                'description' => $description,
                'category' => $category,
                'price' => $price,
                'dateadded' => date('jS F, Y'),
                'status' => 'active',
            ];
            if (insert('books', $record, $_FILES, '../yolkassets/upload') == 'success') {
                echo 'success';
            } else {
                echo 'Failed to add book';
            }
        }
    }
}

function booklist()
{
    $res = fetchAll('books');
    foreach ($res as $row) {
        $s = customfetch('authors', [['id', '=', $row['author']]]);
        $ss = $s[0];
        $y = customfetch('category', [['id', '=', $row['category']]]);
        $yy = $y[0];
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['title'].'</a></th>
        <td>'.$ss['authname'].'</td>
        <td>'.$row['description'].'</td>
        <td>'.$row['price'].'</td>
        <td>'.$yy['catname'].'</td>
        <td><img src="yolkassets/upload/'.$row['front'].'"  style="width:100px;height:150px;"/></td>
        <td><img src="yolkassets/upload/'.$row['back'].'"  style="width:100px;height:150px;"/></td>

        <td><button id="'.$row['id'].'"  class="btn btn-danger delbook"><i class="fa fa-trash"></i></a></button></td>
    </tr>';
    }
}

function deletebook($id)
{
    if ($del = delete('books', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete book';
    }
}

function orderslist()
{
    $res = fetchAll('orders');
    foreach ($res as $row) {
        $c = customfetch('users', [['id', '=', $row['uid']]]);
        echo '<tr>
        <th scope="row"> <a href="#" class="question_content"> '.$row['orderno'].'</a></th>
        <td>'.$row['bookname'].'</td>
        <td>'.$c[0]['name'].'</td>
        <td>'.$row['discountprice'].'</td>
        <td>'.$row['price'].'</td>
        <td>'.$row['discount'].'</td>
        <td>'.$row['dateadded'].'</td>
        <!-- <td><a href="#" class="status_btn">cover</a></td>

        <td><a href="#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

function authorsales()
{
    $a = fetchAll('authors');
    foreach ($a as $row) {
        $c = customfetch('orders', [['authorid', '=', $row['id']], ['status', '=', 'complete']], 'AND');
        $tt = 0;
        foreach ($c as $am) {
            $tt += $am['discountprice'];
        }
        $balance = $tt - $row['withdrawal'];
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['authname'].'</a></th>
        <td>'.$tt.'</td>
        <td>'.$row['withdrawal'].'</td>
        <td>'.$balance.'</td>
        <td><a id="'.$row['id'].'"  class="btn btn-primary " href="editsales?token='.$row['id'].'"><i class="fa fa-edit"></i></a></a></td>
       
        
    </tr>';
    }
}

function editsale($id, $totalavl, $amw, $amtw)
{
    if (empty(trim($amtw))) {
        echo 'Enter valid amount to withdraw';
    } else {
        if ($totalavl < $amtw) {
            echo 'insufficent balance';
        } else {
            $newbal = $amw + $amtw;
            if (update('authors', ['withdrawal' => $newbal], ['id' => $id]) == 'success') {
                echo 'Updated Successfully';
            } else {
                echo 'failed to withdraw';
            }
        }
    }
}

function viewallsales()
{
    $res = fetchAll('orders');
    foreach ($res as $row) {
        $sc = customfetch('authors', [['id', '=', $row['authorid']]]);
        $scc = $sc[0];
        echo ' <tr>
            <th scope="row"> <a href="backend/#" class="question_content"> '.$scc['authname'].'</a></th>
            <td>'.$row['bookname'].'</td>
            <td>'.$row['discountprice'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['discount'].'</td>
            <td>'.$row['dateadded'].'</td>
            <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

            <td><a href="backend/#" class="status_btn">Active</a></td> -->
        </tr>';
    }
}

function alltransaction()
{
    $res = fetchAll('transactions');
    foreach ($res as $row) {
        $cos = customfetch('users', [['id', '=', $row['uid']]]);
        $coss = $cos[0];
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['transid'].'</a></th>
        <td>'.$coss['name'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['timepaid'].'</td>
        <!-- <td>16</td>
        <td>$25.00</td> -->
        <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

        <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}
function addcoupon($quantity, $discount)
{
    $msg = '';
    for ($i = 1; $i <= $quantity; ++$i) {
        $e = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 3);

        $c = rand(000, 999);
        $d = 'NAC';
        $rec = $d.''.$c.''.$e;
        $record = [
            'coupname' => $rec,
            'percentage' => $discount,
            'status' => 'active',
            'dateadded' => date('jS F, Y'),
        ];
        $msg .= insert('coupon', $record);
    }
    $msg .= '';

    // echo $msg;

    echo 'couponsuccess';
}

function couponlist()
{
    $res = fetchAll('coupon');
    foreach ($res as $row) {
        echo ' <tr>
        <!-- <th scope="row"> <a href="backend/#" class="question_content"> title here 1</a></th> -->
        <td>'.$row['coupname'].'</td>
        <td>'.$row['percentage'].'</td>
        <td>'.$row['status'].'</td>
        <td><button id="'.$row['id'].'"  class="btn btn-danger delcoupon"><i class="fa fa-trash"></i></a></button></td>
        <!-- <td>16</td>
        <td>$25.00</td> -->
        <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

        <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

// delete coupon
function deletecoupon($id)
{
    if ($del = delete('coupon', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete book';
    }
}

function reviewlist()
{
    $res = fetchAll('reviews');
    foreach ($res as $row) {
        $b = customfetch('books', [['id', '=', $row['bid']]]);
        $book = $b[0];
        $u = customfetch('users', [['id', '=', $row['uid']]]);
        $user = $u[0];

        echo ' <tr>
        <!-- <th scope="row"> <a href="backend/#" class="question_content"> title here 1</a></th> -->
        <td>'.$user['name'].'</td>
        <td>'.$book['title'].'</td>
        <td>'.$row['feedback'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td><button id="'.$row['id'].'"  class="btn btn-danger delreview"><i class="fa fa-trash"></i></a></button></td>
        <!-- <td>16</td>
        <td>$25.00</td> -->
        <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

        <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

// deletereview
function deletereview($id)
{
    if ($del = delete('reviews', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete book';
    }
}

function addads($type, $link)
{
    if (empty($type) || empty(empty(trim($link)))) {
        echo 'All fields are required';
    } else {
        if (empty($_FILES['adimage']['name'])) {
            echo 'Upload Ads Banner ';
        } else {
            if (insert('ads', ['type' => $type, 'link' => $link, 'status' => 'active', 'dateadded' => date('jS F, Y')], $_FILES, '../yolkassets/upload') == 'success') {
                echo 'success';
            } else {
                echo 'Failed to add Ads';
            }
        }
    }
}
