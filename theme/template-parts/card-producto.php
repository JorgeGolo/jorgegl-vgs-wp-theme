<?php
/**
 * Template part: Tarjeta de Producto (Product Card)
 *
 * Guardar como: template-parts/card-producto.php
 * Se invoca con: get_template_part( 'template-parts/card', 'producto' )
 * dentro de un WP_Query activo (después de the_post()).
 *
 * @package jorgegl-vgs-wp-theme
 */

$descripcion_corta = get_post_meta( get_the_ID(), '_vgs_descripcion_corta', true );
?>

<article <?php post_class( 'producto-card bg-white flex flex-col' ); ?>>

	<a href="<?php the_permalink(); ?>" class="block w-full aspect-[423/272] overflow-hidden ">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'medium', [ 'class' => 'w-full h-full object-cover' ] );
		}
		?>
	</a>

	<div class="gap-y-4 p-4 pb-8 flex flex-col flex-1  shadow-[0px_0px_60px_0px_#0000001A]">
		<h3 class="font-medium text-azul text-2xl leading-[30.8px] text-center mb-2 mt-4">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<?php if ( $descripcion_corta ) : ?>
			<div class="text-foreground flex-1 font-normal text-[15px] leading-[22px] text-center line-clamp-3 mb-2">
				<?php echo wp_kses_post( $descripcion_corta ); ?>
			</div>
		<?php endif; ?>

		<div class="text-center mt-auto pt-2 mb-2">
			<a href="<?php the_permalink(); ?>"
			   class="inline-block bg-verde text-white font-bold text-base leading-[48px] tracking-[-0.008em] uppercase px-6 rounded-full hover:opacity-90 transition-opacity">
				<?php esc_html_e( 'Leer más', 'jorgegl-vgs-wp-theme' ); ?>
			</a>
		</div>
	</div>

</article>