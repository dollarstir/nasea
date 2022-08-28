<?php

involve('functions');

begin('Dashborad');
mainchecker('user', 'login');
if (isset($_SESSION['user'])) {
    $user = user();
}
 ?>

<body class="cart">
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
										<a href="#dashboad" data-toggle="tab"><i
												class="fa fa-dashboard"></i>
											Dashboard</a>
										<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
											Orders</a>
										<a href="#download" class="active" data-toggle="tab"><i class="fa fa-cloud-download"></i>
											Download</a>
										<!-- <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
											Payment
											Method</a> -->
										<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
											address</a>
										<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
											Details</a>
										<button style="text-align:left;padding:10px;padding-left:20px;background-color:transparent;border:1px solid #F7F5F2;" class="logout"><i class="fa fa-sign-out"></i> Logout</button>
									</div>
								</div>
								<!-- My Account Tab Menu End -->

								<!-- My Account Tab Content Start -->
								<div class="col-lg-9 col-md-8">
									<div class="tab-content" id="myaccountContent">
										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="dashboad" role="tabpanel">
											<div class="myaccount-content">
												<h5>Dashboard</h5>
												<div class="welcome">
													<p>Hello, <strong><?php echo $user['name']; ?></strong> (If Not <strong><?php
                                                    $name = explode(' ', $user['name']);
                                                    echo $name[0];

                                                    ?>
															!</strong><a
															href="logout"
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
																<!-- <th>Action</th> -->
															</tr>
														</thead>
														<tbody>
															<?php orderlist(); ?>
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade show active" id="download" role="tabpanel">
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
															<?php download(); ?>
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<!-- <div class="tab-pane fade" id="payment-method" role="tabpanel">
											<div class="myaccount-content">
												<h5>Payment Method</h5>
												<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
											</div>
										</div> -->
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="address-edit" role="tabpanel">
											<div class="myaccount-content">
												<h5>Billing Address</h5>
												<address>
													<p><strong><?php echo $user['name']; ?></strong></p>
													<p><?php echo $user['address']; ?> <br>
													<?php echo $user['city'].', '; ?> <?php echo $user['state']; ?></p>
													<p><?php echo $user['phone']; ?></p>
												</address>
												<button  class="btn btn-sqr showbill"><i class="fa fa-edit"></i>
													Edit Address</button>

												<div class="mybill">
													<h5>Edit Billing Address</h5>
												<div class="account-details-form">
													<form action="#" class="updbill">


														<div class="single-input-item">
															<label for="phone" class="required">Phone</label>
															<input type="text" id="phone"
																placeholder="Phone" name="phone" value="<?php echo $user['phone']; ?>"/>
														</div>
														<div class="row">
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="first-name" class="required">
																		City</label>
																	<input type="text" id="first-name"
																		placeholder="City" name="city" value="<?php echo $user['city']; ?>"/>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="last-name" class="required">
																		State</label>
																	<input type="text" id="last-name"
																		placeholder="State" name="state" value="<?php echo $user['state']; ?>" />
																</div>
															</div>
														</div>
														<div class="country-select">
															<label>Country <span class="required">*</span></label>
															<select name="country">
															<option value="<?php echo isset($_SESSION['user']) ? $user['country'] : ''; ?>"><?php echo isset($_SESSION['user']) ? $user['country'] : 'Select Country'; ?></option>
															<option value="saab">Algeria</option>
															<option value="mercedes">Afghanistan</option>
															<option value="audi">Ghana</option>
															<option value="audi2">Albania</option>
															<option value="audi3">Bahrain</option>
															<option value="audi4">Colombia</option>
															<option value="audi5">Dominican Republic</option>
															</select> 										
														</div>
														<div class="single-input-item">
															<label for="address" class="required">Address</label>
															<input type="text" id="address"
																placeholder="Address" name="address" value="<?php echo $user['address']; ?>"/>
														</div>
														
														<div class="single-input-item">
															<button type="submit" class="btn btn-sqr">Save Changes</button>
														</div>
													</form>
												</div>
												</div>
											</div>
										</div>
										<!-- Single Tab Content End -->

										<!-- Single Tab Content Start -->
										<div class="tab-pane fade" id="account-info" role="tabpanel">
											<div class="myaccount-content">
												<h5>Account Details</h5>
												<div class="account-details-form">
													<form action="#" class="upduser">
														<div class="row">
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="first-name" class="required">First
																		Name</label>
																	<input type="text" id="first-name"
																		placeholder="First Name" name="fname" value="<?php echo $name[0]; ?>"/>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="last-name" class="required">Last
																		Name</label>
																	<input type="text" id="last-name"
																		placeholder="Last Name" name="lname" value="<?php echo $name[1]; ?>" />
																</div>
															</div>
														</div>
														<!-- <div class="single-input-item">
															<label for="display-name" class="required">Display
																Name</label>
															<input type="text" id="display-name"
																placeholder="Display Name" />
														</div> -->
														<div class="single-input-item">
															<label for="email" class="required">Email Addres</label>
															<input type="email" id="email"
																placeholder="Email Address" name="email" value="<?php echo $user['email']; ?>"/>
														</div>
														<fieldset>
															<legend>Password change</legend>
															<div class="single-input-item">
																<label for="current-pwd" class="required">Current
																	Password</label>
																<input type="password" id="current-pwd"
																	placeholder="Current Password" name="password" />
															</div>
															<div class="row">
																<div class="col-lg-6">
																	<div class="single-input-item">
																		<label for="new-pwd" class="required">New
																			Password</label>
																		<input type="password" id="new-pwd"
																			placeholder="New Password" name="newpass" />
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="single-input-item">
																		<label for="confirm-pwd"
																			class="required">Confirm
																			Password</label>
																		<input type="password" id="confirm-pwd"
																			placeholder="Confirm Password" name="repass" />
																	</div>
																</div>
															</div>
														</fieldset>
														<div class="single-input-item">
															<button type="submit" class="btn btn-sqr">Save Changes</button>
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
	<?php footer(); ?>
	<!-- footer-area-end -->


	<!-- all js here -->
	<?php scripts(); ?>
</body>

</html>