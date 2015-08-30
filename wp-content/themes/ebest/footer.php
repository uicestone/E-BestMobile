		<footer id="footer">
			<div class="footer-widget">
				<div class="container">
					<div class="site-map">
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/products/"><?=get_category_by_slug('products' . CAT_LANG_SUFFIX)->name?></a></a></dt>
								<?php foreach(get_posts(array('category_name'=>'products' . CAT_LANG_SUFFIX, 'order'=>'asc', 'posts_per_page'=>-1)) as $post){ ?>
								<dd><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post->id)?></a></dd>
								<?php } ?>
							</dl>
						</div>
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/cloud/"><?=get_category_by_slug('cloud' . CAT_LANG_SUFFIX)->name?></a></a></dt>
								<?php foreach(get_posts(array('category_name'=>'cloud' . CAT_LANG_SUFFIX, 'order'=>'asc', 'posts_per_page'=>-1)) as $post){ ?>
								<dd><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post->id)?></a></dd>
								<?php } ?>
							</dl>
						</div>
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/category/industries/"><?=get_category_by_slug('industries' . CAT_LANG_SUFFIX)->name?></a></a></dt>
								<?php foreach(get_posts(array('category_name'=>'industries' . CAT_LANG_SUFFIX, 'order'=>'asc', 'posts_per_page'=>-1)) as $post){ ?>
								<dd><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post->id)?></a></dd>
								<?php } ?>
							</dl>
						</div>
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/category/customer/"><?=get_category_by_slug('customer' . CAT_LANG_SUFFIX)->name?></a></dt>
								<?php foreach(get_posts(array('category_name'=>'customer' . CAT_LANG_SUFFIX, 'order'=>'asc', 'posts_per_page'=>-1)) as $post){ ?>
								<dd><?=get_the_title($post->id)?></a></dd>
								<?php } ?>
							</dl>
						</div>
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/category/service/"><?=get_category_by_slug('service' . CAT_LANG_SUFFIX)->name?></a></dt>
								<?php foreach(get_posts(array('category_name'=>'service' . CAT_LANG_SUFFIX, 'order'=>'asc', 'posts_per_page'=>-1)) as $post){ ?>
								<dd><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post->id)?></a></dd>
								<?php } ?>
							</dl>
						</div>
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/category/news/"><?=get_category_by_slug('news' . CAT_LANG_SUFFIX)->name?></dt>
								<?php foreach(get_categories(array('parent'=>get_category_by_slug('news')->cat_ID, 'hide_empty'=>false)) as $category){ ?>
								<dd><a href="<?=get_category_link($category)?>"><?=$category->cat_name?></a></dd>
								<?php } ?>
							</dl>
						</div>
						<div class="cat">
							<dl>
								<dt><a href="<?=site_url()?>/category/company/"><?=get_category_by_slug('company' . CAT_LANG_SUFFIX)->name?></a></dt>
								<?php foreach(get_posts(array('category_name'=>'company' . CAT_LANG_SUFFIX, 'order'=>'asc', 'posts_per_page'=>-1)) as $post){ ?>
								<dd><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post->id)?></a></dd>
								<?php } ?>
							</dl>
						</div>
					</div>
					<div class="links">
						<span>Link to the other sites</span>
						<ul class="pull-right">
							<li><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/img/icon-facebook.png"></a></li>
							<li><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/img/icon-tweetter.png"></a></li>
							<li><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/img/icon-rss.png"></a></li>
							<li><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/img/icon-google.png"></a></li>
							<li><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/img/icon-linkin.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- footer-top -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						&copy; <?=date('Y')?> eBest mobile. All Rights Reserved.
					</div>
				</div>
			</div>
			<!-- footer-bottom -->
		</footer>
		<!-- footer -->
		</div>
		<!-- page -->
		<!-- Scripts -->
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/bootstrap.min.js"></script> 
		<!-- Menu jQuery plugin -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/hover-dropdown-menu.js"></script> 
		<!-- Menu jQuery Bootstrap Addon --> 
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.hover-dropdown-menu-addon.js"></script> 
		<!-- Scroll Top Menu -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.easing.1.3.js"></script> 
		<!-- Sticky Menu --> 
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.sticky.js"></script> 
		<!-- Bootstrap Validation -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/bootstrapValidator.min.js"></script> 
		<!-- Revolution Slider -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/revolution-custom.js"></script> 
		<!-- Portfolio Filter -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.mixitup.min.js"></script> 
		<!-- Animations -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.appear.js"></script> 
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/effect.js"></script> 
		<!-- Owl Carousel Slider -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/owl.carousel.min.js"></script> 
		<!-- Pretty Photo Popup -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.prettyPhoto.js"></script> 
		<!-- Parallax BG -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.parallax-1.1.3.js"></script> 
		<!-- Fun Factor / Counter -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.countTo.js"></script> 
		<!-- Background Video -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/jquery.mb.YTPlayer.js"></script> 
		<!-- Custom Js Code -->

		<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/custom.js"></script> 
		<!-- Scripts -->
		<?php wp_footer(); ?>
	</body>
</html>