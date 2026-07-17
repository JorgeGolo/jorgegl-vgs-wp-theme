<?php
/**
 * Template part: Reseñas de clientes
 *
 * @package jorgegl-vgs-wp-theme
 */

$testimonios = array(
	array(
		'nombre' => 'Carlos Javier',
		'fecha'  => '30/01/2024',
		'texto'  => __( 'Me considero un cliente satisfecho. Me asesoraron como ninguna otra empresa. Cumplieron en los tiempos y excelente trato humano.', 'jorgegl-vgs-wp-theme' ),
	),
	array(
		'nombre' => 'Carlos Javier',
		'fecha'  => '30/01/2024',
		'texto'  => __( 'Atención muy buena por parte del comercial y entrega muy rápida.', 'jorgegl-vgs-wp-theme' ),
	),
	array(
		'nombre' => 'Carlos Javier',
		'fecha'  => '30/01/2024',
		'texto'  => __( 'Necesitaba unos paneles para un trabajo en mi casa, fui de forma particular y me atendieron muy bien y me explicaron todo al detalle, acabe comprando lo que necesitaba y sin duda volveré.', 'jorgegl-vgs-wp-theme' ),
	),
	array(
		'nombre' => 'Carlos Javier',
		'fecha'  => '30/01/2024',
		'texto'  => __( 'Muy contento con el resultado final, el equipo fue muy profesional en todo momento y resolvieron todas mis dudas.', 'jorgegl-vgs-wp-theme' ),
	),
	array(
		'nombre' => 'Carlos Javier',
		'fecha'  => '30/01/2024',
		'texto'  => __( 'Muy contento con el resultado final, el equipo fue muy profesional en todo momento y resolvieron todas mis dudas.', 'jorgegl-vgs-wp-theme' ),
	),
);
?>

