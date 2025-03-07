$(function () {
    var days;
    var hours;
    var minutes;
    var seconds;
    var intervalId;

    function goLive() {
      $('#churchonline_counter .live').show();
      $('#churchonline_counter .co-header-countdown-time').hide();
    }

    $.ajax({
      url: "/api/data.json",
      success: function (data) {
        $('#churchonline_counter').show();

        if (typeof(data.current_timestamp) !== "undefined") {
          goLive();
        }
        else if (typeof(data.next_timestamp) !== "undefined") {
          $("#churchonline_counter .title").html(data.next_title);
          $("#churchonline_counter .description").html(data.next_description);

          var seconds_till = data.next_timestamp - (new Date().getTime() / 1000);

          days = Math.floor(seconds_till / 86400);
          hours = Math.floor((seconds_till % 86400) / 3600);
          minutes = Math.floor((seconds_till % 3600) / 60);
          seconds = Math.floor(seconds_till % 60);

          intervalId = setInterval(function () {
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

            $(".co-countdown-days").html((days.toString().length < 2) ? "0"+days : days);
            $(".co-countdown-hours").html((hours.toString().length < 2) ? "0"+hours : hours);
            $(".co-countdown-mins").html((minutes.toString().length < 2) ? "0"+minutes : minutes);
            $(".co-countdown-secs").html((seconds.toString().length < 2) ? "0"+seconds : seconds);

            if (seconds == 0 && minutes == 0 && hours == 0 && days == 0) {
              goLive();
              clearInterval(intervalId);
            }
          }, 1000);
        }
      }
    });
  });