<?php global $page_class; $page_class = 'page-business'; get_header(); ?>

<section class="banner" style="background-image:url('<?=get_stylesheet_directory_uri() . '/img/' . $wp_query->query_vars['category_name']?>-banner.jpg')">
	<div class="text">
		<div class="container">
			<h3><?php single_cat_title(); ?></h3>
			<p><?=category_description()?></p>
		</div>
	</div>
</section>

<section class="breadcrumb-box">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="<?=site_url()?>">HOME </a> <span>》</span>
			</li>
			<li>
				<?php single_cat_title(); ?>
			</li>
		</ul>
	</div>
</section>

<section class="main-content mb-5">
	<div class="container">
		<div class="row">
			<div class="sidebar col-sm-12 col-md-3">
				<div class="widget">
					<div class="widget-title">
						<h3 class="title"><?php single_cat_title(); ?></h3>
					</div>
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<?php foreach(get_posts(array('cat'=>$wp_query->query_vars['cat'], 'order'=>'ASC')) as $index => $post){ ?>
								<a href="#<?=$post->post_name?>" class="list-group-item<?php if($index === 0){ ?> active<?php } ?>"><?=$post->post_title?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php while(have_posts()): the_post(); ?>
			<div id="<?=get_post(get_the_ID())->post_name?>" class="content col-sm-12 col-md-9">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<script type="text/javascript">
jQuery(function($){
	if(window.location.hash){
		$('.content').hide();
		$('.content' + window.location.hash).show();
		$('.list-group-item').removeClass('active');
		$('.list-group-item[href="' + window.location.hash + '"]').addClass('active');
	}
	$('.list-group-item').on('click', function(event){
		event.preventDefault();
		var target = $(this).attr('href');
		window.location.hash = target;
		$('.content').hide();
		$('.content' + target).show();
		$('.list-group-item').removeClass('active');
		$('.list-group-item[href="' + target + '"]').addClass('active');
	});
});
</script>

<?php get_footer(); ?>
