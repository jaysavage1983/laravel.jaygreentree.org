const CURRENT_SERVICE_QUERY = `
query CurrentService {
  currentService(onEmpty: LOAD_NEXT) {
    id
    startTime
    endTime
    content {
      title
    }
  }
}
`;

async function startCountdown() {
    // Fetch the current or next service data
    const service = await fetch("https://live.thursdaychurch.org/graphql", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json"
            },
            body: JSON.stringify({
                query: CURRENT_SERVICE_QUERY,
                operationName: "CurrentService"
            })
        })
        .then((response) => response.json())
        .catch((error) => console.error(error));

    // If no service was returned from the API, don't display the countdown
    if (!service.data.currentService || !service.data.currentService.id) {
        return;
    }

    // Set the service title
    // document.getElementById("serviceTitle").innerText = service.data.currentService.content.title;

    // Set the date we're counting down to
    const startTime = new Date(service.data.currentService.startTime).getTime();
    const endTime = new Date(service.data.currentService.endTime).getTime();

    // Create a one second interval to tick down to the startTime
    const intervalId = setInterval(function() {
        const now = new Date().getTime();

        // If we are between the start and end time, the service is live
        if (now >= startTime && now <= endTime) {
            clearInterval(intervalId);
            document.getElementsById("countdown").innerHTML =
                "<div class='live'><a href='https://jaygreentree.live/' target='_blank'>We are Live. Join Us Online</a></div>";
            return;
        }

        // Find the difference between now and the start time
        const difference = startTime - now;

        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        // Display the results in the element with id="countdown"
        /*
        document.getElementById("countdown").innerHTML =
          "<span class='days'>" +
          days +
          "</span><span class='label'> days</span></li><li><span class='hours'> " +
          hours +
          "</span><span class='label'> hours </span></li> <li><span class='minutes'>" +
          minutes +
          "</span><span class='label'> minutes </span></li> <li><span class='seconds'>" +
          seconds +
          "</span><span class='label'> seconds </span></li></ul></div>";
          */
        document.getElementById("countdown").innerHTML =
            "<div class='counter t-days'><span class='numbers theme-buttons-background-color-text'>" 
            + days +
             " </span> <span class='getlang home-next_up-days'> Days</span></div>" 
            + "<div class='counter t-hours'><span class='numbers theme-buttons-background-color-text'>" 
            + hours 
            + " </span>" 
            + "<span class='getlang home-next_up-hours'> Hours</span></div>" 
            + "<div class='counter t-minutes'><span class='numbers theme-buttons-background-color-text'>" 
            + minutes 
            + "</span>" 
            + "<span class='getlang home-next_up-minutes'> Minutes</span></div>" 
            + "<div class='counter t-seconds'><span class='numbers theme-buttons-background-color-text'>" 
            + seconds 
            + " </span><span class='getlang home-next_up-seconds'>seconds</span></div>";
        // If we are past the end time, clear the countdown
        if (difference < 0) {
            clearInterval(intervalId);
            document.getElementById("countdown").innerHTML = "";
            return;
        }
    }, 1000);
}

startCountdown();