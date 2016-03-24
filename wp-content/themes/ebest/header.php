<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('sitename'); ?></title>
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
		<script type="text/javascript">var $ = jQuery.noConflict();</script>
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
									<a href="<?=site_url()?>"<?php if(LANG === 'cn'){ ?> class="lightBlue"<?php } ?>>简体中文</a>
								</li>
								<!-- Top Contact -->
								<li class="top-parent">
									<a href="<?=site_url()?>/en/"<?php if(LANG === 'en'){ ?> class="lightBlue"<?php } ?>>English</a>
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
								<span class="white">+86 400 022 8266</span>
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

										<a class="navbar-brand" href="<?=site_url()?>">
											<img class="site_logo" alt="Site Logo" src="<?=get_stylesheet_directory_uri()?>/img/logo.png" />
										</a></div>
									<!-- Navbar Collapse -->
									<div class="navbar-collapse collapse">
										<!-- nav -->
										<ul class="nav navbar-nav" data-sm-skip-collapsible-behavior="true">
											<!-- Home  Mega Menu -->
											<li class="">
												<a href="<?=site_url()?>/<?=LANG === pll_default_language('slug') ? '' : LANG?>"><?=pll__('Home')?></a>
											</li>
											<!-- Mega Menu Ends -->
											<!-- Pages Mega Menu -->
											<li class="">
												<a href="<?=site_url()?>/products<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('products' . CAT_LANG_SUFFIX)->name?></a>
												<ul class="dropdown-menu">
													<?php foreach(get_posts(array('category_name'=>'products' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>-1)) as $post){ ?>
													<li>
														<a href="<?=site_url()?>/category/products<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=$post->post_title?></a>
													</li>
													<?php } ?>
												</ul>
											</li>
											<!-- Pages Menu Ends -->
											<!-- Portfolio Menu -->
											<li>
												<a href="<?=site_url()?>/cloud<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('cloud' . CAT_LANG_SUFFIX)->name?></a> 
												<!-- Portfolio Dropdown Menu -->
												<ul class="dropdown-menu">
													<?php foreach(get_posts(array('category_name'=>'cloud' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>-1)) as $post){ ?>
													<?php if(in_array($post->post_name, array('overview', 'overview-cn'))) continue;?>
													<li>
														<a href="<?=site_url()?>/category/cloud<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=$post->post_title?></a>
													</li>
													<?php } ?>
												</ul>
											<!-- Portfolio Dropdown Menu -->
											</li>
											<!-- Portfolio Menu -->
											<!-- Shop Menu -->
											<li>
												<a href="<?=site_url()?>/category/industries<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('industries' . CAT_LANG_SUFFIX)->name?></a> 
												<!-- Portfolio Dropdown Menu -->
												<ul class="dropdown-menu">
													<?php foreach(get_posts(array('category_name'=>'industries' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>-1)) as $post){ ?>
													<li>
														<a href="<?=site_url()?>/category/industries<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=$post->post_title?></a>
													</li>
													<?php } ?>
												</ul>
											</li>
											<li>
												<a href="<?=site_url()?>/category/customer<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('customer' . CAT_LANG_SUFFIX)->name?></a> 
												<!-- Portfolio Dropdown Menu -->
												<ul class="dropdown-menu">
													<?php foreach(get_posts(array('category_name'=>'customer' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>-1)) as $post){ ?>
													<li>
														<a href="<?=site_url()?>/category/customer<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=$post->post_title?></a>
													</li>
													<?php } ?>
												</ul>
											</li>
											<li>
												<a href="<?=site_url()?>/category/service<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('service' . CAT_LANG_SUFFIX)->name?></a> 
												<!-- Portfolio Dropdown Menu -->
												<ul class="dropdown-menu">
													<?php foreach(get_posts(array('category_name'=>'service' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>-1)) as $post){ ?>
													<li>
														<a href="<?=site_url()?>/category/service<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=$post->post_title?></a>
													</li>
													<?php } ?>
												</ul>
											</li>
											<li>
												<a href="<?=site_url()?>/category/news<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('news' . CAT_LANG_SUFFIX)->name?></a> 
												<!-- Portfolio Dropdown Menu -->
											</li>
											<!-- Ends Widgets Block -->
											<!-- Pages Mega Menu -->
											<li class="">
												<a href="<?=site_url()?>/category/company<?=CAT_LANG_SUFFIX?>/"><?=get_category_by_slug('company' . CAT_LANG_SUFFIX)->name?></a> 
												<!-- Portfolio Dropdown Menu -->
												<ul class="dropdown-menu">
													<?php foreach(get_posts(array('category_name'=>'company' . CAT_LANG_SUFFIX, 'order'=>'ASC', 'posts_per_page'=>-1)) as $post){ ?>
													<li>
														<a href="<?=site_url()?>/category/company<?=CAT_LANG_SUFFIX?>/#post-<?=$post->ID?>"><?=$post->post_title?></a>
													</li>
													<?php } ?>
												</ul>
											</li>
											<!-- Shortcode Menu Ends -->
										</ul>
										<!-- Right nav -->
									</div>
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
