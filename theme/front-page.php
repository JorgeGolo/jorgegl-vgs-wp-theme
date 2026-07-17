<?php
/**
 * Front Page Template
 *
 * Plantilla de la Home. WordPress la detecta automáticamente por su
 * nombre de archivo (no hace falta "seleccionarla" en ningún sitio):
 * se usa siempre que en Ajustes > Lectura la portada esté configurada,
 * ya sea como "página estática" o como "tus últimas entradas".
 *
 * Lo que SÍ hay que elegir en el admin es la página estática de portada
 * (Ajustes > Lectura > "Una página estática" > Portada = tu página "Inicio").
 * Esa página es la que aporta el contenido editable del slider vía the_content().
 *
 * @package jorgegl-vgs-wp-theme
 */

get_header();
?>

<main id="main-content">

	<?php
	// --- Slider principal editable ---
	// Contenido gestionado desde el editor de bloques de la página
	// asignada como portada estática en Ajustes > Lectura.
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<section class="hero-slider">
				<?php the_content(); ?>
			</section>
			<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>

	<!-- --- Bucle personalizado: últimos 6 Productos --- -->
	<section class="productos-destacados py-12 px-4 md:px-8">
		<h2 class="section-title font-bold mb-8 text-center">
			<?php esc_html_e( 'Nuestros Productos', 'jorgegl-vgs-wp-theme' ); ?>
		</h2>

		<?php
		$productos_query = new WP_Query(
			[
				'post_type'      => 'producto',
				'posts_per_page' => 6,
				'orderby'        => 'date',
				'order'          => 'DESC',
				'no_found_rows'  => true, // No hace falta paginación aquí.
			]
		);

		if ( $productos_query->have_posts() ) :
			?>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
				<?php
				while ( $productos_query->have_posts() ) :
					$productos_query->the_post();
					// Componente reutilizable de la tarjeta de producto.
					get_template_part( 'template-parts/card', 'producto' );
				endwhile;
				?>
			</div>
			<?php
		else :
			?>
			<p class="text-center text-gray-500">
				<?php esc_html_e( 'Todavía no hay productos publicados.', 'jorgegl-vgs-wp-theme' ); ?>
			</p>
			<?php
		endif;

		wp_reset_postdata();
		?>
	</section>

</main>

<?php

get_template_part( 'template-parts/testimonials' );

get_template_part( 'template-parts/advisory-cta' );

get_footer();