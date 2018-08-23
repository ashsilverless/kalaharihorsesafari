<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SLMaster
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'slmaster' ); ?></a>

	<nav class="">
		
		<div class="nav-content-wrapper">
			<div class="tray">
			      <div class="hamburger hamburger--arrow js-hamburger is-active">
			        <div class="hamburger-box">
			          <div class="hamburger-inner"></div>
			        </div>
			      </div>
			    </div>
			    
			<?php
			wp_nav_menu( array( 
			'theme_location' => 'my-custom-menu', 
			'container_class' => 'custom-menu-class' ) ); 
			?>  
			
			<?php $background = get_field("nav_cta-img", "khs_header");?>
				
			<div class="cta-wrapper" style="background-image:url('<?php echo $background ?>')">
				<a href="#">
					<p><?php the_field("nav_cta_text_1", "khs_header"); ?></p>
					<p><?php the_field("nav_cta_text_2", "khs_header"); ?></p>
				</a>
			</div>
		</div>
	</nav>



<header>

	<div class="container">
		<div class="row">

			<div class="col-sm-2">
			<div class="static tray">
			      <div class="hamburger hamburger--arrow js-hamburger">
			        <div class="hamburger-box">
			          <div class="hamburger-inner"></div>
			        </div>
			      </div>
			    </div>    
			</div>

			<div class="col-sm-6 sl-brand offset-sm-1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" href="#">
				<img src="<?php the_field("logo", "khs_header"); ?>" alt="" title="" class="logo">
				<img src="<?php the_field("logo_text", "khs_header"); ?>" alt="" title="" class="logo-text">      
				</a>
			</div>
			
			<div class="col-sm-3 book-cta">
				<a href="#colophon">
					<?php the_field("main_call_to_action_text", "khs_header"); ?>   
				</a>
			</div>
		

			

		
		</div><!--row-->	
	</div><!--container-->



</header>    

<div id="content" class="site-content">
