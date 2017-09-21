/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function($) {
    $(document).ready(function() {

/*=========================================================================================
// MENU TOOGLE
=========================================================================================*/

 //menu-toggle
    $(".header__toggle").click(function(event){
        event.preventDefault();
        if ($(this).hasClass('on')){
            $(this).removeClass('on');
                $(".menu").stop().fadeOut();
        }else{
            $(this).addClass('on');
                $(".menu").stop().fadeIn();
            }
    });

//ScrollOn

$(window).scroll(function(){


    var scroll = jQuery(window).scrollTop();

    if ( scroll > 0 ) {
      jQuery('.header').addClass('scrollOn');
      jQuery('.header').removeClass('scrollOff');

    } else {
      jQuery('.header').removeClass('scrollOn');
      jQuery('.header').addClass('scrollOff');
    }


    //effects parallax design & web
    var wScroll = $(this).scrollTop();

    // $('.servicos__sombralapis').css({
    //   'transform' : 'translate(0px, '+ wScroll /2 +'px)'
    // });
    //  $('.servicos__lapisparallax').css({
    //   'transform' : 'translate(0px, '+ wScroll /20 +'px)'
    // });

    // $('.servicos__sombraphone').css({
    //   'transform' : 'translate(0px, '+ wScroll /2 +'px)'
    // });
    //  $('.servicos__phoneparallax').css({
    //   'transform' : 'translate(0px, '+ wScroll /20 +'px)'
    // });

     //if(wScroll > $('.servicos__layerbottom').offset().top - ($(window).height() / 1.2)){


      //  $('.servicos__layerbottom .servicos__sombralapis')each(function(i){

        //  setTimeout(function(){
          //  $('.servicos__layerbottom .servicos__sombralapis').eq(i).addClass('is-showing');
          //}, 150 * (i+1));

       // });

     //}

});

  //o script só funciona se atualizar a página.

    var larguraTela = $(window).width();

    if( larguraTela < 768){
         jQuery('.containerowl').addClass('owl-carousel');
         jQuery('.containerowl').attr('id', 'projetos');
      } else{
          
      }

// Checa se é um dispositivo móvel
//jQuery(function(){
      ///Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) 
      //if( window < 768) {

      //  jQuery('.containerowl').addClass('owl-carousel');
      //  jQuery('.containerowl').attr('id', 'projetos');

     // } else {

          //se for desktop

     // }

  //});












    


    var alturaJanela = $(window).height();

    var alturaHeader= $('.header .area_video_banner').height();

    var alturaTela = alturaJanela - alturaHeader;



    $('.area_video_banner').css({'height' : alturaTela+'px'}); 
/*=========================================================================================
// OWL
========================================================================================= */

$("#depoimentos").owlCarousel({
  items: 1,
  nav: true,
  dots: true,
  navText: false,
  margin: 0,
  // animateOut: 'fadeOut',
  // animateIn: 'fadeIn'
});
$("#projetos").owlCarousel({
  items: 1,
  nav: true,
  dots: true,
  navText: false,
  margin: 0,
   responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }

});
 


/*=========================================================================================
// EQUAL HEIGHT
=========================================================================================*/
function equalizeHeights(selector) {
  var heights = new Array();

  // Loop to get all element heights
  $(selector).each(function() {

    // Need to let sizes be whatever they want so no overflow on resize
    $(this).css('min-height', '0');
    $(this).css('max-height', 'none');
    $(this).css('height', 'auto');

    // Then add size (no units) to array
    heights.push($(this).height());
  });

  // Find max height of all elements
  var max = Math.max.apply( Math, heights );

  // Set all heights to max height
  $(selector).each(function() {
    $(this).css('height', max + 'px');
  });
}

$(window).on('load resize', function(){
    equalizeHeights('.news__content');
});

/*=========================================================================================
// CLOSE FUNCTION
=========================================================================================*/
    });
});