function footer() {
  var backtop = $("#backtop");

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      backtop.addClass("show");
    } else {
      backtop.removeClass("show");
    }
  });

  backtop.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
}
