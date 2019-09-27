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

// modal window
$(document).ready(function(){
  $('.image').modaal({
    type: 'image'
  });
});