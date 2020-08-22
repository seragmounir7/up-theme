
/*==========================filteration of portfolio============================ */
(function($) {

    'use strict';

    var $filters = $('.filter [data-filter]'),
        $boxes = $('.boxes [data-category]');

    $filters.on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        
        $filters.removeClass('active');
        $this.addClass('active');

        var $filterColor = $this.attr('data-filter');
        $boxes.removeClass('ready-state');
        if ($filterColor == 'All') {
            $boxes.removeClass('is-animated')
            .fadeOut().promise().done(function() {
                $boxes.fadeIn().addClass('ready-state');
            });
        } else {
            $boxes.removeClass('is-animated')
            .fadeOut().promise().done(function() {
            $boxes.filter('[data-category = "' + $filterColor + '"]')
                .fadeIn().addClass('ready-state');
            });
        }
    });

})(jQuery);




    
/*=============================================end============================ */


/*==========================to open the navbar in responsive view============================ */
   $('header .fa-bars').on('click',function(){
    $('#responsive-navbar').addClass('active');
});
/*===========to close the navbar in responsive view== */
$('header .fa-times').on('click',function(){
    $('#responsive-navbar').removeClass('active');
});
/*==========================end========================================================= */



/*==============================================slick slider =============================================*/
$('#intro-slider > div').slick({
    fade:true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 250,
});

$('#partners-grid').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    accessibility: false,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 700,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
/*=======================end====================================================================== */


/*==========================================================active and deactive header ========================*/
$(function(){
    var scrolled_value = $(window).scrollTop();
    if(scrolled_value > 2){
        $('header').addClass('active');
    }else{
        $('header').removeClass('active');
    }

    $(window).on('scroll',function(){
        scrolled_value = $(window).scrollTop();
        if(scrolled_value> 2){
            $('header').addClass('active');
        }else{
            $('header').removeClass('active');
        }
    });
});
/*==========================================================end ========================*/


/*=============================viewing the image===================================== */

let prev_project,
    selected_project,
    selected_background;

//choosing the project
$('.filterDiv .overlay').on('click',function(){
    selected_project = $(this).parent('.filterDiv');
    selected_background = selected_project.find('img').attr('src');
    select_image(selected_background , selected_project);
});

//close from close icon
$('#image-viewer .close-icon').on('click',function(){
    close_viewing_status();
});

//close from selecting on the vaccum
$('#image-container-wrapper').on('click', function(e) {
    if (e.target !== this)
      return;
    
      close_viewing_status();
});

//select the next project from the arrow
$('.chevron-wrapper .chevron-right').on('click',function(){
    select_next_image();
});

//select the prev project from the arrow
$('.chevron-wrapper .chevron-left').on('click',function(){
    select_prev_image();
});

$(document).keydown(function(e) {
    if($('body').hasClass('image-viewing-status')){
        switch(e.which) {
            //press on the right button in keyboard
            case 37:
                select_next_image();
            break;

            //press on the left button in keyboard
            case 39:
                select_prev_image();
            break;

            //close by the esc button
            case 27:
                close_viewing_status();
            break;
        
            default: return;
        }
    }
});
/*==========================================================end ========================*/

/*=============================the functions that used in the viewing image===================================== */
function select_image(selected_background , selected_project){
    selected_background = selected_background.replace('url(','').replace(')','').replace(/\"/gi, "");
    $('#image-viewed').attr('src',selected_background);
    $('body').addClass('image-viewing-status');
    $('#image-viewer').fadeIn();
    selected_project.addClass('chosen');
    $('#image-viewer #image-container-wrapper .image-container .title').text($('.chosen').data('desc'));
}

function select_prev_image(){
    prev_project = $('.chosen');
    selected_project = $(".ready-state").eq( $(".ready-state").index( $(prev_project) ) - 1 );

    //if we reach to the limit
    if ($(".ready-state").index( $(prev_project) ) + 1 == -1){
        selected_project = $(".ready-state").eq($(".ready-state").length);
    }
    
    selected_background = selected_project.find('img').attr('src');
    prev_project.removeClass('chosen');
    select_image(selected_background , selected_project);
}

function select_next_image(){
    prev_project = $('.chosen');
    selected_project = $(".ready-state").eq( $(".ready-state").index( $(prev_project) ) + 1 );

    //if we reach to the limit
    if($(".ready-state").index( $(prev_project) ) + 1 == $(".ready-state").length){
        //selected_project = $(".ready-state").eq();
        selected_project = $(".ready-state").eq(0);
    }

    selected_background = selected_project.find('img').attr('src');
    prev_project.removeClass('chosen');
    select_image(selected_background , selected_project);
}

function close_viewing_status(){
    $('body').removeClass('image-viewing-status');
    $('#image-viewer').fadeOut();
    $('.filterDiv').removeClass('chosen');
}
/*==========================================================end ========================*/