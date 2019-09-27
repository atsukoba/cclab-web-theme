// for menu
$(function() {
  $(".nav__button").on("click", function (e) {
    $("nav.sp").toggleClass("inactive");
    $("nav.sp").toggleClass("active");
    $(this).toggleClass("inactive");
    $(this).toggleClass("active");
  });
});

// key visual
$(function() {
  for (let i = 1; i < 7; i++) {
    setTimeout(function() {
      $(`.c_${i}`).css("opacity", .35);
    }, 100);
  }
});

// page background animation
window.addEventListener("deviceorientation", handleOrientation, true);
 
function handleOrientation(event) {
  var beta     = event.beta;
  var gamma    = event.gamma;
  var posX = 20 * gamma / 90
  var posY = 20 * beta / 180
  
  $("section:not(.top)").css("background-position", `${posX} ${posY}`);
  console.log(pos)
}

// $(function() {
//   setInterval(() => {
//     var pos = 100 * Math.random();
//     $("section:not(.top)").css("background-position", `${posX} ${posY}`);
//     console.log(pos)
//   }, 1000);
// });


// modal window
$(document).ready(function(){
  $('.image').modaal({
    type: 'image'
  });
});