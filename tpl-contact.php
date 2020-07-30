<?php
/* Template Name: Contact Template */
get_header();
?>
<style>
	br {
		display:none
	}
	.btn {
		color: #FFFFFF!important;
		padding: 16px 48px!important;
		font-weight: 900;
		border: 0;
		border-radius: 100px;
		font-size: 14px!important;
		text-decoration: none;
		text-transform: capitalize;
		background-color: #ff0022!important;
		cursor: pointer;
		width: auto!important;
	}
</style>
<section id="banner" class="display-flex justify-content-center align-items-center" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/contact_us.jpg)">
    <div>
        <h2 class="text-center">get in touch</h2>
        <h1 class="title text-center">contact us</h1>
    </div>
</section>
<section id="contact" class="titled">
    <div class="container">
        <div id="contact-grid">
            <iframe src="https://maps.google.com/maps?q=30.0690395,31.4882479&amp;hl=es;z=14&amp;output=embed"></iframe>
            <div>
                <h1>Send Us A Message</h1>
                <?php echo do_shortcode( '[contact-form-7 id="30" title="Contact form 1"]' ); ?>
            </div>
            <div>
                <h1>Contact</h1>
                <div>
                    <h2>Address</h2>
                    <span>Building 11, Zone 99, El Rehab City, New Cairo, Egypt</span>
                </div>
                <div>
                    <h2>phone</h2>
                    <span>+20 122 6460 772</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>