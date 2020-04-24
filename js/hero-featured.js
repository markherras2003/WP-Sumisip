$(window).on('load', function() {

  // Play Gallery Images;
  var featuredGalleryInterval = setInterval(function() {
  
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
});


$(document).ready(function(){ 

  $("#ramadan-close").click(function() { 
   $(".ramadan").fadeOut();
   $('body').css('overflow', 'visible');
   });

   $("#covid-close").click(function() { 
    $(".covid").fadeOut();
    $('body').css('overflow', 'visible');
    });

  //  $("#covid-close").click(function() { 
  //   $(".covid").fadeOut("slow"); 
  //   });
});
 