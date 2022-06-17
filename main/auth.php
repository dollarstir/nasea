<?php

involve('functions');

begin('Login');

$a = aboutpage();

 ?>


<body class="login">
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
	
	<!-- user-login-area-start -->
	<div class="user-login-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login-title text-center mb-30">
						<h2>Login</h2>
						<!-- <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et
							quasi architecto beat</p> -->
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                    <form class="login">
                        <div class="login-form">
                            <div class="single-login">
                                <label>Phone Number or email<span>*</span></label>
                                <input type="text" name="login" />
                            </div>
                            <div class="single-login">
                                <label>Passwords <span>*</span></label>
                                <input type="password"  name="password"/>
                            </div>
                            <div class="single-login single-login-2">
                                <button class="btn btn-primary" type="submit">login</button>
                                <!-- <input id="rememberme" type="checkbox" name="rememberme" value="forever">
                                <span>Remember me</span> -->
                            </div>
                            <a href="#">Lost your password?</a>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- user-login-area-end -->
	<!-- footer-area-start -->
	<?php footer(); ?>
	<!-- footer-area-end -->


	<!-- all js here -->
	<?php scripts(); ?>
</body>

</html>