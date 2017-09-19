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

    <?php if(is_page_template('page_home.php'))
            { ?>
                <div class="tituloHotel">
                        <img src="<?php echo esc_html(get_theme_mod(imgDivisorSecao,'Padrão')) ?>" id="hoteis" alt=""><br><br><!--img src="<?php /*echo (bloginfo("url") . "/img/Hoteis.png")*/?>" alt=""-->
                        <div class="titulo"><?php echo esc_html(get_theme_mod(txtTituloHoteis,'Padrão'), 'reservas') ?></div>
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

                <div class="tituloOfertas">
                        <img src="<?php echo esc_html(get_theme_mod(imgDivisorSecao,'Padrão')) ?>" id="ofertas" alt=""><br><br><!--img src="<?php /*echo (bloginfo("url") . "/img/Servicos.png")*/?>" alt=""-->
                        <div class="titulo"><?php echo esc_html(get_theme_mod(txtTituloOfertas,'Padrão'), 'reservas') ?></div>
                </div>

                <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <?php dynamic_sidebar( 'ofertas_widget_left' ); ?>
                      </div>
                      <div class="col-md-4">
                        <?php dynamic_sidebar( 'ofertas_widget_middle' ); ?>
                      </div>
                      <div class="col-md-4">
                        <?php dynamic_sidebar( 'ofertas_widget_right' ); ?>
                      </div>

                    </div>
                </div>

                <div class="tituloServicos">
                        <img src="<?php echo esc_html(get_theme_mod(imgDivisorSecao,'Padrão')) ?>" id="servicos" alt=""><br><br><!--img src="<?php /*echo (bloginfo("url") . "/img/Servicos.png")*/?>" alt=""-->
                        <div class="titulo"><?php echo esc_html(get_theme_mod(txtTituloServicos,'Padrão'), 'reservas') ?></div>
                </div>

                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                       <?php dynamic_sidebar( 'servicos_widget_left' ); ?>
                    </div>
                    <div class="col-md-8">
                       <?php dynamic_sidebar( 'servicos_widget_right' ); ?>
                    </div>
                  </div>
                </div>

                <div class="tituloMembros">
                        <img src="<?php echo esc_html(get_theme_mod(imgDivisorSecao,'Padrão')) ?>" id="membros" alt=""><br><br><!--img src="<?php /*echo (bloginfo("url") . "/img/Membros.png")*/?>" alt=""-->
                        <div class="titulo"><?php echo esc_html(get_theme_mod(txtTituloMembros,'Padrão'), 'reservas') ?></div>
                </div>

                <div class="container">
                <div class="row">
                    <div class="col-md-8">
                       <?php dynamic_sidebar( 'membros_widget_left' ); ?>
                    </div>
                    <div class="col-md-4">
                       <?php dynamic_sidebar( 'membros_widget_right' ); ?>
                    </div>
                  </div>
                </div>

                <div class="tituloDicas">
                        <img src="<?php echo esc_html(get_theme_mod(imgDivisorSecao,'Padrão')) ?>" id="dicas" alt=""><br><br><!--img src="<?php /*echo (bloginfo("url") . "/img/Dicas.png")*/?>" alt=""-->
                        <div class="titulo"><?php echo esc_html(get_theme_mod(txtTituloDicas,'Padrão'), 'reservas') ?></div>

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

      <?php } ?>



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
