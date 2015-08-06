<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>eBest</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Mist — Multi-Purpose HTML Template" />
		<meta name="author" content="zozothemes.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" />
		<!-- Font -->
		<!-- <link rel='stylesheet' href='http://fonts.useso.com/css?family=Arimo:300,400,700,400italic,700italic' />
		<link href='http://fonts.useso.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' /> -->
		<!-- Font Awesome Icons -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- Bootstrap core CSS -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?=get_stylesheet_directory_uri()?>/css/hover-dropdown-menu.css" rel="stylesheet" />
		<!-- Icomoon Icons -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/icons.css" rel="stylesheet" />
		<!-- Revolution Slider -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/revolution-slider.css" rel="stylesheet" />
		<link href="<?=get_stylesheet_directory_uri()?>/rs-plugin/css/settings.css" rel="stylesheet" />
		<!-- Animations -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/animate.min.css" rel="stylesheet" />
		<!-- Owl Carousel Slider -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/owl/owl.carousel.css" rel="stylesheet" />
		<link href="<?=get_stylesheet_directory_uri()?>/css/owl/owl.theme.css" rel="stylesheet" />
		<link href="<?=get_stylesheet_directory_uri()?>/css/owl/owl.transitions.css" rel="stylesheet" />
		<!-- PrettyPhoto Popup -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/prettyPhoto.css" rel="stylesheet" />
		<!-- Custom Style -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/style.css" rel="stylesheet" />
		<link href="<?=get_stylesheet_directory_uri()?>/css/responsive.css" rel="stylesheet" />
		<!-- Color Scheme -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/color.css" rel="stylesheet" />
		<!-- common style -->
		<link href="<?=get_stylesheet_directory_uri()?>/css/common.css" rel="stylesheet" />
		<?php wp_head(); ?>
	</head>
	<body <?php global $page_class;	body_class(isset($page_class) ? $page_class : '') ?>>
		<div id="page-front">		
			<!-- Page Loader -->
			<div id="pageloader">
				<div class="loader-item fa fa-spin text-color"></div>
			</div>
			<!-- Top Bar -->
			<div id="top-bar" class="top-bar-section top-bar-bg-color shop-top-bar">
				<div class="container">
					<div class="row vertical-middle">
						<div class="col-sm-12">
							<!-- Left nav -->
							<ul class="nav navbar-nav">
								<!-- Top Language -->
								<li class="top-parent">
									<a href="#">简体中文</a>
								</li>
								<!-- Top Contact -->
								<li class="top-parent">
									<a href="#" class="lightBlue">English</a>
								</li>
							</ul>
							<!-- Top Social Icon -->
							<div class="top-social-icon">
								<div class="input-group pull-right search hide-760">
									<span class="input-group-btn">
										<button class="btn" type="button"><i class="glyphicon glyphicon-search"></i></button>
									</span>
									<form action="<?=site_url()?>">
										<input type="text" name="s" class="" placeholder="">
									</form>
								</div>
								<span class="white">Contact No. 4008 666 6666</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header id="sticker" class="sticky-navigation">
				<!-- Sticky Menu -->
				<div class="sticky-menu relative">
					<!-- navbar -->
					<div class="navbar navbar-default navbar-bg-light" role="navigation">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="navbar-header">
										<!-- Button For Responsive toggle -->
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="sr-only">Toggle navigation</span> 
											<span class="icon-bar"></span> 
											<span class="icon-bar"></span> 
											<span class="icon-bar"></span></button> 
										<!-- Logo -->

										<a class="navbar-brand" href="index.html">
											<img class="site_logo" alt="Site Logo" src="<?=get_stylesheet_directory_uri()?>/img/logo.png" />
										</a></div>
									<!-- Navbar Collapse -->
									<?php wp_nav_menu(array('theme_location'=>'main', 'container'=>'div', 'container_class'=>'navbar-collapse collapse', 'menu_class'=>'nav navbar-nav', 'walker'=>new EBest_Walker_Nav_Menu())); ?>
									<!--nav data-sm-skip-collapsible-behavior="true"-->
								</div>
								<!-- /.col-md-12 -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.container -->
					</div>
					<!-- navbar -->
				</div>
				<!-- Sticky Menu -->
			</header>

