$(() => {
  // Navigation Menu;
  $('.nav-menu-wrapper').on('click', function() {
    if ($(this).hasClass('close')) {
      $(this).removeClass('close');
    } else {
      $(this).addClass('close');
    }
  });
});
