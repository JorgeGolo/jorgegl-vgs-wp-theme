<?php
/**
 * Template part: "Profesionales y CERCANOS" + franja de servicios
 *
 * Sección estática, no editable.
 *
 * @package jorgegl-vgs-wp-theme
 */
?>
<section class="professionals bg-white py-16 px-4 md:px-8">
	<div class="max-w-7xl mx-auto">

<div class="flex flex-col md:flex-row items-center gap-10 mb-12">

			<div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/decorative/pannels.png' ); ?>"
                    alt="<?php esc_attr_e( 'Paneles sándwich apilados en almacén', 'jorgegl-vgs-wp-theme' ); ?>"
                    class="w-full max-w-[423px] aspect-[423/454] object-cover" loading="lazy">
			</div>

			<div class="self-start relative">

				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/decorative/arrow-green.svg' ); ?>"
				     alt=""
				     class="hidden md:block absolute -top-0 -right-56 w-40 lg:w-[350px] h-auto"
				     loading="lazy" aria-hidden="true">
                     

				<h2 class="section-title mb-6">
					<span class="text-azul font-medium "><?php esc_html_e( 'Profesionales y', 'jorgegl-vgs-wp-theme' ); ?></span>
					<span class="text-verde font-semibold"><?php esc_html_e( 'CERCANOS', 'jorgegl-vgs-wp-theme' ); ?></span>
				</h2>

				<div class="space-y-4 text-foreground text-base/8 mb-8 md:max-w-[594px]">
					<p class="pb-4">
						<?php esc_html_e( 'Por eso, en', 'jorgegl-vgs-wp-theme' ); ?>
						<strong class="text-azul">XXXXXX</strong>
						<?php esc_html_e( 'estamos en constante desarrollo en los materiales y técnicas de la construcción modular prefabricada.', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
					<p class="pb-4">
						<?php esc_html_e( 'Contamos con un excelente equipo de ingenieros, delineantes, técnicos y montadores con experiencia y profesionalidad con el fin de que el cliente siempre tenga el mejor resultado posible.', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
					<p class="pb-4">
						<?php esc_html_e( 'Nos encanta asesorarte e intentar dar solución a tus inquietudes y proyectos y para ello creemos en el trato personal y humano para poder resolver todas tus dudas.', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
				</div>

				<a href="/contacto" class="inline-block bg-white border-2 border-verde text-azul font-bold uppercase text-lg px-8 py-3 rounded-full hover:bg-verde hover:text-white transition-colors">
					<?php esc_html_e( 'Contacta con nosotros', 'jorgegl-vgs-wp-theme' ); ?>
				</a>

			</div>

		</div>

		<div class="services-strip bg-gray-50 rounded-xl px-6 md:px-10 py-8">
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 lg:divide-x-2 divide-azul gap-6 lg:gap-0">

				<div class="flex items-center justify-center gap-4 lg:px-6 py-2 lg:py-0">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/services/service-store.svg' ); ?>"
					     alt="" class="w-16 h-16 shrink-0" loading="lazy">
					<p class="text-azul font-medium text-lg leading-tight">
						<?php esc_html_e( 'Punto de venta de panel sándwich', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
				</div>

				<div class="flex items-center justify-center gap-4 lg:px-6 py-2 lg:py-0">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/services/service-design.svg' ); ?>"
					     alt="" class="w-16 h-16 shrink-0" loading="lazy">
					<p class="text-azul font-medium text-lg leading-tight">
						<?php esc_html_e( 'Diseño y fabricación de estructuras', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
				</div>

				<div class="flex items-center justify-center gap-4 lg:px-6 py-2 lg:py-0">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/services/service-engineering.svg' ); ?>"
					     alt="" class="w-16 h-16 shrink-0" loading="lazy">
					<p class="text-azul font-medium text-lg leading-tight">
						<?php esc_html_e( 'Ingeniería', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
				</div>

				<div class="flex items-center justify-center gap-4 lg:px-6 py-2 lg:py-0">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/services/service-construction.svg' ); ?>"
					     alt="" class="w-16 h-16 shrink-0" loading="lazy">
					<p class="text-azul font-medium text-lg leading-tight">
						<?php esc_html_e( 'Construcción modular prefabricada', 'jorgegl-vgs-wp-theme' ); ?>
					</p>
				</div>

			</div>
		</div>

	</div>
</section>