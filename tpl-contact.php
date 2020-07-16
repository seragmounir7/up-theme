<?php
/* Template Name: Contact Template */
get_header();
?>

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
                    <form action="">
                    <input type="text" placeholder="Name"/>
                    <input type="text" placeholder="Email"/>
                    <input type="text" placeholder="Phone"/>
                    <input type="text" placeholder="Subject"/>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Message"></textarea>
                    <button class="btn">Send Message</button>
                </form>
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