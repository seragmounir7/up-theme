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
                    <h1 class="title text-center">Creative</h1>
                    <div class="display-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>/about" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider2.jpg)">
                <div>
                    <h2 class="text-center">unlimited</h2>
                    <h1 class="title text-center">Solutions</h1>
                    <div class="display-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>/about" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider3.jpg)">
                <div>
                    <h2 class="text-center">premium</h2>
                    <h1 class="title text-center">Quality</h1>
                    <div class="display-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>/about" class="btn">about us</a>
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
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/service-1.png" alt=""/>
                </div>
                <h2>Below The Line (BTL)</h2>
                <p>We provide intelligent, direct, quick, flexible and cost effective campaigns, that target the specific audience of our client through full understanding of the market.</p>
           
            </div>
            <div style="background-color: #f15941;">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/service-2.png" alt=""/>
                </div>
                <h2>Creative Tools</h2>
                <p>We invest our background of advertising, designing, branding to perfectly serve your company, to make not only will your services and products look great, but also your results hit the target, as we create ideas that fit into the standards of your industry.</p>
           </div>
            <div style="background-color: #0074F8;">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/service-3.png" alt=""/>
                </div>
                <h2>Digital Solutions</h2>
                <p>Our designs are targeting a special kind of audience, who are engaged with social media trends to assure staying ahead of our client competitors.</p>
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
                    <h3>Dependability</h3>
                    <p>We endeavor to always deliver what we promise you, to meet every deadline, and to communicate proactively. Because we treat your business like our own, we strive to deliver services upon which you can completely rely.</p>
                </div>
                <div>
                    <h3>Creativity</h3>
                    <p>To us, creativity is the key in everything we do. We never settle for the easiest, or quickest solution. We carefully analyze, research to create a customized solution that solves your challenge.</p>
                </div>
                <div>
                    <h3>Experience talks</h3>
                    <p>“Up” is built by a team of experts with rich and diverse backgrounds.Our experts offer an exceptional tool kit of innovative problem-solving techniques, to cross any hurdles you face.</p>
                </div>
                <div>
                    <h3>Excellence</h3>
                    <p>It’s our attention to small details, accuracy, punctuality and powerful project management that qualifies us to stand out from the rest. We don't take shortcuts, we build roads to new horizons.</p>
                </div>
                <div>
                    <h3>Partnership</h3>
                    <p>Much like a trusted friend, we’re ready to go the extra mile. We are here for you, striving to put your best interests first—regardless of project size or budget—so that we can become your trusted partner</p>
                </div>
            </div>
        </div>
        <div id="choice-img" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/why-choose-us.jpg')"></div>
    </div>
</section>
<section id="strengths" class="titled">
    <div class="container">
        <h1 class="text-center">Our Strengths</h1>
        <div id="strengths-grid">
            <div style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/teamwork.jpg)">
                <div class="overlay display-flex align-items-flex-end">
                    <div>
                        <h2>Teamwork</h2>
                        <p>Creative needs the highest level of collaboration, so your input is as important as our talent and experience.</p>
                    </div>
                </div>
            </div>
            <div style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/time.jpg)">
                <div class="overlay display-flex align-items-flex-end">
                    <div>
                        <h2>Time Appreciation</h2>
                        <p>Your quick and detailed feedback has the same importance as meeting our deadlines.</p>
                    </div>
                </div>
            </div>
            <div style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/exchange.jpg)">
                <div class="overlay display-flex align-items-flex-end">
                    <div>
                        <h2>Exchanging Experiences</h2>
                        <p>We have a lot to learn outside the creative realm. Let us study your business to deliver excellence on all fronts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="what-to-do" class="titled">
    <div class="container">
        <h1 class="text-center">what to do</h1>
        <div id="what-to-do-grid">
            <div>
                <div class="display-flex">
                    <div>
                        <i style="color: #F5A623;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h2>Copywriting</h2>
                        <p>Building brands need clever and smart writing to talk to the audience with the right speech. </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex">
                    <div>
                        <i style="color: #F15941;" class="fa fa-camera" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h2>Photography</h2>
                        <p>Our professional team studies the style and environment of each product to capture the perfect photo that reflects its character.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex">
                    <div>
                        <i style="color: #01AAAD" class="fa fa-microphone" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h2>Radio</h2>
                        <p>We offer the most creative ideas through carefully written scripts.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex">
                    <div>
                        <i style="color: #F5A623;" class="fa fa-video-camera" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h2>Documentary</h2>
                        <p>we start with deep research to create high effective videos. </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex">
                    <div>
                        <i style="color: #F15941;" class="fa fa-map-signs" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h2>In & Outdoor</h2>
                        <p>To create a successful sign, it means you have chosen the perfect location targeting the right market segment, to get the maximum advertising results.  </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="display-flex">
                    <div>
                        <i style="color: #01AAAD;" class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h2>Exhibitions</h2>
                        <p>We’re experts in creating events that exceptionally represent your products with the best available tools. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners" class="titled">
    <div class="container">
        <h1 class="text-center">our partners</h1>
        <div id="partners-grid">
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-1.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-2.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-3.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-4.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-5.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-6.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-7.jpg" alt=""></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-8.jpg" alt=""></div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>