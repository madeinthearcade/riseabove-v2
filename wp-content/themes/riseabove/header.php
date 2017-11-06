<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="grid-overlay container-fluid">
		<div class="row height-100">
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
			<div class="grid-line col-xs-1"></div>
		</div>
	</div>
	<div class="nav-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-offset-1 col-sm-3">
					<div class="social-wrapper">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/madeinthearcade" class="fa fa-facebook" target="_blank"></a></li>
							<li><a href="https://twitter.com/madeinthearcade" class="fa fa-twitter" target="_blank"></a></li>
							<li><a href="https://www.instagram.com/madeinthe_arcade/" class="fa fa-instagram" target="_blank"></a></li>
							<li><a href="https://www.linkedin.com/in/madeinthearcade" class="fa fa-linkedin" target="_blank"></a></li>
						</ul>
					</div>
				</div>
				<div id="nav-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="xs-clear-float col-sm-offset-2 col-sm-6">
					<div class="menu col-sm-offset-2">
						<nav role="navigation" id="main-navigation">
						<?php html5blank_nav(); ?>
						</nav>
						<!-- /menu -->
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
	</div>