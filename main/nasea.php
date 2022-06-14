<?php

involve('functions');

begin('Welcome');

 ?>

<body>
    <!-- header-area-start -->
    <?php navbar(1); ?>
    <!-- header-area-end -->
    <!-- banner-area-start -->
    <!-- <div class="banner-area banner-res-large pt-30 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="main/#"><img src="main/img/banner/1.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Free shipping item</h4>
                            <p>For all orders over $500</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="main/#"><img src="main/img/banner/2.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Money back guarantee</h4>
                            <p>100% money back guarante</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="main/#"><img src="main/img/banner/3.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Cash on delivery</h4>
                            <p>Lorem ipsum dolor consecte</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="banner-img">
                            <a href="main/#"><img src="main/img/banner/4.png" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Help & Support</h4>
                            <p>Call us : + 0123.4567.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- banner-area-end -->
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(main/img/slider/1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="slider-content slider-animated-1 text-center">
                                <h1>Huge Sale</h1>
                                <h2>koparion</h2>
                                <h3>Now starting at £99.00</h3>
                                <a href="main/#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(main/img/slider/2.jpg);">
                <div class="container">
                    <div class="slider-content slider-content-2 slider-animated-1">
                        <h1>We can help get your</h1>
                        <h2>Books in Order</h2>
                        <h3>and Accessories</h3>
                        <a href="main/#">Contact Us Today!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->
   
    <!-- banner-area-start -->
    <div class="banner-area-5 mtb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-img-2">
                        <a href="main/#"><img src="main/img/banner/5.jpg" alt="banner" /></a>
                        <div class="banner-text">
                            <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                            <h2>Sale up to 30% off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area-end -->
  
    <!-- new-book-area-start -->
    <div class="new-book-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                        <h2>Latest Books</h2>
                    </div>
                </div>
            </div>
            	<!-- tab-area-start -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="th">
							<div class="row">
								<?php books(); ?>
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
        </div>
    </div>
    <!-- new-book-area-start -->
    <!-- banner-static-area-start -->
    <div class="banner-static-area bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-shadow-hover xs-mb">
                        <a href="main/#"><img src="main/img/banner/8.jpg" alt="banner" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-shadow-hover">
                        <a href="main/#"><img src="main/img/banner/9.jpg" alt="banner" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-static-area-end -->
    <!-- most-product-area-start -->
    <div class="most-product-area pt-90 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title-2 mb-30">
                        <h3>Book</h3>
                    </div>
                    <div class="product-active-2 owl-carousel">
                        <div class="product-total-2">
                            <div class="single-most-product bd mb-18">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/20.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Endeavor Daytrip</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/21.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Savvy Shoulder Tote</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/22.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Compete Track Tote</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/23.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Voyage Yoga Bag</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/24.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Impulse Duffle</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/22.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Fusion Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$59.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title-2 mb-30">
                        <h3>Audio books </h3>
                    </div>
                    <div class="product-active-2 owl-carousel">
                        <div class="product-total-2">
                            <div class="single-most-product bd mb-18">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/23.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Voyage Yoga Bag</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/24.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Impulse Duffle</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/26.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Driven Backpack1</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$40.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-total-2">
                            <div class="single-most-product bd mb-18">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/20.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Endeavor Daytrip</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/21.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Savvy Shoulder Tote</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/22.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Compete Track Tote</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$35.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title-2 mb-30">
                        <h3>children’s books</h3>
                    </div>
                    <div class="product-active-2 owl-carousel">
                        <div class="product-total-2">
                            <div class="single-most-product bd mb-18">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/27.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Crown Summit</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$36.00</li>
                                            <li class="old-price">$38.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-most-product bd mb-18">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/28.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Driven Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
                                            <li class="old-price">$36.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-most-product">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/29.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Endeavor Daytrip</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$30.00</li>
                                            <li class="old-price">$33.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-total-2">
                            <div class="single-most-product bd mb-18">
                                <div class="most-product-img">
                                    <a href="main/#"><img src="main/img/product/23.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Voyage Yoga Bag</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/24.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Impulse Duffle</a></h4>
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
                                    <a href="main/#"><img src="main/img/product/22.jpg" alt="book" /></a>
                                </div>
                                <div class="most-product-content">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="main/#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="main/#">Fusion Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$59.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="block-newsletter">
                        <h2>Sign up for send newsletter</h2>
                        <p>You can be always up to date with our company new!</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your email address" />
                        </form>
                        <a href="main/#">Send Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- most-product-area-end -->
    <!-- testimonial-area-start -->
    <div class="testimonial-area ptb-100 bg">
        <div class="container">
            <div class="row">
                <div class="testimonial-active owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <a href="main/#"><i class="fa fa-quote-right"></i></a>
                            </div>
                            <div class="testimonial-text">
                                <p>I'm so happy with all of the themes, great support, could not wish for more. These people are <br /> geniuses ! Kudo's from the Netherlands !</p>
                                <a href="main/#">Sandy Wilcke/user</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <a href="main/#"><i class="fa fa-quote-right"></i></a>
                            </div>
                            <div class="testimonial-text">
                                <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support ,<br /> advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                                <a href="main/#">Sandy Wilcke/user</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->
    <!-- recent-post-area-start -->
    <div class="recent-post-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-30 section-title-res">
                        <h2>Latest from our blog</h2>
                    </div>
                </div>
                <div class="post-active owl-carousel text-center">
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="main/#"><img src="main/img/post/1.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">06</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="main/#">Nam tincidunt vulputate felis</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="main/blog-details.html"><img src="main/img/post/2.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">06</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="main/blog-details.html">Interdum et malesuada</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="main/blog-details.html"><img src="main/img/post/3.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">07</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="main/blog-details.html">What is Bootstrap?</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="post-img">
                                <a href="main/blog-details.html"><img src="main/img/post/4.jpg" alt="post" /></a>
                                <div class="blog-date-time">
                                    <span class="day-time">08</span>
                                    <span class="moth-time">Dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3><a href="main/blog-details.html">Etiam eros massa</a></h3>
                                <span class="meta-author"> Demo koparion </span>
                                <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent-post-area-end -->
    <!-- social-group-area-start -->
    <div class="social-group-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title-3">
                        <h3>Latest Tweets</h3>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-icon">
                            <a href="main/#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="twitter-text">
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum notare quam
                            </p>
                            <a href="main/#">koparion</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title-3">
                        <h3>Stay Connected</h3>
                    </div>
                    <div class="link-follow">
                        <ul>
                            <li><a href="main/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="main/#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="main/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="main/#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="main/#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="main/#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="main/#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- social-group-area-end -->
    <!-- footer-area-start -->
  <?php footer(); ?>
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
                                        <img src="main/img/product/quickview-l4.jpg" alt="" />
                                    </div>
                                    <div class="tab-pane" id="image-2">
                                        <img src="main/img/product/quickview-l2.jpg" alt="" />
                                    </div>
                                    <div class="tab-pane" id="image-3">
                                        <img src="main/img/product/quickview-l3.jpg" alt="" />
                                    </div>
                                    <div class="tab-pane" id="image-4">
                                        <img src="main/img/product/quickview-l5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="product-details-small quickview-active owl-carousel">
                                    <a class="active" href="main/#image-1"><img src="main/img/product/quickview-s4.jpg" alt="" /></a>
                                    <a href="main/#image-2"><img src="main/img/product/quickview-s2.jpg" alt="" /></a>
                                    <a href="main/#image-3"><img src="main/img/product/quickview-s3.jpg" alt="" /></a>
                                    <a href="main/#image-4"><img src="main/img/product/quickview-s5.jpg" alt="" /></a>
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
    <?php scripts(); ?>
</body>

</html>