<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jorgegl-vgs-wp-theme
 */

?>

<footer id="colophon" class="bg-azul text-white">

	<div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-start md:justify-between gap-8 md:gap-16 px-4 md:px-8 py-12">

		<div class="footer-contacto space-y-3 md:w-1/3 text-[13px] md:self-end">
			<p>
				<a href="mailto:dominio@dominio.es" class="inline-flex items-center gap-1">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/info/email-icon.svg' ); ?>" alt="" class="w-4 h-4" loading="lazy">
					<?php esc_html_e( 'dominio@dominio.es', 'jorgegl-vgs-wp-theme' ); ?>
				</a>
			</p>
			<p>
				<a href="tel:+34123456789" class="inline-flex items-center gap-1">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/info/phone-icon.svg' ); ?>" alt="" class="w-4 h-4" loading="lazy">
					123 456 789
				</a>
			</p>
			<p class="flex items-start gap-1">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/info/location-icon.svg' ); ?>"
					alt="" class="w-4 h-4 shrink-0 mt-0.5" loading="lazy">
				<span>
					<?php esc_html_e( 'Polígono Industrial "XX XXXXXX"', 'jorgegl-vgs-wp-theme' ); ?><br>
					<?php esc_html_e( 'Parcela XX 12345, Zaragoza', 'jorgegl-vgs-wp-theme' ); ?>
				</span>
			</p>
		</div>

		<div class="footer-productos">
			<h3 class="footer-col-title">
				<?php esc_html_e( 'Productos', 'jorgegl-vgs-wp-theme' ); ?>
			</h3>
			<ul class="footer-col-list">
				<?php
				$_tw_footer_productos = new WP_Query(
					array(
						'post_type'      => 'producto',
						'posts_per_page' => -1,
						'orderby'        => 'title',
						'order'          => 'ASC',
						'no_found_rows'  => true,
					)
				);

				if ( $_tw_footer_productos->have_posts() ) :
					while ( $_tw_footer_productos->have_posts() ) :
						$_tw_footer_productos->the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</ul>
		</div>

		<div class="footer-general">
			<h3 class="footer-col-title">
				<?php esc_html_e( 'Información general', 'jorgegl-vgs-wp-theme' ); ?>
			</h3>
			<?php
			if ( has_nav_menu( 'menu-2' ) ) :
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'container'      => false,
						'menu_class'     => 'footer-col-list',
						'depth'          => 1,
						'fallback_cb'    => false,
					)
				);
			endif;
			?>

			<div class="social-icons flex gap-2 justify-start mt-4">

				<?php
				$fb = get_theme_mod( 'jorgegl_vgs_social_facebook' );
				if ( $fb ) :
					?>
					<a href="<?php echo esc_url( $fb ); ?>" target="_blank" rel="noopener noreferrer"
					aria-label="Facebook" class="social-icon">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/social/fb-icon.svg' ); ?>"
							alt="" class="w-4 h-4" loading="lazy">
					</a>
					<?php
				endif;

				$tw = get_theme_mod( 'jorgegl_vgs_social_twitter' );
				if ( $tw ) :
					?>
					<a href="<?php echo esc_url( $tw ); ?>" target="_blank" rel="noopener noreferrer"
					aria-label="X (Twitter)" class="social-icon">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/social/x-icon.svg' ); ?>"
							alt="" class="w-4 h-4" loading="lazy">
					</a>
					<?php
				endif;

				$ig = get_theme_mod( 'jorgegl_vgs_social_instagram' );
				if ( $ig ) :
					?>
					<a href="<?php echo esc_url( $ig ); ?>" target="_blank" rel="noopener noreferrer"
					aria-label="Instagram" class="social-icon">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/social/ig-icon.svg' ); ?>"
							alt="" class="w-4 h-4" loading="lazy">
					</a>
					<?php
				endif;
				?>

			</div>

		</div>

		<div class="footer-legal">
			<h3 class="footer-col-title">
				<?php esc_html_e( 'Información legal', 'jorgegl-vgs-wp-theme' ); ?>
			</h3>
			<?php
			if ( has_nav_menu( 'menu-3' ) ) :
				wp_nav_menu(
					array(
						'theme_location' => 'menu-3',
						'container'      => false,
						'menu_class'     => 'footer-col-list',
						'depth'          => 1,
						'fallback_cb'    => false,
					)
				);
			endif;
			?>
		</div>

	</div>



	<div class="copyright bg-azul-oscuro text-white flex items-center justify-center h-[70px] font-sans text-xs/6">
		Copyright &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Empresa', 'jorgegl-vgs-wp-theme' ); ?> | <?php esc_html_e( 'Todos los derechos reservados', 'jorgegl-vgs-wp-theme' ); ?>
	</div>

</footer><!-- #colophon -->