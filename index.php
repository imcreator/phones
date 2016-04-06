<?php get_header(); ?>
	<div id="sliderContainer" class="">
		<div class="my-slider">
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt=""></li>
		</ul>
	</div>
	</div>
	<div id="services">
	<div class="container">
		<h2 class="text-center section-title">Services</h2><hr class="title-underscore">
		<p class="text-center section-text">We create a unique process for each client to ensure that business objectives are met, success is achieved and users are happy. It requires a keen intuition to architect a lean process, and that is something we proudly embrace.</p>
		<div id="services_list">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="service_icon_container rounded">
						<span id="development" class="service_icon"></span>
					</div>
					<h4 class="text-center blue">Development</h4>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin.</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service_icon_container rounded">
						<span id="design" class="service_icon"></span>
					</div>
					<h4 class="text-center blue">Design</h4>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin.</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service_icon_container rounded">
						<span id="iosApps" class="service_icon"></span>
					</div>
					<h4 class="text-center blue">Ios apps</h4>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin.</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service_icon_container rounded">
						<span id="speaking" class="service_icon"></span>
					</div>
					<h4 class="text-center blue">Speaking</h4>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin.</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="features">
		<div class="container">
			<div class="col-md-5">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iphones.png" alt="" width="460" height="639" class="img img-responsive">
			</div>
			<div class="col-md-6 col-md-offset-1">
			<div id="features_content">
				<div class="main-title text-center">
					<h2 class="section-title">Features</h2>
					<hr class="title-underscore">
				</div>
			<div id="feature_list">
				<div class="feature">
					<div class="col-md-2 mgt-3">
						<div class="feature_icon_container rounded">
							<span id="deploy" class="feature_icon"></span>
						</div>
					</div>
					<div class="col-md-9 mgb-5">
						<h4 class="bold">Fast deploy</h4>
						<p class="lh-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin, ac viverra quam luctus. Donec augue mauris, placerat a dapibus vitae, eleifend et sapien.</p>
					</div>
				</div>
				<div class="feature">
					<div class="col-md-2 mgt-3">
						<div class="feature_icon_container rounded">
							<span id="easyEdit" class="feature_icon"></span>
						</div>
					</div>
					<div class="col-md-9 mgb-5">
						<h4 class="bold">Easy to edit</h4>
						<p class="lh-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin, ac viverra quam luctus. Donec augue mauris, placerat a dapibus vitae, eleifend et sapien.</p>
					</div>
				</div>
				<div class="feature">
					<div class="col-md-2 mgt-3">
						<div class="feature_icon_container rounded">
							<span id="eCommerce" class="feature_icon"></span>
						</div>
					</div>
					<div class="col-md-9 mgb-5">
						<h4 class="bold">eCommerce ready</h4>
						<p class="lh-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius ligula ut nisl sollicitudin, ac viverra quam luctus. Donec augue mauris, placerat a dapibus vitae, eleifend et sapien.</p>
					</div>
				</div>
			</div>
				
			</div>
			</div>
		</div>
	</div>
	<div id="portfolio">
		<div class="container">
			<h2 class="text-center section-title">Portfolio</h2><hr class="title-underscore">
			<div id="portfolio_list">

				<?php get_phones_portfolio(); ?>
				
			</div>
		</div>
	</div>
	<div id="whyUs">
		<div class="container">
			<h2 class="text-center section-title">Why us?</h2><hr class="title-underscore">
			<p class="text-center section-text white">We create a unique process for each client to ensure that business objectives are met, success is achieved and users are happy. It requires a keen intuition to architect a lean process, and that is something we proudly embrace.</p>
			<button id="btn_whyus" class="btn btn-lg">join the team</button>
		</div>
	</div>
	<div id="aboutUs" class="section">
		<div class="container">
			<h2 class="text-center section-title" style="font-weight:400">About us</h2><hr class="title-underscore">
			<p class="text-center section-text" style="margin-bottom:73px">We create a unique process for each client to ensure that business objectives are met, success is achieved and users are happy. It requires a keen intuition to architect a lean process, and that is something we proudly embrace.</p>
			<div id="team">

				<?php get_phones_team_members(); ?>
				
			</div>
		</div>
	</div>
	<div id="contact">
		<div id="backgroundToChange">
			<div class="container">
				<h2 class="text-center section-title white">Ready to be amazed?</h2><hr class="title-underscore">
				<div id="contact-background">
					<img src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="" class="img img-responsive">
				</div>
			</div>
		</div>
		<div id="calltoAction">
			<div class="container">
				<h4 class="col-md-8 col-sm-12 col-xs-12">We create amazing and unique web experiences for all our clienrs. Do you want to try us?</h4>
				<button class="btn btn-lg btn-success col-md-2 col-xs-12">get in touch</button>
			</div>
		</div>
	</div>
<?php get_footer(); ?>