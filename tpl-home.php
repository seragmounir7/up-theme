<?php
/* Template Name: Home Template */
get_header();
?>

<section id="intro-slider">
    <div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider1.jpg)">
                <div>
                    <h2 class="text-center">boundless</h2>
                    <div class="title text-center">Creative</div>
                    <div class="display-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>/about-us" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider2.jpg)">
                <div>
                    <h2 class="text-center">unlimited</h2>
                    <div class="title text-center">Solutions</div>
                    <div class="display-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>/about-us" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider3.jpg)">
                <div>
                    <h2 class="text-center">premium</h2>
                    <div class="title text-center">Solutions</div>
                    <div class="display-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>/about-us" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="titled">
    <div class="container">
        <h1 class="text-center">Our Services</h1>
        <div id="services-grid">
            <div style="background-color: #01AAAD;">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/btl.png" alt=""/>
                </div>
                <h2>Below The Line (BTL)</h2>
                <p>We provide intelligent, direct, quick, flexible and cost effective campaigns, that target the specific audience of our client through full understanding of the market.</p>
           
            </div>
            <div style="background-color: #f15941;">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/btl.png" alt=""/>
                </div>
                <h2>Below The Line (BTL)</h2>
                <p>We provide intelligent, direct, quick, flexible and cost effective campaigns, that target the specific audience of our client through full understanding of the market.</p>
           </div>
            <div style="background-color: #0074F8;">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/btl.png" alt=""/>
                </div>
                <h2>Below The Line (BTL)</h2>
                <p>We provide intelligent, direct, quick, flexible and cost effective campaigns, that target the specific audience of our client through full understanding of the market.</p>
           </div>
        </div>
    </div>
</section>
<section id="choice" class="titled no-padding">
    <div class="container">
        <div>
            <h1>Why Choose Us?</h1>
            <div id="choice-grid">
                <div>
                    <h3>Integrity</h3>
                    <p>Keeping our promises to you demonstrates our integrity. We also seek to maintain a spirit of transparent honesty in everything we do. That obligates us to tell you when we believe an idea is not in your best interests.</p>
                </div>
                <div>
                    <h3>Integrity</h3>
                    <p>Keeping our promises to you demonstrates our integrity. We also seek to maintain a spirit of transparent honesty in everything we do. That obligates us to tell you when we believe an idea is not in your best interests.</p>
                </div>
                <div>
                    <h3>Integrity</h3>
                    <p>Keeping our promises to you demonstrates our integrity. We also seek to maintain a spirit of transparent honesty in everything we do. That obligates us to tell you when we believe an idea is not in your best interests.</p>
                </div>
                <div>
                    <h3>Integrity</h3>
                    <p>Keeping our promises to you demonstrates our integrity. We also seek to maintain a spirit of transparent honesty in everything we do. That obligates us to tell you when we believe an idea is not in your best interests.</p>
                </div>
                <div>
                    <h3>Integrity</h3>
                    <p>Keeping our promises to you demonstrates our integrity. We also seek to maintain a spirit of transparent honesty in everything we do. That obligates us to tell you when we believe an idea is not in your best interests.</p>
                </div>
                <div>
                    <h3>Integrity</h3>
                    <p>Keeping our promises to you demonstrates our integrity. We also seek to maintain a spirit of transparent honesty in everything we do. That obligates us to tell you when we believe an idea is not in your best interests.</p>
                </div>
            </div>
        </div>
        <div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/why-choose-us.jpg" alt=""/>
        </div>
    </div>
</section>

<?php
    get_footer();
?>