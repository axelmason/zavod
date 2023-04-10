// Burger menu

$(document).ready(function() {
    $('.burger-button').click(function() {
      $('.burger').toggleClass('menu-open');
    });
    $(window).resize(function() {
      if ($(this).width() > 768) {
        $('.burger').removeClass('menu-open');
      }
    });
  });


  // Slider
  $(document).ready(function(){
    $('.slick').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
  });

  $(document).ready(function() {
    var btn = $('#back-to-top');
    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
  });

  $(document).ready(function() {
    var callBtn = $('#btn-call');
    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        callBtn.addClass('show');
      } else {
        callBtn.removeClass('show');
      }
    });
  });
