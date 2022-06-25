<?php

involve('functions');

begin('Dashborad');
$user = user();

 ?>

<body class="cart">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->
	<!-- header-area-start -->
	<header>
		<!-- header-top-area-start -->
		<?php navbar(1); ?>
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
							<li><a href="#" class="active">my-account</a></li>
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
						<h2>My-Account</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- entry-header-area-end -->
	<!-- my account wrapper start -->
	<div class="my-account-wrapper mb-70">
		<div class="container">
			<div class="section-bg-color">
				<div class="row">
					<div class="col-lg-12">
						<!-- My Account Page Start -->
						<div class="myaccount-page-wrapper">
							<!-- My Account Tab Menu Start -->
							<div class="row">
								<div class="col-lg-3 col-md-4">
									<div class="myaccount-tab-menu nav" role="tablist">
										<a href="#dashboad" class="active" data-toggle="tab"><i
												class="fa fa-dashboard"></i>
											Dashboard</a>
										<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
											Orders</a>
										<a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i>
											Download</a>
										<a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
											Payment
											Method</a>
										<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
											address</a>
										<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
											Details</a>
										<a href="logout"><i class="fa fa-sign-out"></i> Logout</a>
									</div>
								</div>
								<!-- My Account Tab Menu End -->

								<!-- My Account Tab Content Start -->
								<div class="col-lg-9 col-md-8">
									<div class="tab-content" id="myaccountContent">
										<!-- Single Tab Content Start -->
										<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
											<div class="myaccount-content">
												<h5>Dashboard</h5>
												<div class="welcome">
													<p>Hello, <strong><?php echo $user['name']; ?></strong> (If Not <strong><?php
                                                    $name = explode(' ', $user['name']);
                                                    echo $name[0];

                                                    ?>
															!</strong><a
															href="https://htmldemo.net/koparion/koparion/login-register.html"
															class="logout"> Logout</a>)</p>
												</div>
												<p class="mb-0">From your account dashboard. you can easily check &
													view your recent orders, manage your billing addresses
													and edit your password and account details.</p>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="orders" role="tabpanel">
											<div class="myaccount-content">
												<h5>Orders</h5>
												<div class="myaccount-table table-responsive text-center">
													<table class="table table-bordered">
														<thead class="thead-light">
															<tr>
																<th>Order</th>
																<th>Date</th>
																<th>Status</th>
																<th>Total</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>Aug 22, 2018</td>
																<td>Pending</td>
																<td>$3000</td>
																<td><a href="cart.html" class="btn btn-sqr">View</a>
																</td>
															</tr>
															<tr>
																<td>2</td>
																<td>July 22, 2018</td>
																<td>Approved</td>
																<td>$200</td>
																<td><a href="cart.html" class="btn btn-sqr">View</a>
																</td>
															</tr>
															<tr>
																<td>3</td>
																<td>June 12, 2017</td>
																<td>On Hold</td>
																<td>$990</td>
																<td><a href="cart.html" class="btn btn-sqr">View</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="download" role="tabpanel">
											<div class="myaccount-content">
												<h5>Downloads</h5>
												<div class="myaccount-table table-responsive text-center">
													<table class="table table-bordered">
														<thead class="thead-light">
															<tr>
																<th>Product</th>
																<th>Date</th>
																<th>Expire</th>
																<th>Download</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Haven - Free Real Estate PSD Template</td>
																<td>Aug 22, 2018</td>
																<td>Yes</td>
																<td><a href="#" class="btn btn-sqr"><i
																			class="fa fa-cloud-download"></i>
																		Download File</a></td>
															</tr>
															<tr>
																<td>HasTech - Profolio Business Template</td>
																<td>Sep 12, 2018</td>
																<td>Never</td>
																<td><a href="#" class="btn btn-sqr"><i
																			class="fa fa-cloud-download"></i>
																		Download File</a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="payment-method" role="tabpanel">
											<div class="myaccount-content">
												<h5>Payment Method</h5>
												<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="address-edit" role="tabpanel">
											<div class="myaccount-content">
												<h5>Billing Address</h5>
												<address>
													<p><strong>Erik Jhonson</strong></p>
													<p>1355 Market St, Suite 900 <br>
														San Francisco, CA 94103</p>
													<p>Mobile: (123) 456-7890</p>
												</address>
												<a href="#" class="btn btn-sqr"><i class="fa fa-edit"></i>
													Edit Address</a>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="account-info" role="tabpanel">
											<div class="myaccount-content">
												<h5>Account Details</h5>
												<div class="account-details-form">
													<form action="#">
														<div class="row">
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="first-name" class="required">First
																		Name</label>
																	<input type="text" id="first-name"
																		placeholder="First Name" />
																</div>
															</div>
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="last-name" class="required">Last
																		Name</label>
																	<input type="text" id="last-name"
																		placeholder="Last Name" />
																</div>
															</div>
														</div>
														<div class="single-input-item">
															<label for="display-name" class="required">Display
																Name</label>
															<input type="text" id="display-name"
																placeholder="Display Name" />
														</div>
														<div class="single-input-item">
															<label for="email" class="required">Email Addres</label>
															<input type="email" id="email"
																placeholder="Email Address" />
														</div>
														<fieldset>
															<legend>Password change</legend>
															<div class="single-input-item">
																<label for="current-pwd" class="required">Current
																	Password</label>
																<input type="password" id="current-pwd"
																	placeholder="Current Password" />
															</div>
															<div class="row">
																<div class="col-lg-6">
																	<div class="single-input-item">
																		<label for="new-pwd" class="required">New
																			Password</label>
																		<input type="password" id="new-pwd"
																			placeholder="New Password" />
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="single-input-item">
																		<label for="confirm-pwd"
																			class="required">Confirm
																			Password</label>
																		<input type="password" id="confirm-pwd"
																			placeholder="Confirm Password" />
																	</div>
																</div>
															</div>
														</fieldset>
														<div class="single-input-item">
															<button class="btn btn-sqr">Save Changes</button>
														</div>
													</form>
												</div>
											</div>
										</div> <!-- Single Tab Content End -->
									</div>
								</div> <!-- My Account Tab Content End -->
							</div>
						</div> <!-- My Account Page End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- my account wrapper end -->
	<!-- footer-area-start -->
	<footer>
		<!-- footer-top-start -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer-top-menu bb-2">
							<nav>
								<ul>
									<li><a href="#">home</a></li>
									<li><a href="#">Enable Cookies</a></li>
									<li><a href="#">Privacy and Cookie Policy</a></li>
									<li><a href="#">contact us</a></li>
									<li><a href="#">blog</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-top-start -->
		<!-- footer-mid-start -->
		<div class="footer-mid ptb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<div class="single-footer br-2 xs-mb">
									<div class="footer-title mb-20">
										<h3>Products</h3>
									</div>
									<div class="footer-mid-menu">
										<ul>
											<li><a href="about.html">About us</a></li>
											<li><a href="#">Prices drop </a></li>
											<li><a href="#">New products</a></li>
											<li><a href="#">Best sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<div class="single-footer br-2 xs-mb">
									<div class="footer-title mb-20">
										<h3>Our company</h3>
									</div>
									<div class="footer-mid-menu">
										<ul>
											<li><a href="contact.html">Contact us</a></li>
											<li><a href="#">Sitemap</a></li>
											<li><a href="#">Stores</a></li>
											<li><a href="register.html">My account </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<div class="single-footer br-2 xs-mb">
									<div class="footer-title mb-20">
										<h3>Your account</h3>
									</div>
									<div class="footer-mid-menu">
										<ul>
											<li><a href="contact.html">Addresses</a></li>
											<li><a href="#">Credit slips </a></li>
											<li><a href="#"> Orders</a></li>
											<li><a href="#">Personal info</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="single-footer mrg-sm">
							<div class="footer-title mb-20">
								<h3>STORE INFORMATION</h3>
							</div>
							<div class="footer-contact">
								<p class="adress">
									<span>My Company</span>
									Your address goes here.
								</p>
								<p><span>Call us now:</span> 0123456789</p>
								<p><span>Email:</span> demo@example.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-mid-end -->
		<!-- footer-bottom-start -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row bt-2">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="copy-right-area">
							<p>&copy; 2021 <strong> Koparion </strong> Mede with ❤️ by <a href="https://hasthemes.com/"
									target="_blank"><strong>HasThemes</strong></a></p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="payment-img text-right">
							<a href="#"><img src="img/1.png" alt="payment" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-bottom-end -->
	</footer>
	<!-- footer-area-end -->


	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- popper js -->
	<script src="js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- owl.carousel js -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- meanmenu js -->
	<script src="js/jquery.meanmenu.js"></script>
	<!-- wow js -->
	<script src="js/wow.min.js"></script>
	<!-- jquery.parallax-1.1.3.js -->
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<!-- jquery.countdown.min.js -->
	<script src="js/jquery.countdown.min.js"></script>
	<!-- jquery.flexslider.js -->
	<script src="js/jquery.flexslider.js"></script>
	<!-- chosen.jquery.min.js -->
	<script src="js/chosen.jquery.min.js"></script>
	<!-- jquery.counterup.min.js -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- waypoints.min.js -->
	<script src="js/waypoints.min.js"></script>
	<!-- plugins js -->
	<script src="js/plugins.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>
</body>

</html>