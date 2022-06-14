<?php

involve('functions');

begin('About Us');

$a = aboutpage();

 ?>

<body class="about">
	<!-- header-area-start -->
	<header>
		<!-- header-top-area-start -->
		<?php navbar(4); ?>
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
							<li><a href="#" class="active">about</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumbs-area-end -->
	<!-- about-main-area-start -->
	<!-- <div class="about-main-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-12">
					<div class="about-img">
						<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/32.jpg" alt="man" /></a>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-12">
					<div class="about-content">
						<h3>Why<span>We are?</span></h3>
						<p>Mellentesque faucibus dapibus dapibus. Morbi aliquam aliquet neque. Donec placerat dapibus
							sollicitudin. Morbi arcu nisi, mattis ut ullamcorper in, dapibus ac nunc. Cras bibendum
							mauris et sapien feugiat. scelerisque accumsan nibh gravida. Quisque aliquet justo elementum
							lectus ultrices bibendum.</p>
						<ul>
							<li><a href="#"><i class="fa fa-check"></i>Amazing wordpress theme</a></li>
							<li><a href="#"><i class="fa fa-check"></i>HTML & CSS3 build with bootstrap</a></li>
							<li><a href="#"><i class="fa fa-check"></i>Powerfull admin panel</a></li>
							<li><a href="#"><i class="fa fa-check"></i>Icon well organized & SEO optimized friendy</a>
							</li>
							<li><a href="#"><i class="fa fa-check"></i>Iconncredible design</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- about-main-area-end -->
	<!-- our-mission-area-start -->
	<div class="our-mission-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="single-misson">
						<h3>Who<span>We are</span></h3>
						<p><?php echo $a['who']; ?></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="single-misson">
						<h3>Our<span>Mission</span></h3>
						<p><?php echo $a['mission']; ?></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="single-misson mrg-none-xs">
						<h3>Our<span>Vision</span></h3>
						<p><?php echo $a['vision']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- our-mission-area-end -->
	<!-- counter-area-start -->
	<!-- <div class="counter-area pt-70 pb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-counter mb-30 text-center">
						<h2 class="counter">99</h2>
						<span>projects completed</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-counter mb-30 text-center">
						<h2 class="counter">180</h2>
						<span>Happy Clients</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-counter mb-30 text-center">
						<h2 class="counter">500</h2>
						<span>Cups of Coffe</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-counter mb-30 text-center">
						<h2 class="counter">320</h2>
						<span>Awards Winner</span>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- counter-area-end -->
	<!-- team-area-start -->
	<!-- <div class="team-area pt-70 pb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="team-title text-center mb-50">
						<h2>Our Crazy Team</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-team mb-30">
						<div class="team-img-area">
							<div class="team-img">
								<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/team/1.jpg"
										alt="man" /></a>
							</div>
							<div class="team-link">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content text-center">
							<h3>Marcos Alonso</h3>
							<span>Class Master</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-team mb-30">
						<div class="team-img-area">
							<div class="team-img">
								<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/team/2.jpg"
										alt="man" /></a>
							</div>
							<div class="team-link">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content text-center">
							<h3>Luis Aragones</h3>
							<span>Marketer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-team mb-30">
						<div class="team-img-area">
							<div class="team-img">
								<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/team/3.jpg"
										alt="man" /></a>
							</div>
							<div class="team-link">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content text-center">
							<h3>Maria Alessis</h3>
							<span>Class Master</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="single-team mb-30">
						<div class="team-img-area">
							<div class="team-img">
								<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/team/4.jpg"
										alt="man" /></a>
							</div>
							<div class="team-link">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content text-center">
							<h3>John Doe</h3>
							<span>PHP Devloper</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- team-area-end -->
	<!-- skill-area-start -->
	<!-- <div class="skill-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="skill-content">
						<h3>Why Choose<span>Koparion</span>HTML Template</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
							invidunt ut labore et dolore magna aliquyam erat. sed diam voluptua ater vero. Lorem ipsum
							dolor sit amet, consetetur sadipscing elitr, sed diam nonumys eirmod tempor empor invidunt
							ut labore et dolore.</p>
						<a href="#">Read More<i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="skill-progress">
						<div class="progress">
							<div class="skill-title">Strategy 79%</div>
							<div class="progress-bar wow fadeInLeft" data-wow-delay="0.2s" role="progressbar"
								style="width: 79%;">
							</div>
						</div>
						<div class="progress">
							<div class="skill-title">Marketing 96%</div>
							<div class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar"
								style="width: 96%;">
							</div>
						</div>
						<div class="progress">
							<div class="skill-title">Wordpress Theme 65%</div>
							<div class="progress-bar wow fadeInLeft" data-wow-delay="0.4s" role="progressbar"
								style="width: 65%;">
							</div>
						</div>
						<div class="progress mrg-none-xs">
							<div class="skill-title">UI/UX Design 92%</div>
							<div class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar"
								style="width: 89%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- skill-area-end -->
	<!-- footer-area-start -->
	<?php footer(); ?>
	<!-- footer-area-end -->


	<?php scripts(); ?>
</body>

</html>