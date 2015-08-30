<?php $page_class = 'page-business'; get_header(); the_post(); ?>

<section class="banner">
	<div class="banner-bg" style="background-image: url('<?=get_stylesheet_directory_uri()?>/img/cloud-banner.jpg?v=2');"></div>
	<div class="sub-nav">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-xs-8">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>

					</div>
					<div class="col-xs-4">
						<a href="http://www.ebestsfa.com" class="btn btn-free">Free Trial</a>
					</div>
				</div>
				<div class="row btns tabs">
					<ul>
						<?php foreach(get_posts(array('category_name'=>'cloud' . CAT_LANG_SUFFIX, 'order'=>'ASC')) as $index => $post){ ?>
						<li<?php if($index === 0){ ?> class="active"<?php } ?>><a href="<?=site_url()?>/category/cloud/#<?=$post->post_name?>"><?=$post->post_title?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cloud">
	<div>
		<img src="<?=get_stylesheet_directory_uri()?>/img/cloud.png">
		<a href="javascript:;">Learn More</a>
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
		</div>
	</div>
</section>
<section class="providing">
	<div class="container">
		<div class="bar_title">
			<h3>Providing Retail Execution For CPG</h3>
		</div>
		<nav class="bar-tab">
			<a href="<?=site_url()?>/category/industries/#beverage" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar01.png"></span>
				<span class="tab-label">Beverage</span>
			</a>
			<a href="<?=site_url()?>/category/industries/#wine-and-spirits" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar02.png"></span>
				<span class="tab-label">Wine and Spirits</span>
			</a>
			<a href="<?=site_url()?>/category/industries/#food" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar03.png"></span>
				<span class="tab-label">Food</span>
			</a>
			<a href="<?=site_url()?>/category/industries/#homecare" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar04.png"></span>
				<span class="tab-label">Homecare</span>
			</a>
			<a href="<?=site_url()?>/category/industries/#lubricants" class="tab-item">
				<span class="icon_img"><img src="<?=get_stylesheet_directory_uri()?>/img/bar05.png"></span>
				<span class="tab-label">Lubricants</span>
			</a>
		</nav>
	</div>
</section>

<?php get_footer(); ?>
