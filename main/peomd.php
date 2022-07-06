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
								<?php blogrecent(); ?>
								
							</ul>
						</div>
					</div>
					
				</div>
				<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">  

                    <?php  $com = customfetch('blog', [['id', '=', $context['id']]]);
                        $ru = $com[0];
                        extract($ru);

                    ?>
					<div class="blog-main-wrapper">
						<div class="author-destils mb-30">
							<div class="author-left">
								<div class="author-img">
									<a href="#"><img src="../yolkassets/upload/<?php echo $image; ?>" alt="man" /></a>
								</div>
								<div class="author-description">
									<p>Posted by:
										<a href="#"><span>Admin</span></a>
										
									</p>
									<span><?php echo $dateadded; ?></span>
								</div>
							</div>
							<!-- <div class="author-right">
								<span>Share this:</span>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div> -->
						</div>
						<div class="blog-img mb-30">
							<img src="../yolkassets/upload/<?php echo $image; ?>"  style="width:100%;height:400px" alt="blog" />
						</div>
						<div class="single-blog-content">
							<div class="single-blog-title">
								<h3><?php echo $title; ?></h3>
							</div>
							<div class="blog-single-content">
								<p><?php echo $description; ?></p>
							</div>
						</div>
						<div class="comment-tag">

                        <?php $comem = customcount('comments', [['postid', '=', $context['id']]]); ?>
							<p><?php echo $comem; ?> Comments </p>
						</div>
						<!-- <div class="sharing-post mt-20">
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
						</div> -->
						<div class="comment-title-wrap mt-30">
							<h3><?php echo $comem; ?> Comments</h3>
						</div>
						<div class="comment-reply-wrap mt-50">
							<ul>
								<?php poemcomment($context['id']); ?>
								
							</ul>
						</div>
						<div class="comment-title-wrap mt-30">
							<h3>Leave a comment </h3>
						</div>
						<div class="comment-input mt-40">
							<p>We will not publish your email address. Required fields are marked*</p>
							<div class="comment-input-textarea mb-30">
								<form action="#" class="poemcomment">
									<label>Comment</label>
									<textarea name="message" cols="30" rows="10" placeholder="Write your comment here"></textarea>
								
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-comment-input mb-30">
										
											<label>Name*</label>
											<input type="text" placeholder="Name" name="cname" />
										
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-comment-input mb-30">
										
											<label>Email*</label>
											<input type="text" placeholder="Email" name="cmail" />
                                            <input type="hidden" name="postid" value="<?php echo $context['id']; ?>" />
										
									</div>
								</div>
								
							</div>
						</div>
						<div class="single-post-button">
							<button class="btn btn-primary" style="background-color:black;color:#ffff;"  type="submit">Post Comment</button>
						</div>

                        </form>
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