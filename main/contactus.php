<?php

involve('functions');

begin('Contact Us');

$a = contactdetials();

 ?>
    <body class="contact">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- header-area-start -->
        <header>
			<!-- header-top-area-start -->
			<?php navbar(5); ?>
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
								<li><a href="#" class="active">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- googleMap-area-start -->
		<!-- <div class="map-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="googleMap"></div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- googleMap-end -->
		<!-- contact-area-start -->
		<div class="contact-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="contact-info">
							<h3>Contact info</h3>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>Address: </span>
									<?php echo $a['appaddress']; ?> 							
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<span>Phone: </span>
									<?php echo $a['appcontact']; ?> 	
								</li>
								<li>
									<i class="fa fa-mobile"></i>
									<span>Email: </span>
									<a href="#"><?php echo $a['appemail']; ?> 	</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="contact-form">
							<h3><i class="fa fa-envelope-o"></i>Leave a Message</h3>
                            <form id="contact-form" action="" method="post" class="message">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form-3">
                                            <input name="name" type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form-3">
                                            <input name="email" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form-3">
                                            <input name="subject" type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                         <div class="single-form-3">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit" type="submit">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- contact-area-end -->
		<!-- footer-area-start -->
		<?php footer(); ?>
		<!-- footer-area-end -->
		
		
		<?php scripts(); ?>
		<!-- googleapis -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
		<script>
			/* Google Map js */
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(40.740610, -73.935242)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);

			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map.png',
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
    </body>
</html>
