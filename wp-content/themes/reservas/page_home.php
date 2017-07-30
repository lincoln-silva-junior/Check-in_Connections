<?php
/**
    Template Name: Página Inicial do site
*/
get_header(); ?>

		<div class="container">
            <div class="row">
				<div id="primary" class="col-md-12 content-area">
					<main id="main" class="site-main" role="main">
					   <?php get_template_part( 'template-parts/content', 'page-home' ); ?>

					</main><!-- #main -->
				</div><!-- #primary -->

			</div> <!--.row-->
        </div><!--.container-->
<?php get_footer(); ?>

