<?php

involve('functions');

begin('Cart');

 ?>
    <body class="cart">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- header-area-start -->
        <header>
			<!-- header-top-area-start -->
            <?php navbar(7); ?>
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
								<li><a href="#" class="active">cart</a></li>
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
							<h2>Cart</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area-end -->
		<!-- cart-main-area-start -->
		<div class="cart-main-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form action="#">
							<div class="table-content table-responsive mb-15 border-1">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<!-- <th class="product-quantity">Quantity</th> -->
											<!-- <th class="product-subtotal">Total</th> -->
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody id="vcart">
										<?php echo viewcartmain(); ?>
										<!-- <tr>
											<td class="product-thumbnail"><a href="#"><img src="https://htmldemo.net/koparion/koparion/img/cart/2.jpg" alt="man" /></a></td>
											<td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
											<td class="product-price"><span class="amount">£50.00</span></td>
											<td class="product-quantity"><input type="number" value="1"></td>
											<td class="product-subtotal">£50.00</td>
											<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
										</tr> -->
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="buttons-cart mb-30">
                            <ul>
                                <!-- <li><a href="#">Update Cart</a></li> -->
                                <li><a href="books">Continue Shopping</a></li>
                            </ul>
                        </div>
                        <div class="coupon">
                            <h3>Coupon</h3>
                            <p>Enter your coupon code if you have one.</p>
                            <form action="#" class="applycoupon">
                                <input type="text" placeholder="Coupon code" name="code">
                                <input type="submit" value="Apply Coupon">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cart_totals">
                            <h2>Cart Totals</h2>
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
                                            <span class="amount">&#8373;<span id="mku"><?php echo cartsubtotal(); ?></span></span>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <td> <label>
                                                                    Discount <span class="amount"><span id="diskc"><?php echo discount(); ?></span>%</span>
                                                                </label></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                        <strong><span class="amount">&#8373;<span id="ordtt"><?php echo carttotal(); ?></span></span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                <a href="checkout">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- cart-main-area-end -->
		<!-- footer-area-start -->
		<?php footer(); ?>
		<!-- footer-area-end -->
		
		
		<!-- all js here -->
		<?php scripts(); ?>
    </body>
</html>
