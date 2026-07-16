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

	<div class="max-w-wide mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-4 py-12">

		<div class="footer-contacto space-y-3">
			<p>
				<a href="mailto:dominio@dominio.es" class="inline-flex items-center gap-2">
					<?php esc_html_e( 'dominio@dominio.es', 'jorgegl-vgs-wp-theme' ); ?>
				</a>
			</p>
			<p>
				<a href="tel:+34123456789" class="inline-flex items-center gap-2">
					123 456 789
				</a>
			</p>
			<p>
				<?php esc_html_e( 'Polígono Industrial "XX XXXXXX"', 'jorgegl-vgs-wp-theme' ); ?><br>
				<?php esc_html_e( 'Parcela XX 12345, Zaragoza', 'jorgegl-vgs-wp-theme' ); ?>
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

	<div class="social-icons flex gap-4 justify-center pb-8">
		<?php // Iconos Facebook / X / Instagram — pendiente, siguiente paso. ?>
	</div>

	<div class="copyright bg-azul-oscuro text-white flex items-center justify-center h-[70px] font-sans text-xs/6">
		Copyright &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Empresa', 'jorgegl-vgs-wp-theme' ); ?> | <?php esc_html_e( 'Todos los derechos reservados', 'jorgegl-vgs-wp-theme' ); ?>
	</div>

</footer><!-- #colophon -->