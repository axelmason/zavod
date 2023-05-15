// Admin burger menu

$(document).ready(function() {
    const menuIcon = $('.menu-icon');
    const closeMenuIcon = $('.close-menu-icon');
    const menu = $('.menu');

    menuIcon.click(function() {
      menu.removeClass('hidden');
      closeMenuIcon.removeClass('hidden');
      menuIcon.addClass('hidden');
    });

    closeMenuIcon.click(function() {
      menu.addClass('hidden');
      closeMenuIcon.addClass('hidden');
      menuIcon.removeClass('hidden');
    });
});

//Burger menu
$(document).ready(function() {
    const menuIcon = $('.burger-button');
    const closeMenuIcon = $('.burger-close-button');
    const menu = $('.burger');

    menuIcon.click(function() {
      menu.removeClass('hidden');
      closeMenuIcon.removeClass('hidden');
      menuIcon.addClass('hidden');
    });

    closeMenuIcon.click(function() {
      menu.addClass('hidden');
      closeMenuIcon.addClass('hidden');
      menuIcon.removeClass('hidden');
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

  $(document).ready(function() {
    $('#show-modal').click(function() {
      $('#modal').show();
    });

    $('.close').click(function() {
      $('#modal').hide();
    });

    $(window).click(function(event) {
      if (event.target == $('#modal')[0]) {
        $('#modal').hide();
      }
    });
  });

  $('.modal-form').on('submit', function(e) {
    var form = $(this)
    e.preventDefault()

    let data = [];
    form.find('input,textarea').each((el, input) => {
        data[input.name] = input.value
    })
    console.log({...data})
    $.ajax({
        type: "post",
        url: "/api/feedback/send",
        data: {...data},
    }).done(response => {
        console.log(response.message)
        form.find('.success-message').text(response.message)
    }).fail(err => {
        let errors = Object.values(err.responseJSON.errors).map(el => { return el[0] });
        console.log(errors)
        form.find('.errors-message').text(errors)
    });

    return false;
  });

