<?php 

/*
Template Name: Cancelar Mei
*/

get_header();
?>
	
    <main id="main">

        <?php if(is_user_logged_in()): ?>

            <section class="my-5" data-aos="fade">
                <div class="container">                    
                    <?php $order_statuses = array('wc-processing', 'wc-completed', 'wc-cancelled');
                    $orders = wc_get_orders( array('numberposts' => -1, 'post_status' => $order_statuses) ); ?>

                    <?php
                    // Loop through each WC_Order object
                    foreach( $orders as $order ){ ?>
                        <div class="card card-cancel-mei col-12 pb-3" style="background: <?php echo ($order->get_status() === "cancelled") ? '#ffe0e0' : '#e0ffe6'; ?>">
                            <h3 class="card-title title text-center pb-3">SEU CADASTRO <?php echo ($order->get_status() === 'cancelled') ? 'INATIVO' : 'ATIVO'; ?></h3>
                            <div class="card-body">
                                <h4><?php echo $order->get_billing_first_name().' '.$order->get_billing_last_name(); ?></h4>
                                <p><?php echo $order->get_meta('_billing_name_fantasy'); ?></p>
                                <hr>
                                <?php
                                echo '<span>Data da compra: </span>'.date("d/m/Y", strtotime($order->get_date_created())).'<br>';
                                echo '<span>Cadastro valido até: </span>'. date("d/m/Y", strtotime( '+1 year', strtotime($order->get_date_created()))) .'<br>';
                                echo '<span>Data da última modificado no cadastro: </span>'.date("d/m/Y", strtotime($order->get_date_modified())).'<br>';
                                // echo '<span>Cadastro ativo desde: </span>'.$order.'<br>';
                                echo '<span>Valor pago: </span>'.$order->get_shipping_total().'<br>';
                                echo '<span>Metodo de pagamento: </span>'.$order->get_payment_method_title().'<br>';
                                if ($order->get_status() != 'cancelled') : ?>
                                <form action="" method="post" name="update_status" class="pt-4">
                                    <input type="hidden" name='order_id' value="<?php echo $order->get_id(); ?>">
                                    <?php wp_nonce_field( 'update_order_status'); ?>
                                    <button class="ajax-status-order btn-cancel" type="submit" name="marked_as_cancelled">CANCELAR MEI</button>
                                </form>
                                <?php elseif ($order->get_status() === 'cancelled') : ?>
                                <form action="" method="post" name="update_status" class="pt-4">
                                    <input type="hidden" name='order_id' value="<?php echo $order->get_id(); ?>">
                                    <?php wp_nonce_field( 'update_order_status'); ?>
                                    <button class="ajax-status-order" type="submit" name="marked_as_completed">Reativar Cadastro</button>
                                </form>                
                                <?php endif; ?>

                            </div>
                        
                        </div>
                    <?php } ?>
                </div>
            </section>

        <?php else : ?>

            <section class="my-5" data-aos="fade-up">
                <div class="container d-flex">
                    <div class="row no-gutters d-flex align-items-center justify-content-center w-100 page-login">
                        <div class="col-auto col-md-6">
                            <div class="d-block">
                                <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    </main> 
		
<?php get_footer(); ?>