<?php

if(in_array(get_the_category()[0]->slug, array('news', 'news-cn'))){
	get_template_part('single-news');
}
