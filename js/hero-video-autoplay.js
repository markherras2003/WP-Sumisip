$(() => {
  {
    // Video Autoplay;
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
        if (navigator.userAgent.indexOf("Chrome") > 0) {
          this.paused?this.play():this.pause();
        }
      } else {
        autoplayVideo.pause();
      }


    });
  }
  
});
