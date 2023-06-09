
    //Burger menu

    $(document).ready(function() {
    const menuIcon = $('.burger-button');
    const closeMenuIcon = $('.burger-close-button');
    const menu = $('.burger');

    menuIcon.click(function() {
      menu.slideDown(300); // Добавим slideDown() с указанием времени анимации (в миллисекундах)
      closeMenuIcon.removeClass('hidden');
      menuIcon.addClass('hidden');
    });

    closeMenuIcon.click(function() {
      menu.slideUp(300); // Добавим slideUp() с указанием времени анимации (в миллисекундах)
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
        form.find('.success-message').text(response.message)
    }).fail(err => {
        let errors = Object.values(err.responseJSON.errors).map(el => { return el[0] });
        console.log(errors)
        form.find('.errors-message').text(errors)
    });

    return false;
  });
});
