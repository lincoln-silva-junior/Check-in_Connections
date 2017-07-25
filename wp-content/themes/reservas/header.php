<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
* Please browse readme.txt for credits and forking information
 * @package Reservas
 */

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <header id="masthead"  role="banner">
      <nav class="navbar lh-nav-bg-transform navbar-default navbar-fixed-top" role="navigation"> 
        <!-- Brand and toggle get grouped for better mobile display --> 
        <div class="container" id="navigation_menu">
          <div class="navbar-header"> 
            <?php if ( has_nav_menu( 'primary' ) ) { ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
              <span class="sr-only"><?php echo esc_html('Toggle Navigation', 'reservas') ?></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
            </button> 
            <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php 
              if (!has_custom_logo()) { 
                echo '<div class="navbar-brand">'; bloginfo('name'); echo '</div>';
              } else {
                the_custom_logo();
              } ?>
            </a>
          </div> 
          <?php if ( has_nav_menu( 'primary' ) ) {
              reservas_header_menu(); // main navigation 
            }
            ?>

          </div><!--#container-->
        </nav>

        <div class="site-header">
			<div class="slider01">
			
			</div>  
		  
			<?php 
				echo do_shortcode('[smartslider3 slider=2]');
			?>
        </div><!--.site-header--> 
      </header> 

	  <div class="superior">
            <?php dynamic_sidebar( 'superior' ); ?>
      </div>

      <div class="apresentacao">
          <img src="./img/Check-in_Connections_Inline.png" alt="Check-in Connections">
      </div>

      <div class="container"> 			
        <div class="row">
          <div class="col-md-4">
			<?php dynamic_sidebar( 'top_widget_left' ); ?>
          </div>
          <div class="col-md-4">
			<?php dynamic_sidebar( 'top_widget_middle' ); ?>
		  </div>
          <div class="col-md-4">
			<?php dynamic_sidebar( 'top_widget_right' ); ?>
          </div>

		</div>
	</div>

    <div id="content" class="site-content">
