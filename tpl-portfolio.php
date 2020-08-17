<?php
/* Template Name: Portfolio Template */
get_header();
?>
<!--
<section id="portfolio-banner" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/portfolio.jpg)">
    <div class="overlay display-flex justify-content-center align-items-center">
        <div>
            <p class="text-center">Check out our latest work, download our porfolio to see what we've been up to</p>
            
            <div class="display-flex justify-content-center">
                <a rel="noopener noreferrer" target="_blank" href="/media/attachments/2019/09/20/up-portfolio.pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            </div>     
            
        </div>
    </div>
</section>
-->
<section id="banner" class="display-flex justify-content-center align-items-center" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/portfolio22.png)">
    <div>
        <h2 class="text-center">Take a tour to our</h2>
        <h1 class="title text-center">Portfolio</h1>
    </div>
</section>

<div id="portfolio">
    <div class="container">
        <div class="artboard">
            <div class="cra filter">
                    <?php $categories = get_terms(array('taxonomy' => 'categories','orderby' => 'DESC','hide_empty' => false,) ); ?>
                    <div class="filter All active" data-filter="All" role="button">All</div>
                    <?php foreach ($categories as $category) : ?>
                        <div class="filter <?php echo $category->name; ?>" data-filter="<?php echo $category->name; ?>" role="button"><?php echo $category->name; ?></div>
                    <?php endforeach; ?>
            </div>
            <div class="boxes">
                <?php
                    $args = array(
                        'post_type' => 'Work',
                        'order' => 'rand',
                        'orderby' => 'rand',
                        'posts_per_page' => 999,
                    );
                    $query = new WP_Query( $args );
                ?>
                
                <?php

                    if ( $query->have_posts() ) { ?>
                        <?php
                        while ( $query->have_posts() ) {
                            $query->the_post(); ?>
                            <?php
                                $category = get_field( 'cat_field' );
                            ?>
                            <article data-category="<?php echo $category ?>" class="filterDiv ready-state <?php echo $category ?>">
                                <div class="overlay">
                                    <span><?php echo the_title(); ?></span>
                                </div>
                                <a href="#">
                                    <img src="<?php echo the_field('image'); ?>">
                                </a>
                            </article>
                        <?php
                        }
                    }    
                ?>
            </div>
        </div>
    </div>
</div>
<section id="image-viewer">
    <div id="image-container-wrapper">
        <div class="chevron-wrapper chevron-left-wrapper">
            <img class="chevron-left" src="<?php bloginfo('template_directory'); ?>/assets/img/chevron-left.png">
        </div>
        <div class="image-container">
            <img class="close-icon" src="<?php bloginfo('template_directory'); ?>/assets/img/close-icon.png" alt="colse icon">
            <img id="image-viewed" src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/ZENA tissues box.jpg" alt="image that you viewing">
            <span class="title">Hello this is the title</span>
        </div>
        <div class="chevron-wrapper chevron-right-wrapper">
            <img class="chevron-right" src="<?php bloginfo('template_directory'); ?>/assets/img/chevron-right.png">
        </div>
    </div>
</section>

<?php
    get_footer();
?>