<section class="testimonials bg-[#E8EDEF] py-16 px-4 md:px-8">

	<div class="max-w-7xl mx-auto">
		<div class="relative mb-10 text-center">
			<h2 class="section-title">
				<span class="text-azul font-medium"><?php esc_html_e( 'Reseñas de', 'jorgegl-vgs-wp-theme' ); ?></span>
				<span class="text-verde font-semibold"><?php esc_html_e( 'CLIENTES', 'jorgegl-vgs-wp-theme' ); ?></span>
			</h2>

			<div class="hidden md:flex gap-3 absolute right-0 top-1/2 -translate-y-1/2">
				<button type="button" id="testimonials-prev"
						aria-label="<?php esc_attr_e( 'Anterior', 'jorgegl-vgs-wp-theme' ); ?>"
				        class="carousel-arrow carousel-arrow--solid">
					<svg viewBox="0 0 29 29" fill="currentColor" class="w-7 h-7" aria-hidden="true">
						<path d="M23.0254 13.3303H8.65267L13.0517 8.04659C13.2574 7.79911 13.3564 7.48005 13.3269 7.1596C13.2973 6.83915 13.1417 6.54356 12.8942 6.33786C12.6467 6.13216 12.3276 6.0332 12.0072 6.06275C11.6868 6.09229 11.3912 6.24792 11.1855 6.49541L5.12614 13.7666C5.08537 13.8244 5.04892 13.8852 5.01707 13.9484C5.01707 14.009 5.01707 14.0453 4.93224 14.1059C4.87731 14.2449 4.84855 14.3928 4.84741 14.5422C4.84855 14.6916 4.87731 14.8395 4.93224 14.9785C4.93224 15.039 4.93224 15.0754 5.01707 15.136C5.04892 15.1992 5.08537 15.2599 5.12614 15.3178L11.1855 22.589C11.2994 22.7258 11.4421 22.8358 11.6034 22.9112C11.7646 22.9866 11.9406 23.0255 12.1186 23.0252C12.4018 23.0258 12.6762 22.9272 12.8942 22.7465C13.0169 22.6448 13.1183 22.5198 13.1927 22.3788C13.267 22.2378 13.3128 22.0836 13.3275 21.9248C13.3421 21.7661 13.3253 21.606 13.278 21.4538C13.2307 21.3016 13.1538 21.1602 13.0517 21.0378L8.65267 15.754H23.0254C23.3468 15.754 23.655 15.6264 23.8823 15.3991C24.1096 15.1718 24.2372 14.8636 24.2372 14.5422C24.2372 14.2208 24.1096 13.9125 23.8823 13.6853C23.655 13.458 23.3468 13.3303 23.0254 13.3303Z"/>
					</svg>
				</button>
				<button type="button" id="testimonials-next"
						aria-label="<?php esc_attr_e( 'Siguiente', 'jorgegl-vgs-wp-theme' ); ?>"
						class="carousel-arrow carousel-arrow--solid">
					<svg viewBox="0 0 29 29" fill="currentColor" class="w-7 h-7 -scale-x-100" aria-hidden="true">
						<path d="M23.0254 13.3303H8.65267L13.0517 8.04659C13.2574 7.79911 13.3564 7.48005 13.3269 7.1596C13.2973 6.83915 13.1417 6.54356 12.8942 6.33786C12.6467 6.13216 12.3276 6.0332 12.0072 6.06275C11.6868 6.09229 11.3912 6.24792 11.1855 6.49541L5.12614 13.7666C5.08537 13.8244 5.04892 13.8852 5.01707 13.9484C5.01707 14.009 5.01707 14.0453 4.93224 14.1059C4.87731 14.2449 4.84855 14.3928 4.84741 14.5422C4.84855 14.6916 4.87731 14.8395 4.93224 14.9785C4.93224 15.039 4.93224 15.0754 5.01707 15.136C5.04892 15.1992 5.08537 15.2599 5.12614 15.3178L11.1855 22.589C11.2994 22.7258 11.4421 22.8358 11.6034 22.9112C11.7646 22.9866 11.9406 23.0255 12.1186 23.0252C12.4018 23.0258 12.6762 22.9272 12.8942 22.7465C13.0169 22.6448 13.1183 22.5198 13.1927 22.3788C13.267 22.2378 13.3128 22.0836 13.3275 21.9248C13.3421 21.7661 13.3253 21.606 13.278 21.4538C13.2307 21.3016 13.1538 21.1602 13.0517 21.0378L8.65267 15.754H23.0254C23.3468 15.754 23.655 15.6264 23.8823 15.3991C24.1096 15.1718 24.2372 14.8636 24.2372 14.5422C24.2372 14.2208 24.1096 13.9125 23.8823 13.6853C23.655 13.458 23.3468 13.3303 23.0254 13.3303Z"/>
					</svg>
				</button>
			</div>
		</div>

		<div id="testimonials-track" class="testimonials-track flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide">
			<?php foreach ( $testimonios as $t ) : ?>
				<div class="testimonial-card shrink-0 snap-start w-full md:w-[calc((100%-3rem)/3)] bg-white shadow-sm px-6 pt-8 pb-12">

				
				<div class="flex items-center gap-3 mb-8">
					<!-- Avatar con borde verde -->
					<div class="border-r-2 border-verde pr-3 flex items-center h-12">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/testimonials/avatar-testimonial.svg' ); ?>"
							alt="" class="w-12 h-12 rounded-full" loading="lazy">
					</div>
					
					<!-- Nombre del cliente -->
					<p class="font-bold text-azul"><?php echo esc_html( $t['nombre'] ); ?></p>

					<!-- Bloque de la derecha: Empujado a la derecha (ml-auto), apilado en vertical (flex-col), alineado al borde derecho (items-end) y anclado arriba (self-start) -->
					<div class="ml-auto flex flex-col items-end self-start -mt-0.5">
						
						<!-- Estrellas en horizontal -->
						<div class="-mt-1 flex flex-row gap-0.5 mb-1" aria-label="<?php esc_attr_e( '5 de 5 estrellas', 'jorgegl-vgs-wp-theme' ); ?>">
							<?php for ($i = 0; $i < 5; $i++) : ?>
								<svg class="w-[17px] h-[16px] text-yellow-400 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.787 1.4 8.168L12 18.896l-7.334 3.857 1.4-8.168L.132 9.21l8.2-1.192z"/>
								</svg>
							<?php endfor; ?>
						</div>
						
						<!-- Fecha justo debajo con el interlineado corregido -->
						<p class=" text-[15px] leading-tight text-right foreground/60"><?php echo esc_html( $t['fecha'] ); ?></p>
						
					</div>
				</div>

					<p class="text-base foreground"><?php echo esc_html( $t['texto'] ); ?></p>

				</div>
			<?php endforeach; ?>
		</div>

	</div>

</section>