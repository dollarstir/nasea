<?php
involve('functions');
// var_dump(logiccategory());

echo '<!doctype html>
    <html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nasea Book - Book Detail</title>
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
    <body class="product-details test-class">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- header-area-start -->
        <header>
			<!-- header-top-area-start -->
			<?php navbar1(0); ?>
			<!-- mobile-menu-area-end -->
		</header>
		<!-- header-area-end -->
		<!-- breadcrumbs-area-start -->
		<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">product-details</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- product-main-area-start -->
		<div class="product-main-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12 col-12 order-lg-1 order-1">
						<!-- product-main-area-start -->
						<div class="product-main-area">
							<div class="row">
								<div class="col-lg-5 col-md-6 col-12">
									<div class="flexslider">
										<ul class="slides">
											<?php

                                            $bokid = $context['id'];
                                            $roster = customfetch('books', [['id', '=', $bokid]]);
                                            $bk = $roster[0];
                                            $authorid = $bk['author'];
                                            $cp = customfetch('authors', [['id', '=', $authorid]]);
                                            $cons = $cp[0];
                                            echo'<li data-thumb="../yolkassets/upload/'.$bk['front'].'">
                                            <img src="../yolkassets/upload/'.$bk['front'].'" alt="woman" />
                                          </li>
                                          <li data-thumb="../yolkassets/upload/'.$bk['back'].'">
                                            <img src="../yolkassets/upload/'.$bk['back'].'" alt="woman" />
                                          </li>';

                                            ?>
											
										</ul>
									</div>
								</div>
								<div class="col-lg-7 col-md-6 col-12">
									<div class="product-info-main">
										<div class="page-title">
											<h1><?php echo $bk['title']; ?></h1>
										</div>
										<div class="product-info-stock-sku">
											<span><?php echo $cons['authname']; ?></span>
											
										</div>
										<!-- <div class="product-reviews-summary">
											<div class="rating-summary">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>
											<div class="reviews-actions">
												<a href="#">3 Reviews</a>
												<a href="#" class="view">Add Your Review</a>
											</div>
										</div> -->
										<div class="product-info-price">
											<div class="price-final">
												<span>&#8373;<?php echo $bk['price']; ?></span>
												<!-- <span class="old-price">$40.00</span> -->
											</div>
										</div>
										<div class="product-add-form">
											
												<!-- <div class="quality-button">
													<input class="qty" type="number" value="1">
												</div> -->
												<button class="btn btn-primary addtocart" id="<?php echo $bk['id']; ?>"  style="background-color: rgb(240, 124, 41) !important;border:none; margin :10px!important;">Add to cart</button>
											
										</div>
										<div class="product-social-links">
											<!-- <div class="product-addto-links">
												<a href="#"><i class="fa fa-heart"></i></a>
												<a href="#"><i class="fa fa-pie-chart"></i></a>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</div> -->
											<div class="product-addto-links-text">
												<!-- <p></p> -->
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<!-- product-main-area-end -->
						<!-- product-info-area-start -->
						<div class="product-info-area mt-80">
							<!-- Nav tabs -->
							<ul class="nav">
								<li><a class="active" href="#Details" data-toggle="tab">Book Description</a></li>
								<li><a href="#Reviews" data-toggle="tab">Reviews 3</a></li>
							</ul>
							<div class="tab-content">
                                <div class="tab-pane fade show active" id="Details">
                                    <div class="valu">
                                      <p><?php echo $bk['description']; ?></p>
                                      <!-- <ul>
                                        <li><i class="fa fa-circle"></i>Dual top handles.</li>
                                        <li><i class="fa fa-circle"></i>Adjustable shoulder strap.</li>
                                        <li><i class="fa fa-circle"></i>Full-length zipper.</li>
                                        <li><i class="fa fa-circle"></i>L 29" x W 13" x H 11".</li>
                                      </ul> -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Reviews">
                                    <div class="valu valu-2">
                                        <div class="section-title mb-60 mt-60">
                                            <h2>Customer Reviews</h2>
                                        </div>
                                        <ul>
                                            <?php
                                                $res = customfetch('reviews', [['bid', '=', $context['id']]], '', ['id' => 'DESC']);
                                                    foreach ($res as $row) {
                                                        $fu = customfetch('users', [['id', '=', $row['uid']]]);
                                                        $fufo = $fu[0];
                                                        echo '<li>
                                                
                                                        <div class="review-left">
                                                            <div class="review-content">
                                                                <h4>'.$row['feedback'].'</h4>
                                                            </div>
                                                            <div class="review-details">
                                                                <p class="review-author">Review by<a href="#">'.$fufo['name'].'</a></p>
                                                                <p class="review-date">Posted on <span>'.$row['dateadded'].'</span></p>
                                                            </div>
                                                        </div>
        
                                                        
                                                    </li>';
                                                    }
                                                        ?>

                                           
                                        </ul>
                                        <div class="review-add">
                                            <h3>You're reviewing:</h3>
                                            <?php
                                                $so = customfetch('books', [['id', '=', $context['id']]]);

                                                $s = $so[0];
                                                $authorid = $s['author'];
                                                $at = customfetch('authors', [['id', '=', $authorid]]);
                                                $att = $at[0];

                                             ?>
                                            <h4><?php echo $att['authname']; ?> Book</h4>
                                        </div>
                                        <!-- <div class="review-field-ratings">
                                            <span>Your Rating <sup>*</sup></span>
                                            <div class="control">
                                                <div class="single-control">
                                                    <span>Value</span>
                                                    <div class="review-control-vote">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single-control">
                                                    <span>Quality</span>
                                                    <div class="review-control-vote">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single-control">
                                                    <span>Price</span>
                                                    <div class="review-control-vote">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="review-form">
                                            <form action="#" class="review">
                                            <div class="single-form">
                                                <label>Name <sup>*</sup></label>
                                                    <input type="text" name="name" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['name'] : ''; ?>" readonly/>
                                                    <input type="hidden" name="uid" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['id'] : ''; ?>"/>
                                                    <input type="hidden" name="bid" value="<?php echo $context['id']; ?>">
                                                
                                            </div>
                                            
                                            <div class="single-form">
                                                <label>Review <sup>*</sup></label>
                                                
                                                    <textarea name="feedback" cols="10" rows="4" ></textarea>
                                            </div>
                                            
                                        </div>
                                        <div class="review-form-button">
                                            <button class="btn btn-primary" style="background-color:rgb(240, 124, 41)! important;border:none;" type="submit">Submit Review</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>	
						</div>
						<!-- product-info-area-end -->
						<!-- new-book-area-start -->
						
						<!-- new-book-area-start -->
					</div>
					<!-- <div class="col-lg-3 col-md-12 col-12 order-lg-2 order-2">
						<div class="shop-left"> -->
							<!-- <div class="left-title mb-20">
								<h4>Related Products</h4>
							</div> -->
							<!-- <div class="random-area mb-30">
								<div class="product-active-2 owl-carousel">
									<div class="product-total-2">
										<div class="single-most-product bd mb-18">
											<div class="most-product-img">
												<a href="#"><img src="img/product/20.jpg" alt="book" /></a>
											</div>
											<div class="most-product-content">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Endeavor Daytrip</a></h4>
												<div class="product-price">
													<ul>
														<li>$30.00</li>
														<li class="old-price">$33.00</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											<div class="most-product-img">
												<a href="#"><img src="img/product/21.jpg" alt="book" /></a>
											</div>
											<div class="most-product-content">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Savvy Shoulder Tote</a></h4>
												<div class="product-price">
													<ul>
														<li>$30.00</li>
														<li class="old-price">$35.00</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="single-most-product">
											<div class="most-product-img">
												<a href="#"><img src="img/product/22.jpg" alt="book" /></a>
											</div>
											<div class="most-product-content">
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
														<li>$35.00</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="product-total-2">
										<div class="single-most-product bd mb-18">
											<div class="most-product-img">
												<a href="#"><img src="img/product/23.jpg" alt="book" /></a>
											</div>
											<div class="most-product-content">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Voyage Yoga Bag</a></h4>
												<div class="product-price">
													<ul>
														<li>$30.00</li>
														<li class="old-price">$33.00</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											<div class="most-product-img">
												<a href="#"><img src="img/product/24.jpg" alt="book" /></a>
											</div>
											<div class="most-product-content">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="#">Impulse Duffle</a></h4>
												<div class="product-price">
													<ul>
														<li>$70.00</li>
														<li class="old-price">$74.00</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="single-most-product">
											<div class="most-product-img">
												<a href="#"><img src="img/product/22.jpg" alt="book" /></a>
											</div>
											<div class="most-product-content">
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
											</div>
										</div>
									</div>	
								</div>
							</div> -->
							<!-- <div class="banner-area mb-30">
								<div class="banner-img-2">
									<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/33.jpg" alt="banner" /></a>
								</div>
							</div> -->
							<!-- <div class="left-title-2 mb-30">
								<h2>Compare Products</h2>
								<p>You have no items to compare.</p>
							</div> -->
							<!-- <div class="left-title-2">
								<h2>My Wish List</h2>
								<p>You have no items in your wish list.</p>
							</div> -->
						<!-- </div>
					</div> -->
				</div>
			</div>
		</div>
		<!-- product-main-area-end -->
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
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="modal-tab">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="image-1">
                                            <img src="img/product/quickview-l4.jpg" alt="" />
                                        </div>
                                        <div class="tab-pane" id="image-2">
                                            <img src="img/product/quickview-l2.jpg" alt="" />
                                        </div>
                                        <div class="tab-pane" id="image-3">
                                            <img src="img/product/quickview-l3.jpg" alt="" />
                                        </div>
                                        <div class="tab-pane" id="image-4">
                                            <img src="img/product/quickview-l5.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="product-details-small quickview-active owl-carousel">
                                        <a class="active" href="#image-1"><img src="img/product/quickview-s4.jpg" alt="" /></a>
                                        <a href="#image-2"><img src="img/product/quickview-s2.jpg" alt="" /></a>
                                        <a href="#image-3"><img src="img/product/quickview-s3.jpg" alt="" /></a>
                                        <a href="#image-4"><img src="img/product/quickview-s5.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="modal-pro-content">
                                    <h3>Chaz Kangeroo Hoodie3</h3>
                                    <div class="price">
                                        <span>$70.00</span>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>	
                                    <div class="quick-view-select">
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
                                    </div>
                                    <form action="#">
                                        <input type="number" value="1" />
                                        <button>Add to cart</button>
                                    </form>
                                    <span><i class="fa fa-check"></i> In stock</span>
                                </div>
                            </div>
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
