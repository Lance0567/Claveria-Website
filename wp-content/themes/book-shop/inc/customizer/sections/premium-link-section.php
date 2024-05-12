<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'book_shop_amberd_Section_Premium' );

	$wp_customize->add_section(
		new book_shop_amberd_Section_Premium(
			$wp_customize,
			'theme_upsell_child',
			array(
				'title'    => esc_html__('Book Shop','book-shop'),
				'pro_text' => esc_html__('Premium','book-shop'),
				'pro_url'  => esc_url('https://wpdevart.com/wordpress-book-shop-theme'),
				'priority'  => 10,
			)
		)
	);