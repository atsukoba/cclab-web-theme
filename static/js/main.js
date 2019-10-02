// for hamburger menu
$(function() {
  $(".nav__button").on("click", function(e) {
    $("nav.sp").toggleClass("inactive");
    $("nav.sp").toggleClass("active");
    $(this).toggleClass("inactive");
    $(this).toggleClass("active");
  });
});

// hamburger menu background image
switcher = 0;
function changeNegPos() {
  switcher ^= 1;
  $("#posBg").css("opacity", switcher / 4);
  $("#negBg").css("opacity", (1 - switcher) / 4);
}
var switchInterval = window.setInterval(changeNegPos, 2000);


// device detection
var getDevice = (function() {
  var ua = navigator.userAgent;
  if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
      return 'sp';
  }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
      return 'tab';
  }else{
      return 'other';
  }
})();

var posX = 0;
var posY = 0;

// page background animation
function handleOrientation(event) {
  var beta     = event.beta;
  var gamma    = event.gamma;
  posX = screen.width * gamma / 90
  posY = screen.height * beta / 180
  $("section:not(.top)").css("background-position", `${posX} ${posY}`);
  console.log(pos)
}

if (getDevice == "sp") {
  window.addEventListener("deviceorientation", handleOrientation, true);
}else {
  $(function() {
    setInterval(() => {
      posX += 50;
      posY += 50;
      $("section:not(.top)").css("background-position", `${posX} ${posY}`);
    }, 1000);
  });
}

// modal window
$(document).ready(function() {
  $('.image').modaal( {
    type: 'image'
  });
});
