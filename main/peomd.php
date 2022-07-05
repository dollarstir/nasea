<?php

involve('functions');

echo '<!doctype html>
    <html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nasea Book - Poem detail</title>
        <meta name="description" content="Nasea books is one of the Best E-book stores in the world">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="../main/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../main/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../main/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../main/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../main/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../main/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../main/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../main/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../main/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../main/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../main/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../main/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../main/favicon/favicon-16x16.png">
<link rel="manifest" href="../main/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../main/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
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

<body class="blog-details">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->
	<!-- header-area-start -->
	<header>
		<!-- header-top-area-start -->
		<?php navbar1(6); ?>
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
							<li><a href="#" class="active">blog-details</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumbs-area-end -->
	<!-- blog-main-area-start -->
	<div class="blog-main-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50">
					<!-- <div class="single-blog mb-50">
						<div class="blog-left-title">
							<h3>Search</h3>
						</div>
						<div class="side-form">
							<form action="#">
								<input type="text" placeholder="Search...." />
								<a href="#"><i class="fa fa-search"></i></a>
							</form>
						</div>
					</div> -->
					<!-- <div class="single-blog mb-50">
						<div class="blog-left-title">
							<h3>Categories</h3>
						</div>
						<div class="blog-side-menu">
							<ul>
								<li><a href="#">Creative (2)</a></li>
								<li><a href="#">Fashion (1)</a></li>
								<li><a href="#">Image (1) </a></li>
								<li><a href="#">Photography (1) </a></li>
								<li><a href="#">Travel (4) </a></li>
								<li><a href="#">Videos (2) </a></li>
								<li><a href="#">Economic (2) </a></li>
							</ul>
						</div>
					</div> -->
					<div class="single-blog mb-50">
						<div class="blog-left-title">
							<h3>Recent Posts</h3>
						</div>
						<div class="blog-side-menu">
							<ul>
								<li><a href="#">Blog image post</a></li>
								<li><a href="#">Post with Gallery</a></li>
								<li><a href="#">Post with audio</a></li>
								<li><a href="#">Post with vedio</a></li>
								<li><a href="#">Post with image</a></li>
							</ul>
						</div>
					</div>
					<div class="single-blog mb-50">
						<div class="blog-left-title">
							<h3>Recent Comments</h3>
						</div>
						<div class="blog-side-menu">
							<ul>
								<li><a href="#">admin on Maecenas ultricies</a></li>
								<li><a href="#">admin on Tincidunt malesuada</a></li>
								<li><a href="#">admin on Rhoncus eleifend</a></li>
								<li><a href="#">admin on Quisque fringilla</a></li>
								<li><a href="#">admin on Pellentesque posuere</a></li>
							</ul>
						</div>
					</div>
					<div class="single-blog mb-50">
						<div class="blog-left-title">
							<h3>Archive</h3>
						</div>
						<div class="blog-side-menu">
							<ul>
								<li><a href="#"><i class="fa fa-calendar-o"></i>March 2016 (1)</a></li>
								<li><a href="#"><i class="fa fa-calendar-o"></i>April 2016 (2)</a></li>
								<li><a href="#"><i class="fa fa-calendar-o"></i>May 2016 (3)</a></li>
								<li><a href="#"><i class="fa fa-calendar-o"></i>June 2016 (4)</a></li>
								<li><a href="#"><i class="fa fa-calendar-o"></i>July 2016 (5)</a></li>
								<li><a href="#"><i class="fa fa-calendar-o"></i>August 2016 (6)</a></li>
							</ul>
						</div>
					</div>
					<div class="single-blog mb-50">
						<div class="blog-left-title">
							<h3>Blog Archive</h3>
						</div>
						<div class="catagory-menu" id="cate-toggle">
							<ul>
								<li><a href="#">Creative</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Image</a></li>
								<li><a href="#">Class Master</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Video</a></li>
								<li><a href="#">Wordpress</a></li>
							</ul>
						</div>
					</div>
					<div class="single-blog">
						<div class="blog-left-title">
							<h3>Tags</h3>
						</div>
						<div class="blog-tag">
							<ul>
								<li><a href="#">Asian</a></li>
								<li><a href="#">Brown</a></li>
								<li><a href="#">Euro</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Franch</a></li>
								<li><a href="#">Hat</a></li>
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Teen</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">White</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">
					<div class="blog-main-wrapper">
						<div class="author-destils mb-30">
							<div class="author-left">
								<div class="author-img">
									<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/author/1.jpg" alt="man" /></a>
								</div>
								<div class="author-description">
									<p>Posted by:
										<a href="#"><span>Admin</span>in</a>
										<a href="#">Fashion,</a>
										<a href="#">Fashion,</a>
										<a href="#">Fashion,</a>
									</p>
									<span>May 15 2017</span>
								</div>
							</div>
							<div class="author-right">
								<span>Share this:</span>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="blog-img mb-30">
							<img src="https://htmldemo.net/koparion/koparion/img/blog/1.jpg" alt="blog" />
						</div>
						<div class="single-blog-content">
							<div class="single-blog-title">
								<h3>Blog image post</h3>
							</div>
							<div class="blog-single-content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
								<blockquote class="blockstyle">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</blockquote>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
								<p>dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
							</div>
						</div>
						<div class="comment-tag">
							<p>03 Comments/Tags: Asian, t-shirt, teen </p>
						</div>
						<div class="sharing-post mt-20">
							<div class="share-text">
								<span>Share this post</span>
							</div>
							<div class="share-icon">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="comment-title-wrap mt-30">
							<h3>03 Comments</h3>
						</div>
						<div class="comment-reply-wrap mt-50">
							<ul>
								<li>
									<div class="public-comment">
										<div class="comment-img">
											<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/author/2.jpg" alt="man" /></a>
										</div>
										<div class="public-text">
											<div class="single-comm-top">
												<a href="#">Scott Salwolke</a>
												<p>March 08, 2017 at 1:38 am <a href="#">Reply</a></p>
											</div>
											<p>Thanks Marcus for the suggestions. I hadn't given much thought in how to craft my own blog entries in order to encourage responses. Yet, the goal is to generate followers and develop interactions so this makes perfect sense. I'll definitely incorporate some of these suggestions into my future writings.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="public-comment public-comment-2">
										<div class="comment-img">
											<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/author/3.jpg" alt="man" /></a>
										</div>
										<div class="public-text">
											<div class="single-comm-top">
												<a href="#">Scott Salwolke</a>
												<p>March 08, 2017 at 1:38 am <a href="#">Reply</a></p>
											</div>
											<p>Thanks Marcus for the suggestions. I hadn't given much thought in how to craft my own blog entries in order to encourage responses. Yet, the goal is to generate followers and develop interactions so this makes perfect sense. I'll definitely incorporate some of these suggestions into my future writings.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="public-comment public-comment-2">
										<div class="comment-img">
											<a href="#"><img src="https://htmldemo.net/koparion/koparion/img/author/4.jpg" alt="man" /></a>
										</div>
										<div class="public-text">
											<div class="single-comm-top">
												<a href="#">Scott Salwolke</a>
												<p>March 08, 2017 at 1:38 am <a href="#">Reply</a></p>
											</div>
											<p>Thanks Marcus for the suggestions. I hadn't given much thought in how to craft my own blog entries in order to encourage responses. Yet, the goal is to generate followers and develop interactions so this makes perfect sense. I'll definitely incorporate some of these suggestions into my future writings.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="comment-title-wrap mt-30">
							<h3>Leave a comment </h3>
						</div>
						<div class="comment-input mt-40">
							<p>We will not publish your email address. Required fields are marked*</p>
							<div class="comment-input-textarea mb-30">
								<form action="#">
									<label>Comment</label>
									<textarea name="massage" cols="30" rows="10" placeholder="Write your comment here"></textarea>
								</form>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-comment-input mb-30">
										<form action="#">
											<label>Name*</label>
											<input type="text" placeholder="Name" />
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-comment-input mb-30">
										<form action="#">
											<label>Email*</label>
											<input type="text" placeholder="Email" />
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-comment-input mb-30">
										<form action="#">
											<label>Web</label>
											<input type="text" placeholder="Put your web address" />
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="single-post-button">
							<a href="#">Post Comment</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-main-area-end -->
	<!-- footer-area-start -->
	<?php footer2(); ?>
	<!-- footer-area-end -->


	<!-- all js here -->
	<?php scripts2(); ?>
</body>

</html>