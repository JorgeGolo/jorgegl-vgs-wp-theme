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
		<div class="max-w-7xl mx-auto flex items-center justify-between px-4 md:px-8 py-2 text-sm h-[70px]">
 
			<a href="mailto:info@tudominio.es" class="flex items-center gap-2 hover:opacity-80 transition text-white text-[15px] font-medium">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/header/email.svg' ); ?>"
					alt="" class="w-[18px] h-[18px] shrink-0" loading="lazy">
				<span>dominio@dominio.es</span>
			</a>
 
			<a href="tel:+34123456789" class="flex items-center gap-2 bg-white text-azul rounded-full h-[45px] px-4 font-bold hover:opacity-90 transition">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/header/phone.svg' ); ?>"
					alt="" class="w-[18px] h-[18px] shrink-0" loading="lazy">
				<span class="text-[14px]">123 456 789</span>
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
