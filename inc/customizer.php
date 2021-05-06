<?php

use function PHPSTORM_META\type;

/**
 * Simples Mei Theme Customizer
 *
 * @package Simples Mei
 */

 function simples_mei_customizer( $wp_customize ){

	// Contato Settings

	$wp_customize->add_section(
		'sec_contato', array(
			'title'			=> __( 'Configurações de contato', 'simples-mei' ),
			'description'	=> __( 'Configurações de contato', 'simples-mei' )
		)
	);

		// link wpp

		$wp_customize->add_setting(
			'set_number_link_wpp', array(
				'type'					=> 'theme_mod',
				'default'				=> '5562983302121',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_number_link_wpp', array(
				'label'				=> __( 'Número para o link do Whatsapp', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o número para o link do Whatsapp', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);

		// msg do wpp

		$wp_customize->add_setting(
			'set_msg_wpp', array(
				'type'					=> 'theme_mod',
				'default'				=> 'Olá, vim do site oficial Simples MEI, poderia me ajudar?',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_msg_wpp', array(
				'label'				=> __( 'Mensagem para o Whatsapp', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione a mensagem que apareça no App Whatsapp', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);

		// E-mail Link

		$wp_customize->add_setting(
			'set_link_email', array(
				'type'					=> 'theme_mod',
				'default'				=> 'contato@simplesmei.com',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_link_email', array(
				'label'				=> __( 'Link para o e-mail', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o e-mail', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);

		// Facebook Link

		$wp_customize->add_setting(
			'set_link_facebook', array(
				'type'					=> 'theme_mod',
				'default'				=> 'http://facebook.com/',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_link_facebook', array(
				'label'				=> __( 'Link para o Facebook', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o link para o Facebook', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);

		// Instagram Link

		$wp_customize->add_setting(
			'set_link_instagram', array(
				'type'					=> 'theme_mod',
				'default'				=> 'https://www.instagram.com/',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_link_instagram', array(
				'label'				=> __( 'Link para o Instagram', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o link para o Instagram', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);
		
		// Rodapé
 
		$wp_customize->add_control(
			'set_footer_contact_text', array(
				'label'				=> __( 'Texto do contato rodapé', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o texto do contato', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);

		// horario de funcionamento

		$wp_customize->add_setting(
			'set_opening_hours', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);
 
		$wp_customize->add_control(
			'set_opening_hours', array(
				'label'				=> __( 'horário de funcionamento do rodapé', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o horário de funcionamento do rodapé', 'simples-mei' ),
				'section' 		    => 'sec_contato',
				'type'				=> 'text'
			)
		);

	// Home Page Settings

 	$wp_customize->add_section(
 		'sec_abrir_mei', array(
 			'title'			=> __( 'Configurações da página Abrir MEI', 'simples-mei' ),
 			'description'	=> __( 'Configurações da página Abrir MEI', 'simples-mei' )
 		)
    );
	
		// Name Banner

		$wp_customize->add_setting(
			'set_banner_abrir_mei', array(
				'type'					=> 'theme_mod',
				'default'				=> 'abrir-mei-banner',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_banner_abrir_mei', array(
				'label'				=> __( 'Slug Banner', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o Slug do URL', 'simples-mei' ),
				'section' 		    => 'sec_abrir_mei',
				'type'				=> 'text'
			)
		);

	// alterar mei Settings

 	$wp_customize->add_section(
 		'sec_alterar_mei', array(
 			'title'			=> __( 'Configurações da página alterar MEI', 'simples-mei' ),
 			'description'	=> __( 'Configurações da página alterar MEI', 'simples-mei' )
 		)
    );
	
		// Name Banner

		$wp_customize->add_setting(
			'set_banner_alterar_mei', array(
				'type'					=> 'theme_mod',
				'default'				=> 'abrir-alterar-banner',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_banner_alterar_mei', array(
				'label'				=> __( 'Slug Banner', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o Slug do URL', 'simples-mei' ),
				'section' 		    => 'sec_alterar_mei',
				'type'				=> 'text'
			)
		);

	// cancelar mei Settings

 	$wp_customize->add_section(
 		'sec_cancelar_mei', array(
 			'title'			=> __( 'Configurações da página cancelar MEI', 'simples-mei' ),
 			'description'	=> __( 'Configurações da página cancelar MEI', 'simples-mei' )
 		)
    );
	
		// Name Banner

		$wp_customize->add_setting(
			'set_banner_cancelar_mei', array(
				'type'					=> 'theme_mod',
				'default'				=> 'abrir-cancelar-banner',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_banner_cancelar_mei', array(
				'label'				=> __( 'Slug Banner', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o Slug do URL', 'simples-mei' ),
				'section' 		    => 'sec_cancelar_mei',
				'type'				=> 'text'
			)
		);

	// Products Settings

 	$wp_customize->add_section(
 		'sec_products', array(
 			'title'			=> __( 'Configurações dos Produtos', 'simples-mei' ),
 			'description'	=> __( 'Configurações dos Produtos', 'simples-mei' )
 		)
    );
	
		// Id product Open mei

		$wp_customize->add_setting(
			'set_id_product_open', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_id_product_open', array(
				'label'				=> __( 'ID do produto Abrir MEI', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o ID do produto Abrir MEI', 'simples-mei' ),
				'section' 		    => 'sec_products',
				'type'				=> 'text'
			)
		);

		// Id product change mei

		$wp_customize->add_setting(
			'set_id_product_change', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_id_product_change', array(
				'label'				=> __( 'ID do produto Alterar MEI', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o ID do produto Alterar MEI', 'simples-mei' ),
				'section' 		    => 'sec_products',
				'type'				=> 'text'
			)
		);

		// Id product cancel mei

		$wp_customize->add_setting(
			'set_id_product_cancel', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_id_product_cancel', array(
				'label'				=> __( 'ID do produto Cancelar MEI', 'simples-mei' ),
				'description'		=> __( 'Por favor, adicione o ID do produto Cancelar MEI', 'simples-mei' ),
				'section' 		    => 'sec_products',
				'type'				=> 'text'
			)
		);
	   
 }
	

 add_action( 'customize_register', 'simples_mei_customizer' );
