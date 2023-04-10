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