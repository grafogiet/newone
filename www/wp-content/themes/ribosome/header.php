<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Ribosome
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
	
		<?php 
		if ( get_theme_mod('ribosome_display_top_bar', 1) == 1 ) { 
		
		  get_template_part( RIBOSOME_TEMPLATE_PARTS . 'top-bar' );  ?>
		  
		  <div style="position:relative">
			  <?php get_template_part( RIBOSOME_TEMPLATE_PARTS . 'menu-movil' ); ?>
		  </div>
        
        <?php } ?>
		
		<?php if ( get_header_image() ) { 
			
			if (get_theme_mod('ribosome_logo_active') == 1) { 
				$div_image_header = '<div class="logo-header-wrapper">';
				if (get_theme_mod('ribosome_logo_center') == 1) $div_image_header = '<div class="logo-header-wrapper" style="text-align:center;">';
			}else{
				$div_image_header = '<div class="image-header-wrapper">';
			} ?>
			
			<?php echo $div_image_header; ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php esc_attr( header_image() ); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
			</div><!-- .logo-header-wrapper or .image-header-wrapper -->
			
		<?php }else{ // Cabecera sin imagen ?>  
			
			<div class="blog-info-sin-imagen">
			<hgroup>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
			</div>
			
		<?php } //if ( get_header_image() ) ?>
        
        <?php 
        if ( get_theme_mod('ribosome_display_top_bar', 1) == '' ) { ?>
            <div class="boton-menu-movil-sin-top-bar"><?php _e( 'MENU', 'ribosome' ); ?></div>
            <div style="position:relative">
        <?php
				get_template_part( RIBOSOME_TEMPLATE_PARTS . 'menu-movil' ); ?>
			</div>
		<?php } ?>
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'ribosome' ); ?>"><?php _e( 'Skip to content', 'ribosome' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
			
	</header><!-- #masthead -->

	<div id="main" class="wrapper">