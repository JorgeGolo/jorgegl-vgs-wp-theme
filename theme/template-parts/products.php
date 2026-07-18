<?php
/**
 * Template part: "loop de productos
 *
 * Sección estática, no editable.
 *
 * @package jorgegl-vgs-wp-theme
 */
?>
<!-- --- Bucle personalizado: últimos 6 Productos --- -->
	<section class="productos-destacados pt-12 pt-16 pb-16 md:pb-24 px-4 md:px-8 bg-[#F5F8F9]">

    	<div class="max-w-7xl mx-auto text-center">

            <h2 class="section-title">
				<span class="text-verde font-bold uppercase"><?php esc_html_e( 'Panel sándwich', 'jorgegl-vgs-wp-theme' ); ?></span>
				<span class="text-azul font-medium"><?php esc_html_e( 'para tu proyecto', 'jorgegl-vgs-wp-theme' ); ?></span>
			</h2>

            <?php
            $productos_query = new WP_Query(
                [
                    'post_type'      => 'producto',
                    'posts_per_page' => 6,
            		'orderby'        => 'menu_order',
                    'order'          => 'DESC',
                    'no_found_rows'  => true, // No hace falta paginación aquí.
                ]
            );

            if ( $productos_query->have_posts() ) :
                ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 pt-4">
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
                <p class="text-gray-500">
                    <?php esc_html_e( 'Todavía no hay productos publicados.', 'jorgegl-vgs-wp-theme' ); ?>
                </p>
                <?php
            endif;

            wp_reset_postdata();
            ?>
        </div>
	</section>