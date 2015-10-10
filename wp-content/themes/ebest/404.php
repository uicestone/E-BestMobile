<?php get_header(); ?>
<div class="page-header">
	<div class="breadcrumb-box">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="<?=site_url()?>">Home</a>
				</li>
				<li class="active">404 Not Found</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h1 class="title">404 Not Found</h1>
	</div>
</div>
<section class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<p>Try searching for the best match or browse the links below:</p>
				<form action="<?=site_url()?>">
					<div class="input-group input-group-lg">
						<input type="text" name="s" placeholder="Search for Pages..." class="form-control"> 
						<span class="input-group-btn">
							<button type="button" class="btn btn-default">
								<span class="input-group-btn">Search</span>
							</button>
						</span></div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>