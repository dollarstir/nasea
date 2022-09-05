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
            <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(main/img/slider/7.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="slider-content slider-animated-1 text-center">
                                <h1>Huge Sale</h1>
                                <h2 style="color:#f1f1f1;">Naseabooks</h2>
                                <h3 style="color:#f1f1f1;">Get a book for less than 20gh</h3>
                                <a href="books">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(main/img/slider/8.jpg);">
                <div class="container">
                    <div class="slider-content slider-content-2 slider-animated-1">
                        <h1>We can help get your</h1>
                        <h2>Books in Order</h2>
                        <h3>and Accessories</h3>
                        <a href="contact">Contact Us Today!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->
   
    <!-- banner-area-start -->

    <?php adverts('single', 1); ?>
   
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
								<?php books(4);

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
        </div>
    </div>
    <!-- new-book-area-start -->
    <!-- banner-static-area-start -->

    <?php adverts('double', 2); ?>
    
    <!-- banner-static-area-end -->
    <!-- most-product-area-start -->
    <div class="most-product-area pt-90 pb-100">
        <div class="container">
            <div class="row">
                <?php randomads(); ?>
                
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="block-newsletter">
                        <h2>Sign up for send newsletter</h2>
                        <p>You can be always up to date with our company new!</p>
                        <form action="#" class="newsletter">
                            <input type="email" name="email" placeholder="Enter your email address" /><br><br>
                            <button class="btn btn-primary" style="background-color: gray !important;border:none;" type="submit">Send Email</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- most-product-area-end -->
    <!-- testimonial-area-start -->
    <!-- <div class="testimonial-area ptb-100 bg">
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
    </div> -->
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
               <?php recentpoem(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- recent-post-area-end -->
    <!-- social-group-area-start -->
    <div class="social-group-area ptb-60">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6 col-12">
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
                </div> -->
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="section-title-3">
                        <h3>Stay Connected</h3>
                    </div>
                    <div class="link-follow">
                        <ul>
                            <li><a href="<?php viewinfo('twitter'); ?>"><i class="fa fa-whatsapp"></i></a></li>
                            <!-- <li><a href="main/#"><i class="fa fa-google-plus"></i></a></li> -->
                            <li><a href="<?php viewinfo('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php viewinfo('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                            <!-- <li><a href="main/#"><i class="fa fa-flickr"></i></a></li> -->
                            <!-- <li><a href="main/#"><i class="fa fa-vimeo"></i></a></li> -->
                            <li><a href="<?php viewinfo('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
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
                    <div class="row" id="prodpreview">
                        <!-- product will come here -->
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