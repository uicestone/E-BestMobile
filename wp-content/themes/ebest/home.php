<?php get_header(); ?>

<section class="slider-wrapper">

	<div class="slider">
		<div class="tp-banner">
			<ul>
				<!-- Slide -->
				<li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
					<div class="elements text tp-caption">
						<h2 class="">RETAIL<br>EXECUTION </h2>
						<p>In an age of see it, one of the biggest challenges facing CPG companies today is shelf display and retail execution.</p>
						<a href="#" class="btn btn-lightBlue">MORE <span class="icon"></span></a>
					</div>
					<img src="<?=get_stylesheet_directory_uri()?>/img/slider.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
				</li>
				<!-- Slide Ends -->
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>

	<div class="free-trial">
		<div class="content">
			<a href="http://www.ebestsfa.com/" target="_blank"><p>FREE TRIAL ON THE CLOUD</p>
			<div class="tow-floors">
				<ul>
					<li>eBest SFA</li>
					<li>eBestSFA on Salesforce</li>
				</ul>
			</div>
			</a>
		</div>
	</div>
</section>


<section id="services" class="page-section hide-1200">
	<div class="container">
		<div class="inner">
			<div class="row">
				<div class="col-md-3">
					<img src="<?=get_stylesheet_directory_uri()?>/img/text-1.png">
				</div>
				<div class="col-md-9">
					<div class="row special-feature">
						<!-- Special Feature Box 1 -->
						<div class="col-md-3 col-sm-6 animated fadeInUp visible" data-animation="fadeInUp">
							<a href="<?=site_url()?>/category/solutions/#retail-execution"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-home"></i> 
									<!-- Title -->
									<h4>Retail<br> Execution</h4></div>
								<div class="mask-bottom">
									<p>Retail execution helps to better manage sales by monitoring online and off-line activity.  The solution can be configured to fit your business needs.</p>
								</div>
							</div></a>
						</div>
						<!-- Special Feature Box 2 -->
						<div class="col-md-3 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
							<a href="<?=site_url()?>/category/solutions/#direct-store-delivery"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-magic"></i> 
									<!-- Title -->
									<h4>Direct Store<br>Delivery</h4></div>
								<div class="mask-bottom">
									<p>DSD solution help companies find the most efficient delivery execution, supports offline pricing, enables merchandising and sales support.</p>
								</div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<div class="col-md-3 col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions/#trade-promotion"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-tags"></i> 
									<!-- Title -->
									<h4>Trade<br>Promotion</h4></div>
								<div class="mask-bottom">
									<p>Trade promotion is fit for both traditional and modern channels of CPG industry, managing the whole process of promotion budget application, execution and verification through a complete promotion plan and expense setting.</p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<div class="col-md-3 col-sm-6 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions/#order-management"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-list-alt"></i> 
									<!-- Title -->
									<h4>Order<br>Management</h4></div>
								<div class="mask-bottom">
									<p>order management system has streamlined this into a digital system with easy ordering, timely follow ups and approvals, and accurate records for order history. </p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 1 -->
						<div class="col-md-3 col-sm-6 animated fadeInUp visible" data-animation="fadeInUp">
							<a href="<?=site_url()?>/category/solutions/#supervisor"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-user"></i> 
									<!-- Title -->
									<h4>Supervisor</h4></div>
								<div class="mask-bottom">
									<p>The supervisor solution will help sales managers track sales growth efficiently and accurately. The manager will have complete control of their sales team and their team’s activities at any given point of time, helping the manager guide and train their team whenever and wherever needed.</p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 2 -->
						<div class="col-md-6 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
							<?=do_shortcode(get_posts('tag=home-solutions-video')[0]->post_content)?>
						</div>
						<!-- Special Feature Box 3 -->
						<div class="col-md-3 col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions/#store-audit"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-cloud-upload"></i> 
									<!-- Title -->
									<h4>Store<br>Audit</h4></div>
								<div class="mask-bottom">
									<p>The iAudit execution management system helps companies manage the performance of product shelves in channel stores by bridging the gaps between business executives, sales, and terminal stores. </p></div>
							</div></a>
						</div>
						<!-- Special Feature Box 3 -->
						<div class="col-md-3 col-sm-6 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions/#online-to-offline"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-shopping-cart"></i> 
									<!-- Title -->
									<h4>Online to<br>Offline</h4></div>
								<div class="mask-bottom">
									<p>O2O Solution aims to help companies bridge business relations online and offline. O2O Solution comprehensively combines CRM, DMS and SFA systems online and offline to form a complete consumer database, add consumption scenarios, and streamline the customer's shopping experience.</p></div>
							</div></a>
						</div>
						<div class="col-md-3 col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
							<a href="<?=site_url()?>/category/solutions/#distributor-management"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-users"></i> 
									<!-- Title -->
									<h4>Distributor<br>Management</h4></div>
								<div class="mask-bottom">
									<p>DMS is designed to make sales process management and sales result management more simple and effective, it improves sales execution and increases sales revenue. </p></div>
							</div></a>
						</div>
						<div class="col-md-3 col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
							<a href="<?=site_url()?>/category/solutions/#asset-management"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-columns"></i> 
									<!-- Title -->
									<h4>Asset<br>Management</h4></div>
								<div class="mask-bottom">
									<p>asset management system is mostly used by the company‘s asset management team. The company can better manage the returnable and unreturnable assets such as refrigerators, vending machines and promotion display racks. </p></div>
							</div></a>
						</div>
						<div class="col-md-3 col-sm-6 animated fadeInDown visible" data-animation="fadeInDown">
							<a href="<?=site_url()?>/category/solutions/#customer-self-order"><div class="s-feature-box text-center">
								<div class="mask-top">
									<!-- Icon -->
									<i class="fa fa-pencil-square-o"></i> 
									<!-- Title -->
									<h4>Customer<br>Self Order</h4></div>
								<div class="mask-bottom">
									<p>Connect manufacturers, distributors and outlets with the customer self-order feature. Shop owners will have the option to self-order through the consolidated platform and will benefit from direct communications with manufactures and distributors.</p></div>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services-small-video" class="page-section">
	<div class="container">
		<div class="inner">
			<div class="row">
				<div class="col-md-4">
					<img src="<?=get_stylesheet_directory_uri()?>/img/text-1.png">
				</div>
				<div class="col-md-8">
					<img src="<?=get_stylesheet_directory_uri()?>/img/video.jpg">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services-rest" class="page-section">
	<div class="container">
		<div class="inner">
			<div class="row special-feature">
				<div class="col-xs-3 animated fadeInUp visible" data-animation="fadeInUp">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-home"></i> 
							<!-- Title -->
							<h4>Retail<br> Execution</h4></div>
						<div class="mask-bottom">
							<p></p>
						</div>
					</div>
				</div>
				<!-- Special Feature Box 2 -->
				<div class="col-xs-3 animated fadeInRight visible" data-animation="fadeInRight">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-magic"></i> 
							<!-- Title -->
							<h4>Magical <br>Animations</h4></div>
						<div class="mask-bottom">
							<p></p>
						</div>
					</div>
				</div>
				<!-- Special Feature Box 3 -->
				<div class="col-xs-3 animated fadeInLeft visible" data-animation="fadeInLeft">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-tags"></i> 
							<!-- Title -->
							<h4>Trade<br>Promotion</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<!-- Special Feature Box 3 -->
				<div class="col-xs-3 animated fadeInDown visible" data-animation="fadeInDown">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-list-alt"></i> 
							<!-- Title -->
							<h4>Order<br>Management</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<!-- Special Feature Box 1 -->
				<div class="col-xs-3 animated fadeInUp visible" data-animation="fadeInUp">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-user"></i> 
							<!-- Title -->
							<h4>Supervisor</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<!-- Special Feature Box 3 -->
				<div class="col-xs-3 animated fadeInLeft visible" data-animation="fadeInLeft">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-cloud-upload"></i> 
							<!-- Title -->
							<h4>Store<br>Audit</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<!-- Special Feature Box 3 -->
				<div class="col-xs-3 animated fadeInDown visible" data-animation="fadeInDown">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-shopping-cart"></i> 
							<!-- Title -->
							<h4>Online to<br>Offline</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<div class="col-xs-3 animated fadeInRight visible" data-animation="fadeInRight">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-users"></i> 
							<!-- Title -->
							<h4>Distributor<br>Management</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<div class="col-xs-3 animated fadeInLeft visible" data-animation="fadeInLeft">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-columns"></i> 
							<!-- Title -->
							<h4>Asset<br>Management</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
				<div class="col-xs-3 animated fadeInDown visible" data-animation="fadeInDown">
					<div class="s-feature-box text-center">
						<div class="mask-top">
							<!-- Icon -->
							<i class="fa fa-pencil-square-o"></i> 
							<!-- Title -->
							<h4>Customer<br>Self Order</h4></div>
						<div class="mask-bottom">
							<p></p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="cloud-info" class="page-section">
	<div class="container">
		<div class="row animated fadeInUp visible" data-animation="fadeInUp">
			<div class="col-md-12">
				<div class="tabs">
					<ul class="nav nav-tabs">
						<?php foreach(get_posts(array('category_name'=>'cloud', 'order'=>'ASC', 'posts_per_page'=>5)) as $index => $post){?>
						<li<?php if($index === 0){ ?> class="active"<?php } ?>>
							<a data-toggle="tab" href="#<?=$post->post_name?>" aria-expanded="true"> <?=$post->post_title?></a>
						</li>
						<?php } ?>
					</ul>
					<div class="tab-content">
						<?php foreach(get_posts(array('category_name'=>'cloud', 'order'=>'ASC', 'posts_per_page'=>5)) as $index => $post){?>
						<div id="<?=$post->post_name?>" class="tab-pane fade<?php if($index === 0){ ?> active<?php } ?> in">
							<a href="<?=get_the_permalink($post->ID)?>"><?=get_the_post_thumbnail($post->ID, 'home-cloud-info')?></a>
						</div>
						<?php } ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="news" class="page-section no-pad light-bg border-tb">
	<div class="container-fluid who-we-are">
		<div class="row">
			<div class="col-md-6 no-pad animated fadeInLeft visible" data-animation="fadeInLeft">
				<?=do_shortcode(get_posts('tag=home-news-video')[0]->post_content)?>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-9 news-list">

						<div class="section-title text-left animated fadeInUp visible" data-animation="fadeInUp">
							<!-- Title -->
							<h2 class="title">NEWS</h2>
						</div>
						<!-- Content -->
						<div data-animation="fadeInDown" class="animated fadeInDown visible">
							<ul class="list-group widget">
								<?php foreach(get_posts(array('category_name'=>'news', 'posts_per_page'=>-1)) as $index => $post){ ?>
								<?php if($index && $index % 5 === 0){ ?>
							</ul>
							<ul class="list-group widget hide">
								<?php } ?>
								<li class="item">
									<div class="title clearfix">
										<div class="pull-right"><?=get_the_date('Y-m-d', $post)?></div>
										<div class="pull-left"><?=get_the_title($post)?> <span class="arrow"></span></div>
									</div>
									<div class="content">
										<?=$post->post_excerpt;?>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-xs-3 controls vertical-middle">
						<span class="news-up tp-leftarrow tparrows round"></span>
						<span class="news-down tp-rightarrow tparrows round"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text">
jQuery(function($){
	$('.news-down').on('click', function(){
		
	});
});
</script>

<?php get_footer(); ?>