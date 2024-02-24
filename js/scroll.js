$(window).scroll(function () {
  if ($(this).scrollTop() > 0) {
    $("#navigation").addClass("change-color");
  } else {
    $("#navigation").removeClass("change-color");
  }
});
