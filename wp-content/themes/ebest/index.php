<?php get_header(); ?>

<section class="title_h2">
	<div class="container">
		<h2>NEWS</h2>
	</div>
</section>
<section class="breadcrumb-box">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="index.html">HOME </a> <span>》</span>
			</li>
			<li>
				<a href="#">News </a>
			</li>
		</ul>
	</div>
</section>
<!-- <img src="<?=get_stylesheet_directory_uri()?>/img/pages/ebest网站-v7-04.jpg"> -->
<section class="main-content mb-5">
	<div class="container">
		<div class="row">
			<div class="sidebar col-sm-12 col-md-3">
				<div class="widget">
					<div class="widget-title">
						<h3 class="title">Content</h3>
					</div>
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<a href="#1" class="list-group-item">eBest news</a>
								<a href="#1" class="list-group-item">Press releases</a>
								<a href="#1" class="list-group-item">Media coverage</a>
								<a href="#1" class="list-group-item">Follow us</a>
							</div>
						</div>
					</div>
				</div>
				<div class="widget">
					<div class="widget-title">
						<h3 class="title">Recent</h3>
					</div>
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<div class="tab-content">
									<div class="tab-pane fade active in">
										<h5 class="content_title">2015-04-28</h5>
										<p>
										<small>In an age of see it,ont of the biggest challenges facing CPGcompanies today is shelf display.In an age of see it,ont of the biggest challenges facing CPGcompanies today is shelf display. </small></p>
									</div>
									<div class="tab-pane fade active in">
										<h5 class="content_title">2015-04-28</h5>
										<p>
										<small>In an age of see it,ont of the biggest challenges facing CPGcompanies today is shelf display.In an age of see it,ont of the biggest challenges facing CPGcompanies today is shelf display. </small></p>
									</div>
									<div class="tab-pane fade active in">
										<h5 class="content_title">2015-04-28</h5>
										<p>
										<small>In an age of see it,ont of the biggest challenges facing CPGcompanies today is shelf display.In an age of see it,ont of the biggest challenges facing CPGcompanies today is shelf display. </small></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="trial col-md-12 col-xs-6">
					<div class="trial_list">
						<p>FREE TRIAL ON THE CLOUD</p>
						<div class="bg_lightblue">
							<p class="bt_white">eBest SFA</p>
							<P>eBestSFA on Salesforce</P>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="content col-sm-12 col-md-9">
				<div class="tabs">
					<?php while(have_posts()): the_post(); ?>
					<div class="tab-content" unbor_bottom>
						<div class="tab-pane fade active in">
							<h4 class="content_title">
								<small class=""><?php the_date(); ?></small>
								<?php the_title(); ?>
							</h4>
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
					<div class="clearfix"></div>
					<div class="page_list">
						<div class="bg_blue"><span>&lt;</span></div>
						<div class="bg_gray">1</div>
						<div class="bg_blue"><span>&gt;</span></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
