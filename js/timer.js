// Set the date we're counting down to
var countDownDate = new Date("Feb 24, 2019 21:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";


  if(days < 10 ){
    document.getElementById("days").innerHTML = "0" + days;
  }
  else{
    document.getElementById("days").innerHTML = days ;
  }

  if(hours < 10 ){
    document.getElementById("hours").innerHTML = "0"+hours;
  }
  else{
    document.getElementById("hours").innerHTML = hours ;
  }

  if(minutes < 10 ){
    document.getElementById("mins").innerHTML = "0"+minutes;
  }
  else{
    document.getElementById("mins").innerHTML = minutes;
  }

  if(seconds < 10 ){
    document.getElementById("secs").innerHTML = "0" + seconds;
  }
  else{
    document.getElementById("secs").innerHTML = seconds;
  }

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML = "00" ;
    document.getElementById("hours").innerHTML = "00" ;
    document.getElementById("mins").innerHTML = "00" ;
    document.getElementById("secs").innerHTML = "00" ;
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
