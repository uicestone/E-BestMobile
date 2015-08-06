<?php $page_class = 'page-products-cloud'; get_header(); ?>

<section class="banner">
	<div class="banner-bg" style="background-image: url('<?=get_stylesheet_directory_uri()?>/img/products-banner.jpg');"></div>
	<div class="sub-nav">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-xs-8">
						<h3>Products</h3>
						<p>Your professional service experience</p>

					</div>
					<div class="col-xs-4">
						<a href="#" class="btn btn-free">Free Trial</a>
					</div>
				</div>
				<div class="row btns tabs">
					<ul>
						<li class="active"><a href="#">SFA</a></li>
						<li><a href="#">Cool iOt</a></li>
						<li><a href="#">i-Mentor</a></li>
						<li><a href="#">DMS</a></li>
						<li><a href="#" class="non-br">DSD</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-section no-pad light-bg border-tb mt_10">
	<div class="container-fluid who-we-are">
		<div class="row">
			<div class="col-md-6 no-pad animated fadeInLeft visible" data-animation="fadeInLeft">
				<img src="<?=get_stylesheet_directory_uri()?>/img/produce-video.png">
			</div>
			<div class="col-md-6 no-pad animated fadeInLeft visible" data-animation="fadeInLeft">
				<img src="<?=get_stylesheet_directory_uri()?>/img/produce.png">
			</div>
			<!-- <div class="col-md-6"> -->
				<!-- <div class="section-title text-left animated fadeInUp visible" data-animation="fadeInUp"> -->
					<!-- Title -->
					<!-- <h2 class="title">Case Study</h2> -->
				<!-- </div> -->
				<!-- Content -->
				<!-- <div data-animation="fadeInDown" class="animated fadeInDown visible"> -->

				<!-- </div> -->

			<!-- </div> -->
		</div>
	</div>
</section>
<section class="providing">
	<div class="container">
		<div class="bar_title">
			<h3>Providing Retail Execution For CPG</h3>
		</div>
		<nav class="bar-tab">
			<a href="javascript:;" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar01.png"></span>
				<span class="tab-label">Beverage</span>
			</a>
			<a href="javascript:;" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar02.png"></span>
				<span class="tab-label">Wine and Spirits</span>
			</a>
			<a href="javascript:;" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar03.png"></span>
				<span class="tab-label">Food</span>
			</a>
			<a href="javascript:;" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar04.png"></span>
				<span class="tab-label">Homecare</span>
			</a>
			<a href="javascript:;" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar05.png"></span>
				<span class="tab-label">Lubricants</span>
			</a>
		</nav>
	</div>
</section>

<?php get_footer(); ?>
