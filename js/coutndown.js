$(function() {


    // Set the date we're counting down to

    var countDownDate = new Date("sep 1, 2021 0:00:05").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="clock-c"
        // document.getElementById("clock-c").innerHTML = days + "d    " + hours + "h   " +
        //   minutes + "m   " + seconds + "s   ";
        document.getElementById("days").innerHTML = +days + " d";
        document.getElementById("hours").innerHTML = +hours + " h";
        document.getElementById("minutes").innerHTML = +minutes + " m";
        document.getElementById("seconds").innerHTML = +seconds + " s";

        document.getElementById("rdays").innerHTML = +days + " d";
        document.getElementById("rhours").innerHTML = +hours + " h";
        document.getElementById("rminutes").innerHTML = +minutes + " m";
        document.getElementById("rseconds").innerHTML = +seconds + " s";
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("clock-c").innerHTML = "EXPIRED";
            document.getElementById("rclock-c").innerHTML = "EXPIRED";
        }
    }, 1000);



});