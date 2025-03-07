$(document).ready(function() {
    StartServiceLiveCheck();
});

function StartServiceLiveCheck() {
    UpdateServiceLiveCheck();
    setTimeout("StartServiceLiveCheck()", 5000);
}

function UpdateServiceLiveCheck() {
    $.ajax({
        url: "/isLive",
        success: function(data) {
            if (data.indexOf("true") != -1) {
                $("#notlive").hide();
                $("#live").fadeIn('fast');
                $('.countdown').delay(2000).animate({ backgroundColor: "#7f3e19" }, 'slow');
                $(".mobile-liveservice").show();
            }
        }
    });
    goLive = function() {
        $(".notlive").hide();
        $(".live").fadeIn('fast');
        $('.countdown').delay(2000).animate({ backgroundColor: "#7f3e19" }, 'slow');
        $(".mobile-liveservice").show();
    };
}    
      jQuery(function() {
        days = void 0;
        hours = void 0;
        minutes = void 0;
        seconds = void 0;
        intervalId = void 0;
        return $.ajax({
          url: "/api/data.json",
          dataType: "json",
          success: function(data) {
            var seconds_till;
            $("#churchonline_counter").show();
            if (data.response.item.isLive) {
              return goLive();
            } else {
              seconds_till = ((new Date(data.response.item.eventStartTime)) - (new Date())) / 1000;
              days = Math.floor(seconds_till / 86400);
              hours = Math.floor((seconds_till % 86400) / 3600);
              minutes = Math.floor((seconds_till % 3600) / 60);
              seconds = Math.floor(seconds_till % 60);
              return intervalId = setInterval(function() {
                if (--seconds < 0) {
                  seconds = 59;
                  if (--minutes < 0) {
                    minutes = 59;
                    if (--hours < 0) {
                      hours = 23;
                      if (--days < 0) {
                        days = 0;
                      }
                    }
                  }
                }

        if (days.toString() == 1) {
          $("#churchonline_counter .co-countdown-days").html("1");
        } else {
          $("#churchonline_counter .co-countdown-days").html((hours.toString().length < 2 ? days : days));
        };
        if (hours.toString() == 1) {
          $("#churchonline_counter .co-countdown-hours").html("1");
        } else {
          $("#churchonline_counter .co-countdown-hours").html((hours.toString().length < 2 ? hours : hours));
        };
        if (minutes.toString() == 1) {
          $("#churchonline_counter .co-countdown-mins").html("1");
        } else {
          $("#churchonline_counter .co-countdown-mins").html((minutes.toString().length < 2 ? minutes : minutes) + " ");
        };
        $("#churchonline_counter .co-countdown-secs").html((seconds.toString().length < 2 ? "0" + seconds : seconds));
        if (days === 00) {
          $('.daysAll').hide();
        };
        if (hours === 00) {
          $('.hoursAll').hide();
        };
        if (seconds === 0 && minutes === 10 && hours === 0 && days === 0) {
          return clearInterval(intervalId);
        };
        $("#eventTitle").html((data.response.item.title));
              }, 1000);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            return console.log(thrownError);
          }
        });
      });
