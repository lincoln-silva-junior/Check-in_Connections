/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	var $style = $( '#reservas-color-scheme-css' ),
		api = wp.customize;

	if ( ! $style.length ) {
		$style = $( 'head' ).append( '<style type="text/css" id="reservas-color-scheme-css" />' )
		                    .find( '#reservas-color-scheme-css' );
	}

		
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );

	wp.customize( 'header_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-header' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'footer_colors', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widget-wrapper' ).css( {
				'background':to
			});
		} );
	} );


		wp.customize( 'footer_widget_title_colors', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets h3' ).css( {
				'color':to
			});
		} );
	} );

		wp.customize( 'footer_widget_title_colors', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets h3' ).css( {
				'color':to
			});
		} );
	} );


		wp.customize( 'footer_copyright_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( {
				'background':to
			});
		} );
	} );


		wp.customize( 'footer_copyright_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.row.site-info' ).css( {
				'color':to
			});
		} );
	} );
		wp.customize( 'sidebar_headline_colors', function( value ) {
		value.bind( function( to ) {
			$( '#secondary h3.widget-title, #secondary h4.widget-title' ).css( {
				'color':to
			});
		} );
	} );
        wp.customize( 'sidebar_headline_back_color', function( value ) {
		value.bind( function( to ) {
			$( '#secondary h3.widget-title, #secondary h4.widget-title' ).css( {
				'background-color':to
			});
		} );
	} );
		wp.customize( 'sidebar_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .widget' ).css( {
				'background':to
			});
		} );
	} );
		wp.customize( 'sidebar_link_color', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .widget a' ).css( {
				'color':to
			});
		} );
	} );
		wp.customize( 'sidebar_link_border_color', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .widget li' ).css( {
				'border-color':to
			});
		} );
	} );
		wp.customize( 'navigation_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-default' ).css( {
				'background-color':to
			});
		} );
	} );

		wp.customize( 'navigation_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-default .navbar-nav>li>a' ).css( {
				'color':to
			});
		} );
	} );

		wp.customize( 'navigation_logo_color', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-default .navbar-brand' ).css( {
				'color':to
			});
		} );
	} );
		wp.customize( 'headline_color', function( value ) {
		value.bind( function( to ) {
			$( 'h1.entry-title, .entry-header .entry-title a' ).css( {
				'color':to
			});
		} );
	} );
		wp.customize( 'post_content_color', function( value ) {
		value.bind( function( to ) {
			$( '.entry-content, .entry-summary' ).css( {
				'color':to
			});
		} );
	} );

		wp.customize( 'author_line_color', function( value ) {
		value.bind( function( to ) {
			$( 'h5.entry-date, h5.entry-date a' ).css( {
				'color':to
			});
		} );
	} );
	
	wp.customize( 'superior_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.superior' ).css( {
				'background':to
			});
		} );
	} );

    wp.customize( 'nav_bar_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#nav-principal.navbar-default' ).css( {
				'background':to
			});
		} );
        value.bind( function( to ) {
			$( '#nav-principal.lh-nav-bg-transform' ).css( {
				'background':to
			});
		} );
	} );

     wp.customize( 'nav_bar_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#nav-principal.navbar-default .navbar-nav>li>a' ).css( {
				'color':to
			});
		} );
        value.bind( function( to ) {
			$( '#nav-principal.navbar-default .navbar-text' ).css( {
				'color':to
			});
		} );
        value.bind( function( to ) {
			$( '#nav-principal.lh-nav-bg-transform .navbar-nav>li>a' ).css( {
				'color':to
			});
		} );
	} );



     wp.customize( 'titulo_site_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.tituloSite' ).css( {
				'color':to
			});
		} );
	} );

     wp.customize( 'titulo_site_back_color', function( value ) {
		value.bind( function( to ) {
			$( '.apresentacao' ).css( {
				'background':to
			});
		} );
	} );

     wp.customize( 'titulo_site_txtPequeno_color', function( value ) {
		value.bind( function( to ) {
			$( '.txtPequeno' ).css( {
				'color':to
			});
		} );
	} );


     wp.customize( 'titulos_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.titulo' ).css( {
				'color':to
			});
		} );
	} );

     wp.customize( 'mensagemPrincipal_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.mensagemPrincipal' ).css( {
				'color':to
			});
		} );
	} );

     wp.customize( 'textoPrincipal_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.textoPrincipal' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'top_widget_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.top-widgets' ).css( {
				'background':to
			});
		} );
	} );

			wp.customize( 'top_widget_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.top-widgets h3' ).css( {
				'color':to
			});
		} );
	} );
			wp.customize( 'top_widget_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.top-widgets, .top-widgets p' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'membros_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.membros' ).css( {
				'background':to
			});
		} );
	} );

    wp.customize( 'membros_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.membros h3' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'membros_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.membros, .membros p' ).css( {
				'color':to
			});
		} );
	} );

     wp.customize( 'ofertas_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.ofertas' ).css( {
				'background':to
			});
		} );
	} );

    wp.customize( 'ofertas_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.ofertas h3' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'ofertas_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.ofertas, .ofertas p' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'servicos_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.servicos' ).css( {
				'background':to
			});
		} );
	} );

    wp.customize( 'servicos_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.servicos h3' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'servicos_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.servicos, .servicos p' ).css( {
				'color':to
			});
		} );
	} );

    wp.customize( 'inferior_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.inferior' ).css( {
				'background':to
			});
		} );
	} );


			wp.customize( 'bottom_widget_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.bottom-widgets' ).css( {
				'background':to
			});
		} );
	} );

			wp.customize( 'bottom_widget_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.bottom-widgets h3' ).css( {
				'color':to
			});
		} );
	} );
			wp.customize( 'bottom_widget_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.bottom-widgets, .bottom-widgets p' ).css( {
				'color':to
			});
		} );
	} );

			wp.customize( 'header_color_text_colorino', function( value ) {
		value.bind( function( to ) {
			$( '.site-description, .site-title' ).css( {
				'color':to
			});
		} );
	} );
			wp.customize( 'header_color_text_colorino', function( value ) {
		value.bind( function( to ) {
			$( '.site-title::after, .site-title:after' ).css( {
				'background-color':to
			});
		} );
	} );

	// Color Scheme CSS.
	api.bind( 'preview-ready', function() {
		api.preview.bind( 'update-color-scheme-css', function( css ) {
			$style.html( css );
		} );
	} );


} )( jQuery );

