<?php

// by dollarstir

function adminhead($title)
{
    mainchecker('admin', 'adminlogin');
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
    
       <!-- <link rel="stylesheet" href="backend/vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="backend/vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="backend/vendors/datatable/css/buttons.dataTables.min.css" />-->


        <script src="//code.jquery.com/jquery-3.5.1.js"></script>


        <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    
        <link href="//cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    
        <script src="////cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="backend/default/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="backend/default/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="backend/default/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="backend/default/files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">


    
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

    

    <script src="backend/js/metisMenu.js"></script>

    <script src="backend/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="backend/vendors/chartlist/Chart.min.js"></script>

    <script src="backend/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="backend/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="backend/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <!--<script src="backend/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="backend/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="backend/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="backend/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="backend/vendors/datatable/js/jszip.min.js"></script>
    <script src="backend/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="backend/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="backend/vendors/datatable/js/buttons.php5.min.js"></script>
    <script src="backend/vendors/datatable/js/buttons.print.min.js"></script>-->

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



    <!-- data-table js -->
    <script src="backend/default/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="backend/default/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   
    
    <script src="backend/default/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="backend/default/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    
    <script src="backend/default/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="backend/default/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="https://demo.dashboardpack.com/sales-html/js/dashboard_init.js"></script>
    <script src="backend/js/custom.js"></script>
    '.Yolk::uicore('jsa').'
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
    
    <script src="processor/processor.js"></script>
    ';
}

