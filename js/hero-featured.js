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
   });

   $("#covid-close").click(function() { 
    $(".covid").fadeOut();
    $(".overlay").remove();
    $('body').css('overflow', 'visible');
    $('html').css('overflow', 'visible');
    });


 
    var url_link = 'https://coronavirus-19-api.herokuapp.com/countries/Philippines'

    jQuery.ajax( {
        type: "GET",
        url: url_link,
        dataType: "text",
        success: function ( result ) {
            var obj = jQuery.parseJSON( result );

            var _country = obj.country;
            var _cases = obj.cases;
            var _newconfirmed = obj.todayCases;
            var _newdeaths = obj.todayDeaths;
            var _deaths = obj.deaths;

            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;
          


            $("#newconfirmed").html(_newconfirmed);
            $("#cases").html(_cases);
            $("#newdeaths").html(_newdeaths);
            $("#deaths").html(_deaths);
            $("#covidlatest").html(formatDate(dateTime));
         

           
        },
        error: function ( xhr, ajaxOptions, thrownError ) {
            alert( thrownError );
        }
    } );


    function formatDate(date) {
      var d = new Date(date);
      var hh = d.getHours();
      var m = d.getMinutes();
      var s = d.getSeconds();
      var dd = "AM";
      var h = hh;
      if (h >= 12) {
          h = hh-12;
          dd = "PM";
      }
      if (h == 0) {
          h = 12;
      }
      m = m<10?"0"+m:m;
      
      s = s<10?"0"+s:s;
  
      h = h<10?"0"+h:h;
  
      var pattern = new RegExp("0?"+hh+":"+m+":"+s);
      return date.replace(pattern,h+":"+m+":"+s+" "+dd)
  }

});
 