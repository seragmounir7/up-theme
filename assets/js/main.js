
/*==========================filteration of portfolio============================ */
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

$('.filterDiv .overlay').on('click',function(){
    let selected_background = $(this).next().data('original');
    selected_background = selected_background.replace('url(','').replace(')','').replace(/\"/gi, "");
    $('#image-viewed').attr('src',selected_background);
    $('body').addClass('image-viewing-status');
    $('#image-viewer').fadeIn();
    $(this).parent('.filterDiv').addClass('chosen');
});

$('#image-viewer .close-icon').on('click',function(){
    $('body').removeClass('image-viewing-status');
    $('#image-viewer').fadeOut();
    $('.filterDiv').removeClass('chosen');
});

$('#image-container-wrapper').on('click', function(e) {
    if (e.target !== this)
      return;
    
      $('body').removeClass('image-viewing-status');
      $('#image-viewer').fadeOut();
      $('.filterDiv').removeClass('chosen');
  });
/*==========================================================end ========================*/
