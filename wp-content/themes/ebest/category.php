<?php
if($wp_query->queried_object->slug === 'news' || get_category($wp_query->queried_object->category_parent)->slug === 'news'){
	get_template_part('category-news');
}
else{
	get_template_part('category-business');
}