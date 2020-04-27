$(() => {
  // Navigation Menu;
  $('.nav-menu-wrapper').on('click', function() {
    if ($(this).hasClass('close')) {
      hideNavigation();
      $(this).removeClass('close');
    } else {
      launchNavigation();

      $(this).addClass('close');
    }
  });

  if ($(window).width() <= 664) {
    $('.nav-item').click(function() {
      showMegaMenu($(this));
    });
  }

  function launchNavigation() {
    var navList = $('.nav-list');
    navList.addClass('show-menu');
  }

  function hideNavigation() {
    var navList = $('.nav-list');
    navList.removeClass('show-menu');
  }

  function showMegaMenu(navItem) {
    if (navItem.hasClass('show-mega-menu')) {
      navItem.removeClass('show-mega-menu');
    } else {
      navItem.addClass('show-mega-menu');
    }

    navItem.siblings().removeClass('show-mega-menu');
  }

  function removeAllMegaMenu() {
    var navItems = $('.nav-item');
    navItems.removeClass('show-mega-menu');

  }


});
