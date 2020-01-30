$(window).on('load', function() {

  // Remove loading class if
  $('.history-section').removeClass('loading');

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
});
