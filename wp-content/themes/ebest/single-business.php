<?php global $page_class; $page_class = 'page-business'; get_header(); ?>

<section class="banner">
	<div class="text">
		<div class="container">
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
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
				<?php the_category(); ?>
			</li>
			<li>
				<?php the_title(); ?>
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
						<h3 class="title"><?php the_title(); ?></h3>
					</div>
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<?php $current_post_id = get_the_ID(); foreach(get_posts(array('cat'=>get_the_category()[0]->cat_ID, 'order'=>'ASC')) as $index => $post){ ?>
								<a href="<?=get_category_link(get_the_category()[0])?>#<?=$post->post_name?>" class="list-group-item<?php if($post->ID === $current_post_id){ ?> active<?php } ?>"><?=$post->post_title?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content col-sm-12 col-md-9">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
