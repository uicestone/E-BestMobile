<?php $page_class = 'page-solutions-contact'; get_header(); ?>

<section class="banner">
	<div class="text">
		<div class="container">
			<h3>Retail Execution</h3>
			<p>Improve Customer Relationships</p>
		</div>
	</div>
</section>

<section class="breadcrumb-box">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="index.html">HOME </a> <span>》</span>
			</li>
			<li>
				<a href="#">Company </a> <span>&rang;</span>
			</li>
			<li class="active">Contact us</li>
		</ul>
	</div>
</section>

<section class="main-content mb-5">
	<div class="container">
		<div class="row">
			<div class="sidebar col-sm-12 col-md-3">
				<div class="widget">
					<div class="widget-title">
						<h3 class="title">Company</h3>
					</div>
					<div class="list-group">
						<div class="row">
							<div class="col-md-12 col-xs-6">
								<a href="#1" class="list-group-item">About eBest</a>
								<a href="#1" class="list-group-item">Leadership</a>
								<a href="#1" class="list-group-item">Investors</a>
								<a href="#1" class="list-group-item active">Contact us</a>
							</div>
							<div class="col-md-12 col-xs-6 mt_30">
								<a href="javascript">If you have any inquiries, questions, partnershio proposition,or if you want to receive our cases stydies,feel free to contact us now by filling out this form. Our team will contact you by phone or e-mail within 2 working days.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content col-sm-12 col-md-9">
				<img src="<?=get_stylesheet_directory_uri()?>/img/map.png">
				<div class="map-msg">
					<ul>
						<li>
							<div>
								<p class="msg_title">eBest Mobile Inc.(USA)</p>
								<p>Address:1709 Langhome Newtown Road</p>
								<p>Langhome,PA 19047</p>
								<p>Tel:+1-215-6936255</p>
								<p>Email:sales@ebestmobile.com</p>
							</div>
						</li>
						<li  class="bl_gray">
							<div>
								<p class="msg_title">eBest Mobile Inc.(BJ.CHN)</p>
								<p>Address:Room 2708</p>
								<p>No.1 Blue Castle International Centre</p>
								<p>No.3 Da Wang Road.Chaoyang District,Beijing</p>
								<p>Tel:+86-10-85999167</p>
							</div>
							<div>
								<p class="msg_title">eBest Mobile Inc.(SH,CHN)</p>
								<p>Address:15th,19th Floor,CaoHeJing Software Building
								No.461 Hong Cao Road,Xuhui District,Shanghai</p>
								<p>Tel:+86-21-64682167</p>
								<p>Email:sales@ebestmobile.com</p>
							</div>
							<div>
								<p class="msg_title">eBest Mobile Inc.(USA)</p>
								<p>Address:1709 Langhome Newtown Road</p>
								<p>Langhome,PA 19047</p>
								<p>Tel:+1-215-6936255</p>
								<p>Email:sales@ebestmobile.com</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="tab_div">
					<table>
						<tbody>
						<tr>
							<td>
								<label>
								<input type="text" class="form-control" id="first_name" placeholder="First name*">
								<span class="line"> </span>
								<input type="text" class="form-control" id="last_name" placeholder="Last name*">
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type="text" class="form-control" id="email_address" placeholder="Email address*">
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type="text" class="form-control" id="company_name" placeholder="Company name*">
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type="text" class="form-control" id="country" placeholder="Country*">
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type="text" class="form-control" id="position" placeholder="Position*">
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type="text" class="form-control" id="phone_number" placeholder="Phone number*">
								</label>
							</td>
						</tr>
						<tr class="bg_gray">
							<td class="check">
								<label>
									<span><small>I want to receive a case study as well</small></span>
									<input type="checkbox" class="pull-right">
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<textarea class="form-control" rows="3" placeholder="Comments*"></textarea>
								</label>
							</td>
						</tr>
						</tbody>
					</table>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
