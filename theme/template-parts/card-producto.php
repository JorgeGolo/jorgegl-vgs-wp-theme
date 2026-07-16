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

<article <?php post_class( 'producto-card bg-white rounded-lg shadow-sm overflow-hidden flex flex-col' ); ?>>

	<a href="<?php the_permalink(); ?>" class="block aspect-square overflow-hidden">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'medium', [ 'class' => 'w-full h-full object-cover' ] );
		}
		?>
	</a>

	<div class="p-4 flex flex-col flex-1">
		<h3 class="font-semibold text-lg mb-2">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<?php if ( $descripcion_corta ) : ?>
			<div class="text-sm text-gray-600 flex-1">
				<?php echo wp_kses_post( $descripcion_corta ); ?>
			</div>
		<?php endif; ?>
	</div>

</article>