<?php

function jorgegl_vgs_customize_register( $wp_customize ) {

	/**
	 * Sección: Slider (hero de la Home)
	 */
	$wp_customize->add_section(
		'jorgegl_vgs_slider',
		array(
			'title'    => __( 'Slider', 'jorgegl-vgs-wp-theme' ),
			'priority' => 30,
		)
	);

	// Imagen de fondo.
    $wp_customize->add_setting(
        'jorgegl_vgs_hero_bg_image',
        array(
    		'default'           => get_template_directory_uri() . '/images/decorative/hero-default.jpg',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jorgegl_vgs_hero_bg_image',
			array(
				'label'   => __( 'Imagen de fondo', 'jorgegl-vgs-wp-theme' ),
				'section' => 'jorgegl_vgs_slider',
			)
		)
	);

	// Título línea 1.
	$wp_customize->add_setting(
		'jorgegl_vgs_hero_title_line1',
		array(
			'default'           => __( 'Venta y corte a medida de', 'jorgegl-vgs-wp-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'jorgegl_vgs_hero_title_line1',
		array(
			'label'   => __( 'Título (línea 1)', 'jorgegl-vgs-wp-theme' ),
			'section' => 'jorgegl_vgs_slider',
			'type'    => 'text',
		)
	);

	// Título línea 2 (verde).
	$wp_customize->add_setting(
		'jorgegl_vgs_hero_title_line2',
		array(
			'default'           => __( 'PANEL SÁNDWICH', 'jorgegl-vgs-wp-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'jorgegl_vgs_hero_title_line2',
		array(
			'label'   => __( 'Título (línea 2, en verde)', 'jorgegl-vgs-wp-theme' ),
			'section' => 'jorgegl_vgs_slider',
			'type'    => 'text',
		)
	);

	// Texto del botón.
	$wp_customize->add_setting(
		'jorgegl_vgs_hero_button_text',
		array(
			'default'           => __( 'Contacta con nosotros', 'jorgegl-vgs-wp-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'jorgegl_vgs_hero_button_text',
		array(
			'label'   => __( 'Texto del botón', 'jorgegl-vgs-wp-theme' ),
			'section' => 'jorgegl_vgs_slider',
			'type'    => 'text',
		)
	);

	// Enlace del botón.
	$wp_customize->add_setting(
		'jorgegl_vgs_hero_button_url',
		array(
			'default'           => '/contacto',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'jorgegl_vgs_hero_button_url',
		array(
			'label'   => __( 'Enlace del botón', 'jorgegl-vgs-wp-theme' ),
			'section' => 'jorgegl_vgs_slider',
			'type'    => 'url',
		)
	);

	/**
	 * Sección: Redes Sociales (footer)
	 */
	$wp_customize->add_section(
		'jorgegl_vgs_social',
		array(
			'title'    => __( 'Redes Sociales', 'jorgegl-vgs-wp-theme' ),
			'priority' => 160,
		)
	);

	$redes = array(
		'facebook'  => __( 'Facebook', 'jorgegl-vgs-wp-theme' ),
		'twitter'   => __( 'X (Twitter)', 'jorgegl-vgs-wp-theme' ),
		'instagram' => __( 'Instagram', 'jorgegl-vgs-wp-theme' ),
	);

	foreach ( $redes as $slug => $label ) {
		$wp_customize->add_setting(
			"jorgegl_vgs_social_{$slug}",
			array(
				'default'           => '#',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			"jorgegl_vgs_social_{$slug}",
			array(
				'label'   => $label,
				'section' => 'jorgegl_vgs_social',
				'type'    => 'url',
			)
		);
	}
}
add_action( 'customize_register', 'jorgegl_vgs_customize_register' );