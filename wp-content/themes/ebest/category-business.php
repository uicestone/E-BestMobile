<?php
global $page_class; $page_class = 'page-business';
get_header();
add_action('parse_query', function($wp_query){
	if(!$wp_query->is_main_query())
		return;
	
	$wp_query->set('orderby', 'ID');
	$wp_query->set('order', 'ASC');
});
?>

<section class="banner" style="background-image:url('<?=get_stylesheet_directory_uri() . '/img/' . get_category(pll_get_term($wp_query->query_vars['cat'], 'en'))->slug?>-banner.jpg')"></section>

<section class="breadcrumb-box">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="<?=site_url()?>"><?=pll__('Home')?> </a> <span>》</span>
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
								<?php foreach(get_posts(array('cat'=>$wp_query->query_vars['cat'], 'order'=>'ASC', 'posts_per_page'=>-1)) as $index => $post){ ?>
								<a href="#post-<?=$post->ID?>" class="list-group-item"><?=$post->post_title?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php while(have_posts()): the_post(); ?>
			<div id="post-<?=get_the_ID()?>" class="content col-sm-12 col-md-9" style="display:none">
				<?=parse_tabs(wpautop(get_the_content()), get_the_ID())?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<script type="text/javascript">
jQuery(function($){
	
	if(window.location.hash){
		$('.content' + window.location.hash).show();
		$('.list-group-item[href="' + window.location.hash + '"]').addClass('active');
		var postTitle = $('.list-group-item[href="' + window.location.hash + '"]').text();
	}
	else{
		$('.content:last').show();
		$('.list-group-item:first').addClass('active');
		var postTitle = $('.list-group-item:first').text();
	}
	
	$('title').prepend(postTitle + ' &raquo; ');
	
	$('.list-group-item, .dropdown-menu>li>a').on('click', function(event){
		event.preventDefault();
		var target = $(this).attr('href');
		
		if(target.match(/http:\/\//))
		{
			window.location.href = target;
			target = target.match(/#.*$/)[0];
		}
		else
		{
			window.location.hash = target;
		}
		
		$('.content').hide();
		$('.content' + target).show();
		$('.list-group-item').removeClass('active');
		$('.list-group-item[href="' + target + '"]').addClass('active');
		
		var postTitle = $(this).text();
		$('title').text(postTitle + $('title').text().match(/\s*».*$/));
	});
	
});
</script>

<?php get_footer(); ?>
