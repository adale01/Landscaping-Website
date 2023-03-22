<?php
include DOC_ROOT . 'pages/home/home.php';
include DOC_ROOT . 'includes/layout/main/header_html.php';
?>

<link rel="stylesheet" href="<?php echo SITE_URL; ?>resources/css/home/default.css?<?php echo CSS_VERSION; ?>" type="text/css">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>resources/css/home/responsive.css?<?php echo CSS_VERSION; ?>" type="text/css">

<section class="welcome">
	<div class="welcome_image">
		<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_constants/<?php echo $constants->home_header_image->id; ?>/image.jpg" alt="<?php echo $constants->home_header_image->text; ?>">
	</div>
	<div class="welcome_intro">
		<h1 class="welcome_title bubble-title">
		   <?php echo $constants->home_title->text; ?>	   
		</h1>
		<h2 class="welcome_message">
			<?php echo $constants->home_intro->text; ?>
		</h2>
	</div>
</section>
<section class="dcm_icons">
	<div class="design">
		<img src="<?php echo SITE_URL; ?>resources/images/home/graphic-design.png" alt="Design symbol" width="100px" height="100px">
		<p>Design</p>
	</div>
	<div class="construct">
		<img src="<?php echo SITE_URL; ?>resources/images/home/helmet.png" alt="Construct symbol" width="100px" height="100px">
		<p>Construct</p>
	</div>
	<div class="maintain">
		<img src="<?php echo SITE_URL; ?>resources/images/home/maintenance.png" alt="Maintain symbol" width="100px" height="100px">
		<p>Maintain</p>
	</div>
</section>

<div class="outer-container about-us">
	<div class="centered-container">
		<h3 class="bubble-title">About Us</h3>
	</div>
	<section class="about_us">
		<div class="about_us_container">
			<div class="about_us_body">	
				<div class="about_us_description">
					<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_constants/<?php echo $constants->home_about_image->id; ?>/image.jpg" alt="<?php echo $constants->home_about_image->text; ?>" style="float:right; width:50%; margin-left:20px;">
					<?php echo $constants->home_about_text->rich_text; ?>	  
					<div style="clear:both"></div>
				</div>
				<div class="about_us_btn">
					<a class="button green" href="<?php echo SITE_URL; ?>contact/">Get in touch</a>
				</div>
			</div>
		</div>
	</section>
</div>
<section id="services_container">
	<div class="services_title">
		<h3 class="bubble-title">Services we offer</h3>
	</div>
	<div class="services_description">
		<p>
			<?php echo $constants->services_text->text; ?>
		</p>
	</div>
</section>
<div class="services-list">
	<div class="top-services">
		<?php foreach($services as $service){ ?>
			<div class="services-image">
				<a href="<?php echo SITE_URL; ?>services/<?php echo $service->url_name; ?>/" class="inflated-link"></a>
				<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_services/<?php echo $service->id; ?>/image.jpg?t=<?php echo $service->last_modified_datetime; ?>" alt="<?php echo $service->title; ?>" title="<?php echo $service->title; ?>">
				<div class="service-header">
					<p><?php echo $service->title; ?></p>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<div class="our-work">
	<div class="our-work-section-1">
		<div class="our-work-image">
			<div class="our-work-title">
				<h3>Our Work</h3>
				<p>See portfolio for more examples</p>
				<div class="our-work-btn">
					<a class="button" href="<?php echo SITE_URL; ?>portfolio/">Portfolio</a>
				</div>
			</div>
		</div>
		<?php foreach($top_portfolios as $portfolio){ ?>
			<div class="our-work-image">
				<a href="<?php echo SITE_URL; ?>portfolio/<?php echo $portfolio->url_name; ?>" class="inflated-link"></a>
				<img src="<?php echo $portfolio->main_image->url; ?>" alt="<?php echo $portfolio->main_image->title; ?>">
				<div class="our-work-description">
					<h4><?php echo $portfolio->title; ?></h4>
					<p><?php echo $portfolio->description; ?></p>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="our-work-section-2">
		<?php foreach($bottom_portfolios as $portfolio){ ?>
			<div class="our-work-image">
				<a href="<?php echo SITE_URL; ?>portfolio/<?php echo $portfolio->url_name; ?>" class="inflated-link"></a>
				<img src="<?php echo $portfolio->main_image->url; ?>" alt="<?php echo $portfolio->main_image->title; ?>">
				<div class="our-work-description">
					<h4><?php echo $portfolio->title; ?></h4>
					<p><?php echo $portfolio->description; ?></p>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<div class="outer-container testimonials">
	<div class="centered-container">
		<h3 class="bubble-title">Testimonials</h3>
	</div>
	<div class="centered-container">
		<div class="testimonial-boxes">
			<?php foreach($testimonials as $testimonial){ ?>
				<div class="testimonial-box">
					<div class="testimonial-box-inner">
						<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_testimonials/<?php echo $testimonial->id; ?>/photo.jpg?t=<?php echo $testimonial->last_modified_datetime; ?>" alt="<?php echo $testimonial->name; ?>" title="<?php echo $testimonial->name; ?>">
						<p>"<?php echo $testimonial->testimonial; ?>"</p>
						<br>
						<p class="names"><?php echo $testimonial->name; ?></p>
					</div>
				</div>
			<?php } ?>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="testimonial_btn">
		<a class="button" href="<?php echo SITE_URL; ?>testimonials/">See more</a>
	</div>
</div>
<section>
	<div class="contact_container">
		<div class="contact_details">
			<h2>Get in touch</h2>
			<br>
			<br>
			<br>
			<br>
			<p><?php echo SITE_TITLE; ?></p>
			<br>
			<br>
			<p><?php echo $constants->address->text; ?></p>
			<br>
			<br>
			<p><?php echo $constants->email->text; ?></p>
			<br>
			<br>
			<p><?php echo $constants->phone->text; ?></p>
			<br>
			<br>
			<div class="fb_logo_header" style="color:#fff; display: flex; align-items:center; font-size:20px">
				<a href="<?php echo $constants->facebook->text; ?>" target="_blank" style="color:#fff; display: flex; align-items:center; font-size:20px; text-decoration:none">
					<img src="<?php echo SITE_URL; ?>resources/images/main/facebook_color.png" alt="Facebook Logo" height="25px" width="25px" style="margin-right:10px;">
					Follow us on Facebook!
				</a>
			</div>
		</div>
		<div class="contact_form">
			<form>
				<div>
					<label for="name">Name*</label>
					<input type="text" name="name" id="name" required>
				</div>
				<div>
					<label for="phone">Phone*</label>
					<input type="tel" name="phone" id="phone" required>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="email" name="email" id="email">
				</div>
				<div>
					<label for="message">Message</label>
					<textarea name="message" id="message"></textarea>
				</div>
				<button type="submit" id="contact_submit">Submit</button>
			</form>
		</div>
	</div>
</section>

<?php
include DOC_ROOT . 'includes/layout/main/footer_html.php';
?>