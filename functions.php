<?php

/**
 * Simples Mei functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Simples Mei
 */

require_once get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 */
function simples_mei_scripts()
{
	// Arquivos JS
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '3.5.0');
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
	wp_enqueue_script('aos-min', get_template_directory_uri() . '/assets/js/aos.min.js', array('jquery'), '3.0.0', true);
	wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/vendor/OwlCarousel/dist/owl.carousel.min.js', array('jquery'), '2.3.4', true);
	wp_enqueue_script('pace', get_template_directory_uri() . '/assets/vendor/pace/pace.min.js', array(), '1.0.2');
	wp_enqueue_script('jquery-mask', get_template_directory_uri() . '/assets/vendor/jquery-mask-plugin/jquery.mask.min.js', array('jquery'), '1.14.16', true);
	wp_enqueue_script('jquery-loading', get_template_directory_uri() . '/assets/js/jquery.loading.min.js', array('jquery'), '4.1.0', true);
	wp_enqueue_script('slimselect-js', get_template_directory_uri() . '/assets/vendor/slimselect/slimselect.min.js', array('jquery'), '4.1.0', true);
	// wp_enqueue_script('chosen', get_template_directory_uri() . '/assets/vendor/chosen/chosen.jquery.min.js', array('jquery'), '1.8.7', true);
	// wp_enqueue_script('materialize', get_template_directory_uri() . '/assets/vendor/materialize/materialize.min.js', array('jquery'), '0.97.8', true);

	// Arquivos CSS
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.4.1', 'all');
	wp_enqueue_style('aos-min', get_template_directory_uri() . '/assets/css/aos.min.css', array(), '3.0.0', 'all');
	// wp_enqueue_style('select2-css', get_template_directory_uri() . '/assets/vendor/select2/dist/css/select2.min.css', array(), '4.1.0', 'all');
	wp_enqueue_style('slimselect-css', get_template_directory_uri() . '/assets/vendor/slimselect/slimselect.min.css', array(), '4.1.0', 'all');
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/font/flaticon.css', array(), '3.0.0', 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '3.0.0', 'all');
	wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/vendor/OwlCarousel/dist/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style('owlcarousel-theme', get_template_directory_uri() . '/assets/vendor/OwlCarousel/dist/assets/owl.theme.default.min.css', array(), '2.3.4', 'all');

	// Arquivo Main CSS
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');

	// Arquivo Main JS
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

	// Theme's main stylesheet
	wp_enqueue_style('simples-mei-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap');

	// if (is_checkout()) {
	// 	wp_enqueue_script('abrir-mei', get_template_directory_uri() . '/assets/js/abrir-mei.js', array('jquery'), '1.0.0', true);
	// }

	// Pag Alterar
	$url_alterar = home_url('/alterar');
	$url_cancelar = home_url('/cancelar');

	global $wp;

	$current_url = home_url(add_query_arg(array(), $wp->request));

	if ($current_url == $url_alterar) :
		//js
		wp_enqueue_script('alterar', get_template_directory_uri() . '/assets/js/alterar.js', array('jquery'), '1.0.0', true);

		//css
		wp_enqueue_style('loginmei', get_template_directory_uri() . '/assets/css/login.css', array(), '1.0.0', 'all');
	endif;
	if ($current_url == $url_cancelar) :
		//js
		wp_enqueue_script('cancelar', get_template_directory_uri() . '/assets/js/cancelar.js', array('jquery'), '1.0.0', true);

		//css
		wp_enqueue_style('loginmei', get_template_directory_uri() . '/assets/css/login.css', array(), '1.0.0', 'all');
	endif;
}
add_action('wp_enqueue_scripts', 'simples_mei_scripts');

// add to cart
$add_to_cart = '?add-to-cart=';

// id do produto abrir mei
$id_product_open_id = get_theme_mod('set_id_product_open');
$id_product_open = $add_to_cart . $id_product_open_id;

// id do produto alterar mei
$id_product_change_id = get_theme_mod('set_id_product_change');
$id_product_change = $add_to_cart . $id_product_change_id;

// id do produto alterar mei
$id_product_cancel_id = get_theme_mod('set_id_product_cancel');
$id_product_cancel = $add_to_cart . $id_product_cancel_id;

function simples_mei_config()
{

	// Bootstrap Menu
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

	register_nav_menus(
		array(
			'simples_mei_main_menu'	=> __('Simples Mei Main Menu', 'simples-mei'),
			'simples_mei_footer_menu'	=> __('Simples Mei footer menu', 'simples-mei'),
			'simples_mei_policy_terms' => __('Simples Mei pol??tica e termos menu', 'simples-mei'),
			'simples_mei_i_already_am_mei' => __('Simples Mei j?? sou mei', 'simples-mei'),
		)
	);

	$textdomain = 'simples-mei';
	load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

	add_theme_support('woocommerce', array(
		'thumbnail_image_width'		=> 255,
		'single_image_width'		=> 255,
		'product_grid'				=> array(
			'default_rows'    => 10,
			'min_rows'        => 5,
			'max_rows'        => 10,
			'default_columns' => 1,
			'min_columns'     => 1,
			'max_columns'     => 1,
		)
	));
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	add_theme_support('custom-logo', array(
		'height'		=> 107,
		'width'			=> 761,
		'flex_height'	=> true,
		'flex_width'	=> true
	));

	add_theme_support('post-thumbnails');
	add_image_size('simples-mei-banner', false, 717, array('center', 'center'));
	// add_image_size( 'simples-mei-blog', 960, 640, array( 'center', 'center' ) );

	if (!isset($content_width)) {
		$content_width = 600;
	}

	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'simples_mei_config', 0);

if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/wc-modifications.php';
}


/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'simples_mei_woocommerce_header_add_to_cart_fragment');

function simples_mei_woocommerce_header_add_to_cart_fragment($fragments)
{
	global $woocommerce;

	ob_start();

?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action('widgets_init', 'simples_mei_sidebars');

function simples_mei_sidebars()
{
	register_sidebar(
		array(
			'name'			=> __('Simples Mei Main Sidebar', 'simples-mei'),
			'id'			=> 'simples-mei-sidebar-1',
			'description'	=> __('Drag and drop your widgets here', 'simples-mei'),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'			=> __('Sidebar Shop', 'simples-mei'),
			'id'			=> 'simples-mei-sidebar-shop',
			'description'	=> __('Drag and drop your WooCommerce widgets here', 'simples-mei'),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'			=> __('Footer Sidebar 1', 'simples-mei'),
			'id'			=> 'simples-mei-sidebar-footer-1',
			'description'	=> __('Drag and drop your widgets here', 'simples-mei'),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);
}

// Lib identificator mobile

// um n??mero no formato internacional (ativo no WhatsApp)
$number_wpp = get_theme_mod('set_number_link_wpp', '62 0 0000-0000');

// o texto ou algo vindo de um <textarea> ou <input> por exemplo
$msg = get_theme_mod('set_msg_wpp', 'Ol??, vim do site oficial Simples MEI, poderia me ajudar?');

// montar o link (n??mero e texto) (web)
$targetWeb = 'https://api.whatsapp.com/send?phone=' . urldecode($number_wpp) . '&text=' . urldecode($msg) . '';

// montar o link (n??mero e texto) (app)
$targetApp = 'whatsapp://send?phone=' . urldecode($number_wpp) . '&text=' . urldecode($msg) . '';

$isMobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($_SERVER['HTTP_USER_AGENT'], 0, 4)));

if ($isMobile) {
	function wpdev_custom_excerpt_length($length)
	{
		return 20;
	}
	add_filter('excerpt_length', 'wpdev_custom_excerpt_length');
}

add_filter('woocommerce_checkout_fields', 'my_theme_custom_override_checkout_fields');

