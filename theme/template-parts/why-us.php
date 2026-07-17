<?php
/**
 * Template part: "¿Por qué nuestro PANEL SÁNDWICH?"
 *
 * Sección estática, no editable.
 *
 * @package jorgegl-vgs-wp-theme
 */
?>
<section class="why-us bg-white py-16 px-4 md:px-8">
	
    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-semibold text-azul flex flex-wrap justify-center gap-x-2">
                <span class="text-azul font-medium"><?php esc_html_e( '¿Por qué nuestro', 'jorgegl-vgs-wp-theme' ); ?></span>
                <span class="text-verde font-bold uppercase"><?php esc_html_e( 'panel sándwich', 'jorgegl-vgs-wp-theme' ); ?></span><span class="text-azul font-medium">?</span>
            </h2>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/decorative/blue-brush.svg' ); ?>" 
                 alt="" class="w-56 md:w-[285px] mt-2 select-none relative left-36" loading="lazy">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6 text-left">

            <div class="why-us-card p-6 gap-4">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/why-us/attention.svg' ); ?>"
                    alt="" class="w-16 h-16 shrink-0" loading="lazy">
        		<p class="why-us-card-text">
                    <?php esc_html_e( 'Atención', 'jorgegl-vgs-wp-theme' ); ?><br/>
                    <?php esc_html_e( 'real y personalizada', 'jorgegl-vgs-wp-theme' ); ?>
                </p>
            </div>

            <div class="why-us-card p-6 gap-4">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/why-us/advice.svg' ); ?>"
                    alt="" class="w-16 h-16 shrink-0" loading="lazy">
		        <p class="why-us-card-text">
                    <?php esc_html_e( 'Asesoramiento', 'jorgegl-vgs-wp-theme' ); ?><br/>
                    <?php esc_html_e( 'técnico especializado', 'jorgegl-vgs-wp-theme' ); ?>

                </p>
            </div>

            <div class="why-us-card p-6 gap-4">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/why-us/logistics.svg' ); ?>"
                    alt="" class="w-16 h-16 shrink-0" loading="lazy">
		        <p class="why-us-card-text">
                    <?php esc_html_e( 'Logística', 'jorgegl-vgs-wp-theme' ); ?><br/>
                    <?php esc_html_e( 'eficiente y adaptable', 'jorgegl-vgs-wp-theme' ); ?>
                </p>
            </div>

	        <div class="why-us-card py-6 px-2 gap-2">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/why-us/quality.svg' ); ?>"
                    alt="" class="w-16 h-16 shrink-0" loading="lazy">
		        <p class="why-us-card-text">
                    <?php esc_html_e( 'Compromiso con la calidad', 'jorgegl-vgs-wp-theme' ); ?>
                </p>
            </div>

        </div>

	</div>
</section>