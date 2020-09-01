<?php
/* Template Name: Home Template */
get_header();
?>

<section id="intro-slider">
    <div>
        
        <?php

            // Check rows exists.
            if( have_rows('sliders') ):

                // Loop through rows.
                while( have_rows('sliders') ) : the_row(); ?>
                    <div>
                        <div class="slick-slide" style="background-image:url(<?php echo the_sub_field('background')?>)">
                            <div>
                                <h2 class="text-center"><?php echo the_sub_field('pre_title')?></h2>
                                <h1 class="title text-center"><?php echo the_sub_field('title')?></h1>
                                <div class="display-flex justify-content-center">
                                    <a href="<?php echo home_url(); ?>/about" class="btn">about us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                // End loop.
                endwhile;

            endif;
        ?>
    </div>
</section>
<section id="services" class="titled">
    <div class="container">
        <h1 class="text-center">Our Services</h1>
        <div id="services-grid">
        
            <?php

                // Check rows exists.
                if( have_rows('services') ):

                    // Loop through rows.
                    while( have_rows('services') ) : the_row(); ?>
                        <div style="background-color: <?php echo the_sub_field('color')?>;">
                            <div>
                            <img src="<?php echo the_sub_field('icon')?>" alt=""/>
                            </div>
                            <h2><?php echo the_sub_field('title')?></h2>
                            <p><?php echo the_sub_field('paragraph')?></p>
                    
                        </div>

                    <?php
                    // End loop.
                    endwhile;

                endif;
            ?>
        </div>
    </div>
</section>
<section id="choice" class="titled no-padding">
    <div class="container">
        <div>
            <h1>Why Choose Us?</h1>
            <div id="choice-grid">
        
            <?php

                // Check rows exists.
                if( have_rows('features') ):

                    // Loop through rows.
                    while( have_rows('features') ) : the_row(); ?>
                        
                    <div>
                        <h3><?php echo the_sub_field('title')?></h3>
                        <p><?php echo the_sub_field('paragraph'); ?></p>
                    </div>

                    <?php
                    // End loop.
                    endwhile;

                endif;
            ?>
            </div>
        </div>
        <div id="choice-img" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/why-choose-us.jpg')"></div>
    </div>
</section>
<section id="strengths" class="titled">
    <div class="container">
        <h1 class="text-center">Our Strengths</h1>
        <div id="strengths-grid">
        
        <?php

            // Check rows exists.
            if( have_rows('strengths') ):

                // Loop through rows.
                while( have_rows('strengths') ) : the_row(); ?>

                    <div style="background-image:url(<?php echo the_sub_field('background'); ?>)">
                        <div class="overlay display-flex align-items-flex-end">
                            <div>
                                <h2><?php echo the_sub_field('title'); ?></h2>
                                <p><?php echo the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    </div>

                <?php
                // End loop.
                endwhile;

            endif;
        ?>
        </div>
    </div>
</section>
<section id="what-to-do" class="titled">
    <div class="container">
        <h1 class="text-center">what we do</h1>
        <div id="what-to-do-grid">
        
            <?php

                // Check rows exists.
                if( have_rows('what_we_do') ):

                    // Loop through rows.
                    while( have_rows('what_we_do') ) : the_row(); ?>

                        <div>
                            <div class="display-flex">
                                <div>
                                    <i style="color: <?php echo the_sub_field('icon_color'); ?>;" class="<?php echo the_sub_field('icon_code'); ?>" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h2><?php echo the_sub_field('title'); ?></h2>
                                    <p><?php echo the_sub_field('paragraph'); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    // End loop.
                    endwhile;

                endif;
            ?>
        </div>
    </div>
</section>
<section id="partners" class="titled">
    <div class="container">
        <h1 class="text-center">our partners</h1>
        <div id="partners-grid">
            <?php

                // Check rows exists.
                if( have_rows('partners') ):

                    // Loop through rows.
                    while( have_rows('partners') ) : the_row(); ?>

                        <div><img src="<?php echo the_sub_field('logo'); ?>" alt=""></div>

                    <?php
                    // End loop.
                    endwhile;

                endif;
            ?>
        </div>
    </div>
</section>

<?php
    get_footer();
?>