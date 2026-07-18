<?php
/**
 * Template part for displaying the header content
 *
 * En la portada, el header se posiciona de forma absoluta sobre la imagen
 * del hero (template-parts/hero-slider.php), fusionándose visualmente con
 * el slider. En el resto de páginas, header normal en el flujo, sólido.
 *
 * @package jorgegl-vgs-wp-theme
 */


// declaramos variable
// para el comportamiento del men´ñu cuiando no estemos en la front page

$is_front = is_front_page();
?>

<header id="masthead">

	<!-- Barra superior de contacto -->
	<div class='bg-verde'>
		<div class="max-w-7xl mx-auto flex items-center justify-between px-4 md:px-8 py-2 text-sm">
 
			<a href="mailto:info@tudominio.es" class="flex items-center gap-2 hover:opacity-80 transition">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
				</svg>
				<span>dominio@dominio.es</span>
			</a>
 
			<a href="tel:+34000000000" class="flex items-center gap-2 bg-white text-lime-600 rounded-full px-4 py-1 font-semibold hover:opacity-90 transition">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2.28a1 1 0 01.98.804l1.11 5.11a1 1 0 01-.53 1.11l-1.6.8a11.05 11.05 0 005.4 5.4l.8-1.6a1 1 0 011.11-.53l5.11 1.11a1 1 0 01.804.98V19a2 2 0 01-2 2h-1C9.16 21 3 14.84 3 7V5z" />
				</svg>
				<span>123 456 789</span>
			</a>
 
		</div>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', '_tw' ); ?>"
		class="<?php echo $is_front ? 'absolute inset-x-0 z-20 text-white' : 'relative z-20 bg-white shadow-sm text-foreground'; ?> flex items-center justify-end h-[120px] max-w-7xl mx-auto px-4 md:px-8 font-semibold text-base">
		
		<button id="menu-toggle" type="button"
	        aria-controls="primary-menu" aria-expanded="false"
	        class="md:hidden flex items-center justify-center w-10 h-10">
		<svg id="icon-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="w-8 h-8">
			<path d="M4 6h16M4 12h16M4 18h16"/>
		</svg>
		<svg id="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="w-8 h-8 hidden">
			<path d="M6 6l12 12M18 6L6 18"/>
		</svg>
		<span class="sr-only"><?php esc_html_e( 'Abrir menú', 'jorgegl-vgs-wp-theme' ); ?></span>
	</button>
		
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'hidden md:flex flex-col md:flex-row gap-2 md:gap-8 list-none absolute md:relative inset-x-0 md:inset-auto top-full md:top-auto bg-azul-oscuro md:bg-transparent px-4 md:px-0 py-4 md:py-0 z-30',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
