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

function parse_tabs($content){
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
		<li role="presentation" class="<?php if($index === 0){ ?> active<?php } ?>"><a href="#<?=sanitize_title($title)?>" role="tab" data-toggle="tab"><?=$title?></a></li>
		<?php } ?>
	</ul>
	<div class="tab-content">
		<?php foreach($contents as $index => $tab_content){ ?>
		<div role="tabpanel" class="tab-pane fade<?php if($index === 0){ ?> active in<?php } ?>" id="<?=sanitize_title($titles[$index])?>">
			<?=$tab_content?>
		</div>
		<?php } ?>
	</div>
</div>
<?php
}
