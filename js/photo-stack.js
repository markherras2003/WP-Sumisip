$(() => {
  /* Initialize  */
  $('.photo-stacks').each(function() {
    var thisStack = $(this);

    // Initialize image;
    var mainStack = thisStack.find('.main-stack img');
    var bgStack = thisStack.find('.bg-stack img');

    var controls = thisStack.find('.controls ul li');
    var firstControl = controls.first();

    mainStack.attr('src', firstControl.attr('src'));
    bgStack.attr('src', firstControl.next().attr('src'));
  });

  $('.photo-stacks .controls li').on('click', function() {
    var thisControl = $(this);

    // Don't activate if already active;
    if (thisControl.hasClass('active')) {
      return;
    }

    thisControl.addClass('active');
    thisControl.siblings().removeClass('active');

    var mainStack = thisControl.closest('.photo-stacks').find('.main-stack');
    var mainStackIMG = mainStack.find('img');
    var bgStack = thisControl.closest('.photo-stacks').find('.bg-stack');
    var bgStackIMG = bgStack.find('img');

    var thisSource = $(this).attr('src');
    var nextSource = thisControl.next().attr('src');

    // Update the bg image;
    bgStackIMG.attr('src', thisSource);

    // Flyout the main BG;
    mainStack.addClass('fly-out');

    // Set bg as the new main;
    bgStack.addClass('to-active');
    
    setTimeout(function() {
      
      bgStack.addClass('main-stack');
      bgStack.removeClass('bg-stack');
      bgStack.removeClass('to-active');
      
      mainStack.removeClass('main-stack');
      mainStack.removeClass('fly-out');
      mainStack.addClass('bg-stack');

    }, 601);

  });
});

/* Remove Loading */
$(window).on('load', function() {
  $('.photo-stacks').each(function() {
    // Remove Loading on all stacks;
    var thisStack = $(this);
    var photoDisplayStack = thisStack.find('.photo-stack-display');
    photoDisplayStack.removeClass('loading');
  });
});
