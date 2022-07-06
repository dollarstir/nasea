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
    <script src="backend/js/custom.js"></script>';
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
