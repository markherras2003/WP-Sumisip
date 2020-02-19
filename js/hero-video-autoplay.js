$(() => {
  {
    // Video Autoplay;
    $(document).scroll(function() {
      var videoSection = $('.video-section');
      var scrollValue = $(window).scrollTop();
      var autoplayVideo = document.getElementById('autoplayVideo');
      // Show loading animation.
 

      var topThreshold =
        videoSection[0].offsetTop -
        videoSection[0].offsetHeight +
        $(window).height() / 2;
      var bottomThreshold =
        videoSection[0].offsetTop +
        videoSection[0].offsetHeight -
        $(window).height() / 2;

      if (scrollValue >= topThreshold && scrollValue <= bottomThreshold) {
        var playPromise = autoplayVideo.play();
        if (playPromise !== undefined) {
          playPromise.then(_ => {
            // Automatic playback started!
            // Show playing UI.
          })
          .catch(error => {
            // Auto-play was prevented
            // Show paused UI.
          });
        }
      } else {
        autoplayVideo.pause();
      }



    });
  }
  
});

