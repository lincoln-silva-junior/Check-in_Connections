<?php
/**
 * The sidebar containing the main widget area.
 *
 * Please browse readme.txt for credits and forking information
 * @package Reservas
 */
?>
<div id="secondary" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-0 sidebar widget-area" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
   <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary .widget-area -->


