//for navbar hamburger thing
$(".hamburger").click(function() {
  if(!$(this).hasClass('is-active')) {
    $(".navBar").animate({top: "-100%"}, 300);
  } else {
    var height = $(".top").outerHeight();
    $(".navBar").animate({top: height}, 300);
  }
})
//basic page loading JS
$(document).ready(function() {
  //checks if the navbar is in mobile mode
  if($(".top").css("position") == "fixed") {
    $(".content").css("margin-top", $(".top").outerHeight());
  } else {
    $(".content").css("margin-top", "inherit");
  }
  //populates footer
  var date = new Date();
  var year = date.getFullYear();
  var currentText = $(".footer").text();
  $(".footer p:first-child").text(currentText + year + " Employment Squared, Inc. All rights reserved.");
  $(".footer").append("<p class='social'><a href='https://twitter.com/EmploymentSq' class='twitter' target='_blank'><i class='icon ion-social-twitter'></i></a> <a href='https://www.facebook.com/employmentsquared/' class='facebook' target='_blank'><i class='icon ion-social-facebook'></i></a> <a href='https://www.instagram.com/employmentsquared/' class='instagram' target='_blank'><i class='icon ion-social-instagram-outline'></i></a></p>");
  $(".footer").append("<p class='copyright'><a href='copyright.html' target='_blank'>Copyright Information</a></p>");
})
//makes the image in the top left a 'return to home' button
$(".top img").click(function() {
  document.location.href = 'index.php'
});
//redoes the navbar spacing upon resize
$(window).resize(function() {
  if($(".top").css("position") == "fixed") {
    $(".content").css("margin-top", $(".top").outerHeight());
  } else {
    $(".content").css("margin-top", "inherit");
  }
})
