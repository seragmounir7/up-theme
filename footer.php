        <?php wp_footer(); ?>
        <footer>
            <div class="container">
                <div class="display-flex justify-content-space-between align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
                    </div>
                    <div>
                        <p>© 2020, Up-Advertise</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
        <script src="https://kit.fontawesome.com/087e37f7bd.js" crossorigin="anonymous"></script>
        <script>
            //to open the navbar in responsive view
            $('header .fa-bars').on('click',function(){
                $('#responsive-navbar').addClass('active');
            });
            //to close the navbar in responsive view
            $('header .fa-times').on('click',function(){
                $('#responsive-navbar').removeClass('active');
            });
        </script>
        <script>
            $('#intro-slider > div').slick({
                fade:true,
            });
            
            $('#parents-grid').slick({
                fade:true,
            });
        </script>
        <script>
            $(function(){
                var scrolled_value = $(window).scrollTop();
                if(scrolled_value> 100){
                    $('header').addClass('active');
                }else{
                    $('header').removeClass('active');
                }

                $(window).on('scroll',function(){
                    scrolled_value = $(window).scrollTop();
                    if(scrolled_value> 100){
                        $('header').addClass('active');
                    }else{
                        $('header').removeClass('active');
                    }
                });
            });
        </script>
    </body>
    <style>
        /* over all style */
        html {
            margin-top:0!important
        }
    </style>
</html>