function footer() {
  var backtop = gsap.to("#backtop", {
    opacity: "1",
    duration: 0.1,
    ease: "power2.in",
    paused: true,
  });
  //fixed backtop
  ScrollTrigger.create({
    trigger: "#backtop",
    start: "200px top",
    end: 99999,
    onUpdate: ({ progress, direction, isActive }) => {
      if (direction == -1) {
        backtop.reverse();
      }
      if (direction == 1) {
        backtop.play();
      } else if (direction == 1 && isActive == true) {
        backtop.play();
      }
    },
  });
  $(".backtop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
}
