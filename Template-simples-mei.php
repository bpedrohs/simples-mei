<?php

/*
Template Name: Abrir Mei
*/

get_header();
?>
<main id="main">
    
    <section class="mb-5" data-aos="fade">
        <?php  

        $banner_page = get_theme_mod('set_banner_abrir_mei', 'abrir-mei-banner');
        $args = array(
            'post_type'			=> 'page',
            'posts_per_page'	=> 1,
            'name'              => $banner_page,
            'orderby'			=> 'name'
        );

        $banner_loop = new WP_Query( $args );

        if( $banner_loop->have_posts() ):
            while( $banner_loop->have_posts() ): 
                $banner_loop->the_post();

        ?>

        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

        <div class="container-fluid banner-mei" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
                    
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

    <section class="first-container direction-form p-0"  data-aos="fade">

        <div class="container d-flex">
            <div class="row no-gutters d-flex align-items-center justify-content-between w-100">
                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center my-3" data-aos="zoom-in" >
                    <div class="card-body-r card border-0 bg-FF9716 card-start" style="height: 250px;">
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
                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center my-3" data-aos="zoom-in" >
                    <div class="card-body-r card border-0 bg-5AA1DD card-start" style="height: 250px;">
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
                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center my-3" data-aos="zoom-in" >
                    <div class="card-body-r card border-0 bg-5AA1DD card-start" style="height: 250px;">
                        <div class="card-body card-body-start">
                            <h4 class="card-title card-title-start text-center">novidades</h4>
                            <p class="card-text card-text-start text-center">
                                <span>
                                    Se atualize sobre prazos
                                </span>
                                <span>
                                    e informações importantes.
                                </span>
                            </p>
                             <a href='<?php echo home_url('/blog'); ?>' class="btn btn-news"><span class="text-uppercase color-1773A7">saiba
                                    mais</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    
    <section class="mb-5" data-aos="fade-up" >
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
                        'category_name'     => 'destaque',
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
                                'category_name'     => 'destaque',
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

    <section class="mb-5" data-aos="fade-up" >

        <div class="container-pattern-form d-flex align-items-center">
            <div class="container-pattern-form-bg"></div>
            <div class="container" data-aos="fade-up" >
                <form action="<?php echo wc_get_checkout_url(); ?>" id="open-mei-form" class="col-open-mei-form p-3" method="POST">
                    <label class="title-open-form text-uppercase color-white h1">abrir seu cnpj mei
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
                            <button class="btn btn-open-mei-form text-uppercase w-100" name="open-mei-form" type="submit">abrir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <section class="mb-5" data-aos="fade-up" >

        <div class="container-connected">
            <div class="container-connected-bg"></div>
            <div class="container">

                <div class="row">

                    <div class="col-12 text-center text-lg-left my-5">
                        <h5 class="text-uppercase color-white font-weight-bold m-0 h1">simples mei conectado</h5>
                    </div>

                    <div class="col-12 mb-5 d-flex align-items-center connected-col-logos">
                        <img src="<?= get_template_directory_uri() . '/assets/images/logos/logo-pequenas-empresas.png' ?>" class="logo-pegn">
                        <img src="<?= get_template_directory_uri() . '/assets/images/logos/logo-sebrae.png' ?>" class="logo-sebrae">
                    </div>
                    
                </div>
                
            </div>

        </div>

    </section>

    
    <section class="mb-5" data-aos="fade-up" >
        <div class="container">
            <div class="row">
                
                <div class="col-12 mb-5 text-center">
                    <h6 class="h1 text-uppercase color-5AA1DD"><span class="font-weight-bold">blog</span> simples mei</h6>
                </div>  

                
                <div class="col-12 d-none d-lg-block">
                    <div class="card-columns d-flex align-items-center">
                        <?php 

                            $slug = 'destaque';
                            $cat = get_category_by_slug($slug); 
                            $catID = $cat->term_id;

                            $slug2 = 'destaque-alterar-mei';
                            $cat2 = get_category_by_slug($slug2); 
                            $catID2 = $cat2->term_id;

                            $slug3 = 'destaque-cancelar-mei';
                            $cat3 = get_category_by_slug($slug3); 
                            $catID3 = $cat3->term_id;

                            $slug4 = 'depoimentos';
                            $cat4 = get_category_by_slug($slug4); 
                            $catID4 = $cat4->term_id;

                            $args = array(
                                'post_type'			=> 'post',
                                'posts_per_page'	=> 3,
                                'category__not_in' => array( $catID, $catID2, $catID3, $catID4)
                            );

                            $blog_posts = new WP_Query( $args );

                            // If there are any posts
                            if( $blog_posts->have_posts() ):

                                // Load posts loop
                                while( $blog_posts->have_posts() ): $blog_posts->the_post();
                                ?>
                                
                                    <div class="card bg-transparent border-0">
                                        
                                            <a href="<?php the_permalink(); ?>">
                                                <?php 
                                                    if( has_post_thumbnail() ):
                                                        the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'img-fluid card-blog' ) );
                                                    endif;
                                                ?>
                                            </a>
                                        
                                        <div class="card-body text-center d-flex align-items-center flex-column card-blog-ul">
                                            <a href="<?php the_permalink(); ?>"><?php the_category() ?></a>
                                            
                                            <a href="<?php the_permalink(); ?>" class="link-title-post"><span class="h3 text-uppercase color-969696 font-weight-black"><?php the_title(); ?></span></a>
                                            
                                            <a href="<?php the_permalink(); ?>" class="btn btn-confirm" type="button">
                                                confira
                                            </a>

                                        </div>

                                    </div>
                                            
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                endif;
                        ?>
                        
                    </div>
                </div>

                <div class="col-12 d-xl-none d-lg-none">

                    <div class="owl-carousel owl-theme owl-loaded loop arrow-carousel">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">

                                
                                    <?php 

                                    $slug = 'destaque';
                                    $cat = get_category_by_slug($slug); 
                                    $catID = $cat->term_id;

                                    $slug2 = 'destaque-alterar-mei';
                                    $cat2 = get_category_by_slug($slug2); 
                                    $catID2 = $cat2->term_id;

                                    $slug3 = 'destaque-cancelar-mei';
                                    $cat3 = get_category_by_slug($slug3); 
                                    $catID3 = $cat3->term_id;

                                    $slug4 = 'depoimentos';
                                    $cat4 = get_category_by_slug($slug4); 
                                    $catID4 = $cat4->term_id;

                                    $args = array(
                                        'post_type'			=> 'post',
                                        'posts_per_page'	=> 3,
                                        'category__not_in' => array( $catID, $catID2, $catID3, $catID4)
                                    );

                                        // If there are any posts
                                        if( $blog_posts->have_posts() ):

                                            // Load posts loop
                                            while( $blog_posts->have_posts() ): $blog_posts->the_post();
                                            ?>
                                            
                                            <div class="owl-item">

                                                <div class="card bg-transparent border-0">
                                                    <div class="card-body blog-card-img">

                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php 
                                                                if( has_post_thumbnail() ):
                                                                    the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'img-fluid card-blog' ) );
                                                                endif;
                                                            ?>
                                                        </a>
                                                        
                                                    </div>
                                                
                                                
                                                    <div class="card-body text-center d-flex align-items-center flex-column card-blog-ul">
                                                        <a href="<?php the_permalink(); ?>"><?php the_category() ?></a>
                                                        
                                                        <a href="<?php the_permalink(); ?>" class="link-title-post"><span class="h3 text-uppercase color-969696 font-weight-black"><?php the_title(); ?></span></a>
                                                        
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-confirm" type="button">
                                                            confira
                                                        </a>
    
                                                    </div>
    
                                                </div>

                                            </div>
                                            
                                            
                                            

                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                        endif;
                                    ?>
                               
                                

                            </div>
                            <div class="owl-nav nav-arrow">
                                <i class="bx bxs-chevron-left arrowPrevButton"></i>
                                <i class="bx bxs-chevron-right arrowNextButton"></i>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>