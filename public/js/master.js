// Dropdown
$(".roam-dropdown").click(function(){
  $(this).parents('.roam-container').children('.roam-body').toggle();
  $(this).parents('.roam-container').children('.drawing').toggle();
});

// Roam Drawing Dropdown
$(".dropdown").click(function(){
  $(this).children('ol').toggle();
});

// $(".dropdown").hover(function(){
//   $(this).children('ol').toggle();
// });
