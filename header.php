<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		

			<!-- header -->
			
			<header class="header clear <?php if (is_home() || is_front_page()) echo 'main-page'; ?>" role="banner">

					<!-- nav -->  
					<nav class="nav" role="navigation">
					<div class="container d-flex justify-content-between align-items-center">
					<a class='nav-brand' href="/" class="navlink"><?php bloginfo('name'); ?></a>
						<?php html5blank_nav(); ?>
                        </div>
					</nav>
					<!-- /nav -->
					<?php if (is_home() || is_front_page())  : ?>
					<div class="container">
					<section class="header-content col-sm-8 offset-sm-2">
                    <h4>Lorem ipsum</h4>
					    <h1><?php bloginfo('name'); ?></h1>
					    <h3><?php bloginfo('description') ?></h3>
					    
					</section>
                </div>
					<?php endif; ?>
					
					<?php 
                echo  get_post('post-28')
//                    var_dump($about);
                ?>

			</header>
			
			<!-- /header -->
