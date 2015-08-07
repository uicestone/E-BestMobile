<?php

if(get_the_category()[0]->slug === 'news'){
	get_template_part('single-news');
}
else{
	get_template_part('single-business');
}
