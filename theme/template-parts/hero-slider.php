<?php
/**
 * Template part: Hero / Slider principal
 *
 * Contenido editable desde Apariencia > Personalizar > Slider
 * (imagen de fondo, textos y enlace del botón). Las flechas de navegación
 * son decorativas, sin lógica de carrusel real (ver decisiones técnicas
 * en el README sobre las dos soluciones de slider evaluadas).
 *
 * @package jorgegl-vgs-wp-theme
 */

$hero_bg_url = get_theme_mod( 'jorgegl_vgs_hero_bg_image', '' );
$hero_line1    = get_theme_mod( 'jorgegl_vgs_hero_title_line1', __( 'Venta y corte a medida de', 'jorgegl-vgs-wp-theme' ) );
$hero_line2    = get_theme_mod( 'jorgegl_vgs_hero_title_line2', __( 'PANEL SÁNDWICH', 'jorgegl-vgs-wp-theme' ) );
$hero_btn_text = get_theme_mod( 'jorgegl_vgs_hero_button_text', __( 'Contacta con nosotros', 'jorgegl-vgs-wp-theme' ) );
$hero_btn_url  = get_theme_mod( 'jorgegl_vgs_hero_button_url', '/contacto' );
?>
<section class="hero-slider relative min-h-[507px] md:min-h-[697px] flex flex-col items-center justify-center bg-cover bg-center lg:mb-8"
         style="background-image: linear-gradient(180deg, rgba(26,40,98,0.7) 17.67%, rgba(53,82,200,0.7) 100%)<?php echo $hero_bg_url ? ", url('" . esc_url( $hero_bg_url ) . "')" : ''; ?>;
		 background-size: cover; 
		 background-position: center 20%; 
		 background-repeat: no-repeat;
		 ">
		<div class="flex-1 mb-4"></div>

	<div>
		<h1 class="text-center relative z-10 mt-[45px] -tracking-[1px]">
			<span class="block text-[32px] md:text-[48px] leading-[52px] font-medium text-white">
					<?php echo esc_html( $hero_line1 ); ?>
			</span>
			<span class=" text-[42px] md:text-[64px] block section-title font-bold text-verde mb-1">
				<?php echo esc_html( $hero_line2 ); ?>
			</span>
		</h1>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/decorative/white-brush.svg' ); ?>"
				alt="" class="w-[200px] md:w-[290px] ml-auto" loading="lazy" aria-hidden="true">
	</div>
	<div class="flex-1 flex items-center justify-center">
		<a href="<?php echo esc_url( $hero_btn_url ); ?>"
		class="inline-block bg-white border-2 border-verde text-azul font-bold text-lg leading-6 tracking-[0.5px] uppercase px-8 py-4 rounded-full hover:bg-verde hover:text-white transition-colors">
			<?php echo esc_html( $hero_btn_text ); ?>
		</a>
	</div>
	<div class="absolute inset-0 max-w-7xl mx-auto px-4 md:px-8 pointer-events-none">
		<span aria-hidden="true"
			class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 z-10 items-center justify-center">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/utilities/left.png' ); ?>"
				alt="" class="w-[58px] h-[58px]" loading="lazy">
		</span>

		<span aria-hidden="true"
			class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 z-10 items-center justify-center">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/utilities/left.png' ); ?>"
				alt="" class="w-[58px] h-[58px] -scale-x-100" loading="lazy">
		</span>
	</div>
</section>