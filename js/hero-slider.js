$(window).on('load', function() {
  // Initialize first slide data;
  var heroPrevGroup = $('.hero-preview-group');
  var firstHeroSlide = $('.hero-preview-controls .active');
  var heroPrevControls = $('.hero-preview-controls');
  updatePreviewDetails(firstHeroSlide);
  updatePreview(firstHeroSlide);

  $('.hero-section').removeClass('loading');

  // Initialize Transitioning on first entry;
  // setTimeout(function() {
  //   heroPrevGroup.addClass('transitioning');
  // }, 700);

  // Initialize Controls;
  heroPrevControls.show();

  var heroIntervalTimer = 8 * 1000;
  var heroSlideInterval = setInterval(function() {
    nextActiveHero();
  }, heroIntervalTimer);

  $('.hero-preview-controls .next-indicator').on('click', function() {
    nextActiveHero();
    clearInterval(heroSlideInterval);

    heroSlideInterval = setInterval(function() {
      nextActiveHero();
    }, heroIntervalTimer);
  });

  $('.hero-preview-controls .prev-indicator').on('click', function() {
    prevActiveHero();
    clearInterval(heroSlideInterval);

    heroSlideInterval = setInterval(function() {
      nextActiveHero();
    }, heroIntervalTimer);
  });

  function nextActiveHero() {
    var firstHeroSlide = $('.hero-preview-controls ul li').first();
    curActive = $('.hero-preview-controls ul .active');

    nextActive = curActive.next();
    if (nextActive.length <= 0) {
      nextActive = firstHeroSlide;
    }

    nextActive.addClass('active');
    curActive.removeClass('active');

    // Get NextActive index;
    index = parseInt(nextActive.index()) + 1;
    $('#hero-preview-number-indicator').text(index);

    updatePreview(nextActive);
    updatePreviewDetails(nextActive);
  }

  function prevActiveHero() {
    var firstHeroSlide = $('.hero-preview-controls ul li').last();
    curActive = $('.hero-preview-controls ul li.active');

    prevActive = curActive.prev();
    if (prevActive.length <= 0) {
      prevActive = firstHeroSlide;
    }

    // Get NextActive index;
    index = parseInt(prevActive.index()) + 1;
    $('#hero-preview-number-indicator').text(index);

    prevActive.addClass('active');
    curActive.removeClass('active');

    updatePreview(prevActive);
    updatePreviewDetails(prevActive);
  }

  var transitioningTimeout;
  function updatePreview(sourceElement) {
    heroPrevGroup.removeClass('transitioning');
    if (heroPrevGroup.hasClass('transitioning')) {
      clearTimeout(transitioningTimeout);
      setTimeout(() => {
        mainUpdateFunction();
      }, 200);
    } else {
      mainUpdateFunction();
    }

    function mainUpdateFunction() {
      var mainPrevData = sourceElement.attr('mainPrev');
      var secondaryPrevData = sourceElement.attr('secondaryPrev');
      var tertiaryPrevData = sourceElement.attr('tertiaryPrev');

      var mainPreview = $('.hero-preview-group .main img');
      var secondaryPreview = $('.hero-preview-group .secondary img');
      var tertiaryPreview = $('.hero-preview-group .tertiary img');

      mainPreview.attr('src', mainPrevData);
      secondaryPreview.attr('src', secondaryPrevData);
      tertiaryPreview.attr('src', tertiaryPrevData);

      var assignGroup = Math.floor(Math.random() * 2 + 1);
      setTimeout(function() {
        heroPrevGroup.attr(
          'class',
          'transitioning hero-preview-group group-' + assignGroup
        );
      }, 200);

      transitioningTimeout = setTimeout(() => {
        heroPrevGroup.removeClass('transitioning');
      }, 8000);
    }
  }

  function updatePreviewDetails(sourceElement) {
    var overlineData = sourceElement.attr('overline');
    var headingData = sourceElement.attr('heading');
    var descriptionData = sourceElement.attr('description');
    var hrefData = sourceElement.attr('href');

    var overline = $('.hero-details .overline');
    var heading = $('.hero-details .display-1');
    var description = $('.hero-details .lead');
    var link = $('.hero-details a');

    var heroDetails = $('.hero-details');
    heroDetails.addClass('transition');

    overline.text(overlineData);
    heading.text(headingData);
    description.text(descriptionData);
    link.attr('href', hrefData);

    if (hrefData == '' || hrefData == undefined) {
      link.hide();
    } else {
      link.show();
    }

    setTimeout(function() {
      heroDetails.removeClass('transition');
    }, 200);
  }

  // Hero Controls
  $('.hero-preview-controls li').on('click', function() {
    // Update the preview and text;
    var sourceElement = $(this);
    updatePreview(sourceElement);
    updatePreviewDetails(sourceElement);

    // Clear the interval;
    clearInterval(heroSlideInterval);

    // Add Active to this control;
    sourceElement.siblings().removeClass('active');
    sourceElement.addClass('active');

    heroSlideInterval = setInterval(function() {
      nextActiveHero();
    }, heroIntervalTimer);

    // Update indicator;
    $('#hero-preview-number-indicator').text(sourceElement.index() + 1);
  });
});
