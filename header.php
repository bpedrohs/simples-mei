<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simples Mei
 */

// um número no formato internacional (ativo no WhatsApp)
$number_wpp = get_theme_mod('set_number_link_wpp', '62 0 0000-0000');

// o texto ou algo vindo de um <textarea> ou <input> por exemplo
$msg = get_theme_mod('set_msg_wpp', 'Olá, vim do site oficial Simples MEI, poderia me ajudar?');

// montar o link (número e texto) (web)
$targetWeb = 'https://api.whatsapp.com/send?phone=' . urldecode($number_wpp) . '&text=' . urldecode($msg) . '';

// montar o link (número e texto) (app)
$targetApp = 'whatsapp://send?phone=' . urldecode($number_wpp) . '&text=' . urldecode($msg) . '';

$isMobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($_SERVER['HTTP_USER_AGENT'], 0, 4)));

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="brand d-none col-lg-2 text-center text-lg-left d-lg-flex align-items-lg-center">
						<a href="<?php echo home_url( '/' ); ?>">
							<?php if( has_custom_logo() ): ?>
								<?php the_custom_logo(); ?>
							<?php else: ?>
								<p class="site-title"><?php bloginfo( 'title' ); ?></p>
								<span><?php bloginfo( 'description' ); ?></span>
							<?php endif; ?>
						</a>
					</div>
					
					<div class="second-column col-12 col-lg-10">
						<div class="row">
							<?php if( class_exists( 'WooCommerce' ) ): ?>
							<?php endif; ?>
							<div class="col-12">
								<nav class="main-menu navbar navbar-expand-lg navbar-light" role="navigation">
									<!-- Brand and toggle get grouped for better mobile display -->
									<button class="mr-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-collapse" aria-controls="menu-collapse" aria-expanded="false" aria-label="<?php _e( 'Toggle navigation', 'simples-mei' ) ?>">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="brand d-md-block d-lg-none text-center">
										<a href="<?php echo home_url( '/' ); ?>">
											<?php if( has_custom_logo() ): ?>
												<?php the_custom_logo(); ?>
											<?php else: ?>
												<p class="site-title"><?php bloginfo( 'title' ); ?></p>
												<span><?php bloginfo( 'description' ); ?></span>
											<?php endif; ?>
										</a>
									</div>
									<div class="d-lg-none">
										<?php
                                        
                                        echo '<a href="' . $targetApp . '"><i class="bx bxl-whatsapp"></i></a>';
                                        
                                    	?>
									</div>
										<?php
										wp_nav_menu( 
											array(

												'theme_location'    => 'simples_mei_main_menu',
												'depth'             => 3,
												'container'         => 'div',
												'container_class'   => 'collapse navbar-collapse menu-ep',
												'container_id'      => 'menu-collapse',
												'menu_class'        => 'nav navbar-nav',
												'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
												'walker'            => new WP_Bootstrap_Navwalker(),
												
											)
										);
										?>
								</nav>									
							</div>
						</div>
					</div>						
				</div>
			</div>
		</section>
	</header>		