<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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
    <header class="header clear" role="banner">
        <!-- header-container -->
        <div id="header-container">
            <a href="<?php echo home_url(); ?>">
                <?php echo header_get_banner(); ?>
            </a>
            <!-- logo -->
            <div class="logo">
                <?php 
                    // The header image
                    $header_image = get_header_image();
                    $header_image_width = HEADER_IMAGE_WIDTH;
                    $header_image_height = HEADER_IMAGE_HEIGHT;
                ?>
                <img class="header-image" src="<?php header_image();?>"/>
            </div>
            <!-- /logo -->
        </div>
        <!-- /header-container -->
    </header>
    <!-- /header -->
		<!-- wrapper -->
		<div class="wrapper">

            <div class="nav-container"/> <!-- nav-container -->
                <div class="horizontal-spacer"><div class="horizontal-spacer-inner"></div></div>
                <!-- nav -->
                <nav class="nav" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
                <!-- /nav -->
                <div class="horizontal-spacer"><div class="horizontal-spacer-inner"></div></div>
                <div class="nav-innerpage">
                    <?php
                        $footer_page = new WP_Query('pagename=Kontakt-small');
                        if( $footer_page ){
                            $footer_page->the_post();
                            //the_title();
                            the_content();
                            wp_reset_postdata();
                        }
                    ?>
                </div>
                <div class="horizontal-spacer"><div class="horizontal-spacer-inner"></div></div>
                <div class="nav-innerpage">
                    <p><a href="mailto:info@holzbau-inning.de">info@holzbau-inning.de</a></p>
                </div>
            </div> <!-- nav-container -->
