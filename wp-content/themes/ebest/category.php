<?php
if(in_array($wp_query->queried_object->slug, array('news', 'news-cn')) || get_category($wp_query->queried_object->category_parent)->slug === 'news'){
	get_template_part('category-news');
}
else{
	get_template_part('category-business');
}