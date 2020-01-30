$(window).on('load', function() {
  // Play Gallery Images;
  setInterval(function() {
    var target = Math.floor(Math.random() * 6 + 1);
    var articles = $('.featured-articles-wrapper .featured-article');
    var selectedArticle = $(articles[target - 1]);

    var curActive = selectedArticle.find('.active');
    var nextActive = curActive.next();

    var firstChild = selectedArticle.find('.fa-gallery-img').first();
    if (nextActive.length <= 0) {
      nextActive = firstChild;
    }

    curActive.removeClass('active');
    nextActive.addClass('active');
  }, 3000);

  // Featured Video Transition
  $('.featured-video').on('click', function() {
    var featuredSection = $('.featured-section');
    var preview = featuredSection.find('.preview');

    if (featuredSection.hasClass('video-mode')) {
      featuredSection.removeClass('video-mode');
      $('#featured-video')
        .get(0)
        .pause();
      $('#featured-video').get(0).currentTime = 0;

      preview.show();
    } else {
      featuredSection.addClass('video-mode');
      setTimeout(() => {
        preview.fadeOut();
        $('#featured-video')
          .get(0)
          .play();
      }, 800);
    }
  });

  // Navigation Menu;
  $('.nav-menu-wrapper').on('click', function() {
    if ($(this).hasClass('close')) {
      $(this).removeClass('close');
    } else {
      $(this).addClass('close');
    }
  });

  // Timeline Slides Controller;
  $('.timeline-control-right').on('click', function() {
    nextSlide();
  });

  $('.timeline-control-left').on('click', function() {
    prevSlide();
  });

  $('.indicator').on('click', function() {
    var timelineBlock = $(this).parent();
    activatePhoto(timelineBlock.index());
    activateTimelineBlock(timelineBlock.index());
  });

  function activatePhoto(targetIndex) {
    var allPhotos = $('.display-preview .dp-photo');
    var targetElement;
    allPhotos.each(function(index) {
      if (index === targetIndex) {
        targetElement = $(this);
      } else {
        $(this).removeClass('active');
        $(this).removeClass('next');
      }
    });

    targetElement.addClass('active');
    targetElement.next().addClass('next');
  }

  function activateTimelineBlock(targetIndex) {
    var allBlocks = $('.timeline-body .timeline-block');
    var detailsActive;
    allBlocks.each(function(index) {
      if (index <= targetIndex) {
        $(this).addClass('active');
        if (index == targetIndex) {
          detailsActive = $(this);
        }
      } else {
        $(this).removeClass('active');
      }
    });

    updateTimelineDetails(
      detailsActive.attr('overline'),
      detailsActive.attr('title'),
      detailsActive.attr('contents'),
      detailsActive.attr('link')
    );
  }

  function nextSlide() {
    nextTimelinePhoto();
    nextTimelineBlock();
  }

  function prevSlide() {
    prevTimelinePhoto();
    prevTimelineBlock();
  }

  function nextTimelinePhoto() {
    var photoFirstChild = $('.display-preview .dp-photo').first();
    var curActive = $('.display-preview .dp-photo.active');
    var curNext = $('.display-preview .dp-photo.next');
    var nextNext = curNext.next();
    if (nextNext.length <= 0) {
      nextNext = photoFirstChild;
    }

    curActive.addClass('scale-hide');
    setTimeout(() => {
      curActive.removeClass('active');
      curActive.removeClass('scale-hide');
    }, 401);

    curNext.removeClass('next');
    curNext.addClass('active');
    nextNext.addClass('next');
  }

  function prevTimelinePhoto() {
    var photoLastChild = $('.display-preview .dp-photo').last();
    var curActive = $('.display-preview .dp-photo.active');
    var curNext = $('.display-preview .dp-photo.next');
    curNext.removeClass('next');

    var prevActive = curActive.prev();
    if (prevActive.length <= 0) {
      prevActive = photoLastChild;
    }

    curActive.removeClass('active');
    curActive.addClass('next');
    prevActive.addClass('active');
  }

  function nextTimelineBlock() {
    var firstTimelineBlock = $('.timeline-body .timeline-block').first();
    var curActive = $('.timeline-body .timeline-block.active').last();

    var nextActive = curActive.next();
    if (nextActive.length <= 0) {
      nextActive = firstTimelineBlock;
      $('.timeline-body .timeline-block.active').each(function() {
        $(this).removeClass('active');
      });
      firstTimelineBlock.addClass('active');
    }

    // curActive.removeClass('active');
    nextActive.addClass('active');

    updateTimelineDetails(
      nextActive.attr('overline'),
      nextActive.attr('title'),
      nextActive.attr('contents'),
      nextActive.attr('link')
    );
  }

  function prevTimelineBlock() {
    var lastTimelineBlock = $('.timeline-body .timeline-block').last();
    var curActive = $('.timeline-body .timeline-block.active').last();
    var prevActive = curActive.prev();

    curActive.removeClass('active');
    prevActive.addClass('active');

    if (prevActive.length <= 0) {
      $('.timeline-body .timeline-block').each(function() {
        $(this).addClass('active');
      });
      prevActive = lastTimelineBlock;
    }

    updateTimelineDetails(
      prevActive.attr('overline'),
      prevActive.attr('title'),
      prevActive.attr('contents'),
      prevActive.attr('link')
    );
  }

  function updateTimelineDetails(pOverline, pTitle, pContents, pLink) {
    var overline = $('#h-overline');
    var title = $('#h-title');
    var contents = $('#h-contents');
    var link = $('#h-link');

    overline.text(pOverline);
    title.text(pTitle);
    contents.text(pContents);
    link.attr('href', pLink);
  }

  // Hero Section;

  // Initialize first slide data;
  var heroPrevGroup = $('.hero-preview-group');
  var firstHeroSlide = $('.hero-preview-controls .active');
  var heroPrevControls = $('.hero-preview-controls');
  updatePreviewDetails(firstHeroSlide);
  updatePreview(firstHeroSlide);


    $('.hero-section').removeClass('loading');



  // Initialize Transitioning on first entry;
  setTimeout(function() {
    heroPrevGroup.addClass('transitioning');
  }, 700);

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
    if (heroPrevGroup.hasClass('transitioning')) {
      clearTimeout(transitioningTimeout);
      heroPrevGroup.removeClass('transitioning');
      setTimeout(() => {
        mainUpdateFunction();
      }, 75);
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
      heroPrevGroup.attr(
        'class',
        'transitioning hero-preview-group group-' + assignGroup
      );

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
    heroDetails.hide();

    overline.text(overlineData);
    heading.text(headingData);
    description.text(descriptionData);
    link.attr('href', hrefData);

    setTimeout(function() {
      heroDetails.show();
    }, 100);
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
  });

  // Video Autoplay;

  /*
  $(document).scroll(function() {
    var videoSection = $('.video-section');
    var scrollValue = $(window).scrollTop();
    var autoplayVideo = document.getElementById('autoplayVideo');

    var topThreshold =
      videoSection[0].offsetTop -
      videoSection[0].offsetHeight +
      $(window).height() / 2;
    var bottomThreshold =
      videoSection[0].offsetTop +
      videoSection[0].offsetHeight -
      $(window).height() / 2;

    if (scrollValue >= topThreshold && scrollValue <= bottomThreshold) {
      autoplayVideo.play();
    } else {
      autoplayVideo.pause();
    }

  });    */


  $( window ).on( 'elementor/frontend/init', function() {

    elementorFrontend.hooks.addAction( 'frontend/element_ready/sumisip-featured-section.default', function($scope, $){

        // Hero Section;

  // Initialize first slide data;
  var heroPrevGroup = $('.hero-preview-group');
  var firstHeroSlide = $('.hero-preview-controls .active');
  var heroPrevControls = $('.hero-preview-controls');
  updatePreviewDetails(firstHeroSlide);
  updatePreview(firstHeroSlide);

  // Remove Loading;
    $('.hero-section').removeClass('loading');



  // Initialize Transitioning on first entry;
  setTimeout(function() {
    heroPrevGroup.addClass('transitioning');
  }, 700);

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
    if (heroPrevGroup.hasClass('transitioning')) {
      clearTimeout(transitioningTimeout);
      heroPrevGroup.removeClass('transitioning');
      setTimeout(() => {
        mainUpdateFunction();
      }, 75);
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
      heroPrevGroup.attr(
        'class',
        'transitioning hero-preview-group group-' + assignGroup
      );

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
    heroDetails.hide();

    overline.text(overlineData);
    heading.text(headingData);
    description.text(descriptionData);
    link.attr('href', hrefData);

    setTimeout(function() {
      heroDetails.show();
    }, 100);
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
  });

    });
 } );



});
