<?php 

/*
Template Name: Contato
*/

get_header();
?>
	<main id="main">

        <section class="section-bg-blue mb-5" ></section>

        <section class="mb-5 position-relative">
            <div class="section-contact-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div class="card border-0 bg-transparent" data-aos="zoom-in">
                            <div class="card-body">
                                <h4 class="card-title color-969696 text-uppercase font-weight-bold h1">fale com a gente</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text color-61AAE5 text-uppercase font-weight-bold m-0">segunda à sexta</p>
                                <p class="card-text color-969696 m-0">9h às 12h e 13h30 às 17h</p>
                                <p class="card-text color-969696 m-0 d-flex align-items-center">
                                    
                                    <?php
                                        function Mask($mask,$str){

                                            $str = str_replace(" ","",$str);                                            
                                        
                                            for($i=0;$i<strlen($str);$i++){
                                                $mask[strpos($mask,"#")] = $str[$i];
                                            }
                                            return $mask;
                                        
                                        }
                                        if($isMobile){
                                            echo '<a href="' . $targetApp . '"><i class="bx bxl-whatsapp whatsapp wpp-mobile"></i></a>'. Mask((strlen($number_wpp)==13) ? '+## ## # ####-####' : '## # ####-####',$number_wpp);
                                        }else{
                                            echo '<a href="' . $targetWeb . '"><i class="bx bxl-whatsapp whatsapp wpp-desk"></i></a>'. Mask((strlen($number_wpp)==13) ? '+## ## # ####-####' : '## # ####-####',$number_wpp);
                                        }
                                    ?>

                                </p>
                                <p class="card-text color-969696 m-0">
                                    <?php 
                                        $target_email = get_theme_mod('set_link_email', 'contato@simplesmei.com');
                                        echo '<a href="mailto:' . $target_email . '" class="color-aeaeae">' . $target_email . '</a>'
                                    ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text color-61AAE5 text-uppercase font-weight-bold m-0">siga-nos</p>
                                <p class="card-text m-0 color-969696">
                                    <?php 
                                        $target_facebook = get_theme_mod('set_link_facebook', 'http://facebook.com/');
                                        echo '<a href="' . $target_facebook . '" target="_blank"><i class="flaticon-facebook flaticon-sn"></i></a>';

                                        $target_instagram = get_theme_mod('set_link_instagram', 'https://www.instagram.com/');
                                        echo '<a href="' . $target_instagram . '" target="_blank"><i class="flaticon-instagram flaticon-sn"></i></a>';
                                    ?>
                                    simplesmei
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <div class="form-contato" data-aos="zoom-in">
                            <label class="text-center text-uppercase w-100 color-white h1 mb-3">envie sua dúvida</label>
                            <?php echo do_shortcode("[contact-form-7 id='261' title='Dúvidas']"); ?>
                            <!-- <div class="form-group">
                                <select class="form-control select-contato">
                                <option>Assunto</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <input type="text" name="" id="" class="form-control input-contato" placeholder="Nome">
                            </div>
                            <div class="form-group">
                            <input type="email" name="" class="form-control input-contato" placeholder="E-mail" id="">
                            </div>
                            <div class="form-group">
                            <input type="text" name="" class="form-control input-contato" placeholder="Fone" id="">
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 mb-3 col-md-8">
                                    <input type="text" name="" class="form-control input-contato" placeholder="Cidade" id="">
                                </div>
                                <div class="col-xs-12 mb-3 col-md-4">
                                    <select class="form-control select-contato">
                                        <option>Estado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <textarea name="" id="" class="textarea-contato" placeholder="Como podemos te ajudar?"></textarea>
                            </div>
                            <div class="form-group">
                            <button class="bnt btn-enviar-contato">enviar</button>
                            </div> -->
                        </div> 
                    </div>
                </div>
            </div>
        </section>

    </main>
		
<?php get_footer(); ?>