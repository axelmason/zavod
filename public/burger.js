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
