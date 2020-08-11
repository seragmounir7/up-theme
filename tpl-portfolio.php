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
<<<<<<< HEAD
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
=======
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Booth and charging stand.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Booth and charging stand-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Breakfast menu</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Breakfast menu.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Breakfast menu-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Butcher Indoor</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Butcher Indoor.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Butcher Indoor-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Can Perfume</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Can Perfume.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Can Perfume-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Coffee station kiosk</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Coffee station kiosk.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Coffee station kiosk-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>dining menu</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/dining menu.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/dining menu-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Equity company profile</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Equity company profile.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Equity company profile-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>FB</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/FB.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/FB-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>fruit & vegetable packaging</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/fruit & vegetable packaging.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/fruit & vegetable packaging-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Greevill company profile</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill company profile.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Greevill company profile-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Greevill FB & Inst</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill FB & Inst.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Greevill FB & Inst-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Greevill stationery</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill stationery.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Greevill stationery-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Greevill Website</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill Website.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Greevill Website-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 1</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 1.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Initiative art 1-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 2</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 2.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Initiative art 2-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 3</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 3.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Initiative art 3-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 4</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 4.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Initiative art 4-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>KP booth</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/KP booth.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/KP booth-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>La Di Da FB & Inst</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/La Di Da FB & Inst.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/La Di Da FB & Inst-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>lamp packaging</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/lamp packaging.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/lamp packaging-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Lebanon Tawlet Beirut</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Lebanon Tawlet Beirut menu copy.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Lebanon Tawlet Beirut menu copy-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>liquidation Website</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/liquidation Website.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/liquidation Website-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>logos</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/logos.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/logos-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Outdoor bus</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Outdoor bus.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Outdoor bus-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Perfume Booth</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Perfume Booth.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Perfume Booth-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>perfume packaging_counter display stand</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/perfume packaging_counter display stand.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/perfume packaging_counter display stand-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>posm</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/posm.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/posm-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Poster Branches</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Poster Branches.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Poster Branches-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Ramadan Reminder</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Ramadan Reminder.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Ramadan Reminder-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Rashedy_POS</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Rashedy_POS.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Rashedy_POS-min.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>SAPPAC Website</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/SAPPAC Website.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/SAPPAC Website-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Sign</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Sign.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Sign-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>stationery and uniform</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/stationery and uniform.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/stationery and uniform-min.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Venya Brochure</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Venya Brochure.jpg" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/Venya Brochure-min.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>ZENA tissues box</span>
                    </div>
                    <div data-original="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/ZENA tissues box.jpg"--+------ style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/ZENA tissues box-min.jpg')"></div>
                </div>
>>>>>>> e3473f4ffd2c278c9d17d64fa039fe4c30507901
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
<<<<<<< HEAD
            <img id="image-viewed" src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/ZENA tissues box.jpg" alt="image that you viewing">
            <span class="title">Hello this is the title</span>
        </div>
        <div class="chevron-wrapper chevron-right-wrapper">
            <img class="chevron-right" src="<?php bloginfo('template_directory'); ?>/assets/img/chevron-right.png">
=======
            <img id="image-viewed" src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/thumbnails/ZENA tissues box.jpg" alt="image that you viewing">
>>>>>>> e3473f4ffd2c278c9d17d64fa039fe4c30507901
        </div>
    </div>
</section>

<?php
    get_footer();
?>