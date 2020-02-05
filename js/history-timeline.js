$(window).on('load', function() {
  // Remove Loading;
  $('.history-section').removeClass('loading');

  // Initialize first timeline entry;
  var firstTimelineBlock = $('.timeline .active');
  updateTimelineDetails(
    firstTimelineBlock.attr('overline'),
    firstTimelineBlock.attr('title'),
    firstTimelineBlock.attr('contents'),
    firstTimelineBlock.attr('link')
  );

  // When clicking next;
  $('.timeline-control-right').click(function() {
    if (!$(this).hasClass('disabled')) {
      nextTimeline();
    }
  });

  // When clicking prev;
  $('.timeline-control-left').click(function() {
    if (!$(this).hasClass('disabled')) {
      prevTimeline();
    }
  });

  // When clicking the timeline block;
  $('.indicator').on('click', function() {
    var timelineBlocks = $('.timeline-body .timeline-block');
    var timelineBlock = $(this).parent();
    var targetIndex = timelineBlock.index();

    // Changing Photo;
    var allPhotos = $('.display-preview .dp-photo');
    var firstPhoto = $('.display-preview .dp-photo').first();
    allPhotos.removeClass('active');
    allPhotos.removeClass('next');

    var targetPhoto = $(allPhotos[targetIndex]);
    var nextPhoto = targetPhoto.next();
    if (nextPhoto.length <= 0) {
      nextPhoto = firstPhoto;
    }

    targetPhoto.addClass('active');
    nextPhoto.addClass('next');

    // Changing Timelineblock;
    timelineBlock.addClass('active');
    var timelineBlocksPrevs = timelineBlock.prevAll();
    var timelineBlocksNexts = timelineBlock.nextAll();
    timelineBlocksPrevs.addClass('active');
    timelineBlocksNexts.removeClass('active');

    updateTimelineDetails(
      timelineBlock.attr('overline'),
      timelineBlock.attr('title'),
      timelineBlock.attr('contents'),
      timelineBlock.attr('link')
    );

    if (targetIndex >= 1) {
      enableTimelineControl('left');
    } else {
      disableTimelineControl('left');
    }

    if (targetIndex >= timelineBlocks.length - 1) {
      disableTimelineControl('right');
    } else {
      enableTimelineControl('right');
    }
  });

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

  function nextTimeline() {
    // Changing the photo;
    var curActivePhoto = $('.display-preview .dp-photo.active');
    var nextPhoto = $('.display-preview .dp-photo.next');
    var nextNext = nextPhoto.next();

    nextPhoto.removeClass('next');
    nextPhoto.addClass('active');
    nextNext.addClass('next');

    curActivePhoto.addClass('scale-hide');
    setTimeout(() => {
      curActivePhoto.removeClass('active');
      curActivePhoto.removeClass('scale-hide');
    }, 401);

    // Changing Timeline Indicator;
    var timelineBlocks = $('.timeline-body .timeline-block');
    var curActiveTimeline = $('.timeline-body .active').last();
    var nextActiveTimeline = curActiveTimeline.next();

    nextActiveTimeline.addClass('active');

    updateTimelineDetails(
      nextActiveTimeline.attr('overline'),
      nextActiveTimeline.attr('title'),
      nextActiveTimeline.attr('contents'),
      nextActiveTimeline.attr('link')
    );

    // Disable / Enable timeline blocks;
    enableTimelineControl('left');
    if (timelineBlocks.length == curActiveTimeline.index() + 2) {
      disableTimelineControl('right');
    }
  }

  function prevTimeline() {
    // Changing the photo;
    var curActivePhoto = $('.display-preview .dp-photo.active');
    var curNextPhoto = $('.display-preview .dp-photo.next');
    var prevActivePhoto = curActivePhoto.prev();

    curNextPhoto.removeClass('next');

    curActivePhoto.addClass('next');
    curActivePhoto.removeClass('active');

    prevActivePhoto.addClass('active');

    // Changing timeline indicators;
    var timelineBlocks = $('.timeline-body .timeline-block');
    var curActiveTimeline = $('.timeline-body .timeline-block.active').last();
    var prevActiveTimeline = curActiveTimeline.prev();

    curActiveTimeline.removeClass('active');
    prevActiveTimeline.addClass('active');

    updateTimelineDetails(
      prevActiveTimeline.attr('overline'),
      prevActiveTimeline.attr('title'),
      prevActiveTimeline.attr('contents'),
      prevActiveTimeline.attr('link')
    );

    // Disable / Enable timeline blocks;
    enableTimelineControl('right');
    if (curActiveTimeline.index() == 1) {
      disableTimelineControl('left');
    }
  }

  function enableTimelineControl(controlDirection) {
    $('.timeline-control-' + controlDirection).removeClass('disabled');
  }

  function disableTimelineControl(controlDirection) {
    $('.timeline-control-' + controlDirection).addClass('disabled');
  }

  /** 

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
*/


$(window).on('elementor/frontend/init', function() {
  elementorFrontend.hooks.addAction(
    'frontend/element_ready/sumisip-history-timeline.default',
    function($scope, $) {


      // Remove Loading;
  $('.history-section').removeClass('loading');

  // Initialize first timeline entry;
  var firstTimelineBlock = $('.timeline .active');
  updateTimelineDetails(
    firstTimelineBlock.attr('overline'),
    firstTimelineBlock.attr('title'),
    firstTimelineBlock.attr('contents'),
    firstTimelineBlock.attr('link')
  );

  // When clicking next;
  $('.timeline-control-right').click(function() {
    if (!$(this).hasClass('disabled')) {
      nextTimeline();
    }
  });

  // When clicking prev;
  $('.timeline-control-left').click(function() {
    if (!$(this).hasClass('disabled')) {
      prevTimeline();
    }
  });

  // When clicking the timeline block;
  $('.indicator').on('click', function() {
    var timelineBlocks = $('.timeline-body .timeline-block');
    var timelineBlock = $(this).parent();
    var targetIndex = timelineBlock.index();

    // Changing Photo;
    var allPhotos = $('.display-preview .dp-photo');
    var firstPhoto = $('.display-preview .dp-photo').first();
    allPhotos.removeClass('active');
    allPhotos.removeClass('next');

    var targetPhoto = $(allPhotos[targetIndex]);
    var nextPhoto = targetPhoto.next();
    if (nextPhoto.length <= 0) {
      nextPhoto = firstPhoto;
    }

    targetPhoto.addClass('active');
    nextPhoto.addClass('next');

    // Changing Timelineblock;
    timelineBlock.addClass('active');
    var timelineBlocksPrevs = timelineBlock.prevAll();
    var timelineBlocksNexts = timelineBlock.nextAll();
    timelineBlocksPrevs.addClass('active');
    timelineBlocksNexts.removeClass('active');

    updateTimelineDetails(
      timelineBlock.attr('overline'),
      timelineBlock.attr('title'),
      timelineBlock.attr('contents'),
      timelineBlock.attr('link')
    );

    if (targetIndex >= 1) {
      enableTimelineControl('left');
    } else {
      disableTimelineControl('left');
    }

    if (targetIndex >= timelineBlocks.length - 1) {
      disableTimelineControl('right');
    } else {
      enableTimelineControl('right');
    }
  });

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

  function nextTimeline() {
    // Changing the photo;
    var curActivePhoto = $('.display-preview .dp-photo.active');
    var nextPhoto = $('.display-preview .dp-photo.next');
    var nextNext = nextPhoto.next();

    nextPhoto.removeClass('next');
    nextPhoto.addClass('active');
    nextNext.addClass('next');

    curActivePhoto.addClass('scale-hide');
    setTimeout(() => {
      curActivePhoto.removeClass('active');
      curActivePhoto.removeClass('scale-hide');
    }, 401);

    // Changing Timeline Indicator;
    var timelineBlocks = $('.timeline-body .timeline-block');
    var curActiveTimeline = $('.timeline-body .active').last();
    var nextActiveTimeline = curActiveTimeline.next();

    nextActiveTimeline.addClass('active');

    updateTimelineDetails(
      nextActiveTimeline.attr('overline'),
      nextActiveTimeline.attr('title'),
      nextActiveTimeline.attr('contents'),
      nextActiveTimeline.attr('link')
    );

    // Disable / Enable timeline blocks;
    enableTimelineControl('left');
    if (timelineBlocks.length == curActiveTimeline.index() + 2) {
      disableTimelineControl('right');
    }
  }

  function prevTimeline() {
    // Changing the photo;
    var curActivePhoto = $('.display-preview .dp-photo.active');
    var curNextPhoto = $('.display-preview .dp-photo.next');
    var prevActivePhoto = curActivePhoto.prev();

    curNextPhoto.removeClass('next');

    curActivePhoto.addClass('next');
    curActivePhoto.removeClass('active');

    prevActivePhoto.addClass('active');

    // Changing timeline indicators;
    var timelineBlocks = $('.timeline-body .timeline-block');
    var curActiveTimeline = $('.timeline-body .timeline-block.active').last();
    var prevActiveTimeline = curActiveTimeline.prev();

    curActiveTimeline.removeClass('active');
    prevActiveTimeline.addClass('active');

    updateTimelineDetails(
      prevActiveTimeline.attr('overline'),
      prevActiveTimeline.attr('title'),
      prevActiveTimeline.attr('contents'),
      prevActiveTimeline.attr('link')
    );

    // Disable / Enable timeline blocks;
    enableTimelineControl('right');
    if (curActiveTimeline.index() == 1) {
      disableTimelineControl('left');
    }
  }

  function enableTimelineControl(controlDirection) {
    $('.timeline-control-' + controlDirection).removeClass('disabled');
  }

  function disableTimelineControl(controlDirection) {
    $('.timeline-control-' + controlDirection).addClass('disabled');
  }

 
  });
});


});
