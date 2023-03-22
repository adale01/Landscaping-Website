<?php include DOC_ROOT . 'includes/layout/main/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>resources/css/main/default.css?<?php echo CSS_VERSION; ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>resources/css/main/responsive.css?<?php echo CSS_VERSION; ?>" type="text/css">
	<script type="text/javascript" src="<?php echo SITE_URL; ?>resources/scripts/jquery-3.6.3.min.js?<?php echo JS_VERSION; ?>"></script>
	<script src="<?php echo SITE_URL; ?>resources/scripts/main.js?<?php echo JS_VERSION; ?>"></script>
	<?php if(!empty($page_info->title)){ ?>
		<title><?php echo $page_info->title; ?></title>
	<?php } ?>
	<?php if(!empty($page_info->description)){ ?>
		<meta name="description" content="<?php echo $page_info->description; ?>">
	<?php } ?>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body id="body">
    <header>
        <nav>
            <div class="navbar_upper">
                <ul>
                    <li>&#9742;</li>
                    <li><span class="action-text">Call us today on </span><?php echo $constants->phone->text; ?></li>
                </ul>
				<div class="fb_logo_header" style="color:#fff; display: flex; align-items:center; font-size:20px">
					<a href="<?php echo $constants->facebook->text; ?>" target="_blank" style="color:#fff; display: flex; align-items:center; font-size:20px; text-decoration:none">
						<img src="<?php echo SITE_URL; ?>resources/images/main/facebook_color.png" alt="Facebook Logo" height="25px" width="25px" style="margin-right:10px;">
						<span class="action-text-2">Follow us on </span>Facebook!
					</a>
				</div>
				
            </div>
            <div class="navbar_lower">
                <div class="navbar_logo">
					<a href="<?php echo SITE_URL; ?>">
						<img src="<?php echo SITE_URL; ?>resources/images/main/logo_trans.png" alt="P & H Landscapes">
					</a>
				</div>
				<div id="menu-burger" onclick="switch_menu();">
				</div>
                <ul id="links">
                    <li><a href="/" <?php echo (($page_info->menu_option == 'home')?('class="clicked"'):('')); ?>>Home</a></li>
                    <li><a href="<?php echo SITE_URL; ?>about/" <?php echo (($page_info->menu_option == 'about')?('class="clicked"'):('')); ?>>About</a></li>
                    <li><a href="<?php echo SITE_URL; ?>services/" <?php echo (($page_info->menu_option == 'services')?('class="clicked"'):('')); ?>>Services</a></li>
                    <li><a href="<?php echo SITE_URL; ?>portfolio/" <?php echo (($page_info->menu_option == 'portfolio')?('class="clicked"'):('')); ?>>Portfolio</a></li>
					<li><a href="<?php echo SITE_URL; ?>testimonials/" <?php echo (($page_info->menu_option == 'testimonials')?('class="clicked"'):('')); ?>>Testimonials</a></li>
                    <li><a href="<?php echo SITE_URL; ?>contact/" class="contact_button<?php echo (($page_info->menu_option == 'contact')?(' clicked"'):('')); ?>">Contact Us</a></li>
                </ul>
				<div style="clear:both"></div>
            </div>
        </nav>
    </header>
    <main>