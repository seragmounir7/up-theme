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
                <div class="filter All active" data-filter="All" role="button">All</div>
                <div class="filter Branding" data-filter="Branding" role="button">Branding</div>
                <div class="filter Digital" data-filter="Digital" role="button">Digital</div>
                <div class="filter Print" data-filter="Print" role="button">Print</div>
            </div>
            <div class="boxes">
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Booth and charging stand</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Booth and charging stand.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Breakfast menu</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Breakfast menu.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Butcher Indoor</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Butcher Indoor.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Can Perfume</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Can Perfume.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Coffee station kiosk</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Coffee station kiosk.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>dining menu</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/dining menu.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Equity company profile</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Equity company profile.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>FB</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/FB.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>fruit & vegetable packaging</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/fruit & vegetable packaging.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Greevill company profile</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill company profile.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>Greevill FB & Inst</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill FB & Inst.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Greevill stationery</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill stationery.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>Greevill Website</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill Website.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>Initiative art 1</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 1.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>Initiative art 2</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 2.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>Initiative art 3</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 3.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>Initiative art 4</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 4.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>KP booth</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/KP booth.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>La Di Da FB & Inst</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/La Di Da FB & Inst.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>lamp packaging</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/lamp packaging.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Lebanon Tawlet Beirut</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Lebanon Tawlet Beirut menu copy.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>liquidation Website</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/liquidation Website.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>logos</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/logos.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Outdoor bus</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Outdoor bus.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Perfume Booth</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Perfume Booth.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>perfume packaging_counter display stand</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/perfume packaging_counter display stand.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>posm</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/posm.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Poster Branches</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Poster Branches.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Ramadan Reminder</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Ramadan Reminder.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Rashedy_POS</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Rashedy_POS.jpg">
                    </a>
                </article>
                <article data-category="Digital" class="filterDiv ready-state Digital">
                    <div class="overlay">
                        <span>SAPPAC Website</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/SAPPAC Website.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>Sign</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Sign.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>stationery and uniform</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/stationery and uniform.jpg">
                    </a>
                </article>
                <article data-category="Print" class="filterDiv ready-state Print">
                    <div class="overlay">
                        <span>Venya Brochure</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Venya Brochure.jpg">
                    </a>
                </article>
                <article data-category="Branding" class="filterDiv ready-state Branding">
                    <div class="overlay">
                        <span>ZENA tissues box</span>
                    </div>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/ZENA tissues box.jpg">
                    </a>
                </article>
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