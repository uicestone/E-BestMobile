<?php

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('jquery');
});

/**
 * add several common post type supports to  attachment
 */
add_action('init', function(){
	register_taxonomy_for_object_type( 'category', 'attachment' );
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );
	add_post_type_support( 'attachment', 'thumbnail' );
	add_image_size('home-cloud-info', 1171, 601, true);
});

function parse_tabs($content, $post_title){
	preg_match_all('/<h1.*?>(.*?)<\/h1>/', $content, $matches);
	$titles = $matches[1];
	if(count($titles) < 3){
		echo $content;
		return;
	}
	$contents = preg_split('/<h1.*?>.*?<\/h1>/', $content);
	array_shift($contents);
?>
<div class="tabs">
	<ul class="nav nav-tabs mb-2" role="tablist">
		<?php foreach($titles as $index => $title){ ?>
		<li role="presentation" class="<?php if($index === 0){ ?> active<?php } ?>"><a href="#<?=sanitize_title($post_title)?>-<?=sanitize_title($title)?>" role="tab" data-toggle="tab"><?=$title?></a></li>
		<?php } ?>
	</ul>
	<div class="tab-content">
		<?php foreach($contents as $index => $tab_content){ ?>
		<div role="tabpanel" class="tab-pane fade<?php if($index === 0){ ?> active in<?php } ?>" id="<?=sanitize_title($post_title)?>-<?=sanitize_title($titles[$index])?>">
			<?=$tab_content?>
		</div>
		<?php } ?>
	</div>
</div>
<?php
}

add_action('init', function(){
	define('LANG', pll_current_language('slug'));
	define('CAT_LANG_SUFFIX', pll_current_language('slug') === pll_default_language('slug') ? '' : '-' . LANG);

	pll_register_string('more', 'More');
	pll_register_string('home', 'Home');
	pll_register_string('news', 'News');
	pll_register_string('home-headline', 'RETAIL<br>EXECUTION');
	pll_register_string('home-headline-excerpt', 'In an age of see it, one of the biggest challenges facing CPG companies today is shelf display and retail execution.');
	pll_register_string('eBest SFA', 'eBest SFA');
	pll_register_string('eBestSFA on Salesforce', 'eBestSFA on Salesforce');
	pll_register_string('free-trial', 'FREE TRIAL ON THE CLOUD');
});
