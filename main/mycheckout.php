<?php

involve('functions');

begin('Checkout');

if (isset($_SESSION['user'])) {
    $user = user();
}

// echo $user['name'];

 ?>
    <body class="checkout">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- header-area-start -->
        <header>
			<!-- header-top-area-start -->
            <?php navbar(0); ?>
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
							<h2>Checkout</h2>
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
							<?php  echo !isset($_SESSION['user']) ? '<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
							<div class="coupon-content" id="checkout-login">
								<div class="coupon-info">
									<!--<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>-->
									<form action="#" class="login1">
										<p class="form-row-first">
											<label>Username or email <span class="required">*</span></label>
											<input type="text" name="login">
										</p>
										<p class="form-row-last">
											<label>Password  <span class="required">*</span></label>
											<input type="text" name="password"> 
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
							<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
							<div class="coupon-checkout-content" id="checkout_coupon">
								<div class="coupon-info">
									<form action="#" class="applycoupon">
										<p class="checkout-coupon">
											<input type="text" placeholder="Coupon code" name="code">
											<input type="submit" value="Apply Coupon">
										</p>
									</form>
								</div>
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
					    <form action="#" class="checkout">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                <div class="checkbox-form">						
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class=" col-lg-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select name="country">
                                                  <option value="<?php echo isset($_SESSION['user']) ? $user['country'] : ''; ?>"><?php echo isset($_SESSION['user']) ? $user['country'] : 'Select Country'; ?></option>
                                                  <option value="Algeria">Algeria</option>
                                                  <option value="Afghanistan">Afghanistan</option>
                                                  <option value="Ghana">Ghana</option>
                                                  <option value="Albania">Albania</option>
                                                  <option value="Bahrain">Bahrain</option>
                                                  <option value="Colombia">Colombia</option>
                                                  <option value="Dominican Republic">Dominican Republic</option>
                                                  <option value="USA">United State of America</option>
                                                  <option value="UK">United Kingdom</option>
                                                  <option value="Other">Other</option>
                                                </select> 										
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 ">
                                            <div class="checkout-form-list">
                                                <?php
                                                    if (isset($_SESSION['user'])) {
                                                        $name = explode(' ', $user['name']);
                                                    }
                                                ?>
                                                <label>First Name <span class="required">*</span></label>										
                                                <input type="text" placeholder="" name="fname" value="<?php echo isset($_SESSION['user']) ? $name[0] : ''; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>										
                                                <input type="text" name="lname" placeholder="" value="<?php echo isset($_SESSION['user']) ? $name[1] : ''; ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" value="">
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" name="address" placeholder="Street address" value="<?php echo isset($_SESSION['user']) ? $user['address'] : ''; ?>">
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list">									
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div> -->
                                        
                                        <!-- <div class="col-lg-6 col-md-6 col-12">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>										
                                                <input type="text" placeholder="Postcode / Zip" >
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>										
                                                <input type="email" name="email" placeholder="" value="<?php echo isset($_SESSION['user']) ? $user['email'] : ''; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>										
                                                <input type="text" name="phone" placeholder="Phone number" value="<?php echo isset($_SESSION['user']) ? $user['phone'] : ''; ?>">
                                            </div>
                                        </div>
                                        <?php echo !isset($_SESSION['user']) ? '<div class="col-lg-12 col-md-12 col-12">
                                            <div class="checkout-form-list create-acc">	
                                                <input type="checkbox" id="cbox">
                                                <label>Create an account?</label>
                                            </div>
                                            <div class="checkout-form-list create-account" id="cbox_info" style="display: block;">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password  <span class="required">*</span></label>
                                                <input type="password" placeholder="password" name="password">	
                                            </div>
                                        </div>' : ''; ?>								
                                    </div>
                                    <!-- <div class="different-address">
                                            <div class="ship-different-title">
                                                <h3>
                                                    <label>Ship to a different address?</label>
                                                    <input type="checkbox" id="ship-box">
                                                </h3>
                                            </div>
                                        <div class="row" id="ship-box-info" style="display: none;">
                                            <div class="col-lg-12">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                      <option value="volvo">bangladesh</option>
                                                      <option value="saab">Algeria</option>
                                                      <option value="mercedes">Afghanistan</option>
                                                      <option value="audi">Ghana</option>
                                                      <option value="audi2">Albania</option>
                                                      <option value="audi3">Bahrain</option>
                                                      <option value="audi4">Colombia</option>
                                                      <option value="audi5">Dominican Republic</option>
                                                    </select> 										
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>										
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>										
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="checkout-form-list">									
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>										
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>										
                                                    <input type="text" placeholder="Postcode / Zip">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>										
                                                    <input type="email" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="checkout-form-list">
                                                    <label>Phone  <span class="required">*</span></label>										
                                                    <input type="text" placeholder="Postcode / Zip">
                                                </div>
                                            </div>								
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list">
                                                <label>Order Notes</label>
                                                <textarea placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess"></textarea>
                                            </div>									
                                        </div>
                                    </div>													 -->
                                </div>
                            </div>
                                <div class="col-lg-6 col-md-12 col-12">
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
                                                <?php echo checkoutcart(); ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal</th>
                                                    <td><span class="amount">&#8373;<span id="mku"><?php echo cartsubtotal(); ?></span></span></td>
                                                </tr>
                                                <tr class="shipping">
                                                  
                                                    <td>
                                                        <ul>
                                                            <li>
                                                               
                                                                <label>
                                                                    Discount <span class="amount"><span id="diskc"><?php echo discount(); ?></span>%</span>
                                                                </label>
                                                            </li>
                                                            <!-- <li>
                                                                <input type="radio">
                                                                <label>Free Shipping:</label>
                                                            </li> -->
                                                            <!-- <li></li> -->
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><strong><span class="amount">&#8373;<span id="ordtt"><?php echo carttotal(); ?></span></span></strong>
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
                                                                 Momo <img src="main/img/momo.png" alt="payment" />
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                          <div class="panel-body">
                                                                <p>Pay via Mobile Money  </p>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
		<!-- checkout-area-end -->
		<!-- footer-area-start -->
		<?php footer(); ?>
		<!-- footer-area-end -->
		
		
		<!-- all js here -->
		<?php scripts(); ?>
    </body>
</html>
