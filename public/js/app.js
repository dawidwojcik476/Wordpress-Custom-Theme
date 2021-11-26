



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


 

  $(document).ready(function(){
    // Add smooth scrolling to all links
    $(".inv-content__main-content-seegallery a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });


  $(document).ready( function() {

    $('.grid').isotope({
     itemSelector: '.grid-item',
    });
    
    // filter items on button click
    $('.newestinv__postschoice').on( 'click', '.newestinv__postschoice-item', function() {
     var filterValue = $(this).attr('data-filter');
     $('.grid').isotope({ filter: filterValue });``
     $('.newestinv__postschoice .newestinv__postschoice-item').removeClass('active');
     $(this).addClass('active');
    });
  })