<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simples Mei
 */
?>
	<footer id="footer" class="p-0">
        <div class="container-fluid bg-white">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center my-5">
                        <span class="text-registration-home-frist">
                        <strong> Cadastre-se </strong>conosco com toda comodidade e segurança, e tenha o suporte total para esclarecimento de dúvidas durante todo o processo, garantia de serviço prestado e acesso a um e-Book exclusivo por uma <strong>taxa única de R$ 100,00.</strong> Todos os documentos (<strong>CNPJ</strong>, certificado e <strong>DAS</strong>) e o e-Book serão enviados por e-mail em até 24 horas úteís após a confirmação do pagamento.
                        </span>
                    </div>
                </div>

            </div>
        </div>

        <section class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-12 d-lg-block mb-5">
                        <div class="row">
                            <?php if( is_active_sidebar( 'simples-mei-sidebar-footer-1' ) ): ?>
                                <div class="col-8">
                                    <?php dynamic_sidebar( 'simples-mei-sidebar-footer-1' ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="d-none d-lg-block col-4 redes-socias-footer">
                                <?php 
                                    $target_facebook = get_theme_mod('set_link_facebook', 'http://facebook.com/');

                                    if( $target_facebook ): 
                                        echo '<a href="' . $target_facebook . '" target="_blank"><i class="flaticon-facebook mr-2 mr-1 ml-fb"></i></a>';
                                    endif;

                                    $target_instagram = get_theme_mod('set_link_instagram', 'https://www.instagram.com/');

                                    if( $target_instagram ):
                                        echo '<a href="' . $target_instagram . '" target="_blank"><i class="flaticon-instagram mr-2 mr-1 ml-fb"></i></a>';
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php if ( has_nav_menu( 'simples_mei_footer_menu' ) ): ?>
                        <div class="col-12 col-md-6 col-lg-4 m-div-footer">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'	=> 'simples_mei_footer_menu',
                                        'menu_class'        => 'footer-menu-one'
                                    )
                                );
                            ?>

                            <?php
                                if ( has_nav_menu( 'simples_mei_policy_terms' ) ):

                                    wp_nav_menu( 
                                        array ( 
                                            'theme_location'	=> 'simples_mei_policy_terms',
                                            'menu_class'        => 'footer-menu-grey'
                                        ) 
                                    );

                                endif; 
                            ?>
                            
                        </div>
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'simples_mei_i_already_am_mei' ) ): ?>
                        <div class="col-12 col-md-6 col-lg-4 m-div-footer">
                            <h4 class="title-footer">Já sou <span class="text-uppercase">mei</span></h4>
                            <?php
                                wp_nav_menu( 
                                    array ( 
                                        'theme_location'	=> 'simples_mei_i_already_am_mei',
                                        'menu_class'        => 'footer-menu-grey'
                                    ) 
                                );
                            ?>
                            
                        </div>
                    <?php endif; ?>
                    
                    <div class="col-12 col-lg-4 m-div-footer">
                        
                        <div class="row">

                            <div class="m-div-footer col-12 col-md-6 col-lg-12">

                                <?php
                                    $target_email = get_theme_mod('set_link_email', 'contato@simplesmei.com');
                                    if($target_email):
                                ?>
        
                                    <ul class="footer-contato-ul mt-0">
                                        
                                        <li>
                                            
                                            <span class="span-white">Entre em contato</span>
                                            
                                        </li>
                                        <li>    
                                            <span>
                                                <?php 
                                                    echo '<a href="mailto:' . $target_email . '" class="color-aeaeae">' . $target_email . '</a>';
                                                ?>
                                            </span>
                                        </li>
            
                                    </ul>
                                <?php endif; ?>
                                
                                <?php if(get_theme_mod('set_opening_hours')): ?>
                                    <ul class="footer-contato-ul">
            
                                        <li>
                                            <span class="span-white">Hórario de funcionamento</span>
                                        </li>
                                        <li>
                                            <span>
                                                <?php echo get_theme_mod('set_opening_hours'); ?>    
                                            </span>
                                        </li>
            
                                    </ul>
                                <?php endif; ?>

                            </div>
                            
                            
                            <div class="redes-socias-footer d-lg-none d-xl-none col-12 col-md-6 col-lg-12">
                                <?php
                                    $target_facebook = get_theme_mod('set_link_facebook', 'http://facebook.com/');
                                    $target_instagram = get_theme_mod('set_link_instagram', 'https://www.instagram.com/');

                                    if($target_facebook || $target_instagram):  ?>

                                    <h4 class="title-footer color-aeaeae">Siga nossas redes socias.</h4>

                                <?php endif; ?>

                                <?php 
                                    if( $target_facebook ): 
                                        echo '<a href="' . $target_facebook . '" target="_blank"><i class="flaticon-facebook mr-2 mr-1 ml-fb"></i></a>';
                                    endif;

                                    if( $target_instagram ):
                                        echo '<a href="' . $target_instagram . '" target="_blank"><i class="flaticon-instagram mr-2 mr-1 ml-fb"></i></a>';
                                    endif;
                                ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <div class="container-fluid bg-white color-black p-4">
            <div class="container">
        
                <div class="row">
                    <div class="col-12">
                        <p class="color-8A8A8A text-center text-registration-home">
                            A inscrição, alteração, regularização, baixa e demais itens relativos ao mei podem ser solicitados sem o acompanhamento dos profissionais deste site e de forma gratuita nos órgãos púlbicos do Governo. Esse site não faz parte do Governo e oferece serviço privado e opicional.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid p-4 bg-5AA9E4">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 col-xl-6 div-last-fs">
                    <p class="last-fs text-center">
                        ©Copyright <span class="font-weight-bold"> 2020. </span> Simples <span class="text-uppercase">mei. </span> Todos os direitos reservados.
                    </p>
                </div>
                <div class="col-lg-5 col-xl-6 d-flex justify-content-center align-items-center">
                    <div class="row d-lg-none mt-3">
                        <div class="col-12 text-center mt-2"><span class="text-uppercase last-fs">criação e
                            desenvolvimento:</span></div>
                        <div class="col-12 text-center mt-2 p-0 d-flex flex-row justify-content-center">
                            <a href="http://tataumachado.com.br/"><img src="<?= get_template_directory_uri() . '/assets/images/logos/logo_tatau_machado.png' ?>" class="logo-link mx-2"></a>
                            <a href="http://tataumachado.com.br/"><img src="<?= get_template_directory_uri() . '/assets/images/logos/logo-peterson.png' ?>" class="logo-link mx-2"></a>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <div class="col-12 text-center m-0"><span class="text-uppercase last-fs">criação e
                            desenvolvimento:</span>
                            <a href="http://petersonmacedo.com.br/"><img src="<?= get_template_directory_uri() . '/assets/images/logos/logo_tatau_machado.png' ?>" class="logo-link mx-2"></a>
                            <a href="http://petersonmacedo.com.br/"><img src="<?= get_template_directory_uri() . '/assets/images/logos/logo-peterson.png' ?>" class="logo-link mx-2"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>