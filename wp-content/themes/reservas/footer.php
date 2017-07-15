<?php
/**
 * The template for displaying the footer.
 *
 * Please browse readme.txt for credits and forking information
 * Contains the closing of the #content div and all content after
 *
 * @package Reservas
 */

?>

    <div class="tituloHotel">
            <img src="./img/divisor_preto.png" id="hoteis" alt=""><br><br><h3>Hotéis</h3>
    </div>

    <div class="container"> 
    <div class="row">
        <div class="col-md-4">
           <?php dynamic_sidebar( 'bottom_widget_left' ); ?>
        </div>
        <div class="col-md-4">
           <?php dynamic_sidebar( 'bottom_widget_middle' ); ?>
        </div>
        <div class="col-md-4">
           <?php dynamic_sidebar( 'bottom_widget_right' ); ?> 
        </div>
      </div>
    </div>

    <div class="tituloDicas">
            <img src="./img/divisor_preto.png" id="dicas" alt=""><br><br><h3>Dicas</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inferior">
                        <?php dynamic_sidebar( 'inferior' ); ?>
                    <div style="width:100%">
                        <?php echo do_shortcode('[smartslider3 slider=3]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div><!-- #content -->
<div class="footer-widget-wrapper">
		<div class="container">

	<div class="row">
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_widget_left' ); ?> 
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_widget_middle' ); ?> 
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_widget_right' ); ?> 
			</div>
		</div>
	</div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="row site-info">
		<?php echo '&copy; '.date_i18n(__('Y','reservas')); ?> <?php bloginfo( 'name' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
