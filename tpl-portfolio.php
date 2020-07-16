<?php
/* Template Name: Portfolio Template */
get_header();
?>
<section id="portfolio-banner" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/portfolio.jpg)">
    <div class="overlay display-flex justify-content-center align-items-center">
        <div>
            <h1 class="text-center">download our portfolio</h1>
            <p class="text-center">Check out our latest work, download our porfolio to see what we've been up to</p>
            <!--
            <div class="display-flex justify-content-center">
                <a rel="noopener noreferrer" target="_blank" href="/media/attachments/2019/09/20/up-portfolio.pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            </div>     
            -->
        </div>
    </div>
</section>

<div id="portfolio">
    <div class="container">
        <div class="artboard">
            <div class="filters">
                <div class="filter all active" onclick="filterSelection('all')">all</div>
                <div class="filter Branding" onclick="filterSelection('Branding')">Branding</div>
                <div class="filter Digital" onclick="filterSelection('Digital')">Digital</div>
                <div class="filter Print" onclick="filterSelection('Print')">Print</div>
            </div>
            <div class="filterDivs">
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Booth and charging stand</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Booth and charging stand.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Breakfast menu</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Breakfast menu.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Butcher Indoor</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Butcher Indoor.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Can Perfume</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Can Perfume.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Coffee station kiosk</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Coffee station kiosk.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>dining menu</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/dining menu.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Equity company profile</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Equity company profile.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>FB</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/FB.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>fruit & vegetable packaging</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/fruit & vegetable packaging.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Greevill company profile</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill company profile.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Greevill FB & Inst</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill FB & Inst.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Greevill stationery</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill stationery.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Greevill Website</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Greevill Website.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 1</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 1.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 2</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 2.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 3</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 3.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>Initiative art 4</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Initiative art 4.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>KP booth</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/KP booth.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>La Di Da FB & Inst</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/La Di Da FB & Inst.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>lamp packaging</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/lamp packaging.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Lebanon Tawlet Beirut</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Lebanon Tawlet Beirut menu copy.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>liquidation Website</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/liquidation Website.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>logos</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/logos.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Outdoor bus</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Outdoor bus.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Perfume Booth</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Perfume Booth.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>perfume packaging_counter display stand</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/perfume packaging_counter display stand.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>posm</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/posm.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Poster Branches</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Poster Branches.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Ramadan Reminder</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Ramadan Reminder.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Rashedy_POS</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Rashedy_POS.jpg')"></div>
                </div>
                <div class="filterDiv Digital" >
                    <div class="overlay">
                        <span>SAPPAC Website</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/SAPPAC Website.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>Sign</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Sign.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>stationery and uniform</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/stationery and uniform.jpg')"></div>
                </div>
                <div class="filterDiv Print" >
                    <div class="overlay">
                        <span>Venya Brochure</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/Venya Brochure.jpg')"></div>
                </div>
                <div class="filterDiv Branding" >
                    <div class="overlay">
                        <span>ZENA tissues box</span>
                    </div>
                    <div style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/portfolio/ZENA tissues box.jpg')"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    filterSelection('all');
    function filterSelection(f){
        var newActiveFilter=$(".filters ."+f);
        if(newActiveFilter.hasClass('active')){
            //do nothing
        } else {
            //update filter
            $('.filter.active').removeClass('active');
            newActiveFilter.addClass('active');
            
            //apply filter
            if(f=='all'){
                $('.filterDivs').children().removeClass('hide');
                } else {
                $('.filterDivs').children("."+f).removeClass('hide');
                $('.filterDivs').children().not("."+f).addClass('hide');
            }
        }
    }

        $('.filterDiv').innerHeight($('.filterDiv').innerWidth()/2);
    
</script>
<?php
    get_footer();
?>