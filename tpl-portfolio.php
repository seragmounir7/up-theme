<?php
/* Template Name: Portfolio Template */
get_header();
?>

<section id="portfolio-banner" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/portfolio.jpg)">
    <div class="overlay display-flex justify-content-center align-items-center">
        <div>
            <h1 class="text-center">download our portfolio</h1>
            <p class="text-center">Check out our latest work, download our porfolio to see what we've been up to</p>
            <div class="display-flex justify-content-center">
                <a rel="noopener noreferrer" target="_blank" href="/media/attachments/2019/09/20/up-portfolio.pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            </div>     
        </div>
    </div>
</section>

<?php
    get_footer();
?>