function mainsidebar()
{
    $getl = fetchAll('settings');
    echo '<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="home"><img src="yolkassets/upload/'.$getl[0]['applogo'].'" style="height:150px;width:200px;" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Users</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="index.php">Add users</a></li> -->
            <li><a href="users">view Users</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Category</span>
        </a>
        <ul>
            <li><a class="active" href="newcategory">Add Category</a></li>
            <li><a href="viewcategories">view Category</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Author</span>
        </a>
        <ul>
            <li><a class="active" href="newauthor">Add Author</a></li>
            <li><a href="viewauthors">view Author</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Books</span>
        </a>
        <ul>
            <li><a class="active" href="newbook">Add Books</a></li>
            <li><a href="viewbooks">view Books</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Orders</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="addOrders.php">Add Orders</a></li> -->
            <li><a href="vieworders">view Orders</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Sales</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="index.php">Add Sales</a></li> -->
            <li><a href="viewsales">view Author Sales</a></li>
            <li><a href="viewallsales">View All Sales</a></li>
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Transactions</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="index.php">Add Transactions</a></li> -->
            <li><a href="viewtransactions   ">view Transactions</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Reviews</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="index.php">Add Reviews</a></li> -->
            <li><a href="viewreviews">view Reviews</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Coupons</span>
        </a>
        <ul>
            <li><a class="active" href="newcoupon">Add Coupons</a></li>
            <li><a href="viewcoupons">view Coupons</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Ads</span>
        </a>
        <ul>
            <li><a  href="newads">Add Ads</a></li>
            <li><a href="viewads">View Ads</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Poems</span>
        </a>
        <ul>
            <li><a class="active" href="newpoem">Add Poems</a></li>
            <li><a href="viewpoems">view Poems</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Messages</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="index.php">Add Messages</a></li> -->
            <li><a href="viewmessages">view Messages</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Pages</span>
        </a>
        <ul>
            <li><a class="active" href="editabout">About Page</a></li>
            <li><a href="editcontact">Contact Page</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Settings</span>
        </a>
        <ul>
            <li><a class="active" href="app">App</a></li>
            <li><a href="social">Social</a></li>
            <li><a href="profile">Profile</a></li>

            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/2.svg" alt="">
            </div>
            <span>Apps</span>
        </a>
        <ul>
            <li><a href="editor.php">editor</a></li>
            <li><a href="mail_box.php">Mail Box</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </li> -->
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/3.svg" alt="">
            </div>
            <span>UI Kits</span>
        </a>
        <ul>
            <li><a href="colors.php">colors</a></li>
            <li><a href="Alerts.php">Alerts</a></li>
            <li><a href="buttons.php">Buttons</a></li>
            <li><a href="modal.php">modal</a></li>
            <li><a href="dropdown.php">Droopdowns</a></li>
            <li><a href="Badges.php">Badges</a></li>
            <li><a href="Loading_Indicators.php">Loading Indicators</a></li>
            <li><a href="State_color.php">State color</a></li>
            <li><a href="typography.php">Typography</a></li>
            <li><a href="datepicker.php">Date Picker</a></li>
        </ul>
    </li> -->
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/4.svg" alt="">
            </div>
            <span>forms</span>
        </a>
        <ul>
            <li><a href="Basic_Elements.php">Basic Elements</a></li>
            <li><a href="Groups.php">Groups</a></li>
            <li><a href="Max_Length.php">Max Length</a></li>
            <li><a href="Layouts.php">Layouts</a></li>
        </ul>
    </li>  -->
    <!--
    <li class="">
        <a href="Board.php" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/5.svg" alt="">
            </div>
            <span>Board</span>
        </a>
    </li>
    <li class="">
        <a href="invoice.php" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/6.svg" alt="">
            </div>
            <span>Invoice</span>
        </a>
    </li>
    <li class="">
        <a href="calender.php" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/7.svg" alt="">
            </div>
            <span>Calander</span>
        </a>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/8.svg" alt="">
            </div>
            <span>Products</span>
        </a>
        <ul>
            <li><a href="Products.php">Products</a></li>
            <li><a href="Product_Details.php">Product Details</a></li>
            <li><a href="Cart.php">Cart</a></li>
            <li><a href="Checkout.php">Checkout</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/8.svg" alt="">
            </div>
            <span>Icons</span>
        </a>
        <ul>
            <li><a href="Fontawesome_Icon.php">Fontawesome Icon</a></li>
            <li><a href="themefy_icon.php">themefy icon</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/9.svg" alt="">
            </div>
            <span>Animations</span>
        </a>
        <ul>
            <li><a href="wow_animation.php">Animate</a></li>
            <li><a href="Scroll_Reveal.php">Scroll Reveal</a></li>
            <li><a href="tilt.php">Tilt Animation</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/10.svg" alt="">
            </div>
            <span>Components</span>
        </a>
        <ul>
            <li><a href="accordion.php">Accordions</a></li>
            <li><a href="Scrollable.php">Scrollable</a></li>
            <li><a href="notification.php">Notifications</a></li>
            <li><a href="carousel.php">Carousel</a></li>
            <li><a href="Pagination.php">Pagination</a></li>
        </ul>
    </li> -->
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/11.svg" alt="">
            </div>
            <span>Table</span>
        </a>
        <ul>
            <li><a href="data_table.php">Data Tables</a></li>
            <li><a href="bootstrap_table.php">Bootstrap</a></li>
        </ul>
    </li> -->
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/12.svg" alt="">
            </div>
            <span>Cards</span>
        </a>
        <ul>
            <li><a href="basic_card.php">Basic Card</a></li>
            <li><a href="theme_card.php">Theme Card</a></li>
            <li><a href="dargable_card.php">Draggable Card</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/13.svg" alt="">
            </div>
            <span>Charts</span>
        </a>
        <ul>
            <li><a href="chartjs.php">ChartJS</a></li>
            <li><a href="apex_chart.php">Apex Charts</a></li>
            <li><a href="chart_sparkline.php">Chart sparkline</a></li>
            <li><a href="am_chart.php">am-charts</a></li>
            <li><a href="nvd3_charts.php">nvd3 charts.</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/14.svg" alt="">
            </div>
            <span>Widgets</span>
        </a>
        <ul>
            <li><a href="chart_box_1.php">Chart Boxes 1</a></li>
            <li><a href="profilebox.php">Profile Box</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/15.svg" alt="">
            </div>
            <span>Maps</span>
        </a>
        <ul>
            <li><a href="mapjs.php">Maps JS</a></li>
            <li><a href="vector_map.php">Vector Maps</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/16.svg" alt="">
            </div>
            <span>Pages</span>
        </a>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="resister.php">Register</a></li>
            <li><a href="error_400.php">Error 404</a></li>
            <li><a href="error_500.php">Error 500</a></li>
            <li><a href="forgot_pass.php">Forgot Password</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </li> -->
</ul>
</nav>';
}

