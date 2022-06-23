<?php

involve('functions');

echo '<!doctype html>
    <html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nasea Book - Payment</title>
        <meta name="description" content="Nasea books is one of the Best E-book stores in the world">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../main/img/favicon.png">
    
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
    <body class="checkout">
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
								<li><a href="#" class="active">checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- entry-header-area-start -->
		<div class="entry-header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="entry-header-title">
							<h2>Payment</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area-end -->
		<!-- coupon-area-area-start -->
		<div class="coupon-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="coupon-accordion">
							<?php  echo (!isset($_SESSION['id'])) ? '<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
							<div class="coupon-content" id="checkout-login">
								<div class="coupon-info">
									<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
									<form action="#">
										<p class="form-row-first">
											<label>Username or email <span class="required">*</span></label>
											<input type="text">
										</p>
										<p class="form-row-last">
											<label>Password  <span class="required">*</span></label>
											<input type="text">
										</p>
										<p class="form-row">					
											<input type="submit" value="Login">
											<label>
												<input type="checkbox">
												 Remember me 
											</label>
										</p>
										<p class="lost-password">
											<a href="#">Lost your password?</a>
										</p>
									</form>
								</div>
							</div>' : ''; ?>
							<!-- <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
							<div class="coupon-checkout-content" id="checkout_coupon">
								<div class="coupon-info">
									<form action="#" class="applycoupon">
										<p class="checkout-coupon">
											<input type="text" placeholder="Coupon code" name="code">
											<input type="submit" value="Apply Coupon">
										</p>
									</form>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- coupon-area-area-end -->
		<!-- checkout-area-start -->
		<div class="checkout-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-12">
					    <!-- <form action="#" class="checkout"> -->
                            <div class="row">
                                
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="your-order">
                                        <h3>Your order</h3>
                                        <div class="your-order-table table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>							
                                                </thead>
                                                <tbody id="checkcart">
                                                    <?php echo paycart($context['token']); ?>
                                                </tbody>
                                                <tfoot>
                                                    
                                                    <tr class="order-total">
                                                        <th>Order Total</th>
                                                        <td><strong><span class="amount">&#8373;<span id="ordtt"><?php echo paytotal($context['token']); ?></span></span></strong>
                                                        </td>
                                                    </tr>								
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="payment-method">
                                            <div class="payment-accordion">
                                                <div class="collapses-group">
                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <!-- <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    Direct Bank Transfer
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Cheque Payment
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="panel-body">
                                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    MObile Money <img src="../main/img/momo.png" alt="payment" />
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                    <p>Buy books with mobile money online</p>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-button-payment">
                                                <?php echo Yolkpay::handler();
                                                    $d = user();
                                                    $name = explode(' ', $d['name']);
                                                    $fname = $name[0];
                                                    $lname = $name[1];

                                                echo Yolkpay::payscript($fname, $lname, $d['email'], $d['phone'], paytotal($context['token']), '', $context['token']);
                                                echo Yolkpay::pay('Pay Now');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </form> -->
					</div>
				</div>
			</div>
		</div>
		<!-- checkout-area-end -->
		<!-- footer-area-start -->
		<?php footer2(); ?>
		<!-- footer-area-end -->
		
		
		<!-- all js here -->
		<?php scripts2(); ?>
    </body>
</html>
