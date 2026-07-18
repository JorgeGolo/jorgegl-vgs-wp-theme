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

	<a href="<?php the_permalink(); ?>" class="block w-full max-w-[422px] aspect-[422/271] mx-auto overflow-hidden">
		<?php
		$thumbnail_id  = get_post_thumbnail_id();
		$thumbnail_url = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'medium' ) : false;

		if ( $thumbnail_url ) {
			the_post_thumbnail( 'medium', [ 'class' => 'w-full h-full object-cover object-center' ] );
		} else {
			?>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/products/placeholder-producto.jpg' ); ?>"
				alt="" class="w-full h-full object-cover" loading="lazy">
			<?php
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