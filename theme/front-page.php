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

</main>

<?php

get_template_part( 'template-parts/products' );

get_template_part( 'template-parts/budget-form' );

get_template_part( 'template-parts/professionals' );

get_template_part( 'template-parts/testimonials' );

get_template_part( 'template-parts/advisory-cta' );

get_footer();