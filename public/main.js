
    //Burger menu

    $(document).ready(function() {
    const menuIcon = $('.burger-button');
    const closeMenuIcon = $('.burger-close-button');
    const menu = $('.burger');

    menuIcon.click(function() {
      menu.slideDown(300);
      closeMenuIcon.removeClass('hidden');
      menuIcon.addClass('hidden');
    });

    closeMenuIcon.click(function() {
      menu.slideUp(300)
      closeMenuIcon.addClass('hidden');
      menuIcon.removeClass('hidden');
    });

    //Slider
    $('.slick').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
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

    //Buttons

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

    var callBtn = $('#btn-call');
    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        callBtn.addClass('show');
      } else {
        callBtn.removeClass('show');
      }
    });

    //Modal

    $('.show-modal').click(function() {
      menu.slideUp(300);
      closeMenuIcon.addClass('hidden');
      menuIcon.removeClass('hidden');
      $('#modal').fadeIn(200);
    });
    $('.close').click(function() {
      $('#modal').fadeOut(200);
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
        form.find('.success-message').text(response.message).show();
        setTimeout(() => {
            form.find('.success-message').fadeOut();
        }, 2500);
    }).fail(err => {
        if (err.status === 422) {
            let errors = Object.values(err.responseJSON.errors).map(el => {
                return el[0];
            });
            $('.errors-message').text(errors).show();
            setTimeout(() => {
                $('.errors-message').fadeOut();
            }, 2500);
        }
        if (err.status === 429) {
            $('.errors-message').text('Слишком много запросов, подождите немного!').show();
            setTimeout(() => {
                $('.errors-message').fadeOut();
            }, 2500);
        }
    });


    return false;
  });
});
