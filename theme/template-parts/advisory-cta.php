<?php
/**
 * Template part: Banner "¿Necesitas asesoramiento personalizado?"
 *
 * Sección estática (no editable), justo antes del footer.
 *
 * @package jorgegl-vgs-wp-theme
 */
?>
<section class="advisory-cta relative bg-verde pt-16 pb-20 px-4 md:px-8 overflow-hidden">

<img src="<?php echo esc_url( get_template_directory_uri() . '/images/decorative/arrow-white.svg' ); ?>"
     alt=""
     class="hidden md:block absolute right-[calc(50%+13rem)] top-1/2 -translate-y-1/2 w-32 lg:w-64 h-auto"
     loading="lazy" aria-hidden="true">

	<div class="max-w-3xl mx-auto text-center relative z-10">

		<h2 class="section-title font-medium mb-6 leading-snug">
			<span class="text-azul">¿Necesitas asesoramiento</span><br>
			<span class="text-white">PERSONALIZADO</span><span class="text-azul">?</span>
		</h2>

		<p class="text-azul text-sm md:text-base/8 mb-8">
			<?php esc_html_e( 'Todos nuestros', 'jorgegl-vgs-wp-theme' ); ?>
			<strong><?php esc_html_e( 'Paneles Sandwich', 'jorgegl-vgs-wp-theme' ); ?></strong>
			<?php esc_html_e( 'disponen de guías de montaje exclusivas.', 'jorgegl-vgs-wp-theme' ); ?><br>
			<?php esc_html_e( 'Además, disponemos de un', 'jorgegl-vgs-wp-theme' ); ?>
			<strong><?php esc_html_e( 'departamento técnico', 'jorgegl-vgs-wp-theme' ); ?></strong>
			<?php esc_html_e( 'para resolver sus dudas', 'jorgegl-vgs-wp-theme' ); ?><br>
			<?php esc_html_e( 'y calculamos los elementos necesarios para su correcto montaje e instalación.', 'jorgegl-vgs-wp-theme' ); ?>
		</p>

		<a href="/contacto" class="inline-block bg-white text-azul font-bold uppercase text-lg px-8 py-3 rounded-full hover:opacity-90 transition-opacity">
			<?php esc_html_e( 'Contacta con nosotros', 'jorgegl-vgs-wp-theme' ); ?>
		</a>

	</div>

</section>