// Our hooked in function - $fields is passed via the filter!
function my_theme_custom_override_checkout_fields($fields)
{
	foreach ($fields as $fieldset) {
		foreach ($fieldset as $field) {
			$field['class'] = array('form-control');
		}
	}
	return $fields;
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');

function wpdocs_excerpt_more($more)
{
	if (!is_single()) {
		$more = sprintf(
			'<div class="mt-3"><a class="btn btn-read-more" href="%1$s">%2$s</a></div>',
			get_permalink(get_the_ID()),
			__('veja mais', 'textdomain')
		);
	}
	return $more;
}

// Hook in
add_filter('woocommerce_checkout_fields', 'custom_billing_checkout_fields');

// Our hooked in function - $fields is passed via the filter!
function custom_billing_checkout_fields($fields) {

	// DADOS PESSOAIS
	
	$fields['billing']['billing_first_name'] = array(
		'label' => 'Nome',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 10
	);

	$fields['billing']['billing_email'] = array(
		'label' => 'Email',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 11
	);

	$fields['billing']['billing_phone'] = array(
		'label' => 'Telefone',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 12
	);

	$fields['billing']['billing_cpf'] = array(
		'label' => 'CPF',
		'required' => true,
		'class' => array( 'form-row-last', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 13
	);

	unset($fields['billing']['billing_last_name']);
	unset($fields['billing']['billing_country']);

	$fields['billing']['billing_rg'] = array(
		'label' => 'RG',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 14
	);

	$fields['billing']['billing_expedidor'] = array(
		'label' => 'Org??o Expedidor RG',
		'required' => true,
		'class' => array( 'form-row-wide', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 15
	);

	$fields['billing']['billing_uf_rg'] = array(
		'label' => 'UF RG',
		'placeholder' => 'UF do RG',
		'required' => true,
		'class' => array( 'form-row-last', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 16,
		'clear' => false,
		'type' => 'select',
		'options' => array(
			null => '',
			'AC' => 'Acre',
			'AL' => 'Alagoas',
			'AP' => 'Amap??',
			'AM' => 'Amazonas',
			'BA' => 'Bahia',
			'CE' => 'Cear??',
			'DF' => 'Distrito Federal',
			'ES' => 'Esp??rito Santo',
			'GO' => 'Goi??s',
			'MA' => 'Maranh??o',
			'MT' => 'Mato Grosso',
			'MS' => 'Mato Grosso do Sul',
			'MG' => 'Minas Gerais',
			'PA' => 'Par??',
			'PB' => 'Para??ba',
			'PR' => 'Paran??',
			'PE' => 'Pernambuco',
			'PI' => 'Piau??',
			'RJ' => 'Rio de Janeiro',
			'RN' => 'Rio Grande do Norte',
			'RS' => 'Rio Grande do Sul',
			'RO' => 'Rond??nia',
			'RR' => 'Roraima',
			'SC' => 'Santa Catarina',
			'SP' => 'S??o Paulo',
			'SE' => 'Sergipe',
			'TO' => 'Tocantins'
		)
	);

	// INFORMA????ES DO MEI

	$fields['billing']['billing_title_mei_information'] = array(
		'required' => false,
		'class' => array( 'form-row-wide', 'col-12' ),
		'priority' => 20
	);

	$fields['billing']['billing_date_nasc'] = array(
		'label' => 'Data de Nascimento',
		'required' => true,
		'type' => 'date',
		'class' => array( 'form-row-first', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 21
	);

	$fields['billing']['billing_name_mom'] = array(
		'label' => 'Nome Completo da M??e',
		'required' => true,
		'type' => 'text',
		'class' => array( 'form-row-first', 'col-12', 'col-md-8', 'px-2', 'mb-4' ),
		'priority' => 22
	);

	$fields['billing']['billing_name_fantasy'] = array(
		'label' => 'Nome da Fantasia do MEI',
		'required' => true,
		'type' => 'text',
		'class' => array( 'form-row-first', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 23
	);

	$fields['billing']['billing_share_capital'] = array(
		'label' => 'Capital Social',
		'required' => false,
		'class' => array( 'form-row-last', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 24
	);

	$domain = 'woocommerce';
	$occupation = array(
		'' => null,
		'ABATEDOR(A) DE AVES COM COMERCIALIZA????O DO PRODUTO INDEPENDENTE 4724-5/00' => __('ABATEDOR(A) DE AVES COM COMERCIALIZA????O DO PRODUTO INDEPENDENTE 4724-5/00', $domain),
		'ACABADOR(A) DE CAL??ADOS INDEPENDENTE 1531-9/02' => __('ACABADOR(A) DE CAL??ADOS INDEPENDENTE 1531-9/02', $domain),
		'A??OUGUEIRO(A) INDEPENDENTE 4722-9/01' => __('A??OUGUEIRO(A) INDEPENDENTE 4722-9/01', $domain),
		'ADESTRADOR(A) DE ANIMAIS INDEPENDENTE 9609-2/07' => __('ADESTRADOR(A) DE ANIMAIS INDEPENDENTE 9609-2/07', $domain),
		'ADESTRADOR(A) DE C??ES DE GUARDA INDEPENDENTE 8011-1/02' => __('ADESTRADOR(A) DE C??ES DE GUARDA INDEPENDENTE 8011-1/02', $domain),
		'AGENTE DE CORREIO FRANQUEADO  E PERMISSION??RIO INDEPENDENTE 5310-5/02' => __('AGENTE DE CORREIO FRANQUEADO  E PERMISSION??RIO INDEPENDENTE 5310-5/02', $domain),
		'AGENTE DE VIAGENS INDEPENDENTE 7911-2/00' => __('AGENTE DE VIAGENS INDEPENDENTE 7911-2/00', $domain),
		'AGENTE FUNER??RIO INDEPENDENTE 9603-3/04' => __('AGENTE FUNER??RIO INDEPENDENTE 9603-3/04', $domain),
		'AGENTE MATRIMONIAL INDEPENDENTE 9609-2/02' => __('AGENTE MATRIMONIAL INDEPENDENTE 9609-2/02', $domain),
		'ALFAIATE INDEPENDENTE           1412-6/02' => __('ALFAIATE INDEPENDENTE           1412-6/02', $domain),
		'AMOLADOR(A) DE ARTIGOS DE CUTELARIA INDEPENDENTE 9529-1/99' => __('AMOLADOR(A) DE ARTIGOS DE CUTELARIA INDEPENDENTE 9529-1/99', $domain),
		'ANIMADOR(A) DE FESTAS INDEPENDENTE 9329-8/99' => __('ANIMADOR(A) DE FESTAS INDEPENDENTE 9329-8/99', $domain),
		'ANTIQU??RIO(A) INDEPENDENTE 4785-7/01' => __('ANTIQU??RIO(A) INDEPENDENTE 4785-7/01', $domain),
		'APICULTOR(A) INDEPENDENTE 0159-8/01' => __('APICULTOR(A) INDEPENDENTE 0159-8/01', $domain),
		'APURADOR(A), COLETOR(A) E FORNECEDOR(A) DE RECORTES DE MAT??RIAS PUBLICADAS EM JORNAIS E REVISTAS INDEPENDENTE 6399-2/00' => __('APURADOR(A), COLETOR(A) E FORNECEDOR(A) DE RECORTES DE MAT??RIAS PUBLICADAS EM JORNAIS E REVISTAS INDEPENDENTE 6399-2/00', $domain),
		'ARMADOR(A) DE FERRAGENS NA CONSTRU????O CIVIL INDEPENDENTE 2599-3/01' => __('ARMADOR(A) DE FERRAGENS NA CONSTRU????O CIVIL INDEPENDENTE 2599-3/01', $domain),
		'ARTES??O(??) DE BIJUTERIAS INDEPENDENTE 3212-4/00' => __('ARTES??O(??) DE BIJUTERIAS INDEPENDENTE 3212-4/00', $domain),
		'ARTES??O(??) EM BORRACHA INDEPENDENTE 2219-6/00' => __('ARTES??O(??) EM BORRACHA INDEPENDENTE 2219-6/00', $domain),
		'ARTES??O(??) EM CER??MICA INDEPENDENTE 2349-4/99' => __('ARTES??O(??) EM CER??MICA INDEPENDENTE 2349-4/99', $domain),
		'ARTES??O(??) EM CIMENTO INDEPENDENTE  2330-3/99' => __('ARTES??O(??) EM CIMENTO INDEPENDENTE  2330-3/99', $domain),
		'ARTES??O(??) EM CORTI??A, BAMBU E AFINS INDEPENDENTE 1629-3/02' => __('ARTES??O(??) EM CORTI??A, BAMBU E AFINS INDEPENDENTE 1629-3/02', $domain),
		'ARTES??O(??) EM COURO INDEPENDENTE 1529-7/00' => __('ARTES??O(??) EM COURO INDEPENDENTE 1529-7/00', $domain),
		'ARTES??O(??) EM GESSO INDEPENDENTE 2330-3/99' => __('ARTES??O(??) EM GESSO INDEPENDENTE 2330-3/99', $domain),
		'ARTES??O(??) EM LOU??AS, VIDRO E CRISTAL INDEPENDENTE        2399-1/01' => __('ARTES??O(??) EM LOU??AS, VIDRO E CRISTAL INDEPENDENTE        2399-1/01', $domain),
		'ARTES??O(??) EM MADEIRA INDEPENDENTE 1629-3/01' => __('ARTES??O(??) EM MADEIRA INDEPENDENTE 1629-3/01', $domain),
		'ARTES??O(??) EM M??RMORE, GRANITO, ARD??SIA E OUTRAS PEDRAS' => __('ARTES??O(??) EM M??RMORE, GRANITO, ARD??SIA E OUTRAS PEDRAS', $domain),
		'INDEPENDENTE 2391-5/03' => __('INDEPENDENTE 2391-5/03', $domain),
		'ARTES??O(??) EM METAIS INDEPENDENTE 2599-3/99' => __('ARTES??O(??) EM METAIS INDEPENDENTE 2599-3/99', $domain),
		'ARTES??O(??) EM METAIS PRECIOSOS INDEPENDENTE 3211-6/02' => __('ARTES??O(??) EM METAIS PRECIOSOS INDEPENDENTE 3211-6/02', $domain),
		'ARTES??O(??) EM OUTROS MATERIAIS INDEPENDENTE 3299-0/99' => __('ARTES??O(??) EM OUTROS MATERIAIS INDEPENDENTE 3299-0/99', $domain),
		'ARTES??O(??) EM PAPEL INDEPENDENTE 1749-4/00' => __('ARTES??O(??) EM PAPEL INDEPENDENTE 1749-4/00', $domain),
		'ARTES??O(??) EM PL??STICO INDEPENDENTE 2229-3/99' => __('ARTES??O(??) EM PL??STICO INDEPENDENTE 2229-3/99', $domain),
		'ARTES??O(??) EM VIDRO INDEPENDENTE 2319-2/00' => __('ARTES??O(??) EM VIDRO INDEPENDENTE 2319-2/00', $domain),
		'ARTES??O T??XTIL 1359-6/00' => __('ARTES??O T??XTIL 1359-6/00', $domain),
		'ASTR??LOGO(A) INDEPENDENTE 9609-2/99' => __('ASTR??LOGO(A) INDEPENDENTE 9609-2/99', $domain),
		'AZULEJISTA INDEPENDENTE 4330-4/05' => __('AZULEJISTA INDEPENDENTE 4330-4/05', $domain),
		'BALEIRO(A) INDEPENDENTE 4721-1/04' => __('BALEIRO(A) INDEPENDENTE 4721-1/04', $domain),
		'BANHISTA DE ANIMAIS DOM??STICOS INDEPENDENTE 9609-2/08' => __('BANHISTA DE ANIMAIS DOM??STICOS INDEPENDENTE 9609-2/08', $domain),
		'BARBEIRO INDEPENDENTE  9602-5/01' => __('BARBEIRO INDEPENDENTE  9602-5/01', $domain),
		'BARQUEIRO(A) INDEPENDENTE 5099-8/99' => __('BARQUEIRO(A) INDEPENDENTE 5099-8/99', $domain),
		'BARRAQUEIRO(A) INDEPENDENTE 4712-1/00' => __('BARRAQUEIRO(A) INDEPENDENTE 4712-1/00', $domain),
		'BENEFICIADOR(A) DE CASTANHA INDEPENDENTE1031-7/00' => __('BENEFICIADOR(A) DE CASTANHA INDEPENDENTE1031-7/00', $domain),
		'BIKEBOY (CICLISTA MENSAGEIRO) INDEPENDENTE 5320-2/02' => __('BIKEBOY (CICLISTA MENSAGEIRO) INDEPENDENTE 5320-2/02', $domain),
		'BIKE PROPAGANDISTA INDEPENDENTE 7319-0/99' => __('BIKE PROPAGANDISTA INDEPENDENTE 7319-0/99', $domain),
		'BOLACHEIRO(A)/BISCOITEIRO(A) INDEPENDENTE 1092-9/00' => __('BOLACHEIRO(A)/BISCOITEIRO(A) INDEPENDENTE 1092-9/00', $domain),
		'BOMBEIRO(A) HIDR??ULICO INDEPENDENTE 4322-3/01' => __('BOMBEIRO(A) HIDR??ULICO INDEPENDENTE 4322-3/01', $domain),
		'BONELEIRO(A) (FABRICANTE DE BON??S) INDEPENDENTE 1414-2/00' => __('BONELEIRO(A) (FABRICANTE DE BON??S) INDEPENDENTE 1414-2/00', $domain),
		'BORDADEIRO(A) INDEPENDENTE 1340-5/99' => __('BORDADEIRO(A) INDEPENDENTE 1340-5/99', $domain),
		'BORRACHEIRO(A) INDEPENDENTE 4520-0/06' => __('BORRACHEIRO(A) INDEPENDENTE 4520-0/06', $domain),
		'BRITADOR INDEPENDENTE 2391-5/01' => __('BRITADOR INDEPENDENTE 2391-5/01', $domain),
		'CABELEIREIRO(A) INDEPENDENTE 9602-5/01' => __('CABELEIREIRO(A) INDEPENDENTE 9602-5/01', $domain),
		'CALAFETADOR(A) INDEPENDENTE 4330-4/05' => __('CALAFETADOR(A) INDEPENDENTE 4330-4/05', $domain),
		'CALHEIRO (A) INDEPENDENT 4399-1/99' => __('CALHEIRO (A) INDEPENDENT 4399-1/99', $domain),
		'CAMINHONEIRO (A) DE CARGAS N??O PERIGOSAS, INTERMUNICIPAL E INTERESTADUAL INDEPENDENTE 4930-2/02' => __('CAMINHONEIRO (A) DE CARGAS N??O PERIGOSAS, INTERMUNICIPAL E INTERESTADUAL INDEPENDENTE 4930-2/02', $domain),
		'CANTOR(A)/M??SICO(A) INDEPENDENTE 9001-9/02' => __('CANTOR(A)/M??SICO(A) INDEPENDENTE 9001-9/02', $domain),
		'CAPOTEIRO(A) INDEPENDENTE 4520-0/08' => __('CAPOTEIRO(A) INDEPENDENTE 4520-0/08', $domain),
		'CARPINTEIRO(A) INDEPENDENTE 1622-6/99' => __('CARPINTEIRO(A) INDEPENDENTE 1622-6/99', $domain),
		'CARPINTEIRO(A) INSTALADOR(A) INDEPENDENTE 4330-4/02' => __('CARPINTEIRO(A) INSTALADOR(A) INDEPENDENTE 4330-4/02', $domain),
		'CARREGADOR (VE??CULOS INDEPENDENTE DE TRANSPORTES TERRESTRES) 5212-5/00' => __('CARREGADOR (VE??CULOS INDEPENDENTE DE TRANSPORTES TERRESTRES) 5212-5/00', $domain),
		'CARREGADOR DE MALAS INDEPENDENTE 9609-2/99' => __('CARREGADOR DE MALAS INDEPENDENTE 9609-2/99', $domain),
		'CARROCEIRO COLETA DE ENTULHOS E RES??DUOS INDEPENDENTE 3811-4/00' => __('CARROCEIRO COLETA DE ENTULHOS E RES??DUOS INDEPENDENTE 3811-4/00', $domain),
		'CARROCEIRO - TRANSPORTE DE CARGA INDEPENDENTE 4930-2/01' => __('CARROCEIRO - TRANSPORTE DE CARGA INDEPENDENTE 4930-2/01', $domain),
		'CARROCEIRO - TRANSPORTE DE MUDAN??A INDEPENDENTE 4930-2/04' => __('CARROCEIRO - TRANSPORTE DE MUDAN??A INDEPENDENTE 4930-2/04', $domain),
		'CARTAZISTA, PINTOR DE INDEPENDENTE FAIXAS PUBLICIT??RIAS E DE LETRAS 8299-7/99' => __('CARTAZISTA, PINTOR DE INDEPENDENTE FAIXAS PUBLICIT??RIAS E DE LETRAS 8299-7/99', $domain),
		'CERQUEIRO(A) INDEPENDENTE 4399-1/99' => __('CERQUEIRO(A) INDEPENDENTE 4399-1/99', $domain),
		'CHAPELEIRO(A) INDEPENDENTE 1414-2/00' => __('CHAPELEIRO(A) INDEPENDENTE 1414-2/00', $domain),
		'CHAVEIRO(A) INDEPENDENTE 9529-1/02' => __('CHAVEIRO(A) INDEPENDENTE 9529-1/02', $domain),
		'CHOCOLATEIRO(A) INDEPENDENTE 1093-7/01' => __('CHOCOLATEIRO(A) INDEPENDENTE 1093-7/01', $domain),
		'CHURRASQUEIRO(A) AMBULANTE INDEPENDENTE 5612-1/00' => __('CHURRASQUEIRO(A) AMBULANTE INDEPENDENTE 5612-1/00', $domain),
		'CHURRASQUEIRO(A) EM DOMIC??LIO INDEPENDENTE 5620-1/02' => __('CHURRASQUEIRO(A) EM DOMIC??LIO INDEPENDENTE 5620-1/02', $domain),
		'CLICHERISTA INDEPENDENTE 1821-1/00' => __('CLICHERISTA INDEPENDENTE 1821-1/00', $domain),
		'COBRADOR(A) DE D??VIDAS INDEPENDENTE 8291-1/00' => __('COBRADOR(A) DE D??VIDAS INDEPENDENTE 8291-1/00', $domain),
		'COLCHOEIRO(A) INDEPENDENTE 3104-7/00' => __('COLCHOEIRO(A) INDEPENDENTE 3104-7/00', $domain),
		'COLETOR DE RES??DUOS N??O-PERIGOSOS INDEPENDENTE 3811-4/00' => __('COLETOR DE RES??DUOS N??O-PERIGOSOS INDEPENDENTE 3811-4/00', $domain),
		'COLOCADOR(A) DE PIERCING INDEPENDENTE 9609-2/06' => __('COLOCADOR(A) DE PIERCING INDEPENDENTE 9609-2/06', $domain),
		'COLOCADOR(A) DE REVESTIMENTOS INDEPENDENTE 4330-4/05' => __('COLOCADOR(A) DE REVESTIMENTOS INDEPENDENTE 4330-4/05', $domain),
		'COMERCIANTE DE INSETICIDAS E RATICIDAS INDEPENDENTE 4789-0/05' => __('COMERCIANTE DE INSETICIDAS E RATICIDAS INDEPENDENTE 4789-0/05', $domain),
		'COMERCIANTE DE PRODUTOS PARA PISCINAS INDEPENDENTE 4789-0/05' => __('COMERCIANTE DE PRODUTOS PARA PISCINAS INDEPENDENTE 4789-0/05', $domain),
		'COMERCIANTE DE ARTIGOS E ALIMENTOS PARA ANIMAIS DE ESTIMA????O (PET SHOP) INDEPENDENTE (N??O INCLUI A VENDA DE MEDICAMENTOS) 4789-0/04' => __('COMERCIANTE DE ARTIGOS E ALIMENTOS PARA ANIMAIS DE ESTIMA????O (PET SHOP) INDEPENDENTE (N??O INCLUI A VENDA DE MEDICAMENTOS) 4789-0/04', $domain),
		'COMERCIANTE DE ARTIGOS DE ARMARINHO INDEPENDENTE 4755-5/02' => __('COMERCIANTE DE ARTIGOS DE ARMARINHO INDEPENDENTE 4755-5/02', $domain),
		'COMERCIANTE DE ARTIGOS DE BEB?? INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE ARTIGOS DE BEB?? INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE ARTIGOS DE CA??A, PESCA E CAMPING INDEPENDENTE 4763-6/04' => __('COMERCIANTE DE ARTIGOS DE CA??A, PESCA E CAMPING INDEPENDENTE 4763-6/04', $domain),
		'COMERCIANTE DE ARTIGOS DE CAMA, MESA E BANHO INDEPENDENTE 4755-5/03' => __('COMERCIANTE DE ARTIGOS DE CAMA, MESA E BANHO INDEPENDENTE 4755-5/03', $domain),
		'COMERCIANTE DE ARTIGOS DE COLCHOARIA INDEPENDENTE 4754-7/02' => __('COMERCIANTE DE ARTIGOS DE COLCHOARIA INDEPENDENTE 4754-7/02', $domain),
		'COMERCIANTE DE ARTIGOS DE CUTELARIA INDEPENDENTE 4759-8/99' => __('COMERCIANTE DE ARTIGOS DE CUTELARIA INDEPENDENTE 4759-8/99', $domain),
		'COMERCIANTE DE ARTIGOS DE ILUMINA????O INDEPENDENTE 4754-7/03' => __('COMERCIANTE DE ARTIGOS DE ILUMINA????O INDEPENDENTE 4754-7/03', $domain),
		'COMERCIANTE DE ARTIGOS DE JOALHERIA INDEPENDENTE 4783-1/01' => __('COMERCIANTE DE ARTIGOS DE JOALHERIA INDEPENDENTE 4783-1/01', $domain),
		'COMERCIANTE DE ARTIGOS DE ??PTICA INDEPENDENTE 4774-1/00' => __('COMERCIANTE DE ARTIGOS DE ??PTICA INDEPENDENTE 4774-1/00', $domain),
		'COMERCIANTE DE ARTIGOS DE RELOJOARIA INDEPENDENTE 4783-1/02' => __('COMERCIANTE DE ARTIGOS DE RELOJOARIA INDEPENDENTE 4783-1/02', $domain),
		'COMERCIANTE DE ARTIGOS DE TAPE??ARIA, CORTINAS E PERSIANAS INDEPENDENTE 4759-8/01' => __('COMERCIANTE DE ARTIGOS DE TAPE??ARIA, CORTINAS E PERSIANAS INDEPENDENTE 4759-8/01', $domain),
		'COMERCIANTE DE ARTIGOS DE VIAGEM INDEPENDENTE 4782-2/02' => __('COMERCIANTE DE ARTIGOS DE VIAGEM INDEPENDENTE 4782-2/02', $domain),
		'COMERCIANTE DE ARTIGOS DO VESTU??RIO E ACESS??RIOS' => __('COMERCIANTE DE ARTIGOS DO VESTU??RIO E ACESS??RIOS', $domain),
		'INDEPENDENTE 4781-4/00' => __('INDEPENDENTE 4781-4/00', $domain),
		'COMERCIANTE DE ARTIGOS ER??TICOS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE ARTIGOS ER??TICOS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE ARTIGOS ESPORTIVOS INDEPENDENTE 4763-6/02' => __('COMERCIANTE DE ARTIGOS ESPORTIVOS INDEPENDENTE 4763-6/02', $domain),
		'COMERCIANTE DE ARTIGOS FOTOGR??FICOS E PARA FILMAGEM INDEPENDENTE 4789-0/08' => __('COMERCIANTE DE ARTIGOS FOTOGR??FICOS E PARA FILMAGEM INDEPENDENTE 4789-0/08', $domain),
		'COMERCIANTE DE ARTIGOS FUNER??RIOS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE ARTIGOS FUNER??RIOS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE ARTIGOS M??DICOS E ORTOP??DICOS INDEPENDENTE 4773-3/00' => __('COMERCIANTE DE ARTIGOS M??DICOS E ORTOP??DICOS INDEPENDENTE 4773-3/00', $domain),
		'COMERCIANTE DE ARTIGOS PARA HABITA????O INDEPENDENTE 4759-8/99' => __('COMERCIANTE DE ARTIGOS PARA HABITA????O INDEPENDENTE 4759-8/99', $domain),
		'COMERCIANTE DE ARTIGOS USADOS INDEPENDENTE 4785-7/99' => __('COMERCIANTE DE ARTIGOS USADOS INDEPENDENTE 4785-7/99', $domain),
		'COMERCIANTE DE BEBIDAS INDEPENDENTE 4723-7/00' => __('COMERCIANTE DE BEBIDAS INDEPENDENTE 4723-7/00', $domain),
		'COMERCIANTE DE BICICLETAS E TRICICLOS; PE??AS E ACESS??RIOS INDEPENDENTE 4763-6/03' => __('COMERCIANTE DE BICICLETAS E TRICICLOS; PE??AS E ACESS??RIOS INDEPENDENTE 4763-6/03', $domain),
		'COMERCIANTE DE SUVENIRES, BIJUTERIAS E ARTESANATOS INDEPENDENTE 4789-0/01' => __('COMERCIANTE DE SUVENIRES, BIJUTERIAS E ARTESANATOS INDEPENDENTE 4789-0/01', $domain),
		'COMERCIANTE DE BRINQUEDOS E ARTIGOS RECREATIVOS INDEPENDENTE 4763-6/01' => __('COMERCIANTE DE BRINQUEDOS E ARTIGOS RECREATIVOS INDEPENDENTE 4763-6/01', $domain),
		'COMERCIANTE DE CAL, AREIA, PEDRA BRITADA, TIJOLOS E TELHAS INDEPENDENTE 4744-0/04' => __('COMERCIANTE DE CAL, AREIA, PEDRA BRITADA, TIJOLOS E TELHAS INDEPENDENTE 4744-0/04', $domain),
		'COMERCIANTE DE CAL??ADOS INDEPENDENTE 4782-2/01' => __('COMERCIANTE DE CAL??ADOS INDEPENDENTE 4782-2/01', $domain),
		'COMERCIANTE DE CARV??O E LENHA INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE CARV??O E LENHA INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE CESTAS DE CAF?? DA MANH?? INDEPENDENTE 4729-6/99' => __('COMERCIANTE DE CESTAS DE CAF?? DA MANH?? INDEPENDENTE 4729-6/99', $domain),
		'COMERCIANTE DE COSM??TICOS E ARTIGOS DE PERFUMARIA INDEPENDENTE 4772-5/00' => __('COMERCIANTE DE COSM??TICOS E ARTIGOS DE PERFUMARIA INDEPENDENTE 4772-5/00', $domain),
		'COMERCIANTE DE DISCOS, CDS, DVDS E FITAS INDEPENDENTE 4762-8/00' => __('COMERCIANTE DE DISCOS, CDS, DVDS E FITAS INDEPENDENTE 4762-8/00', $domain),
		'COMERCIANTE DE ELETRODOM??STICOS E EQUIPAMENTOS DE ??UDIO E V??DEO INDEPENDENTE 4753-9/00' => __('COMERCIANTE DE ELETRODOM??STICOS E EQUIPAMENTOS DE ??UDIO E V??DEO INDEPENDENTE 4753-9/00', $domain),
		'COMERCIANTE DE EMBALAGENS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE EMBALAGENS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE EQUIPAMENTOS DE TELEFONIA E COMUNICA????O INDEPENDENTE 4752-1/00' => __('COMERCIANTE DE EQUIPAMENTOS DE TELEFONIA E COMUNICA????O INDEPENDENTE 4752-1/00', $domain),
		'COMERCIANTE DE EQUIPAMENTOS E SUPRIMENTOS DE INFORM??TICA INDEPENDENTE 4751-2/01' => __('COMERCIANTE DE EQUIPAMENTOS E SUPRIMENTOS DE INFORM??TICA INDEPENDENTE 4751-2/01', $domain),
		'COMERCIANTE DE EQUIPAMENTOS PARA ESCRIT??RIO INDEPENDENTE 4789-0/07' => __('COMERCIANTE DE EQUIPAMENTOS PARA ESCRIT??RIO INDEPENDENTE 4789-0/07', $domain),
		'COMERCIANTE DE FERRAGENS E FERRAMENTAS INDEPENDENTE4744-0/01' => __('COMERCIANTE DE FERRAGENS E FERRAMENTAS INDEPENDENTE4744-0/01', $domain),
		'COMERCIANTE DE FLORES, PLANTAS E FRUTAS ARTIFICIAIS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE FLORES, PLANTAS E FRUTAS ARTIFICIAIS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE INSTRUMENTOS MUSICAIS E ACESS??RIOS INDEPENDENTE 4756-3/00' => __('COMERCIANTE DE INSTRUMENTOS MUSICAIS E ACESS??RIOS INDEPENDENTE 4756-3/00', $domain),
		'COMERCIANTE DE LATIC??NIOS INDEPENDENTE 4721-1/03' => __('COMERCIANTE DE LATIC??NIOS INDEPENDENTE 4721-1/03', $domain),
		'COMERCIANTE DE LUBRIFICANTES INDEPENDENTE 4732-6/00' => __('COMERCIANTE DE LUBRIFICANTES INDEPENDENTE 4732-6/00', $domain),
		'COMERCIANTE DE MADEIRA E ARTEFATOS INDEPENDENTE 4744-0/02' => __('COMERCIANTE DE MADEIRA E ARTEFATOS INDEPENDENTE 4744-0/02', $domain),
		'COMERCIANTE DE MATERIAIS DE CONSTRU????O EM GERAL INDEPENDENTE 4744-0/99' => __('COMERCIANTE DE MATERIAIS DE CONSTRU????O EM GERAL INDEPENDENTE 4744-0/99', $domain),
		'COMERCIANTE DE MATERIAIS HIDR??ULICOS INDEPENDENTE 4744-0/03' => __('COMERCIANTE DE MATERIAIS HIDR??ULICOS INDEPENDENTE 4744-0/03', $domain),
		'COMERCIANTE DE MATERIAL EL??TRICO INDEPENDENTE 4742-3/00' => __('COMERCIANTE DE MATERIAL EL??TRICO INDEPENDENTE 4742-3/00', $domain),
		'COMERCIANTE DE MIUDEZAS E QUINQUILHARIAS INDEPENDENTE 4713-0/02' => __('COMERCIANTE DE MIUDEZAS E QUINQUILHARIAS INDEPENDENTE 4713-0/02', $domain),
		'COMERCIANTE DE MOLDURAS E QUADROS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE MOLDURAS E QUADROS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE M??VEIS INDEPENDENTE 4754-7/01' => __('COMERCIANTE DE M??VEIS INDEPENDENTE 4754-7/01', $domain),
		'COMERCIANTE DE OBJETOS DE ARTE INDEPENDENTE 4789-0/03' => __('COMERCIANTE DE OBJETOS DE ARTE INDEPENDENTE 4789-0/03', $domain),
		'COMERCIANTE DE PE??AS E ACESS??RIOS NOVOS PARA MOTOCICLETAS E MOTONONETAS INDEPENDENTE 4541-2/06' => __('COMERCIANTE DE PE??AS E ACESS??RIOS NOVOS PARA MOTOCICLETAS E MOTONONETAS INDEPENDENTE 4541-2/06', $domain),
		'COMERCIANTE DE PE??AS E ACESS??RIOS NOVOS PARA VE??CULOS' => __('COMERCIANTE DE PE??AS E ACESS??RIOS NOVOS PARA VE??CULOS', $domain),
		'AUTOMOTORES INDEPENDENTE 4530-7/03' => __('AUTOMOTORES INDEPENDENTE 4530-7/03', $domain),
		'COMERCIANTE DE PE??AS E ACESS??RIOS PARA APARELHOS ELETROELETR??NICOS PARA USO DOM??STICO INDEPENDENTE 4757-1/00' => __('COMERCIANTE DE PE??AS E ACESS??RIOS PARA APARELHOS ELETROELETR??NICOS PARA USO DOM??STICO INDEPENDENTE 4757-1/00', $domain),
		'COMERCIANTE DE PE??AS E ACESS??RIOS USADOS PARA MOTOCICLETAS E MOTONONETAS INDEPENDENTE 4541-2/07' => __('COMERCIANTE DE PE??AS E ACESS??RIOS USADOS PARA MOTOCICLETAS E MOTONONETAS INDEPENDENTE 4541-2/07', $domain),
		'COMERCIANTE DE PE??AS E ACESS??RIOS USADOS PARA VE??CULOS AUTOMOTORES INDEPENDENTE 4530-7/04' => __('COMERCIANTE DE PE??AS E ACESS??RIOS USADOS PARA VE??CULOS AUTOMOTORES INDEPENDENTE 4530-7/04', $domain),
		'COMERCIANTE DE PERUCAS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE PERUCAS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE PLANTAS, FLORES NATURAIS, VASOS E ADUBOS INDEPENDENTE 4789-0/02' => __('COMERCIANTE DE PLANTAS, FLORES NATURAIS, VASOS E ADUBOS INDEPENDENTE 4789-0/02', $domain),
		'COMERCIANTE DE PNEUM??TICOS E C??MARAS-DE-AR INDEPENDENTE 4530-7/05' => __('COMERCIANTE DE PNEUM??TICOS E C??MARAS-DE-AR INDEPENDENTE 4530-7/05', $domain),
		'COMERCIANTE DE PRODUTOS DE HIGIENE PESSOAL INDEPENDENTE 4772-5/00' => __('COMERCIANTE DE PRODUTOS DE HIGIENE PESSOAL INDEPENDENTE 4772-5/00', $domain),
		'COMERCIANTE DE PRODUTOS DE LIMPEZA INDEPENDENTE 4789-0/05' => __('COMERCIANTE DE PRODUTOS DE LIMPEZA INDEPENDENTE 4789-0/05', $domain),
		'COMERCIANTE DE PRODUTOS DE PANIFICA????O INDEPENDENTE 4721-1/02' => __('COMERCIANTE DE PRODUTOS DE PANIFICA????O INDEPENDENTE 4721-1/02', $domain),
		'COMERCIANTE DE PRODUTOS DE TABACARIA INDEPENDENTE 4729-6/01' => __('COMERCIANTE DE PRODUTOS DE TABACARIA INDEPENDENTE 4729-6/01', $domain),
		'COMERCIANTE DE PRODUTOS NATURAIS INDEPENDENTE 4729-6/99' => __('COMERCIANTE DE PRODUTOS NATURAIS INDEPENDENTE 4729-6/99', $domain),
		'COMERCIANTE DE PRODUTOS PARA FESTAS E NATAL INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE PRODUTOS PARA FESTAS E NATAL INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE PRODUTOS RELIGIOSOS INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE PRODUTOS RELIGIOSOS INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE REDES PARA DORMIR INDEPENDENTE 4789-0/99' => __('COMERCIANTE DE REDES PARA DORMIR INDEPENDENTE 4789-0/99', $domain),
		'COMERCIANTE DE SISTEMA DE SEGURAN??A RESIDENCIAL INDEPENDENTE 4759-8/99' => __('COMERCIANTE DE SISTEMA DE SEGURAN??A RESIDENCIAL INDEPENDENTE 4759-8/99', $domain),
		'COMERCIANTE DE TECIDOS INDEPENDENTE 4755-5/01' => __('COMERCIANTE DE TECIDOS INDEPENDENTE 4755-5/01', $domain),
		'COMERCIANTE DE TINTAS E MATERIAIS PARA PINTURA INDEPENDENTE 4741-5/00' => __('COMERCIANTE DE TINTAS E MATERIAIS PARA PINTURA INDEPENDENTE 4741-5/00', $domain),
		'COMERCIANTE DE TOLDOS E PAPEL DE PAREDE INDEPENDENTE 4759-8/99' => __('COMERCIANTE DE TOLDOS E PAPEL DE PAREDE INDEPENDENTE 4759-8/99', $domain),
		'COMERCIANTE DE VIDROS INDEPENDENTE 4743-1/00' => __('COMERCIANTE DE VIDROS INDEPENDENTE 4743-1/00', $domain),
		'COMPOTEIRO(A) INDEPENDENTE 1031-7/00' => __('COMPOTEIRO(A) INDEPENDENTE 1031-7/00', $domain),
		'CONFECCIONADOR(A) DE CARIMBOS INDEPENDENTE 3299-0/02' => __('CONFECCIONADOR(A) DE CARIMBOS INDEPENDENTE 3299-0/02', $domain),
		'CONFEITEIRO(A) INDEPENDENTE 1091-1/02' => __('CONFEITEIRO(A) INDEPENDENTE 1091-1/02', $domain),
		'COSTUREIRO(A) DE ROUPAS, EXCETO SOB MEDIDA INDEPENDENTE 1412-6/01' => __('COSTUREIRO(A) DE ROUPAS, EXCETO SOB MEDIDA INDEPENDENTE 1412-6/01', $domain),
		'COSTUREIRO(A) DE ROUPAS, SOB MEDIDA INDEPENDENTE 1412-6/02' => __('COSTUREIRO(A) DE ROUPAS, SOB MEDIDA INDEPENDENTE 1412-6/02', $domain),
		'COZINHEIRO(A) QUE FORNECE REFEI????ES PRONTAS E EMBALADAS' => __('COZINHEIRO(A) QUE FORNECE REFEI????ES PRONTAS E EMBALADAS', $domain),
		'PARA CONSUMO INDEPENDENTE 5620-1/04' => __('PARA CONSUMO INDEPENDENTE 5620-1/04', $domain),
		'CRIADOR(A) DE ANIMAIS DOM??STICOS INDEPENDENTE 0159-8/02' => __('CRIADOR(A) DE ANIMAIS DOM??STICOS INDEPENDENTE 0159-8/02', $domain),
		'CRIADOR(A) DE PEIXES ORNAMENTAIS EM ??GUA DOCE INDEPENDENTE 0322-1/04' => __('CRIADOR(A) DE PEIXES ORNAMENTAIS EM ??GUA DOCE INDEPENDENTE 0322-1/04', $domain),
		'CRIADOR(A) DE PEIXES ORNAMENTAIS EM ??GUA SALGADA INDEPENDENTE 0321-3/04' => __('CRIADOR(A) DE PEIXES ORNAMENTAIS EM ??GUA SALGADA INDEPENDENTE 0321-3/04', $domain),
		'CROCHETEIRO(A) INDEPENDENTE 1422-3/00' => __('CROCHETEIRO(A) INDEPENDENTE 1422-3/00', $domain),
		'CUIDADOR(A) DE ANIMAIS (PET SITTER) INDEPENDENTE 9609-2/08' => __('CUIDADOR(A) DE ANIMAIS (PET SITTER) INDEPENDENTE 9609-2/08', $domain),
		'CUIDADOR(A) DE IDOSOS E ENFERMOS INDEPENDENTE 8712-3/00' => __('CUIDADOR(A) DE IDOSOS E ENFERMOS INDEPENDENTE 8712-3/00', $domain),
		'CUNHADOR(A) DE MOEDAS E MEDALHAS INDEPENDENTE 3211-6/03' => __('CUNHADOR(A) DE MOEDAS E MEDALHAS INDEPENDENTE 3211-6/03', $domain),
		'CURTIDOR DE COURO INDEPENDENTE 1510-6/00' => __('CURTIDOR DE COURO INDEPENDENTE 1510-6/00', $domain),
		'CUSTOMIZADOR(A) DE ROUPAS INDEPENDENTE 1340-5/99' => __('CUSTOMIZADOR(A) DE ROUPAS INDEPENDENTE 1340-5/99', $domain),
		'DEPILADOR(A) INDEPENDENTE 9602-5/02' => __('DEPILADOR(A) INDEPENDENTE 9602-5/02', $domain),
		'DIARISTA INDEPENDENTE 9700-5/00' => __('DIARISTA INDEPENDENTE 9700-5/00', $domain),
		'DIGITADOR(A) INDEPENDENTE 8219-9/99' => __('DIGITADOR(A) INDEPENDENTE 8219-9/99', $domain),
		'DISC JOCKEY (DJ) OU VIDEO JOCKEY (VJ) INDEPENDENTE 9001-9/06' => __('DISC JOCKEY (DJ) OU VIDEO JOCKEY (VJ) INDEPENDENTE 9001-9/06', $domain),
		'DISTRIBUIDOR(A) DE ??GUA POT??VEL EM CAMINH??O PIPA INDEPENDENTE 3600-6/02' => __('DISTRIBUIDOR(A) DE ??GUA POT??VEL EM CAMINH??O PIPA INDEPENDENTE 3600-6/02', $domain),
		'DOCEIRO(A) INDEPENDENTE 5620-1/04' => __('DOCEIRO(A) INDEPENDENTE 5620-1/04', $domain),
		'DUBLADOR(A) INDEPENDENTE 5912-0/01' => __('DUBLADOR(A) INDEPENDENTE 5912-0/01', $domain),
		'EDITOR(A) DE JORNAIS DI??RIOS INDEPENDENTE 5812-3/01' => __('EDITOR(A) DE JORNAIS DI??RIOS INDEPENDENTE 5812-3/01', $domain),
		'EDITOR(A) DE JORNAIS N??O DI??RIOS INDEPENDENTE 5812-3/02' => __('EDITOR(A) DE JORNAIS N??O DI??RIOS INDEPENDENTE 5812-3/02', $domain),
		'EDITOR(A) DE LISTA DE DADOS E DE OUTRAS INFORMA????ES INDEPENDENTE 5819-1/00' => __('EDITOR(A) DE LISTA DE DADOS E DE OUTRAS INFORMA????ES INDEPENDENTE 5819-1/00', $domain),
		'EDITOR(A) DE LIVROS INDEPENDENTE 5811-5/00' => __('EDITOR(A) DE LIVROS INDEPENDENTE 5811-5/00', $domain),
		'EDITOR(A) DE REVISTAS INDEPENDENTE 5813-1/00 N' => __('EDITOR(A) DE REVISTAS INDEPENDENTE 5813-1/00 N', $domain),
		'EDITOR(A) DE V??DEO INDEPENDENTE 5912-0/99 N' => __('EDITOR(A) DE V??DEO INDEPENDENTE 5912-0/99 N', $domain),
		'ELETRICISTA DE AUTOM??VEIS INDEPENDENTE  4520-0/03 N' => __('ELETRICISTA DE AUTOM??VEIS INDEPENDENTE  4520-0/03 N', $domain),
		'ELETRICISTA EM RESID??NCIAS E ESTABELECIMENTOS COMERCIAIS INDEPENDENTE 4321-5/00' => __('ELETRICISTA EM RESID??NCIAS E ESTABELECIMENTOS COMERCIAIS INDEPENDENTE 4321-5/00', $domain),
		'ENCADERNADOR(A)/PLASTIFICADOR(A) INDEPENDENTE 1822-9/01' => __('ENCADERNADOR(A)/PLASTIFICADOR(A) INDEPENDENTE 1822-9/01', $domain),
		'ENCANADOR INDEPENDENTE 4322-3/01' => __('ENCANADOR INDEPENDENTE 4322-3/01', $domain),
		'ENGRAXATE INDEPENDENTE 9609-2/99' => __('ENGRAXATE INDEPENDENTE 9609-2/99', $domain),
		'ENTREGADOR DE MALOTES INDEPENDENTE 5320-2/01' => __('ENTREGADOR DE MALOTES INDEPENDENTE 5320-2/01', $domain),
		'ENVASADOR(A) E EMPACOTADOR(A) INDEPENDENTE 8292-0/00' => __('ENVASADOR(A) E EMPACOTADOR(A) INDEPENDENTE 8292-0/00', $domain),
		'ESTAMPADOR(A) DE PE??AS DO VESTU??RIO INDEPENDENTE 1340-5/01' => __('ESTAMPADOR(A) DE PE??AS DO VESTU??RIO INDEPENDENTE 1340-5/01', $domain),
		'ESTETICISTA DE ANIMAIS DOM??STICOS INDEPENDENTE 9609-2/08' => __('ESTETICISTA DE ANIMAIS DOM??STICOS INDEPENDENTE 9609-2/08', $domain),
		'ESTETICISTA INDEPENDENTE 9602-5/02' => __('ESTETICISTA INDEPENDENTE 9602-5/02', $domain),
		'ESTOFADOR(A) INDEPENDENTE 9529-1/05' => __('ESTOFADOR(A) INDEPENDENTE 9529-1/05', $domain),
		'FABRICANTE DE A????CAR MASCAVO INDEPENDENTE 1071-6/00' => __('FABRICANTE DE A????CAR MASCAVO INDEPENDENTE 1071-6/00', $domain),
		'FABRICANTE DE AMENDOIM E CASTANHA DE CAJU TORRADOS E SALGADOS INDEPENDENTE 1031-7/00' => __('FABRICANTE DE AMENDOIM E CASTANHA DE CAJU TORRADOS E SALGADOS INDEPENDENTE 1031-7/00', $domain),
		'FABRICANTE DE ALIMENTOS PRONTOS CONGELADOS INDEPENDENTE 1096-1/00' => __('FABRICANTE DE ALIMENTOS PRONTOS CONGELADOS INDEPENDENTE 1096-1/00', $domain),
		'FABRICANTE DE AMIDO E F??CULAS DE VEGETAIS INDEPENDENTE 1065-1/01' => __('FABRICANTE DE AMIDO E F??CULAS DE VEGETAIS INDEPENDENTE 1065-1/01', $domain),
		'FABRICANTE DE ARTEFATOS DE FUNILARIA INDEPENDENTE 2532-2/01' => __('FABRICANTE DE ARTEFATOS DE FUNILARIA INDEPENDENTE 2532-2/01', $domain),
		'FABRICANTE DE ARTEFATOS ESTAMPADOS DE METAL, SOB ENCOMENDA OU N??O INDEPENDENTE 2532-2/01' => __('FABRICANTE DE ARTEFATOS ESTAMPADOS DE METAL, SOB ENCOMENDA OU N??O INDEPENDENTE 2532-2/01', $domain),
		'FABRICANTE DE ARTEFATOS PARA PESCA E ESPORTE INDEPENDENTE 3230-2/00' => __('FABRICANTE DE ARTEFATOS PARA PESCA E ESPORTE INDEPENDENTE 3230-2/00', $domain),
		'FABRICANTE DE ARTEFATOS T??XTEIS PARA USO DOM??STICO INDEPENDENTE 1351-1/00' => __('FABRICANTE DE ARTEFATOS T??XTEIS PARA USO DOM??STICO INDEPENDENTE 1351-1/00', $domain),
		'FABRICANTE DE ARTIGOS DE CUTELARIA INDEPENDENTE 2541-1/00' => __('FABRICANTE DE ARTIGOS DE CUTELARIA INDEPENDENTE 2541-1/00', $domain),
		'FABRICANTE DE AVIAMENTOS PARA COSTURA INDEPENDENTE 3299-0/05' => __('FABRICANTE DE AVIAMENTOS PARA COSTURA INDEPENDENTE 3299-0/05', $domain),
		'FABRICANTE DE BALAS, CONFEITOS E FRUTAS CRISTALIZADAS INDEPENDENTE 1093-7/02' => __('FABRICANTE DE BALAS, CONFEITOS E FRUTAS CRISTALIZADAS INDEPENDENTE 1093-7/02', $domain),
		'FABRICANTE DE BOLSAS/BOLSEIRO INDEPENDENTE 1521-1/00' => __('FABRICANTE DE BOLSAS/BOLSEIRO INDEPENDENTE 1521-1/00', $domain),
		'FABRICANTE DE BRINQUEDOS N??O ELETR??NICOS INDEPENDENTE 3240-0/99' => __('FABRICANTE DE BRINQUEDOS N??O ELETR??NICOS INDEPENDENTE 3240-0/99', $domain),
		'FABRICANTE DE CAL??ADOS DE BORRACHA, MADEIRA E TECIDOS E FIBRAS INDEPENDENTE 1539-4/00' => __('FABRICANTE DE CAL??ADOS DE BORRACHA, MADEIRA E TECIDOS E FIBRAS INDEPENDENTE 1539-4/00', $domain),
		'FABRICANTE DE CAL??ADOS DE COURO INDEPENDENTE 1531-9/01' => __('FABRICANTE DE CAL??ADOS DE COURO INDEPENDENTE 1531-9/01', $domain),
		'FABRICANTE DE CH?? INDEPENDENTE 1099-6/05' => __('FABRICANTE DE CH?? INDEPENDENTE 1099-6/05', $domain),
		'FABRICANTE DE CINTOS/CINTEIRO INDEPENDENTE 1414-2/00' => __('FABRICANTE DE CINTOS/CINTEIRO INDEPENDENTE 1414-2/00', $domain),
		'FABRICANTE DE CONSERVAS DE FRUTAS INDEPENDENTE 1031-7/00' => __('FABRICANTE DE CONSERVAS DE FRUTAS INDEPENDENTE 1031-7/00', $domain),
		'FABRICANTE DE CONSERVAS DE LEGUMES E OUTROS VEGETAIS INDEPENDENTE 1032-5/99' => __('FABRICANTE DE CONSERVAS DE LEGUMES E OUTROS VEGETAIS INDEPENDENTE 1032-5/99', $domain),
		'FABRICANTE DE EMBALAGENS DE CARTOLINA E PAPEL-CART??O INDEPENDENTE 1732-0/00' => __('FABRICANTE DE EMBALAGENS DE CARTOLINA E PAPEL-CART??O INDEPENDENTE 1732-0/00', $domain),
		'FABRICANTE DE EMBALAGENS DE MADEIRA INDEPENDENTE 1623-4/00' => __('FABRICANTE DE EMBALAGENS DE MADEIRA INDEPENDENTE 1623-4/00', $domain),
		'FABRICANTE DE EMBALAGENS DE PAPEL INDEPENDENTE 1731-1/00' => __('FABRICANTE DE EMBALAGENS DE PAPEL INDEPENDENTE 1731-1/00', $domain),
		'FABRICANTE DE ESPECIARIAS INDEPENDENTE 1095-3/00' => __('FABRICANTE DE ESPECIARIAS INDEPENDENTE 1095-3/00', $domain),
		'FABRICANTE DE ESQUADRIAS MET??LICAS SOB ENCOMENDA OU N??O INDEPENDENTE 2512-8/00' => __('FABRICANTE DE ESQUADRIAS MET??LICAS SOB ENCOMENDA OU N??O INDEPENDENTE 2512-8/00', $domain),
		'FABRICANTE DE FIOS DE ALGOD??O INDEPENDENTE 1311-1/00' => __('FABRICANTE DE FIOS DE ALGOD??O INDEPENDENTE 1311-1/00', $domain),
		'FABRICANTE DE FIOS DE LINHO, RAMI, JUTA, SEDA E L?? INDEPENDENTE 1312-0/00' => __('FABRICANTE DE FIOS DE LINHO, RAMI, JUTA, SEDA E L?? INDEPENDENTE 1312-0/00', $domain),
		'FABRICANTE DE FUMO E DERIVADOS DO FUMO INDEPENDENTE 1220-4/99' => __('FABRICANTE DE FUMO E DERIVADOS DO FUMO INDEPENDENTE 1220-4/99', $domain),
		'FABRICANTE DE GEL??IA DE MOCOT?? INDEPENDENTE 1099-6/99' => __('FABRICANTE DE GEL??IA DE MOCOT?? INDEPENDENTE 1099-6/99', $domain),
		'FABRICANTE DE GELO COMUM INDEPENDENTE 1099-6/04' => __('FABRICANTE DE GELO COMUM INDEPENDENTE 1099-6/04', $domain),
		'FABRICANTE DE GUARDA-CHUVAS E SIMILARES INDEPENDENTE 3299-0/01' => __('FABRICANTE DE GUARDA-CHUVAS E SIMILARES INDEPENDENTE 3299-0/01', $domain),
		'FABRICANTE DE GUARDANAPOS E COPOS DE PAPEL INDEPENDENTE 1742-7/99' => __('FABRICANTE DE GUARDANAPOS E COPOS DE PAPEL INDEPENDENTE 1742-7/99', $domain),
		'FABRICANTE DE INSTRUMENTOS MUSICAIS INDEPENDENTE 3220-5/00' => __('FABRICANTE DE INSTRUMENTOS MUSICAIS INDEPENDENTE 3220-5/00', $domain),
		'FABRICANTE DE JOGOS RECREATIVOS INDEPENDENTE 3240-0/99' => __('FABRICANTE DE JOGOS RECREATIVOS INDEPENDENTE 3240-0/99', $domain),
		'FABRICANTE DE LATIC??NIOS INDEPENDENTE 1052-0/00' => __('FABRICANTE DE LATIC??NIOS INDEPENDENTE 1052-0/00', $domain),
		'FABRICANTE DE LETREIROS, PLACAS E PAIN??IS N??O LUMINOSOS, SOB ENCOMENDA OU N??O INDEPENDENTE 3299-0/03' => __('FABRICANTE DE LETREIROS, PLACAS E PAIN??IS N??O LUMINOSOS, SOB ENCOMENDA OU N??O INDEPENDENTE 3299-0/03', $domain),
		'FABRICANTE DE LUMIN??RIAS E OUTROS EQUIPAMENTOS DE ILUMINA????O INDEPENDENTE 2740-6/02' => __('FABRICANTE DE LUMIN??RIAS E OUTROS EQUIPAMENTOS DE ILUMINA????O INDEPENDENTE 2740-6/02', $domain),
		'FABRICANTE DE MALAS INDEPENDENTE 1521-1/00' => __('FABRICANTE DE MALAS INDEPENDENTE 1521-1/00', $domain),
		'FABRICANTE DE MASSAS ALIMENT??CIAS INDEPENDENTE 1094-5/00' => __('FABRICANTE DE MASSAS ALIMENT??CIAS INDEPENDENTE 1094-5/00', $domain),
		'FABRICANTE DE MEIAS INDEPENDENTE 1421-5/00' => __('FABRICANTE DE MEIAS INDEPENDENTE 1421-5/00', $domain),
		'FABRICANTE DE MOCHILAS E CARTEIRAS INDEPENDENTE 1521-1/00' => __('FABRICANTE DE MOCHILAS E CARTEIRAS INDEPENDENTE 1521-1/00', $domain),
		'FABRICANTE DE PAIN??IS E LETREIROS LUMINOSOS INDEPENDENTE 3299-0/04' => __('FABRICANTE DE PAIN??IS E LETREIROS LUMINOSOS INDEPENDENTE 3299-0/04', $domain),
		'FABRICANTE DE P??O DE QUEIJO CONGELADO INDEPENDENTE 1091-1/01' => __('FABRICANTE DE P??O DE QUEIJO CONGELADO INDEPENDENTE 1091-1/01', $domain),
		'FABRICANTE DE PAPEL INDEPENDENTE 1721-4/00' => __('FABRICANTE DE PAPEL INDEPENDENTE 1721-4/00', $domain),
		'FABRICANTE DE PARTES DE PE??AS DO VESTU??RIO FAC????O INDEPENDENTE 1412-6/03' => __('FABRICANTE DE PARTES DE PE??AS DO VESTU??RIO FAC????O INDEPENDENTE 1412-6/03', $domain),
		'FABRICANTE DE PARTES DE ROUPAS ??NTIMAS FAC????O INDEPENDENTE 1411-8/02' => __('FABRICANTE DE PARTES DE ROUPAS ??NTIMAS FAC????O INDEPENDENTE 1411-8/02', $domain),
		'FABRICANTE DE PARTES DE ROUPAS PROFISSIONAIS FAC????O INDEPENDENTE 1413-4/03' => __('FABRICANTE DE PARTES DE ROUPAS PROFISSIONAIS FAC????O INDEPENDENTE 1413-4/03', $domain),
		'FABRICANTE DE PARTES PARA CAL??ADOS INDEPENDENTE 1540-8/00' => __('FABRICANTE DE PARTES PARA CAL??ADOS INDEPENDENTE 1540-8/00', $domain),
		'FABRICANTE DE POLPAS DE FRUTAS INDEPENDENTE 1031-7/00' => __('FABRICANTE DE POLPAS DE FRUTAS INDEPENDENTE 1031-7/00', $domain),
		'FABRICANTE DE PRODUTOS DE SOJA INDEPENDENTE 1099-6/99' => __('FABRICANTE DE PRODUTOS DE SOJA INDEPENDENTE 1099-6/99', $domain),
		'FABRICANTE DE PRODUTOS DE TECIDO N??O TECIDO PARA USO ODONTO-M??DICO-HOSPITALAR INDEPENDENTE 3292-2/02' => __('FABRICANTE DE PRODUTOS DE TECIDO N??O TECIDO PARA USO ODONTO-M??DICO-HOSPITALAR INDEPENDENTE 3292-2/02', $domain),
		'FABRICANTE DE PRODUTOS DERIVADOS DE CARNE INDEPENDENTE 1013-9/01' => __('FABRICANTE DE PRODUTOS DERIVADOS DE CARNE INDEPENDENTE 1013-9/01', $domain),
		'FABRICANTE DE PRODUTOS DERIVADOS DO ARROZ INDEPENDENTE 1061-9/02' => __('FABRICANTE DE PRODUTOS DERIVADOS DO ARROZ INDEPENDENTE 1061-9/02', $domain),
		'FABRICANTE DE RAPADURA E MELA??O INDEPENDENTE 1071-6/00' => __('FABRICANTE DE RAPADURA E MELA??O INDEPENDENTE 1071-6/00', $domain),
		'FABRICANTE DE REFRESCOS, XAROPES E P??S PARA REFRESCOS INDEPENDENTE 1122-4/03' => __('FABRICANTE DE REFRESCOS, XAROPES E P??S PARA REFRESCOS INDEPENDENTE 1122-4/03', $domain),
		'FABRICANTE DE ROUPAS ??NTIMAS INDEPENDENTE 1411-8/01' => __('FABRICANTE DE ROUPAS ??NTIMAS INDEPENDENTE 1411-8/01', $domain),
		'FABRICANTE DE SUCOS CONCENTRADOS DE FRUTAS, HORTALI??AS E LEGUMES INDEPENDENTE 1033-3/01' => __('FABRICANTE DE SUCOS CONCENTRADOS DE FRUTAS, HORTALI??AS E LEGUMES INDEPENDENTE 1033-3/01', $domain),
		'FABRICANTE DE SUCOS DE FRUTAS, HORTALI??AS E LEGUMES INDEPENDENTE 1033-3/02' => __('FABRICANTE DE SUCOS DE FRUTAS, HORTALI??AS E LEGUMES INDEPENDENTE 1033-3/02', $domain),
		'FABRICANTE DE VELAS, INCLUSIVE DECORATIVAS INDEPENDENTE 3299-0/06' => __('FABRICANTE DE VELAS, INCLUSIVE DECORATIVAS INDEPENDENTE 3299-0/06', $domain),
		'FARINHEIRO DE MANDIOCA INDEPENDENTE 1063-5/00' => __('FARINHEIRO DE MANDIOCA INDEPENDENTE 1063-5/00', $domain),
		'FARINHEIRO DE MILHO INDEPENDENTE 1064-3/00' => __('FARINHEIRO DE MILHO INDEPENDENTE 1064-3/00', $domain),
		'FERRAMENTEIRO(A) INDEPENDENTE 2543-8/00' => __('FERRAMENTEIRO(A) INDEPENDENTE 2543-8/00', $domain),
		'FERREIRO/FORJADOR INDEPENDENTE 2543-8/00' => __('FERREIRO/FORJADOR INDEPENDENTE 2543-8/00', $domain),
		'FILMADOR(A) INDEPENDENTE 7420-0/04' => __('FILMADOR(A) INDEPENDENTE 7420-0/04', $domain),
		'FORNECEDOR(A) DE ALIMENTOS PREPARADOS PARA EMPRESAS INDEPENDENTE 5620-1/01' => __('FORNECEDOR(A) DE ALIMENTOS PREPARADOS PARA EMPRESAS INDEPENDENTE 5620-1/01', $domain),
		'FOSSEIRO (LIMPADOR DE FOSSA) INDEPENDENTE 3702-9/00' => __('FOSSEIRO (LIMPADOR DE FOSSA) INDEPENDENTE 3702-9/00', $domain),
		'FOTOCOPIADOR(A) INDEPENDENTE 8219-9/01' => __('FOTOCOPIADOR(A) INDEPENDENTE 8219-9/01', $domain),
		'FOT??GRAFO(A) INDEPENDENTE 7420-0/01' => __('FOT??GRAFO(A) INDEPENDENTE 7420-0/01', $domain),
		'FOT??GRAFO(A) A??REO INDEPENDENTE 7420-0/02' => __('FOT??GRAFO(A) A??REO INDEPENDENTE 7420-0/02', $domain),
		'FOT??GRAFO(A) SUBMARINO INDEPENDENTE 7420-0/02' => __('FOT??GRAFO(A) SUBMARINO INDEPENDENTE 7420-0/02', $domain),
		'FUNILEIRO / LANTERNEIRO INDEPENDENTE 4520-0/02' => __('FUNILEIRO / LANTERNEIRO INDEPENDENTE 4520-0/02', $domain),
		'GALVANIZADOR(A) INDEPENDENTE 2539-0/02' => __('GALVANIZADOR(A) INDEPENDENTE 2539-0/02', $domain),
		'GESSEIRO(A) INDEPENDENTE 4330-4/03' => __('GESSEIRO(A) INDEPENDENTE 4330-4/03', $domain),
		'GRAVADOR(A) DE CARIMBOS INDEPENDENTE 8299-7/03' => __('GRAVADOR(A) DE CARIMBOS INDEPENDENTE 8299-7/03', $domain),
		'GUARDADOR(A) DE M??VEIS INDEPENDENTE 5211-7/02' => __('GUARDADOR(A) DE M??VEIS INDEPENDENTE 5211-7/02', $domain),
		'GUIA DE TURISMO INDEPENDENTE 7912-1/00' => __('GUIA DE TURISMO INDEPENDENTE 7912-1/00', $domain),
		'GUINCHEIRO INDEPENDENTE (REBOQUE DE VE??CULOS) 5229-0/02' => __('GUINCHEIRO INDEPENDENTE (REBOQUE DE VE??CULOS) 5229-0/02', $domain),
		'HUMORISTA E CONTADOR DE HIST??RIAS INDEPENDENTE 9001-9/01' => __('HUMORISTA E CONTADOR DE HIST??RIAS INDEPENDENTE 9001-9/01', $domain),
		'INSTALADOR(A) DE ANTENAS DE TV INDEPENDENTE 4321-5/00' => __('INSTALADOR(A) DE ANTENAS DE TV INDEPENDENTE 4321-5/00', $domain),
		'INSTALADOR(A) DE EQUIPAMENTOS DE SEGURAN??A DOMICILIAR E EMPRESARIAL, SEM PRESTA????O DE SERVI??OS DE VIGIL??NCIA E SEGURAN??A INDEPENDENTE 4321-5/00' => __('INSTALADOR(A) DE EQUIPAMENTOS DE SEGURAN??A DOMICILIAR E EMPRESARIAL, SEM PRESTA????O DE SERVI??OS DE VIGIL??NCIA E SEGURAN??A INDEPENDENTE 4321-5/00', $domain),
		'INSTALADOR(A) DE EQUIPAMENTOS PARA ORIENTA????O ?? NAVEGA????O MAR??TIMA, FLUVIAL E LACUSTRE INDEPENDENTE 4329-1/02' => __('INSTALADOR(A) DE EQUIPAMENTOS PARA ORIENTA????O ?? NAVEGA????O MAR??TIMA, FLUVIAL E LACUSTRE INDEPENDENTE 4329-1/02', $domain),
		'INSTALADOR(A) DE ISOLANTES AC??STICOS E DE VIBRA????O INDEPENDENTE 4329-1/05' => __('INSTALADOR(A) DE ISOLANTES AC??STICOS E DE VIBRA????O INDEPENDENTE 4329-1/05', $domain),
		'INSTALADOR(A) DE ISOLANTES T??RMICOS INDEPENDENTE 4329-1/05' => __('INSTALADOR(A) DE ISOLANTES T??RMICOS INDEPENDENTE 4329-1/05', $domain),
		'INSTALADOR(A) DE M??QUINAS E EQUIPAMENTOS INDUSTRIAIS INDEPENDENTE 3321-0/00' => __('INSTALADOR(A) DE M??QUINAS E EQUIPAMENTOS INDUSTRIAIS INDEPENDENTE 3321-0/00', $domain),
		'INSTALADOR(A) DE PAIN??IS PUBLICIT??RIOS INDEPENDENTE 4329-1/01' => __('INSTALADOR(A) DE PAIN??IS PUBLICIT??RIOS INDEPENDENTE 4329-1/01', $domain),
		'INSTALADOR(A) DE REDE DE COMPUTADORES INDEPENDENTE 6190-6/99' => __('INSTALADOR(A) DE REDE DE COMPUTADORES INDEPENDENTE 6190-6/99', $domain),
		'INSTALADOR(A) DE SISTEMA DE PREVEN????O CONTRA INC??NDIO INDEPENDENTE 4322-3/03' => __('INSTALADOR(A) DE SISTEMA DE PREVEN????O CONTRA INC??NDIO INDEPENDENTE 4322-3/03', $domain),
		'INSTALADOR(A) E REPARADOR (A) DE ACESS??RIOS AUTOMOTIVOS INDEPENDENTE 4520-0/07' => __('INSTALADOR(A) E REPARADOR (A) DE ACESS??RIOS AUTOMOTIVOS INDEPENDENTE 4520-0/07', $domain),
		'INSTALADOR(A) E REPARADOR(A) DE ELEVADORES, ESCADAS E ESTEIRAS ROLANTES INDEPENDENTE 4329-1/03' => __('INSTALADOR(A) E REPARADOR(A) DE ELEVADORES, ESCADAS E ESTEIRAS ROLANTES INDEPENDENTE 4329-1/03', $domain),
		'INSTALADOR(A) E REPARADOR DE COFRES, TRANCAS E TRAVAS DE SEGURAN??A INDEPENDENTE 8020-0/02' => __('INSTALADOR(A) E REPARADOR DE COFRES, TRANCAS E TRAVAS DE SEGURAN??A INDEPENDENTE 8020-0/02', $domain),
		'INSTALADOR(A) E REPARADOR(A) DE SISTEMAS CENTRAIS DE AR CONDICIONADO, DE VENTILA????O E REFRIGERA????O INDEPENDENTE 4322-3/02' => __('INSTALADOR(A) E REPARADOR(A) DE SISTEMAS CENTRAIS DE AR CONDICIONADO, DE VENTILA????O E REFRIGERA????O INDEPENDENTE 4322-3/02', $domain),
		'INSTRUTOR(A) DE ARTE E CULTURA EM GERAL INDEPENDENTE 8592-9/99' => __('INSTRUTOR(A) DE ARTE E CULTURA EM GERAL INDEPENDENTE 8592-9/99', $domain),
		'INSTRUTOR(A) DE ARTES C??NICAS INDEPENDENTE 8592-9/02' => __('INSTRUTOR(A) DE ARTES C??NICAS INDEPENDENTE 8592-9/02', $domain),
		'INSTRUTOR(A) DE CURSOS GERENCIAIS INDEPENDENTE 8599-6/04' => __('INSTRUTOR(A) DE CURSOS GERENCIAIS INDEPENDENTE 8599-6/04', $domain),
		'INSTRUTOR(A) DE CURSOS PREPARAT??RIOS INDEPENDENTE 8599-6/05' => __('INSTRUTOR(A) DE CURSOS PREPARAT??RIOS INDEPENDENTE 8599-6/05', $domain),
		'INSTRUTOR(A) DE IDIOMAS INDEPENDENTE 8593-7/00' => __('INSTRUTOR(A) DE IDIOMAS INDEPENDENTE 8593-7/00', $domain),
		'INSTRUTOR(A) DE INFORM??TICA INDEPENDENTE 8599-6/03' => __('INSTRUTOR(A) DE INFORM??TICA INDEPENDENTE 8599-6/03', $domain),
		'INSTRUTOR(A) DE M??SICA INDEPENDENTE 8592-9/03' => __('INSTRUTOR(A) DE M??SICA INDEPENDENTE 8592-9/03', $domain),
		'JARDINEIRO(A) INDEPENDENTE 8130-3/00' => __('JARDINEIRO(A) INDEPENDENTE 8130-3/00', $domain),
		'JORNALEIRO(A) INDEPENDENTE 4761-0/02' => __('JORNALEIRO(A) INDEPENDENTE 4761-0/02', $domain),
		'LAPIDADOR(A) INDEPENDENTE 3211-6/01' => __('LAPIDADOR(A) INDEPENDENTE 3211-6/01', $domain),
		'LAVADEIRO(A) DE ROUPAS INDEPENDENTE 9601-7/01' => __('LAVADEIRO(A) DE ROUPAS INDEPENDENTE 9601-7/01', $domain),
		'LAVADEIRO(A) DE ROUPAS PROFISSIONAIS INDEPENDENTE 9601-7/03' => __('LAVADEIRO(A) DE ROUPAS PROFISSIONAIS INDEPENDENTE 9601-7/03', $domain),
		'LAVADOR(A) E POLIDOR DE CARRO INDEPENDENTE  4520-0/05' => __('LAVADOR(A) E POLIDOR DE CARRO INDEPENDENTE  4520-0/05', $domain),
		'LAVADOR(A) DE ESTOFADO E SOF?? INDEPENDENTE 9609-2/99' => __('LAVADOR(A) DE ESTOFADO E SOF?? INDEPENDENTE 9609-2/99', $domain),
		'LIVREIRO(A) INDEPENDENTE 4761-0/01' => __('LIVREIRO(A) INDEPENDENTE 4761-0/01', $domain),
		'LOCADOR DE ANDAIMES INDEPENDENTE 7732-2/02' => __('LOCADOR DE ANDAIMES INDEPENDENTE 7732-2/02', $domain),
		'LOCADOR(A) DE APARELHOS DE JOGOS ELETR??NICOS INDEPENDENTE 7729-2/01' => __('LOCADOR(A) DE APARELHOS DE JOGOS ELETR??NICOS INDEPENDENTE 7729-2/01', $domain),
		'LOCADOR(A) DE BICICLETAS, INDEPENDENTE 7721-7/00' => __('LOCADOR(A) DE BICICLETAS, INDEPENDENTE 7721-7/00', $domain),
		'LOCADOR(A) DE EQUIPAMENTOS CIENT??FICOS, M??DICOS E HOSPITALARES, SEM OPERADOR INDEPENDENTE 7739-0/02' => __('LOCADOR(A) DE EQUIPAMENTOS CIENT??FICOS, M??DICOS E HOSPITALARES, SEM OPERADOR INDEPENDENTE 7739-0/02', $domain),
		'LOCADOR(A) DE EQUIPAMENTOS RECREATIVOS E ESPORTIVOS' => __('LOCADOR(A) DE EQUIPAMENTOS RECREATIVOS E ESPORTIVOS', $domain),
		'INDEPENDENTE 7721-7/00' => __('INDEPENDENTE 7721-7/00', $domain),
		'LOCADOR(A) DE FITAS DE V??DEO, DVDS E SIMILARES INDEPENDENTE 7722-5/00' => __('LOCADOR(A) DE FITAS DE V??DEO, DVDS E SIMILARES INDEPENDENTE 7722-5/00', $domain),
		'LOCADOR(A) DE LIVROS, REVISTAS, PLANTAS E FLORES' => __('LOCADOR(A) DE LIVROS, REVISTAS, PLANTAS E FLORES', $domain),
		'INDEPENDENTE 7729 2/99' => __('INDEPENDENTE 7729 2/99', $domain),
		'LOCADOR(A) DE M??QUINAS E EQUIPAMENTOS AGR??COLAS SEM OPERADOR INDEPENDENTE 7731-4/00' => __('LOCADOR(A) DE M??QUINAS E EQUIPAMENTOS AGR??COLAS SEM OPERADOR INDEPENDENTE 7731-4/00', $domain),
		'LOCADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA CONSTRU????O SEM OPERADOR, EXCETO ANDAIMES INDEPENDENTE 7732-2/01' => __('LOCADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA CONSTRU????O SEM OPERADOR, EXCETO ANDAIMES INDEPENDENTE 7732-2/01', $domain),
		'LOCADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA ESCRIT??RIO INDEPENDENTE 7733-1/00' => __('LOCADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA ESCRIT??RIO INDEPENDENTE 7733-1/00', $domain),
		'LOCADOR(A) DE MATERIAL E EQUIPAMENTO ESPORTIVO, INDEPENDENTE 7721-7/00' => __('LOCADOR(A) DE MATERIAL E EQUIPAMENTO ESPORTIVO, INDEPENDENTE 7721-7/00', $domain),
		'LOCADOR(A) DE MATERIAL M??DICO INDEPENDENTE 7729-2/03' => __('LOCADOR(A) DE MATERIAL M??DICO INDEPENDENTE 7729-2/03', $domain),
		'LOCADOR(A) DE MOTOCICLETA, SEM CONDUTOR, INDEPENDENTE 7719-5/99' => __('LOCADOR(A) DE MOTOCICLETA, SEM CONDUTOR, INDEPENDENTE 7719-5/99', $domain),
		'LOCADOR(A) DE M??VEIS E UTENS??LIOS, INCLUSIVE PARA FESTAS INDEPENDENTE 7729-2/02' => __('LOCADOR(A) DE M??VEIS E UTENS??LIOS, INCLUSIVE PARA FESTAS INDEPENDENTE 7729-2/02', $domain),
		'LOCADOR(A) DE INSTRUMENTOS MUSICAIS INDEPENDENTE 7729-2/02' => __('LOCADOR(A) DE INSTRUMENTOS MUSICAIS INDEPENDENTE 7729-2/02', $domain),
		'LOCADOR(A) DE OBJETOS DO VESTU??RIO, J??IAS E ACESS??RIOS INDEPENDENTE 7723-3/00' => __('LOCADOR(A) DE OBJETOS DO VESTU??RIO, J??IAS E ACESS??RIOS INDEPENDENTE 7723-3/00', $domain),
		'LOCADOR(A) DE OUTRAS M??QUINAS E EQUIPAMENTOS COMERCIAIS E INDUSTRIAIS N??O ESPECIFICADOS ANTERIORMENTE, SEM OPERADOR INDEPENDENTE 7739-0/99' => __('LOCADOR(A) DE OUTRAS M??QUINAS E EQUIPAMENTOS COMERCIAIS E INDUSTRIAIS N??O ESPECIFICADOS ANTERIORMENTE, SEM OPERADOR INDEPENDENTE 7739-0/99', $domain),
		'LOCADOR(A) DE PALCOS, COBERTURAS E OUTRAS ESTRUTURAS DE USO TEMPOR??RIO, EXCETO ANDAIMES INDEPENDENTE 7739-0/03' => __('LOCADOR(A) DE PALCOS, COBERTURAS E OUTRAS ESTRUTURAS DE USO TEMPOR??RIO, EXCETO ANDAIMES INDEPENDENTE 7739-0/03', $domain),
		'LOCADOR(A) DE V??DEO GAMES, INDEPENDENTE7722-5/00' => __('LOCADOR(A) DE V??DEO GAMES, INDEPENDENTE7722-5/00', $domain),
		'LOCUTOR(A) DE MENSAGENS FONADAS E AO VIVO INDEPENDENTE 9609-2/99' => __('LOCUTOR(A) DE MENSAGENS FONADAS E AO VIVO INDEPENDENTE 9609-2/99', $domain),
		'M??GICO(A) INDEPENDENTE 9329-8/99' => __('M??GICO(A) INDEPENDENTE 9329-8/99', $domain),
		'MANICURE/PEDICURE INDEPENDENTE 9602-5/01' => __('MANICURE/PEDICURE INDEPENDENTE 9602-5/01', $domain),
		'MAQUIADOR(A) INDEPENDENTE 9602-5/02' => __('MAQUIADOR(A) INDEPENDENTE 9602-5/02', $domain),
		'MARCENEIRO (A) SOB ENCOMENDA OU N??O INDEPENDENTE 3101-2/00' => __('MARCENEIRO (A) SOB ENCOMENDA OU N??O INDEPENDENTE 3101-2/00', $domain),
		'MARMITEIRO(A) INDEPENDENTE 5620-1/04' => __('MARMITEIRO(A) INDEPENDENTE 5620-1/04', $domain),
		'MEC??NICO(A) DE MOTOCICLETAS E MOTONETAS INDEPENDENTE 4543-9/00' => __('MEC??NICO(A) DE MOTOCICLETAS E MOTONETAS INDEPENDENTE 4543-9/00', $domain),
		'MEC??NICO(A) DE VE??CULOS INDEPENDENTE 4520-0/01' => __('MEC??NICO(A) DE VE??CULOS INDEPENDENTE 4520-0/01', $domain),
		'MERCEEIRO(A)/VENDEIRO(A) INDEPENDENTE 4712-1/00' => __('MERCEEIRO(A)/VENDEIRO(A) INDEPENDENTE 4712-1/00', $domain),
		'MERGULHADOR(A) (ESCAFANDRISTA) INDEPENDENTE 7490-1/02' => __('MERGULHADOR(A) (ESCAFANDRISTA) INDEPENDENTE 7490-1/02', $domain),
		'MOENDEIRO(A) INDEPENDENTE 1069-4/00' => __('MOENDEIRO(A) INDEPENDENTE 1069-4/00', $domain),
		'MONTADOR(A) DE M??VEIS INDEPENDENTE 3329-5/01' => __('MONTADOR(A) DE M??VEIS INDEPENDENTE 3329-5/01', $domain),
		'MONTADOR(A) E INSTALADOR DE SISTEMAS E EQUIPAMENTOS DE ILUMINA????O E SINALIZA????O EM VIAS P??BLICAS, PORTOS E' => __('MONTADOR(A) E INSTALADOR DE SISTEMAS E EQUIPAMENTOS DE ILUMINA????O E SINALIZA????O EM VIAS P??BLICAS, PORTOS E', $domain),
		'AEROPORTOS INDEPENDENTE 4329-1/04' => __('AEROPORTOS INDEPENDENTE 4329-1/04', $domain),
		'MOTOBOY INDEPENDENTE 5320-2/02' => __('MOTOBOY INDEPENDENTE 5320-2/02', $domain),
		'MOTORISTA (POR APLICATIVO OU N??O) INDEPENDENTE 5229-0/99' => __('MOTORISTA (POR APLICATIVO OU N??O) INDEPENDENTE 5229-0/99', $domain),
		'MOTOTAXISTA INDEPENDENTE 4923-0/01' => __('MOTOTAXISTA INDEPENDENTE 4923-0/01', $domain),
		'MOVELEIRO(A) INDEPENDENTE 3103-9/00' => __('MOVELEIRO(A) INDEPENDENTE 3103-9/00', $domain),
		'MOVELEIRO(A) DE M??VEIS MET??LICOS INDEPENDENTE 3102-1/00' => __('MOVELEIRO(A) DE M??VEIS MET??LICOS INDEPENDENTE 3102-1/00', $domain),
		'OLEIRO(A) INDEPENDENTE 2342-7/02' => __('OLEIRO(A) INDEPENDENTE 2342-7/02', $domain),
		'ORGANIZADOR(A) DE EXCURS??ES EM VE??CULO PR??PRIO, MUNICIPAL INDEPENDENTE 4929-9/03' => __('ORGANIZADOR(A) DE EXCURS??ES EM VE??CULO PR??PRIO, MUNICIPAL INDEPENDENTE 4929-9/03', $domain),
		'OURIVES INDEPENDENTE 9529-1/06' => __('OURIVES INDEPENDENTE 9529-1/06', $domain),
		'PADEIRO(A) INDEPENDENTE 1091-1/01' => __('PADEIRO(A) INDEPENDENTE 1091-1/01', $domain),
		'PANFLETEIRO(A) INDEPENDENTE 7319-0/02' => __('PANFLETEIRO(A) INDEPENDENTE 7319-0/02', $domain),
		'PAPELEIRO(A) INDEPENDENTE 4761-0/03' => __('PAPELEIRO(A) INDEPENDENTE 4761-0/03', $domain),
		'PASTILHEIRO(A) INDEPENDENTE 4330-4/05' => __('PASTILHEIRO(A) INDEPENDENTE 4330-4/05', $domain),
		'PEDREIRO INDEPENDENTE 4399-1/03' => __('PEDREIRO INDEPENDENTE 4399-1/03', $domain),
		'PEIXEIRO(A) INDEPENDENTE 4722-9/02' => __('PEIXEIRO(A) INDEPENDENTE 4722-9/02', $domain),
		'PINTOR(A) DE AUTOM??VEIS INDEPENDENTE 4520-0/02' => __('PINTOR(A) DE AUTOM??VEIS INDEPENDENTE 4520-0/02', $domain),
		'PINTOR(A) DE PAREDE INDEPENDENTE 4330-4/04' => __('PINTOR(A) DE PAREDE INDEPENDENTE 4330-4/04', $domain),
		'PIPOQUEIRO(A) INDEPENDENTE 5612-1/00' => __('PIPOQUEIRO(A) INDEPENDENTE 5612-1/00', $domain),
		'PISCINEIRO(A) INDEPENDENTE 8129-0/00' => __('PISCINEIRO(A) INDEPENDENTE 8129-0/00', $domain),
		'PIZZAIOLO(A) EM DOMIC??LIO INDEPENDENTE 5620-1/02' => __('PIZZAIOLO(A) EM DOMIC??LIO INDEPENDENTE 5620-1/02', $domain),
		'POCEIRO/CISTERNEIRO/CACIMBEIRO INDEPENDENTE 4399-1/05' => __('POCEIRO/CISTERNEIRO/CACIMBEIRO INDEPENDENTE 4399-1/05', $domain),
		'PRESTADOR(A) DE SERVI??OS DE COLHEITA, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03' => __('PRESTADOR(A) DE SERVI??OS DE COLHEITA, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03', $domain),
		'PRESTADOR(A) DE SERVI??OS DE PODA, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/02' => __('PRESTADOR(A) DE SERVI??OS DE PODA, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/02', $domain),
		'PRESTADOR(A) DE SERVI??OS DE PREPARA????O DE TERRENOS, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03' => __('PRESTADOR(A) DE SERVI??OS DE PREPARA????O DE TERRENOS, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03', $domain),
		'PRESTADOR(A) DE SERVI??OS DE RO??AGEM, DESTOCAMENTO, LAVRA????O, GRADAGEM E SULCAMENTO, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03' => __('PRESTADOR(A) DE SERVI??OS DE RO??AGEM, DESTOCAMENTO, LAVRA????O, GRADAGEM E SULCAMENTO, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03', $domain),
		'PRESTADOR(A) DE SERVI??OS DE SEMEADURA, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03' => __('PRESTADOR(A) DE SERVI??OS DE SEMEADURA, SOB CONTRATO DE EMPREITADA, INDEPENDENTE 0161-0/03', $domain),
		'PROFESSOR(A) PARTICULAR INDEPENDENTE 8599-6/99' => __('PROFESSOR(A) PARTICULAR INDEPENDENTE 8599-6/99', $domain),
		'PROMOTOR(A) DE EVENTOS INDEPENDENTE 8230-0/01' => __('PROMOTOR(A) DE EVENTOS INDEPENDENTE 8230-0/01', $domain),
		'PROMOTOR(A) DE TURISMO LOCAL INDEPENDENTE 7990-2/00' => __('PROMOTOR(A) DE TURISMO LOCAL INDEPENDENTE 7990-2/00', $domain),
		'PROMOTOR(A) DE VENDAS INDEPENDENTE 7319-0/02' => __('PROMOTOR(A) DE VENDAS INDEPENDENTE 7319-0/02', $domain),
		'PROPRIET??RIO(A) DE ALBERGUE N??O ASSISTENCIAL INDEPENDENTE 5590-6/01' => __('PROPRIET??RIO(A) DE ALBERGUE N??O ASSISTENCIAL INDEPENDENTE 5590-6/01', $domain),
		'PROPRIET??RIO(A) DE BAR E CONG??NERES, COM ENTRETENIMENTO,INDEPENDENTE 5611-2/05' => __('PROPRIET??RIO(A) DE BAR E CONG??NERES, COM ENTRETENIMENTO,INDEPENDENTE 5611-2/05', $domain),
		'PROPRIET??RIO(A) DE BAR E CONG??NERES, SEM ENTRETENIMENTO, INDEPENDENTE 5611-2/04' => __('PROPRIET??RIO(A) DE BAR E CONG??NERES, SEM ENTRETENIMENTO, INDEPENDENTE 5611-2/04', $domain),
		'PROPRIET??RIO(A) DE CAMPING INDEPENDENTE 5590-6/02' => __('PROPRIET??RIO(A) DE CAMPING INDEPENDENTE 5590-6/02', $domain),
		'PROPRIET??RIO(A) DE CANTINAS INDEPENDENTE 5620-1/03' => __('PROPRIET??RIO(A) DE CANTINAS INDEPENDENTE 5620-1/03', $domain),
		'PROPRIET??RIO(A) DE CARRO DE SOM PARA FINS PUBLICIT??RIOS INDEPENDENTE 7319-0/99' => __('PROPRIET??RIO(A) DE CARRO DE SOM PARA FINS PUBLICIT??RIOS INDEPENDENTE 7319-0/99', $domain),
		'PROPRIET??RIO(A) DE CASA DE CH?? INDEPENDENTE 5611-2/03' => __('PROPRIET??RIO(A) DE CASA DE CH?? INDEPENDENTE 5611-2/03', $domain),
		'PROPRIET??RIO(A) DE CASA DE SUCOS INDEPENDENTE 5611-2/03' => __('PROPRIET??RIO(A) DE CASA DE SUCOS INDEPENDENTE 5611-2/03', $domain),
		'PROPRIET??RIO(A) DE CASAS DE FESTAS E EVENTOS INDEPENDENTE 8230-0/02' => __('PROPRIET??RIO(A) DE CASAS DE FESTAS E EVENTOS INDEPENDENTE 8230-0/02', $domain),
		'PROPRIET??RIO(A) DE ESTACIONAMENTO DE VE??CULOS INDEPENDENTE 5223-1/00' => __('PROPRIET??RIO(A) DE ESTACIONAMENTO DE VE??CULOS INDEPENDENTE 5223-1/00', $domain),
		'PROPRIET??RIO(A) DE FLIPERAMA INDEPENDENTE 9329-8/04' => __('PROPRIET??RIO(A) DE FLIPERAMA INDEPENDENTE 9329-8/04', $domain),
		'PROPRIET??RIO(A) DE HOSPEDARIA INDEPENDENTE 5590-6/99' => __('PROPRIET??RIO(A) DE HOSPEDARIA INDEPENDENTE 5590-6/99', $domain),
		'PROPRIET??RIO(A) DE LANCHONETE INDEPENDENTE 5611-2/03' => __('PROPRIET??RIO(A) DE LANCHONETE INDEPENDENTE 5611-2/03', $domain),
		'PROPRIET??RIO(A) DE PENS??O INDEPENDENTE 5590-6/03' => __('PROPRIET??RIO(A) DE PENS??O INDEPENDENTE 5590-6/03', $domain),
		'PROPRIET??RIO(A) DE RESTAURANTE INDEPENDENTE 5611-2/01' => __('PROPRIET??RIO(A) DE RESTAURANTE INDEPENDENTE 5611-2/01', $domain),
		'PROPRIET??RIO(A) DE SALA DE ACESSO ?? INTERNET INDEPENDENTE 8299-7/07' => __('PROPRIET??RIO(A) DE SALA DE ACESSO ?? INTERNET INDEPENDENTE 8299-7/07', $domain),
		'PROPRIET??RIO(A) DE SAL??O DE JOGOS DE SINUCA E BILHAR INDEPENDENTE 9329-8/03' => __('PROPRIET??RIO(A) DE SAL??O DE JOGOS DE SINUCA E BILHAR INDEPENDENTE 9329-8/03', $domain),
		'QUEIJEIRO(A)/ MANTEIGUEIRO(A) INDEPENDENTE1052-0/00' => __('QUEIJEIRO(A)/ MANTEIGUEIRO(A) INDEPENDENTE1052-0/00', $domain),
		'QUITANDEIRO(A) INDEPENDENTE 4724-5/00' => __('QUITANDEIRO(A) INDEPENDENTE 4724-5/00', $domain),
		'QUITANDEIRO(A) AMBULANTE INDEPENDENTE 5612-1/00' => __('QUITANDEIRO(A) AMBULANTE INDEPENDENTE 5612-1/00', $domain),
		'RECICLADOR(A) DE BORRACHA, MADEIRA, PAPEL E VIDRO INDEPENDENTE 3839-4/99' => __('RECICLADOR(A) DE BORRACHA, MADEIRA, PAPEL E VIDRO INDEPENDENTE 3839-4/99', $domain),
		'RECICLADOR (A) DE MATERIAIS MET??LICOS, EXCETO ALUM??NIO INDEPENDENTE 3831-9/99' => __('RECICLADOR (A) DE MATERIAIS MET??LICOS, EXCETO ALUM??NIO INDEPENDENTE 3831-9/99', $domain),
		'RECICLADOR (A) DE MATERIAIS PL??STICOS INDEPENDENTE 3832-7/00' => __('RECICLADOR (A) DE MATERIAIS PL??STICOS INDEPENDENTE 3832-7/00', $domain),
		'RECICLADOR (A) DE SUCATAS DE ALUM??NIO INDEPENDENTE 3831-9/01' => __('RECICLADOR (A) DE SUCATAS DE ALUM??NIO INDEPENDENTE 3831-9/01', $domain),
		'REDEIRO(A) INDEPENDENTE 1353-7/00' => __('REDEIRO(A) INDEPENDENTE 1353-7/00', $domain),
		'RELOJOEIRO(A) INDEPENDENTE 9529-1/03' => __('RELOJOEIRO(A) INDEPENDENTE 9529-1/03', $domain),
		'RENDEIRO(A) INDEPENDENTE 1359-6/00' => __('RENDEIRO(A) INDEPENDENTE 1359-6/00', $domain),
		'REPARADOR(A) DE APARELHOS E EQUIPAMENTOS PARA DISTRIBUI????O E CONTROLE DE ENERGIA EL??TRICA INDEPENDENTE 3313-9/99' => __('REPARADOR(A) DE APARELHOS E EQUIPAMENTOS PARA DISTRIBUI????O E CONTROLE DE ENERGIA EL??TRICA INDEPENDENTE 3313-9/99', $domain),
		'REPARADOR (A) DE ARTIGOS DE TAPE??ARIA INDEPENDENTE 9529-1/05' => __('REPARADOR (A) DE ARTIGOS DE TAPE??ARIA INDEPENDENTE 9529-1/05', $domain),
		'REPARADOR(A) DE ARTIGOS E ACESS??RIOS DO VESTU??RIO INDEPENDENTE 9529-1/99' => __('REPARADOR(A) DE ARTIGOS E ACESS??RIOS DO VESTU??RIO INDEPENDENTE 9529-1/99', $domain),
		'REPARADOR(A) DE BALAN??AS INDUSTRIAIS E COMERCIAIS INDEPENDENTE 3314-7/10' => __('REPARADOR(A) DE BALAN??AS INDUSTRIAIS E COMERCIAIS INDEPENDENTE 3314-7/10', $domain),
		'REPARADOR(A) DE BATERIAS E ACUMULADORES EL??TRICOS, EXCETO PARA VE??CULOS INDEPENDENTE 3313-9/02' => __('REPARADOR(A) DE BATERIAS E ACUMULADORES EL??TRICOS, EXCETO PARA VE??CULOS INDEPENDENTE 3313-9/02', $domain),
		'REPARADOR(A) DE BICICLETA INDEPENDENTE 9529-1/04' => __('REPARADOR(A) DE BICICLETA INDEPENDENTE 9529-1/04', $domain),
		'REPARADOR(A) DE BRINQUEDOS INDEPENDENTE 9529-1/99' => __('REPARADOR(A) DE BRINQUEDOS INDEPENDENTE 9529-1/99', $domain),
		'REPARADOR(A) DE CORDAS, VELAMES E LONAS INDEPENDENTE 3319-8/00' => __('REPARADOR(A) DE CORDAS, VELAMES E LONAS INDEPENDENTE 3319-8/00', $domain),
		'REPARADOR(A) DE EMBARCA????ES PARA ESPORTE E LAZER INDEPENDENTE 3317-1/02' => __('REPARADOR(A) DE EMBARCA????ES PARA ESPORTE E LAZER INDEPENDENTE 3317-1/02', $domain),
		'REPARADOR(A) DE EQUIPAMENTOS ESPORTIVOS INDEPENDENTE 9529-1/99' => __('REPARADOR(A) DE EQUIPAMENTOS ESPORTIVOS INDEPENDENTE 9529-1/99', $domain),
		'REPARADOR(A) DE EQUIPAMENTOS HIDR??ULICOS E PNEUM??TICOS, EXCETO V??LVULAS INDEPENDENTE 3314-7/02' => __('REPARADOR(A) DE EQUIPAMENTOS HIDR??ULICOS E PNEUM??TICOS, EXCETO V??LVULAS INDEPENDENTE 3314-7/02', $domain),
		'REPARADOR(A) DE EQUIPAMENTOS M??DICO-HOSPITALARES N??O ELETR??NICOS INDEPENDENTE 3319-8/00' => __('REPARADOR(A) DE EQUIPAMENTOS M??DICO-HOSPITALARES N??O ELETR??NICOS INDEPENDENTE 3319-8/00', $domain),
		'REPARADOR(A) DE EXTINTOR DE INC??NDIO INDEPENDENTE 3314-7/10' => __('REPARADOR(A) DE EXTINTOR DE INC??NDIO INDEPENDENTE 3314-7/10', $domain),
		'REPARADOR(A) DE FILTROS INDUSTRIAIS INDEPENDENTE 3314-7/10' => __('REPARADOR(A) DE FILTROS INDUSTRIAIS INDEPENDENTE 3314-7/10', $domain),
		'REPARADOR(A) DE GERADORES, TRANSFORMADORES E MOTORES EL??TRICOS INDEPENDENTE 3313-9/01' => __('REPARADOR(A) DE GERADORES, TRANSFORMADORES E MOTORES EL??TRICOS INDEPENDENTE 3313-9/01', $domain),
		'REPARADOR(A) DE GUARDA CHUVA E SOMBRINHAS INDEPENDENTE 9529-1/99' => __('REPARADOR(A) DE GUARDA CHUVA E SOMBRINHAS INDEPENDENTE 9529-1/99', $domain),
		'REPARADOR(A) DE INSTRUMENTOS MUSICAIS INDEPENDENTE 9529-1/99' => __('REPARADOR(A) DE INSTRUMENTOS MUSICAIS INDEPENDENTE 9529-1/99', $domain),
		'REPARADOR(A) DE M??QUINAS DE ESCREVER, CALCULAR E DE OUTROS EQUIPAMENTOS N??O ELETR??NICOS PARA ESCRIT??RIO INDEPENDENTE 3314-7/09' => __('REPARADOR(A) DE M??QUINAS DE ESCREVER, CALCULAR E DE OUTROS EQUIPAMENTOS N??O ELETR??NICOS PARA ESCRIT??RIO INDEPENDENTE 3314-7/09', $domain),
		'REPARADOR(A) DE M??QUINAS E APARELHOS DE REFRIGERA????O E' => __('REPARADOR(A) DE M??QUINAS E APARELHOS DE REFRIGERA????O E', $domain),
		'VENTILA????O PARA USO INDUSTRIAL E COMERCIAL INDEPENDENTE 3314-7/07' => __('VENTILA????O PARA USO INDUSTRIAL E COMERCIAL INDEPENDENTE 3314-7/07', $domain),
		'REPARADOR(A) DE M??QUINAS GR??FICA INDEPENDENTE E APARELHOS PARA A IND??STRIA 3314-7/99' => __('REPARADOR(A) DE M??QUINAS GR??FICA INDEPENDENTE E APARELHOS PARA A IND??STRIA 3314-7/99', $domain),
		'REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA A IND??STRIA DA MADEIRA INDEPENDENTE 3314-7/99' => __('REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA A IND??STRIA DA MADEIRA INDEPENDENTE 3314-7/99', $domain),
		'REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA A IND??STRIA T??XTIL, DO VESTU??RIO, DO COURO E CAL??ADOS INDEPENDENTE 3314-7/20' => __('REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA A IND??STRIA T??XTIL, DO VESTU??RIO, DO COURO E CAL??ADOS INDEPENDENTE 3314-7/20', $domain),
		'REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA AGRICULTURA E PECU??RIA INDEPENDENTE 3314-7/11' => __('REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA AGRICULTURA E PECU??RIA INDEPENDENTE 3314-7/11', $domain),
		'REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA AS IND??STRIAS' => __('REPARADOR(A) DE M??QUINAS E EQUIPAMENTOS PARA AS IND??STRIAS', $domain),
		'DE ALIMENTOS, BEBIDAS E FUMO INDEPENDENTE 3314-7/19' => __('DE ALIMENTOS, BEBIDAS E FUMO INDEPENDENTE 3314-7/19', $domain),
		'REPARADOR(A) INDEPENDENTE DE M??QUINAS MOTRIZES N??O EL??TRICAS 3314-7/01' => __('REPARADOR(A) INDEPENDENTE DE M??QUINAS MOTRIZES N??O EL??TRICAS 3314-7/01', $domain),
		'REPARADOR(A) DE M??QUINAS PARA BARES E LANCHONETES INDEPENDENTE 3314-7/10' => __('REPARADOR(A) DE M??QUINAS PARA BARES E LANCHONETES INDEPENDENTE 3314-7/10', $domain),
		'REPARADOR(A) DE M??QUINAS PARA ENCADERNA????O INDEPENDENTE 3314-7/99' => __('REPARADOR(A) DE M??QUINAS PARA ENCADERNA????O INDEPENDENTE 3314-7/99', $domain),
		'REPARADOR(A) DE M??QUINAS, APARELHOS E EQUIPAMENTOS PARA INSTALA????ES T??RMICAS INDEPENDENTE 3314-7/06' => __('REPARADOR(A) DE M??QUINAS, APARELHOS E EQUIPAMENTOS PARA INSTALA????ES T??RMICAS INDEPENDENTE 3314-7/06', $domain),
		'REPARADOR(A) DE M??VEIS INDEPENDENTE 9529-1/05' => __('REPARADOR(A) DE M??VEIS INDEPENDENTE 9529-1/05', $domain),
		'REPARADOR(A) DE PANELAS (PANELEIRO) INDEPENDENTE 9529-1/99' => __('REPARADOR(A) DE PANELAS (PANELEIRO) INDEPENDENTE 9529-1/99', $domain),
		'REPARADOR(A) DE TANQUES, RESERVAT??RIOS MET??LICOS E CALDEIRAS, EXCETO PARA VE??CULOS INDEPENDENTE 3311-2/00' => __('REPARADOR(A) DE TANQUES, RESERVAT??RIOS MET??LICOS E CALDEIRAS, EXCETO PARA VE??CULOS INDEPENDENTE 3311-2/00', $domain),
		'REPARADOR(A) DE TOLDOS E PERSIANAS INDEPENDENTE 9529-1/05' => __('REPARADOR(A) DE TOLDOS E PERSIANAS INDEPENDENTE 9529-1/05', $domain),
		'REPARADOR(A) DE TON??IS, BARRIS E PALETES DE MADEIRA INDEPENDENTE 3319-8/00' => __('REPARADOR(A) DE TON??IS, BARRIS E PALETES DE MADEIRA INDEPENDENTE 3319-8/00', $domain),
		'REPARADOR(A) DE TRATORES AGR??COLAS INDEPENDENTE 3314-7/12' => __('REPARADOR(A) DE TRATORES AGR??COLAS INDEPENDENTE 3314-7/12', $domain),
		'REPARADOR(A) DE VE??CULOS DE TRA????O ANIMAL INDEPENDENTE 3319-8/00' => __('REPARADOR(A) DE VE??CULOS DE TRA????O ANIMAL INDEPENDENTE 3319-8/00', $domain),
		'RESTAURADOR(A) DE INSTRUMENTOS MUSICAIS HIST??RICOS INDEPENDENTE 3319-8/00' => __('RESTAURADOR(A) DE INSTRUMENTOS MUSICAIS HIST??RICOS INDEPENDENTE 3319-8/00', $domain),
		'RESTAURADOR(A) INDEPENDENTE DE JOGOS ACIONADOS POR MOEDAS 3319-8/00' => __('RESTAURADOR(A) INDEPENDENTE DE JOGOS ACIONADOS POR MOEDAS 3319-8/00', $domain),
		'RESTAURADOR(A) DE LIVROS NDEPENDENTE 9529-1/99' => __('RESTAURADOR(A) DE LIVROS NDEPENDENTE 9529-1/99', $domain),
		'RESTAURADOR(A) DE OBRAS DE ARTE INDEPENDENTE 9002-7/02' => __('RESTAURADOR(A) DE OBRAS DE ARTE INDEPENDENTE 9002-7/02', $domain),
		'RETIFICADOR(A) DE MOTORES PARA VE??CULOS AUTOMOTORES INDEPENDENTE 2950-6/00' => __('RETIFICADOR(A) DE MOTORES PARA VE??CULOS AUTOMOTORES INDEPENDENTE 2950-6/00', $domain),
		'REVELADOR(A) FOTOGR??FICO INDEPENDENTE 7420-0/03' => __('REVELADOR(A) FOTOGR??FICO INDEPENDENTE 7420-0/03', $domain),
		'SALGADEIRO(A) INDEPENDENTE 5620-1/04' => __('SALGADEIRO(A) INDEPENDENTE 5620-1/04', $domain),
		'SALINEIRO/EXTRATOR DE SAL MARINHO INDEPENDENTE 0892-4/01' => __('SALINEIRO/EXTRATOR DE SAL MARINHO INDEPENDENTE 0892-4/01', $domain),
		'SALSICHEIRO(A)/LINGUICEIRO(A) INDEPENDENTE 1013-9/01' => __('SALSICHEIRO(A)/LINGUICEIRO(A) INDEPENDENTE 1013-9/01', $domain),
		'SAPATEIRO(A) 9529-1/01' => __('SAPATEIRO(A) 9529-1/01', $domain),
		'SELEIRO(A) INDEPENDENTE 1529-7/00' => __('SELEIRO(A) INDEPENDENTE 1529-7/00', $domain),
		'SERIGRAFISTA INDEPENDENTE 1813-0/99' => __('SERIGRAFISTA INDEPENDENTE 1813-0/99', $domain),
		'SERIGRAFISTA PUBLICIT??RIO INDEPENDENTE 1813-0/01' => __('SERIGRAFISTA PUBLICIT??RIO INDEPENDENTE 1813-0/01', $domain),
		'SERRALHEIRO(A), EXCETO PARA ESQUADRIAS, SOB ENCOMENDA OU N??O, INDEPENDENTE 2542-0/00' => __('SERRALHEIRO(A), EXCETO PARA ESQUADRIAS, SOB ENCOMENDA OU N??O, INDEPENDENTE 2542-0/00', $domain),
		'SINTEQUEIRO(A) INDEPENDENTE 4330-4/05' => __('SINTEQUEIRO(A) INDEPENDENTE 4330-4/05', $domain),
		'SOLDADOR(A) / BRASADOR(A) INDEPENDENTE 2539-0/01' => __('SOLDADOR(A) / BRASADOR(A) INDEPENDENTE 2539-0/01', $domain),
		'SORVETEIRO(A) INDEPENDENTE 4729-6/99' => __('SORVETEIRO(A) INDEPENDENTE 4729-6/99', $domain),
		'SORVETEIRO(A) AMBULANTE INDEPENDENTE    5612-1/00' => __('SORVETEIRO(A) AMBULANTE INDEPENDENTE    5612-1/00', $domain),
		'TANOEIRO(A) INDEPENDENTE 1623-4/00' => __('TANOEIRO(A) INDEPENDENTE 1623-4/00', $domain),
		'TAPECEIRO(A) INDEPENDENTE 1352-9/00' => __('TAPECEIRO(A) INDEPENDENTE 1352-9/00', $domain),
		'TATUADOR(A) INDEPENDENTE 9609-2/06' => __('TATUADOR(A) INDEPENDENTE 9609-2/06', $domain),
		'TAXISTA INDEPENDENTE 4923-0/01' => __('TAXISTA INDEPENDENTE 4923-0/01', $domain),
		'TECEL??O(??) INDEPENDENTE 1322-7/00' => __('TECEL??O(??) INDEPENDENTE 1322-7/00', $domain),
		'TECEL??O(??) DE ALGOD??O INDEPENDENTE 1321-9/00' => __('TECEL??O(??) DE ALGOD??O INDEPENDENTE 1321-9/00', $domain),
		'T??CNICO(A) DE SONORIZA????O E DE ILUMINA????O INDEPENDENTE 9001-9/06' => __('T??CNICO(A) DE SONORIZA????O E DE ILUMINA????O INDEPENDENTE 9001-9/06', $domain),
		'T??CNICO(A) DE MANUTEN????O DE COMPUTADOR INDEPENDENTE 9511-8/00' => __('T??CNICO(A) DE MANUTEN????O DE COMPUTADOR INDEPENDENTE 9511-8/00', $domain),
		'T??CNICO(A) DE MANUTEN????O DE ELETRODOM??STICOS INDEPENDENTE 9521-5/00' => __('T??CNICO(A) DE MANUTEN????O DE ELETRODOM??STICOS INDEPENDENTE 9521-5/00', $domain),
		'T??CNICO(A) DE MANUTEN????O DE TELEFONIA INDEPENDENTE 9512-6/00' => __('T??CNICO(A) DE MANUTEN????O DE TELEFONIA INDEPENDENTE 9512-6/00', $domain),
		'TELHADOR(A) INDEPENDENTE 4399-1/99' => __('TELHADOR(A) INDEPENDENTE 4399-1/99', $domain),
		'TINTUREIRO(A) INDEPENDENTE 9601-7/02' => __('TINTUREIRO(A) INDEPENDENTE 9601-7/02', $domain),
		'TORNEIRO(A) MEC??NICO INDEPENDENTE 2539-0/01' => __('TORNEIRO(A) MEC??NICO INDEPENDENTE 2539-0/01', $domain),
		'TOSADOR(A) DE ANIMAIS DOM??STICOS INDEPENDENTE 9609-2/08' => __('TOSADOR(A) DE ANIMAIS DOM??STICOS INDEPENDENTE 9609-2/08', $domain),
		'TOSQUIADOR(A) INDEPENDENTE 0162-8/02' => __('TOSQUIADOR(A) INDEPENDENTE 0162-8/02', $domain),
		'TRANSPORTADOR(A) AQUAVI??RIO PARA PASSEIOS TUR??STICOS INDEPENDENTE 5099-8/01' => __('TRANSPORTADOR(A) AQUAVI??RIO PARA PASSEIOS TUR??STICOS INDEPENDENTE 5099-8/01', $domain),
		'TRANSPORTADOR(A) ESCOLAR INDEPENDENTE 4924-8/00' => __('TRANSPORTADOR(A) ESCOLAR INDEPENDENTE 4924-8/00', $domain),
		'TRANSPORTADOR(A) DE MUDAN??AS INDEPENDENTE 4930-2/04' => __('TRANSPORTADOR(A) DE MUDAN??AS INDEPENDENTE 4930-2/04', $domain),
		'TRANSPORTADOR(A) INTERMUNICIPAL COLETIVO DE PASSAGEIROS SOB FRETE EM REGI??O METROPOLITANA INDEPENDENTE 4929-9/02' => __('TRANSPORTADOR(A) INTERMUNICIPAL COLETIVO DE PASSAGEIROS SOB FRETE EM REGI??O METROPOLITANA INDEPENDENTE 4929-9/02', $domain),
		'TRANSPORTADOR(A) INTERMUNICIPAL E INTERESTADUAL DE TRAVESSIA POR NAVEGA????O FLUVIAL INDEPENDENTE 5091-2/02' => __('TRANSPORTADOR(A) INTERMUNICIPAL E INTERESTADUAL DE TRAVESSIA POR NAVEGA????O FLUVIAL INDEPENDENTE 5091-2/02', $domain),
		'TRANSPORTADOR(A) MAR??TIMO DE CARGA INDEPENDENTE 5011-4/01' => __('TRANSPORTADOR(A) MAR??TIMO DE CARGA INDEPENDENTE 5011-4/01', $domain),
		'TRANSPORTADOR(A) MUNICIPAL DE CARGAS N??O PERIGOSAS(CARRETO) INDEPENDENTE 4930-2/01' => __('TRANSPORTADOR(A) MUNICIPAL DE CARGAS N??O PERIGOSAS(CARRETO) INDEPENDENTE 4930-2/01', $domain),
		'TRANSPORTADOR(A) MUNICIPAL COLETIVO DE PASSAGEIROS SOB FRETE INDEPENDENTE 4929-9/01' => __('TRANSPORTADOR(A) MUNICIPAL COLETIVO DE PASSAGEIROS SOB FRETE INDEPENDENTE 4929-9/01', $domain),
		'TRANSPORTADOR(A) MUNICIPAL DE TRAVESSIA POR NAVEGA????O INDEPENDENTE 5091-2/01' => __('TRANSPORTADOR(A) MUNICIPAL DE TRAVESSIA POR NAVEGA????O INDEPENDENTE 5091-2/01', $domain),
		'TRANSPORTADOR(A) MUNICIPAL HIDROVI??RIO DE CARGAS INDEPENDENTE 5021-1/01' => __('TRANSPORTADOR(A) MUNICIPAL HIDROVI??RIO DE CARGAS INDEPENDENTE 5021-1/01', $domain),
		'TRICOTEIRO(A) INDEPENDENTE 1422-3/00' => __('TRICOTEIRO(A) INDEPENDENTE 1422-3/00', $domain),
		'VASSOUREIR(A) INDEPENDENTE 3291-4/00' => __('VASSOUREIR(A) INDEPENDENTE 3291-4/00', $domain),
		'VENDEDOR(A)  AMBULANTE DE PRODUTOS ALIMENT??CIOS INDEPENDENTE 5612-1/00' => __('VENDEDOR(A)  AMBULANTE DE PRODUTOS ALIMENT??CIOS INDEPENDENTE 5612-1/00', $domain),
		'VENDEDOR(A) DE AVES VIVAS, COELHOS E OUTROS PEQUENOS' => __('VENDEDOR(A) DE AVES VIVAS, COELHOS E OUTROS PEQUENOS', $domain),
		'ANIMAIS PARA ALIMENTA????O INDEPENDENTE 4724-5/00' => __('ANIMAIS PARA ALIMENTA????O INDEPENDENTE 4724-5/00', $domain),
		'VERDUREIRO INDEPENDENTE 4724-5/00' => __('VERDUREIRO INDEPENDENTE 4724-5/00', $domain),
		'VIDRACEIRO DE AUTOM??VEIS INDEPENDENTE 4520-0/01' => __('VIDRACEIRO DE AUTOM??VEIS INDEPENDENTE 4520-0/01', $domain),
		'VIDRACEIRO DE EDIFICA????ES INDEPENDENTE 4330-4/99' => __('VIDRACEIRO DE EDIFICA????ES INDEPENDENTE 4330-4/99', $domain),
		'VINAGREIRO INDEPENDENTE 1099-6/01' => __('VINAGREIRO INDEPENDENTE 1099-6/01', $domain),
		'VIVEIRISTA INDEPENDENTE 0121-1/0' => __('VIVEIRISTA INDEPENDENTE 0121-1/0', $domain)
	);

	$fields['billing']['billing_social_occupation'] = array(
	  'label' => 'Ocupa????o principal',
      'required' => true,
      'class' => array( 'form-row-wide', 'col-12', 'px-2', 'mb-4' ),
      'priority' => 25,
      'type'  => 'select',
      'options' => $occupation
	);

	$fields['billing']['billing_secondary_occupation'] = array(
      'label' => 'Ocupa????o secund??ria',
	  'required' => false,
      'class' => array( 'form-row-wide', 'col-12', 'px-2', 'mb-4' ),
	  'priority' => 26,
	  'type'  => 'select',
      'options' => $occupation
	);
	?>
	<input type="hidden"  name="billing_secondary_occupation_value" id="billing_secondary_occupation_value" value="0">
	<script type='text/javascript'>
        jQuery(function($){
            var a = 'select[name="billing_secondary_occupation"]',
                b = 'input[name="billing_secondary_occupation_value"]';
            $(a).change( function(){
                $(b).val($(this).val());
            })
        });
    </script>
	<?php
	// ENDERE??O COMERCIAL

	$fields['billing']['billing_title_business_address'] = array(
		'required' => false,
		'class' => array( 'form-row-wide', 'col-12' ),
		'priority' => 30
	);
	
	$fields['billing']['billing_postcode'] = array(
		'label' => 'CEP',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 31
	);

	$fields['billing']['billing_address_1'] = array(
		'label' => 'Endere??o',
		'required' => true,
		'class' => array( 'form-row-last', 'col-12', 'col-md-8', 'px-2', 'mb-4' ),
		'priority' => 32
	);

	$fields['billing']['billing_number'] = array(
		'label' => 'N??mero',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 33
	);

	$fields['billing']['billing_address_2'] = array(
		'label' => 'Complemento',
		'required' => false,
		'class' => array( 'form-row-last', 'col-12', 'col-md-8', 'px-2', 'mb-4' ),
		'priority' => 34
	);

	$fields['billing']['billing_neighborhood'] = array(
		'label' => 'Bairro',
		'required' => true,
		'class' => array( 'form-row-first', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 35
	);

	$fields['billing']['billing_city'] = array(
		'label' => 'Cidade',
		'required' => true,
		'class' => array( 'form-row-wide', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 36
	);

	$fields['billing']['billing_state'] = array(
		'label' => 'Estado',
		'required' => true,
		'type' => 'select',
		'class' => array( 'form-row-last', 'col-12', 'col-md-4', 'px-2', 'mb-4' ),
		'priority' => 37,
		'options' => array(
			null => 'Selecione um estado',
			'AC' => 'Acre',
			'AL' => 'Alagoas',
			'AP' => 'Amap??',
			'AM' => 'Amazonas',
			'BA' => 'Bahia',
			'CE' => 'Cear??',
			'DF' => 'Distrito Federal',
			'ES' => 'Esp??rito Santo',
			'GO' => 'Goi??s',
			'MA' => 'Maranh??o',
			'MT' => 'Mato Grosso',
			'MS' => 'Mato Grosso do Sul',
			'MG' => 'Minas Gerais',
			'PA' => 'Par??',
			'PB' => 'Para??ba',
			'PR' => 'Paran??',
			'PE' => 'Pernambuco',
			'PI' => 'Piau??',
			'RJ' => 'Rio de Janeiro',
			'RN' => 'Rio Grande do Norte',
			'RS' => 'Rio Grande do Sul',
			'RO' => 'Rond??nia',
			'RR' => 'Roraima',
			'SC' => 'Santa Catarina',
			'SP' => 'S??o Paulo',
			'SE' => 'Sergipe',
			'TO' => 'Tocantins'
		)
	);

	unset($fields['billing']['billing_cellphone']);

	// OUTRAS INFORMA????ES PESSOAIS

	$fields['billing']['billing_title_other_information_mei'] = array(
		'required' => false,
		'class' => array( 'form-row-wide', 'col-12' ),
		'priority' => 40
	);

	$fields['billing']['billing_income_tax'] = array(
		'label' => 'Declarou Imposto de Renda nos 2 ??ltimos anos?',
		'required' => false,
		'type' => 'select',
		'class' => array( 'form-row-first', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 41,
		'options' => array(
			null => 'Selecione uma op????o',
			'S' => 'Sim',
			'N' => 'N??o'
		)
	);

	$fields['billing']['billing_number_title_voter'] = array(
		'label' => 'N??mero do T??tulo de Eleitor (apenas n??meros)',
		'required' => false,
		'type' => 'number',
		'class' => array( 'form-row-wide', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 42
	);

	$fields['billing']['billing_bank_account'] = array(
		'label' => 'Possui conta banc??ria ou internet banking?',
		'required' => false,
		'type' => 'select',
		'class' => array( 'form-row-wide', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 43,
		'options' => array(
			null => 'Selecione uma op????o',
			'S' => 'Sim',
			'N' => 'N??o'
		)
	);

	$fields['billing']['billing_home_address'] = array(
		'label' => 'Endere??o residencial ?? diferente do comercial?',
		'required' => false,
		'type' => 'select',
		'class' => array( 'form-row-last', 'col-12', 'col-md-6', 'px-2', 'mb-4' ),
		'priority' => 44,
		'options' => array(
			null => 'Selecione uma op????o',
			'S' => 'Sim',
			'N' => 'N??o'
		)
	);	

	return $fields;
}


//saves the new checkout field
add_action( 'woocommerce_checkout_update_order_meta', 'hidden_checkout_field_update_order_meta' );

function hidden_checkout_field_update_order_meta( $order_id ) { 
	if ( $_POST['billing_secondary_occupation_value'] ) update_post_meta( $order_id, '_billing_secondary_occupation', esc_attr( $_POST['billing_secondary_occupation_value'] ) );
}








/**
 * Exibir valor dos campos do checkout na p??gina do pedido
**/

add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
	echo '<p><strong>'.__('RG').':</strong> ' . get_post_meta( $order->get_id(), '_billing_rg', true ) . '<br></p>';
	echo '<p><strong>'.__('Org??o Expedidor').':</strong> ' . get_post_meta( $order->get_id(), '_billing_expedidor', true ) . '<br></p>';
	echo '<p><strong>'.__('UF RG').':</strong> ' . get_post_meta( $order->get_id(), '_billing_uf_rg', true ) . '<br></p>';
	echo '<hr>';
	echo '<p><strong>'.__('Data de Nascimento').':</strong> ' . get_post_meta( $order->get_id(), '_billing_date_nasc', true ) . '<br></p>';
	echo '<p><strong>'.__('Nome Completo da M??e').':</strong> ' . get_post_meta( $order->get_id(), '_billing_name_mom', true ) . '<br></p>';
	echo '<p><strong>'.__('Nome da Fantasia do MEI').':</strong> ' . get_post_meta( $order->get_id(), '_billing_name_fantasy', true ) . '<br></p>';
	echo '<p><strong>'.__('Capital Social').':</strong> ' . get_post_meta( $order->get_id(), '_billing_share_capital', true ) . '<br></p>';
	echo '<hr>';
	echo '<p><strong>'.__('Ocupa????o principal').':</strong> ' . get_post_meta( $order->get_id(), '_billing_social_occupation', true ) . '<br></p>';
	echo '<p><strong>'.__('Ocupa????o secund??ria').':</strong> ' . get_post_meta( $order->get_id(), '_billing_secondary_occupation', true ) . '<br></p>';
	echo '<hr>';
	echo '<p><strong>'.__('Declarou Imposto de Renda nos 2 ??ltimos anos?').' </strong> ' . get_post_meta( $order->get_id(), '_billing_income_tax', true ) . '<br></p>';
	echo '<p><strong>'.__('N??mero do T??tulo de Eleitor').':</strong> ' . get_post_meta( $order->get_id(), '_billing_number_title_voter', true ) . '<br></p>';
	echo '<p><strong>'.__('Possui conta banc??ria ou internet banking?').' </strong> ' . get_post_meta( $order->get_id(), '_billing_bank_account', true ) . '<br></p>';
	echo '<p><strong>'.__('Endere??o residencial ?? diferente do comercial?').' </strong> ' . get_post_meta( $order->get_id(), '_billing_home_address', true ) . '<br></p>';
}

add_action('template_redirect', 'cart_redirect_404');
function cart_redirect_404()
{
	// Redirect to non existing page that will make a 404
	if (is_cart()) {
		wp_safe_redirect(home_url('/cart-page'));
		exit();
	}
}

add_filter('wc_add_to_cart_message', 'empty_wc_add_to_cart_message', 10, 2);
function empty_wc_add_to_cart_message($message, $product_id)
{
	return '';
};

function add_custom_heading($checkout)
{
	$products = WC()->cart->cart_contents;
	$cartTitles = '';
	foreach ($products as $product) {
		$cartTitles .= $product['data']->get_title();
	}
	$productCart = explode(' ',trim($cartTitles));
	echo '
		<div id="add_custom_heading" class="form-group mb-5"><label class="label-mei">' . __('PREENCHA O FORMUL??RIO ABAIXO PARA '. $productCart[0]. ' SEU CNPJ MEI') . '</label></div>
		<div class="form-group mb-4">
			<label class="text-label-up">dados pessoais</label>
			<hr class="hr-blue">
			<label class="text-label-cp">Campos com * s??o obrigat??rios.</label>
		</div>
		';
}

add_action('woocommerce_before_checkout_billing_form', 'add_custom_heading');

/* WC: Avoid alert message for individual sold product already in cart. */
// add_action( 'woocommerce_add_to_cart_validation', 'phlegx_woocommerce_add_to_cart_validation', 11, 2 ); 
// function phlegx_woocommerce_add_to_cart_validation( $passed, $product_id ) {
// 	$product = wc_get_product( $product_id );
// 	if( $product->get_sold_individually()                                              // if individual product
// 	&& WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( $product_id ) ) // if in the cart
// 	&& $product->is_purchasable()                                                      // if conditions
// 	&& $product->is_in_stock() ) {
// 		wp_safe_redirect( wc_get_checkout_url() );
// 		exit();
//     }
//     return $passed;
// }

add_filter('woocommerce_add_to_cart_validation', 'one_cart_item_at_the_time', 10, 3);
function one_cart_item_at_the_time($passed, $product_id, $quantity)
{
	if (!WC()->cart->is_empty())
		WC()->cart->empty_cart();
	return $passed;
}

add_filter('woocommerce_add_to_cart_redirect', 'add_to_cart_checkout_redirection', 10, 1);
function add_to_cart_checkout_redirection($url)
{
	return wc_get_checkout_url();
}

add_action('template_redirect', 'skip_cart_page_redirection_to_checkout');
function skip_cart_page_redirection_to_checkout()
{
	if (is_cart()) :
		wp_redirect(wc_get_checkout_url());
	endif;
}

// tirar persistencia cart items
add_filter('woocommerce_persistent_cart_enabled', '__return_false');
function wc_remove_persistent_cart($value, $id, $key)
{
	if ($key == '_woocommerce_persistent_cart') {
		return false;
	}
	return $value;
}
add_filter('get_user_metadata', 'wc_remove_persistent_cart', 10, 3);
add_filter('update_user_metadata', 'wc_remove_persistent_cart', 10, 3);
add_filter('add_user_metadata', 'wc_remove_persistent_cart', 10, 3);

add_filter('gettext', 'ld_custom_paypal_button_text', 20, 3);
function ld_custom_paypal_button_text($translated_text, $text, $domain)
{
	switch ($translated_text) {
		case 'Proceed to PayPal':
			$translated_text = __('Efetuar Pagamento', 'woocommerce');
			break;
	}
	return $translated_text;
}

// Inser input checkout
add_action('wp_loaded', 'init_form_mei');
function init_form_mei() {

	if (isset($_POST["open-mei-form"]) || isset($_POST["change-mei-form"]) || isset($_POST["cancel-mei-form"])) {
		
		if (isset($_POST["open-mei-form"])) {
			$product_id = get_theme_mod('set_id_product_open');
		} elseif (isset($_POST["change-mei-form"])) {
			$product_id = get_theme_mod('set_id_product_change');
		} elseif (isset($_POST["cancel-mei-form"])) {
			$product_id = get_theme_mod('set_id_product_cancel');
		}

		// if cart empty, add it to cart
		if (WC()->cart->get_cart_contents_count() == 0) {
			WC()->cart->add_to_cart($product_id);
		}
		add_filter('woocommerce_checkout_fields', 'onboarding_update_fields');
		function onboarding_update_fields($fields = array())
		{
			if (isset($_POST["name-init"])) {
				$nameInit = $_POST["name-init"];
			};
			if (isset($_POST["email-init"])) {
				$emailInit = $_POST["email-init"];
			};
			if (isset($_POST["cpf-init"])) {
				$cpfInit = $_POST["cpf-init"];
			};
			$fields['billing']['billing_first_name']['default'] = $nameInit;
			$fields['billing']['billing_email']['default'] = $emailInit;
			$fields['billing']['billing_cpf']['default'] = $cpfInit;
			return $fields;
		}
		return;
	}
}

// function redirect_login($redirect)
// {
// 	// select product ID
// 	$product_id = get_theme_mod('set_id_product_change');
// 	// if cart empty, add it to cart
// 	if (WC()->cart->get_cart_contents_count() == 0) {
// 		WC()->cart->add_to_cart($product_id);
// 	}
// 	return home_url('/altera-cancela');
// }
// add_filter('woocommerce_login_redirect', 'redirect_login');


// Define logo na P??gina de login do Dashboard
function my_login_logo()
{ ?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png) !important;
			height: 45px;
			width: 300px;
			background-size: 300px 45px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url()
{
	return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
	return 'Simples MEI';
}
add_filter('login_headertext', 'my_login_logo_url_title');


//Redirecionar a p??gina de produto para a Home
add_action('template_redirect', 'product_redirection_to_home', 100);
function product_redirection_to_home()
{
	if (!is_product()) return; // Only for single product pages.

	wp_redirect(home_url()); // redirect home.
	exit();
}

// Adicionar status Expirado
add_filter('woocommerce_register_shop_order_post_statuses', 'bbloomer_register_custom_order_status');
function bbloomer_register_custom_order_status($order_statuses)
{

	// Status must start with "wc-"
	$order_statuses['wc-expirado'] = array(
		'label'                     => _x('Expirado', 'Order status', 'woocommerce'),
		'public'                    => false,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop('Expirado <span class="count">(%s)</span>', 'Expirado <span class="count">(%s)</span>', 'woocommerce'),
	);
	return $order_statuses;
}

add_filter('wc_order_statuses', 'bbloomer_show_custom_order_status');

function bbloomer_show_custom_order_status($order_statuses)
{
	$order_statuses['wc-expirado'] = _x('Expirado', 'Order status', 'woocommerce');
	return $order_statuses;
}

add_filter('bulk_actions-edit-shop_order', 'bbloomer_get_custom_order_status_bulk');

function bbloomer_get_custom_order_status_bulk($bulk_actions)
{
	// Nota: "mark_" deve estar l?? em vez de "wc"
	$bulk_actions['expirado'] = 'Alterar status para status personalizado';
	return $bulk_actions;
}

add_filter( 'woocommerce_checkout_init', 'coupon_signature');
function coupon_signature($cart) {
	$coupon_code = 'ASSINATURA-ANUAL'; 

	if (is_user_logged_in()) {
		$user_id = get_current_user_id();
		$customer = new WC_Customer( $user_id );
		$email = $customer->get_email();

		$expirado = new WC_Order_Query( array(
			'return' => 'ids',
			'status' => 'expirado',
			'customer' => $email,
		));

		$ordersExpirado = $expirado->get_orders();
		if (empty($ordersExpirado)) {
			WC()->cart->add_discount( $coupon_code );
			wc_clear_notices();

			$notice = '<strong>Sua assinatura est?? ativa.</strong> Qualquer um dos nossos servi??os ser?? <strong>sem custo</strong> at?? a data de vencimento de sua assinatura.';
			wc_print_notice($notice, 'notice');

			remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 ); 

			add_filter('woocommerce_order_button_text', 'woo_custom_order_button_text');
			function woo_custom_order_button_text() {
				$products = WC()->cart->cart_contents;
				$cartTitles = '';
				foreach ($products as $product) {
					$cartTitles .= $product['data']->get_title();
				}
				$productCart = explode(' ',trim($cartTitles));
				return __($productCart[0]." MEI", 'woocommerce');
			}

			?> <style type="text/css">.text-label-pag{display: none}</style> <?php
		} else {
			WC()->cart->remove_coupon( $coupon_code );
			 wc_clear_notices();
			$notice = '<strong>Sua assinatura est?? vencida.</strong> Para adquirir qualquer um dos nossos servi??os, ser?? cobrado seu valor original.';
			wc_print_notice($notice, 'notice');
			add_filter('woocommerce_order_button_text', 'woo_custom_order_button_text');
			function woo_custom_order_button_text() {
				return __('Efetuar Pagamento', 'woocommerce');
			}
		}
	}
}

// Altera????o da descri????o do desconto na tabela do checkout
add_filter( 'woocommerce_cart_totals_coupon_label', 'woocommerce_change_coupon_label' );
function woocommerce_change_coupon_label() {
    echo 'Assinatura Anual';
}

// Remover mensagem de adi????o de cupom na p??gina de checkout
add_action( 'woocommerce_before_checkout_form', 'remove_checkout_coupon_form', 9 );
function remove_checkout_coupon_form(){
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}

// Adicionar mensagem no Checkout para o usu??rio no checkout
add_action( 'woocommerce_before_checkout_form', 'print_donation_notice', 10 );
function print_donation_notice() {
	if (!is_user_logged_in()) {
		wc_print_notice( sprintf(
			__("%s Caso j?? tenha assinatura ativa a menos de 1 ano, fa??a login acima e <strong>Finalize sem custo!</strong>", "woocommerce"),
			'<strong>' . __("Aten????o:", "woocommerce") . '</strong>'
		), 'success' );
	}
}

