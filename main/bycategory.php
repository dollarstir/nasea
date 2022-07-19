<?php

involve('functions');
$autod = customfetch('category', [['id', '=', $context['id']]]);

echo '<!doctype html>
    <html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>'.$autod[0]['catname'].' Books </title>
        <meta name="description" content="Nasea books is one of the Best E-book stores in the world">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="../main/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../main/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../main/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../main/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../main/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../main/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../main/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../main/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../main/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../main/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../main/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../main/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../main/favicon/favicon-16x16.png">
<link rel="manifest" href="../main/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../main/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="../main/css/bootstrap.min.css">
        <!-- animate css -->
        '.Yolk::uicore('cssa').'
        <link rel="stylesheet" href="../main/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="../main/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="../main/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="../main/css/font-awesome.min.css">
        <!-- flexslider.css-->
        <link rel="stylesheet" href="../main/css/flexslider.css">
        <!-- chosen.min.css-->
        <link rel="stylesheet" href="../main/css/chosen.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="../main/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="../main/css/responsive.css">
        <!-- modernizr css -->
        
        <script src="../main/js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>';

 ?>

<body class="shop">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->
	<!-- header-area-start -->
	<header>
		<!-- header-top-area-start -->
        <?php navbar1(3); ?>
		<!-- mobile-menu-area-end -->
	</header>
	<!-- header-area-end -->
	<!-- breadcrumbs-area-start -->
	<div class="breadcrumbs-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumbs-menu">
						<!-- <ul>
							<li><a href="home">Home</a></li>
							<li><a href="books" class="active">shop</a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumbs-area-end -->
	<!-- shop-main-area-start -->
	<div class="shop-main-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50 mt-xs-40">
					<div class="shop-left">
						<div class="section-title-5 mb-30">
							<h2>Shopping Options</h2>
						</div>
						<div class="left-title mb-20">
							<h4>Category</h4>
						</div>
						<div class="left-menu mb-30">
							<ul>
								<?php categorypluscount('sub'); ?>
								
							</ul>
						</div>
						
						<div class="left-title mb-20">
							<h4>Authors</h4>
						</div>
						<div class="left-menu mb-30">
							<ul>
								<?php authorpluscount('sub'); ?>
								
							</ul>
						</div>
						
						<div class="banner-area mb-30">
							<?php adverts('side', 1); ?>
						</div>
						
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">
					<!-- <div class="category-image mb-30">
						<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/32.jpg" alt="banner" /></a>
					</div> -->
					<div class="section-title-5 mb-30">
						<h2>Book By category( <?php echo $autod[0]['catname']; ?>)</h2>
					</div>
					<!-- <div class="toolbar mb-30">
						<div class="shop-tab">
							<div class="tab-3">
								<ul class="nav">
									<li><a class="active" href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
									<li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
								</ul>
							</div>
							<div class="list-page">
								<p>Items 1-9 of 11</p>
							</div>
						</div>
						<div class="field-limiter">
							<div class="control">
								<span>Show</span>
								
								<select data-placeholder="Default Sorting" style="width:50px;" class="chosen-select" tabindex="1">
									<option value="Sorting">1</option>
									<option value="popularity">2</option>
									<option value="rating">3</option>
									<option value="date">4</option>
								</select>
								
							</div>
						</div>
						<div class="toolbar-sorter">
							<span>Sort By</span>
							<select id="sorter" class="sorter-options" data-role="sorter">
								<option selected="selected" value="position"> Position </option>
								<option value="name"> Product Name </option>
								<option value="price"> Price </option>
							</select>
							<a href="#"><i class="fa fa-arrow-up"></i></a>
						</div>
					</div> -->
					<!-- tab-area-start -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="th">
							<div class="row">
								
								
							<?php

                            if (isset($_GET['page'])) {
                                bycatpage($context['id'], 'sub', 20, $_GET['page']);
                            } else {
                                bycatpage($context['id'], 'sub', 20, 1);
                            }

?>
							</div>
						</div>
						<div class="tab-pane fade" id="list">
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="#">
													<img src="main/img/product/3.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Crown Summit</a></h4>
												<div class="product-price">
													<ul>
														<li>$36.00</li>
														<li class="old-price">$38.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="#">
													<img src="main/img/product/18.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Driven Backpack</a></h4>
												<div class="product-price">
													<ul>
														<li>$34.00</li>
														<li class="old-price">$36.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="#">
													<img src="main/img/product/10.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Fusion Backpack</a></h4>
												<div class="product-price">
													<ul>
														<li>$59.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="#">
													<img src="main/img/product/5.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Set of Sprite Yoga Straps</a></h4>
												<div class="product-price">
													<ul>
														<li> <span>Starting at</span>$34.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="#">
													<img src="main/img/product/19.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Compete Track Tote</a></h4>
												<div class="product-price">
													<ul>
														<li>$32.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
						</div>
					</div>
					<!-- tab-area-end -->
					<!-- pagination-area-start -->
					<div class="pagination-area mt-50">
						<div class="list-page-2">
							<!-- <p>Items 1-9 of 11</p> -->
						</div>
						<div class="page-number">
								
							<ul>
							
							<?php

                            if (isset($_GET['page'])) {
                                echo   mycustomepagecount($context['id'], 'sub', 20, $_GET['page']);
                            } else {
                                echo mycustomepagecount($context['id'], 'sub', 20, 1);
                            } ?>
								
							</ul>
						</div>
					</div>
					<!-- pagination-area-end -->
				</div>
			</div>
		</div>
	</div>
	<!-- shop-main-area-end -->
	<!-- footer-area-start -->
	<?php footer1(); ?>
	<!-- footer-area-end -->
	<!-- Modal -->
	<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row" id="prodpreview">
                        <!-- product will come here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Modal end -->






	<!-- all js here -->
    <?php scripts2(); ?>
</body>

</html>