



$(document).ready(function(){
    $('.main-banner__slider').slick({
      dots: true,
      infinite: true,
      speed: 600,
      fade: true,
      cssEase: 'linear',
      appendDots: $(".main-banner__swapper-dots"),
      prevArrow: $('.main-banner__swapper-left'),
      nextArrow: $('.main-banner__swapper-right'),
      autoplay: true,
  autoplaySpeed: 4000
      
    });
  });

 




