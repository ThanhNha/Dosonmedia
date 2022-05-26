function header() {
  var header = gsap.to("#header", { y: "-=300", duration: 0.1, ease: "power2.in", paused: true });
  //fixed header
  ScrollTrigger.create({
    trigger: "#header",
    start: "100px top",
    end: 99999,
    toggleClass: { className: "scrolled", targets: "#header" },
    onUpdate: ({ progress, direction, isActive }) => {
      if (direction == -1) {
        header.reverse();
      }
      if (direction == 1) {
        header.play();
      } else if (direction == 1 && isActive == true) {
        header.play();
      }
    },
  });

  const hamburger = document.querySelector(".hamburger");
  let body = document.querySelector("body");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    body.classList.toggle("fixed");
  });
}

function headerFadeout() {
  var logo = gsap.to("#logo_menu", {
    x: "-=300",
    duration: 0.5,
    ease: "power2.in",
    paused: true,
  });
  //fade out logo
  ScrollTrigger.create({
    trigger: "#logo_menu",
    start: "150px top",
    end: 99999,
    onUpdate: ({ progress, direction, isActive }) => {
      if (direction == -1) {
        logo.reverse();
      }
      if (direction == 1) {
        logo.play();
      } else if (direction == 1 && isActive == true) {
        logo.play();
      }
    },
  });
  //fade out menu
  var navbar = gsap.to("#navbarmain", {
    x: "1000",
    duration: 0.3,
    ease: "power2.in",
    paused: true,
  });
  //fixed header
  ScrollTrigger.create({
    trigger: "#navbarmain",
    start: "100px top",
    end: 99999,
    onUpdate: ({ progress, direction, isActive }) => {
      if (direction == -1) {
        navbar.reverse();
      }
      if (direction == 1) {
        navbar.play();
      } else if (direction == 1 && isActive == true) {
        navbar.play();
      }
    },
  });
}
