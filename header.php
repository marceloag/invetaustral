<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Meta Information -->
	<meta name="google-site-verification" content="">
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2013. All Rights Reserved.">
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<!-- Stylesheets -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css" />
<!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
<!-- Facebook Image -->
	<link rel="image_src" href="" />
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/icon.ico" />
<!-- Facebook Image -->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>

    <header>
        <div class="row full collapse">
            <div class="large-12 medium-12 small-12 columns contenedor_menu">

                <div class="informacion">
                    <div class="large-12 medium-12 small-12 columns large-text-right small-text-right">
                        <ul>
                            <li><img src="<?php bloginfo('template_directory'); ?>/img/icon_phone.png" width="20" alt=""> Tel:+56 9 8500 2122</li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/img/icon_correo.png" width="20" alt=""> invet.austral@tie.cl</li>
                        </ul>

                        <hr>
                    </div>
                </div>

                <div id="menu">
                    <div class="large-12 medium-12 small-12 columns">
                        <nav class="top-bar" data-topbar role="navigation">
                            <ul class="title-area">
                                <li class="name">
                                    <h1><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo_ivetaustral.png" alt=""></a>
                                    </h1>
                                </li>

                                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                            </ul>

                            <section class="top-bar-section">

                                <?php wp_nav_menu( array('menu' => 'mainmenu','menu_class' => 'right', )); ?>

                            </section>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="large-12 medium-12 small-12 columns">
                <div class="slider">

                    <span class="degradado"></span>

                    <div class="background_slider">
                        <img src="<?php bloginfo('template_directory'); ?>/img/background_slider.png" alt="">
                    </div>

                    <div class="texto_slider">
                        <div class="large-8 medium-12 small-12 columns large-centered medium-centered small-centered text-center">
                            <div class="texto">
                                <h1>INVET AUSTRAL</h1>
                                <h4>Empresa de servicios integrales <br> en salud ambiental...</h4>
                            </div>
                        </div>
                    </div>

                    <ul class="example-orbit" data-orbit data-options="bullets:false;slide_number:false;animation:fade">
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_001.png" alt="">
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_002.png" alt="">
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_003.png" alt="">
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_004.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
