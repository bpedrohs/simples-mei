<?php 

get_header();
?>
	<!-- ======= Main ======= -->
    <main id="main">

        <section class="my-5" data-aos="fade-up">
            <div class="container d-flex">
                <div class="row no-gutters d-flex align-items-center justify-content-center w-100 page-login">
                    <?php if(!is_user_logged_in()) : ?>
                    <div class="col-auto col-md-6">
                        <div class="d-block">
                            <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                        </div>
                    </div>
                    <?php else : 
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
                            $notice = '<strong>Sua assinatura está ativa.</strong> Qualquer um dos nossos serviços será <strong>sem custo</strong> até a data de vencimento de sua assinatura.';
                            wc_print_notice($notice, 'notice');
                        } else {
                            $notice = '<strong>Sua assinatura está vencida.</strong> Para adquirir qualquer um dos nossos serviços, será cobrado seu valor original.';
                            wc_print_notice($notice, 'notice');
                        } ?>
                        <div class="col-12 pb-3">
                            <?php global $current_user; wp_get_current_user();
                            $nome_usuario = $current_user->display_name;
                            $user = explode(' ',trim($nome_usuario)); ?>
                            <h4 class="title text-center"><?php echo 'Olá '.$user[0]; ?>, qual dos nossos serviços você precisa?</h4>
                            <span class="text-center"><a href="<?php echo wp_logout_url( home_url( '/' ) );?>" class="btn-clipboard d-block w-100">Clique aqui para sair desta conta</a></span>
                        </div>
                        <div class="pt-5 container d-flex">
                            <div class="row no-gutters d-flex align-items-center justify-content-between w-100">
                                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center my-3">
                                    <div class="card-body-r card border-0 bg-FF9716 card-start">
                                        <div class="card-body card-body-start">
                                            <h4 class="card-title card-title-start text-center">abrir mei</h4>
                                            <p class="card-text card-text-start text-center">
                                                <span>
                                                    Tenha seu <span class="text-uppercase font-weight-bold">cnpj</span>
                                                </span>
                                                <span>
                                                    de uma forma <span class="font-weight-bold">fácil</span> e <span class="font-weight-bold">rápida!</span>
                                                </span>
                                            </p>
                                            <a class="btn btn-open-now" id="open-form" href="<?php echo $id_product_open ?>">abrir agora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center my-3">
                                    <div class="card-body-r card border-0 bg-5AA1DD card-start">
                                        <div class="card-body card-body-start">
                                            <h4 class="card-title card-title-start text-center">quero alterar</h4>
                                            <p class="card-text card-text-start text-center">
                                                <span>
                                                    Altere as informações
                                                </span>
                                                <span>
                                                    que precisa em seu <span class="text-uppercase">cnpj.</span>
                                                </span>
                                            </p>
                                            <a href='<?php echo $id_product_change ?>' class="btn btn-change-mei"><span class="text-uppercase color-1773A7">quero
                                                    alterar</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center my-3">
                                    <div class="card-body-r card border-0 card-cancelar card-start">
                                        <div class="card-body card-body-start">
                                            <h4 class="card-title card-title-start text-center">Quero cancelar</h4>
                                            <p class="card-text card-text-start text-center">
                                                <span>
                                                    Cancele seu <span class="font-weight-bold">CNPJ.</span>
                                                </span>
                                                <span>
                                                    Evite <span class="font-weight-bold">complicações</span> e <span class="font-weight-bold">dívidas</span>
                                                </span>
                                            </p>
                                            <a class="btn btn-open-now" id="open-form" href="<?php echo $id_product_cancel ?>">Quero cancelar</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    </main><!-- End Main -->
		
<?php get_footer(); ?>