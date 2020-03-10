<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Blog" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title('|',true,'right'); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Archivo:700|Roboto:300,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" type="image/x-icon" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" type="image/x-icon" />
		<?php
			if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply');
			wp_head();
		?>

		<!-- Global site tag (gtag.js) - Google Analytics Here -->
	</head>

	<body <?php body_class(); ?>>
		<header id="header" class='header-small' data-js='header'>
			<section id='header-container'>
				<div id="branding" class="branding">
						<a href="<?php echo home_url(); ?>" title="Go to Our Home Page: <?php bloginfo('name'); ?>">
							<h1> <?php bloginfo('name'); ?> </h1>
							<div class="sub-heading">
								<h4><?php bloginfo('description'); ?></h4>
								<h5><?php bloginfo('wpurl'); ?></h5>
							</div>
						</a>
				</div>
				<div id="menu-toggle" data-js="menuToggle">
					<span></span>
				</div>
			</section>

		</header>
		<nav id="primary-navigation" class="closed" data-js='primeNav'>
			<?php
				wp_nav_menu(array(
					'container_class' 	=> 'main-nav',
					'theme_location' 	=> 'primary',
					'menu_class' 		=> 'nav-wrapper',
					'walker' 			=> new Menu_With_Description
				));
			?>
		</nav>
		<div class='back-to-top' data-js="backToTop" transition="all 5s ease">
			<a href="#home">
				<button>
					<div>
					</div>
				</button>
			</a>
		</div>