function admintopbar()
{
    echo'<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a class="bell_notification_clicker nav-link-notify" href="viewreviews"> <img src="backend/img/icon/bell.svg" alt="">
                            </a>

                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href=""><img src="backend/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Cool Marketing </h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href=""><img src="backend/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Awesome packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>what a packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Cool Marketing </h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Awesome packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>what a packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="backend/#" class="btn_1">See More</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a class="CHATBOX_open nav-link-notify" href="viewmessages"> <img src="backend/img/icon/msg.svg" alt=""> </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="yolkassets/upload/'.$_SESSION['admin']['pic'].'" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <!--<p>Neurologist </p>-->
                                <h5>'.$_SESSION['admin']['name'].'</h5>
                            </div>
                            <div class="profile_info_details">
                                <a href="profile">My Profile </a>
                                <a href="app">Settings</a>
                                <button class="adminlogout"  style="border:none;background-color:transparent;padding:4px;">Log Out </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
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
         <td><button id="'.$row['id'].'"  class="btn btn-danger delcustomer"><i class="fa fa-trash"></i></button></td>
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
       
        <td><a href="editcat?token='.$row['id'].'"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
         <button id="'.$row['id'].'"  class="btn btn-danger delcategory"><i class="fa fa-trash"></i></button></td> 
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

// delete users

function deletecustomer($id)
{
    if ($del = delete('users', [['id', '=', $id]]) == 'deleted') {
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
        
         <td><a href="editauthor?token='.$row['id'].'"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
         <button id="'.$row['id'].'"  class="btn btn-danger delauthor"><i class="fa fa-trash"></i></a></button></td>
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

        <td><a href="editbook?token='.$row['id'].'"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
        <button id="'.$row['id'].'"  class="btn btn-danger delbook"><i class="fa fa-trash"></i></a></button></td>
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
        echo 'Failed to delete coupon';
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
        echo 'Failed to delete review';
    }
}

function addads($type, $link)
{
    if (empty($type) || empty(trim($link))) {
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

function adslist()
{
    $res = fetchAll('ads');
    foreach ($res as $row) {
        echo ' <tr>
        <!-- <th scope="row"> <a href="backend/#" class="question_content"> title here 1</a></th> -->
        <td>'.$row['type'].'</td>
        <td>'.$row['link'].'</td>
        <td><img src="yolkassets/upload/'.$row['adimage'].'" style="width:100px;height:150px;"/></td>
        <td>'.$row['status'].'</td>
        <td><button id="'.$row['id'].'"  class="btn btn-danger delads"><i class="fa fa-trash"></i></a></button></td>
        <!-- <td>16</td>
        <td>$25.00</td> -->
        <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

        <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

// delete ads
function deleteads($id)
{
    if ($del = delete('ads', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete ads';
    }
}

function addpoem($title, $description)
{
    if (empty(trim($title)) || empty(trim($description))) {
        echo 'All fields are required';
    } else {
        if (empty($_FILES['image']['name'])) {
            echo 'Upload Cover Image';
        } else {
            if (insert('blog', ['title' => $title, 'description' => $description, 'dateadded' => date('jS F, Y')], $_FILES, '../yolkassets/upload') == 'success') {
                echo 'success';
            } else {
                echo 'failed to add poem';
            }
        }
    }
}

function poemlist()
{
    $res = fetchAll('blog');
    foreach ($res as $row) {
        echo ' <tr>
        <!-- <th scope="row"> <a href="backend/#" class="question_content"> title here 1</a></th> -->
        <td>'.$row['title'].'</td>
        <td>'.$row['description'].'</td>
        <td><img src="yolkassets/upload/'.$row['image'].'" style="width:100px;height:150px;"/></td>
       
        <td><button id="'.$row['id'].'"  class="btn btn-danger delpoem"><i class="fa fa-trash"></i></a></button></td>
        <!-- <td>16</td>
        <td>$25.00</td> -->
        <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

        <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

// delete poem
function deletepoem($id)
{
    if ($del = delete('blog', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete poem';
    }
}

function messagelist()
{
    $res = fetchAll('messages');
    foreach ($res as $row) {
        echo ' <tr>
        <!-- <th scope="row"> <a href="backend/#" class="question_content"> title here 1</a></th> -->
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['subject'].'</td>
        <td>'.$row['message'].'</td>
       
        <td><button id="'.$row['id'].'"  class="btn btn-danger delmessage"><i class="fa fa-trash"></i></a></button></td>
        <!-- <td>16</td>
        <td>$25.00</td> -->
        <!-- <td><a href="backend/#" class="status_btn">cover</a></td>

        <td><a href="backend/#" class="status_btn">Active</a></td> -->
    </tr>';
    }
}

// delete message

function deletemessage($id)
{
    if ($del = delete('messages', [['id', '=', $id]]) == 'deleted') {
        echo 'deleted';
    } else {
        echo 'Failed to delete poem';
    }
}

function viewabout($data)
{
    $res = fetchAll('aboutpage');
    echo $res[0][$data];
}

function edibit($who, $mission, $vision)
{
    if (empty(trim($who)) || empty(trim($mission)) || empty(trim($vision))) {
        echo 'all filed are required';
    } else {
        if (update('aboutpage', ['who' => $who, 'mission' => $mission, 'vision' => $vision]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to Update';
        }
    }
}

function editcontact($appemail, $appcontact, $appaddress)
{
    if (empty(trim($appemail)) || empty(trim($appcontact)) || empty(trim($appaddress))) {
        echo 'all filed are required';
    } else {
        if (update('settings', ['appemail' => $appemail, 'appcontact' => $appcontact, 'appaddress' => $appaddress]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to Update';
        }
    }
}

function viewcontinfo($data)
{
    $res = fetchAll('settings');
    echo $res[0][$data];
}

function viewadmininfo($data)
{
    // session_start();
    $res = customfetch('solo', [['id', '=', $_SESSION['admin']['id']]]);
    echo $res[0][$data];
}

function editapp($appname)
{
    if (empty(trim($appname))) {
        echo 'App name cannot be empty';
    } else {
        if (!isset($_FILES['applogo'])) {
            echo 'Upload app logo';
        } else {
            if (update('settings', ['appname' => $appname], [], $_FILES, '../yolkassets/upload') == 'success') {
                echo 'Updated Successfully';
            } else {
                echo 'Failed to update';
            }
        }
    }
}
function editsocial($facebook, $twitter, $instagram, $linkedin)
{
    if (update('settings', ['facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram, 'linkedin' => $linkedin]) == 'success') {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update';
    }
}

function adminlogin($email, $password)
{
    if (empty(trim($email)) || empty(trim($password))) {
        echo 'email or password cannot be empty';
    } else {
        if (authenticate('solo', [['email', '=', $email]]) == 'success') {
            if (authenticate('solo', [['password', '=', md5($password)]]) == 'success') {
                if (loginauth('solo', 'admin', [['email', '=', $email], ['password', '=', md5($password)]], 'AND') == 'success') {
                    echo 'adminloginsuccess';
                } else {
                    echo 'Failed to login';
                }
            } else {
                echo 'Invalid login credentials';
            }
        } else {
            echo 'email not in records';
        }
    }
}

function editprofile($id, $name, $email, $phone)
{
    if (empty(trim($name)) || empty(trim($email)) || empty(trim($phone))) {
        echo 'All fields are required';
    } else {
        if (update('solo', ['name' => $name, 'email' => $email, 'phone' => $phone], ['id' => $id]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to Update';
        }
    }
}

function getdata($table, $cp, $data)
{
    $d = customfetch($table, [['id', '=', $cp]]);

    echo $d[0][$data];
}

function editcategory($id, $catname)
{
    if (empty(trim($catname))) {
        echo 'Category name cannot be empty';
    } else {
        if (update('category', ['catname' => $catname], ['id' => $id]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to update';
        }
    }
}
function editauthor($id, $authname, $authnumber, $authemail)
{
    if (empty(trim($authname)) || empty(trim($authnumber)) || empty(trim($authemail))) {
        echo 'Author details cannot be empty';
    } else {
        if (update('authors', ['authname' => $authname, 'authnumber' => $authnumber, 'authemail' => $authemail], ['id' => $id]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to update';
        }
    }
}

function editbook($id, $title, $author, $description, $category, $price)
{
    if (empty(trim($title)) || empty(trim($description)) || empty(trim($price))) {
        echo 'book details cannot be empty';
    } else {
        if (update('books', ['title' => $title, 'author' => $author, 'description' => $description, 'category' => $category, 'price' => $price], ['id' => $id], $_FILES, '../yolkassets/upload') == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to update';
        }
    }
}
