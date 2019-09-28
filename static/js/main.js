// for menu
$(function() {
  $(".nav__button").on("click", function (e) {
    $("nav.sp").toggleClass("inactive");
    $("nav.sp").toggleClass("active");
    $(this).toggleClass("inactive");
    $(this).toggleClass("active");
  });
});

// device detection
var getDevice = (function(){
  var ua = navigator.userAgent;
  if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
      return 'sp';
  }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
      return 'tab';
  }else{
      return 'other';
  }
})();

console.log(`Device: ${getDevice}`)

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
      posX += 5;
      posY += 5;
      $("section:not(.top)").css("background-position", `${posX} ${posY}`);
      console.log(pos)
    }, 100);
  });
}

// modal window
$(document).ready(function(){
  $('.image').modaal({
    type: 'image'
  });
});
