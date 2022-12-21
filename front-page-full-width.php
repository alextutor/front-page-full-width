<?php
/**
* Template Name: front-page-full-width
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<main class="main-content">

    <?php if (have_posts()) :

        while (have_posts()) : the_post();?>
        <!-- container-fluid  pone el width al 100% -->
            <div class="container-fluid">
                <div class="row"> <!-- Inicio row -->
                    <div class="col-sm-12">
                        <article id="post-<?php the_ID();?>" <?php post_class();?>>
                            <h1><?php //the_title();?></h1>
                            <div class="entry-content">
                                <?php the_content();?>
                            </div><!-- entry-content -->
                        </article>
                    </div>
                </div><!-- Fin row -->
                <div class="row"> <!-- Inicio row -->
                    <div class="bg_portada" >
                        <?php include_once(get_template_directory().'/portada_garantia.php') ?>
                    </div>                       
                </div><!-- Fin row -->    
            </div><!-- container -->

        <?php endwhile;

    endif;?>

</main>

<?php get_footer(); ?>