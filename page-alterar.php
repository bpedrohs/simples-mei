<?php 

/*
Template Name: Alterar Mei
*/

get_header();
?>
	<!-- ======= Main ======= -->
    <main id="main">

        <section class="mb-5" data-aos="fade-up">

            <?php  

            $banner_alterar = get_theme_mod( 'set_banner_alterar_mei', 'abrir-alterar-banner');
            $args_alterar = array(
                'post_type'			=> 'page',
                'posts_per_page'	=> 1,
                'name'              => $banner_alterar
            );

            $banner_alterar_loop = new WP_Query( $args_alterar );

            if( $banner_alterar_loop->have_posts() ):
                while( $banner_alterar_loop->have_posts() ): 
                    $banner_alterar_loop->the_post();

            ?>

            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <div class="banner-mei" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
                        
                <div class="container d-flex align-items-center h-100">

                    <div class="row">

                        <div class="col-12 my-3">

                            <div class="content"><?php the_content(); ?></div>

                        </div>

                    </div>

                </div>

            </div>

            <?php  

            endwhile;
            wp_reset_postdata();
            endif;
            ?>

        </section>

        <section class="my-5" data-aos="fade-up">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-lg-6">
                        <div class="card bg-transparent border-0 my-2 w-100">
                            <div class="card-body float-left">
                                <p class="card-title color-969696 font-weight-bold text-uppercase title-change">Altere quantas vezes precisar</p>
                                <p class="card-title text-change">
                                    modifique <strong>ramo, nome</strong>
                                    <strong>fantasia, endereço</strong> e
                                    vários outros dados
                                    que precisar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <div class="card border-0 my-2 one-time-fee">
                            <div class="card-body text-center">
                                <h4 class="card-title text-uppercase color-white m-0">taxa única de apenas</h4>
                                <span class="d-flex flex-row align-self-start justify-content-center preco-sup-m py-3 m-0">
                                    <span class="preco-sup">100</span>
                                </span>
                                <div class="d-flex">
                                    <a href="<?php echo $id_product_change; ?>" class="btn btn-altere-agr hvr-wobble-horizontal">Altere Agora!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class=" section-formalize" data-aos="fade-up">
            <div class="container">
                <div class="row my-5">
                    <div class="col text-center">
                        <h2 class="title-c3 color-5AA1DD text-uppercase"><span class="font-weight-bold">formalize-se</span> com mais vantagens e sem burocracia!</h2>
                    </div>
                </div>

                <div class="card-columns d-none d-lg-block">

                    <?php 

                        $destaque_args = array(
                            'post_type'			=> 'post',
                            'posts_per_page'	=> 3,
                            'category_name'     => 'destaque alterar mei',
                            'orderby'           =>'post__in'
                        );

                        $destaque_query = new WP_Query( $destaque_args);
                        
                    ?>
                    <?php
                        // If there are any posts
                        if( $destaque_query->have_posts() ):

                        // Load posts loop
                        while( $destaque_query->have_posts() ): $destaque_query->the_post();
                    ?>

                    <div class="card bg-transparent border-0">
                        
                        <?php 
                            if( has_post_thumbnail() ):
                                the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'card-img-top icons' ) );
                            endif;
                        ?>

                        <div class="card-body text-left py-0">

                            <p class="card-text"><?php the_content() ?></p>

                        </div>
                    </div>
                                    
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                    ?>

                </div>
            
                <div class="owl-carousel owl-theme owl-loaded loop arrow-carousel d-xl-none d-lg-none">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                        <?php 

                            $destaque_args = array(
                                'post_type'			=> 'post',
                                'posts_per_page'	=> 3,
                                'category_name'     => 'destaque alterar mei',
                                'orderby'           =>'post__in'
                            );

                            $destaque_query = new WP_Query( $destaque_args );

                        ?>
                        <?php
                            // If there are any posts
                            if( $destaque_query->have_posts() ):

                            // Load posts loop
                            while( $destaque_query->have_posts() ): $destaque_query->the_post();
                        ?>

                            <div class="owl-item">
                                <div class="card bg-transparent border-0 m-auto text-center">
                                    
                                    <?php 
                                        if( has_post_thumbnail() ):
                                            the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'm-auto icons' ) );
                                        endif;
                                    ?>

                                    <div class="card-body text-center carousel-mobile-text">

                                        <div class="card-text text-card-sm px-3">
                                            <?php the_content() ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                            endif;
                        ?>

                        </div>
                    </div>

                    <div class="owl-nav nav-arrow">
                        <i class="bx bxs-chevron-left arrowPrevButton"></i>
                        <i class="bx bxs-chevron-right arrowNextButton"></i>
                    </div>

                </div>

            </div>
        </section>

        <section class="mb-5" data-aos="fade-up">
                <div class="container" data-aos="fade-up" >
                    <form action="<?php echo wc_get_checkout_url(); ?>" id="change-mei-form" class="col-open-mei-form p-3" method="POST">
                        <label class="title-open-form text-uppercase color-white h1">Altere seu cnpj mei
                            agora</label>
                        <div class="form-row d-flex justify-content-start align-items-center">
                            <div class="col-sm-12 col-lg-3 my-2">
                                <input type="text" name="name-init" id="" class="form-control input-open" placeholder="nome"
                                    aria-describedby="helpId">
                            </div>
                            <div class="col-sm-12 col-lg-3 my-2">
                                <input type="email" class="form-control input-open email-open-form" name="email-init" id=""
                                    aria-describedby="emailHelpId" placeholder="E-MAIL">
                            </div>
                            <div class="col-sm-12 col-lg-3 my-2">
                                <input type="text" name="cpf-init" id="" class="form-control input-open cpf" placeholder="CPF"
                                    aria-describedby="helpId">
                            </div>
                            <?php wp_nonce_field('init_form_mei'); ?>
                            <div class="col-sm-12 col-lg-3 my-2 text-center">
                                <button class="btn btn-open-mei-form text-uppercase w-100" name="change-mei-form" type="submit">Alterar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="mb-5" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">

                        <div class="card bg-transparent border-0 my-2 w-100">
                            <div class="card-body float-left p-0">
                                <span
                                    class="card-title main-text-testimonials">  <span class="font-weight-bold">nosso cliente</span>  explica, porque ser mei pelo <span class="font-weight-bold">simples mei</span> é só vantagem.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6">
                        <div class="card bg-transparent border-0 my-2 bg-EDEDED w-100 card-start">
        
                            <div class="owl-carousel owl-theme myslider">

                                <?php 

                                $depoimentos_args = array(
                                    'post_type'			=> 'post',
                                    'posts_per_page'	=> 3,
                                    'category_name'     => 'depoimentos'
                                );

                                $depoimentos_query = new WP_Query( $depoimentos_args );

                                ?>
                                <?php
                                    // If there are any posts
                                    if( $depoimentos_query->have_posts() ):

                                    // Load posts loop
                                    while( $depoimentos_query->have_posts() ): $depoimentos_query->the_post();
                                ?>


                                    <div class="item" data-dot="<button class='btn btn-carousel-dep'></button/>">
                                        <div class="card-body text-center card-quotes py-0">

                                            <i class='bx bxs-quote-alt-left quote-left'></i>
    
                                            <span class="card-title"><?php the_content() ?></span>
    
                                            <i class='bx bxs-quote-alt-right quote-right'></i>
    
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>
                                    
                            </div>
                                    
                            <div class="card-body text-center order-12 py-0">
                                <a href="<?php echo home_url('blog'); ?>" class="btn btn-veja-mais">veja mais</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            
        </section>

        <section class="mb-5" data-aos="fade-up" >
            <div class="container">
                <div class="row"></div>
                    <div class="container-hire p-4">
                        <div class="container-hire-bg"></div>
                        <div class="row h-100 d-flex justify-content-center align-items-center">
                            <div class="col-xs-12 col-lg-3 text-center text-lg-left my-2">
                                <p class="text-i-want-to-be"><strong>contrate</strong> a <strong>simples mei</strong> por apenas</p>
                            </div>
                            <div class="col-xs-12 col-lg-6 text-center my-2">
                                <span class="d-flex flex-row align-self-start justify-content-center">
                                    <span class="preco-sup preco-sup-last">100</span>
                                </span>
                            </div>
                            <div class="col-xs-12 col-lg-3 d-flex align-items-center flex-column my-2">
                                <a href="<?php echo $id_product_open ?>" class="w-100">
                                    <button class="btn btn-i-want-to-be-simples-mei">
                                        <span>quero ser</span>
                                        <span>simples mei !</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End Main -->
		
<?php get_footer(); ?>