//animation for image
function imageAnimation() {
  let figures = gsap.utils.toArray(".animation__image");
  figures.forEach((el) => {
    gsap.from(el, {
      opacity: 0,
      duration: 2,
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom top",
        toggleActions: "resume pause resume pause",
      },
    });
  });

  let images = gsap.utils.toArray(".animation__image img");
  images.forEach((el) => {
    gsap.from(el, {
      opacity: 0,
      scale: 1.5,
      duration: 2,
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom top",
        toggleActions: "resume pause resume pause",
      },
    });
  });
}

// // Fade In Transitions Items
function fadeInUpInit() {
  gsap.utils.toArray(".animation-wrapper").forEach((section) => {
    const elems = section.querySelectorAll(".animation-item");
    // Set starting params for sections
    gsap.set(elems, {
      y: 60,
      opacity: 0,
      duration: 2,
      ease: "power3.out",
      overwrite: "auto",
    });

    ScrollTrigger.create({
      trigger: section,
      start: "top 60%",
      end: "bottom 30%",
      markers: false,
      // toggleActions: "play complete none",
      onEnter: () =>
        gsap.to(elems, {
          y: 0,
          opacity: 1,
          stagger: 0.7,
        }),
    });
  });
}

//Animation Fade In Left
function fadeInLeft() {
  const items__left = gsap.utils.toArray(".fade-left");

  items__left.forEach((item__left, i) => {
    const anim = gsap.fromTo(
      item__left,
      { autoAlpha: 0, x: -50 },
      { duration: 1, autoAlpha: 1, x: 0, ease: "power3.in" }
    );
    ScrollTrigger.create({
      trigger: item__left,
      animation: anim,
      start: "top bottom",
      end: "bottom top",
      toggleActions: "resume pause resume pause",

      // once: true,
    });
  });
}

//Animation Fade In Right
function fadeInRight() {
  const items__right = gsap.utils.toArray(".fade-right");

  items__right.forEach((item__right, i) => {
    const anim = gsap.fromTo(
      item__right,
      { autoAlpha: 0, x: 50, opacity: 0 },
      { duration: 1, autoAlpha: 1, x: 0, opacity: 1, ease: "power3.in" }
    );
    ScrollTrigger.create({
      trigger: item__right,
      animation: anim,
      start: "top bottom",
      end: "bottom top",
      toggleActions: "resume pause resume pause",
      // once: true,
    });
  });
}

if (window.innerWidth > 991) {
  var magnets = document.querySelectorAll(".magnetic");
  var strength = 30;

  magnets.forEach((magnet) => {
    magnet.addEventListener("mousemove", moveMagnet);
    magnet.addEventListener("mouseout", function (event) {
      TweenMax.to(event.currentTarget, 1, { x: 0, y: 0, ease: Power4.easeOut });
    });
  });

  function moveMagnet(event) {
    var magnetButton = event.currentTarget;
    var bounding = magnetButton.getBoundingClientRect();

    // console.log(magnetButton, bounding);

    TweenMax.to(magnetButton, 1, {
      x: ((event.clientX - bounding.left) / magnetButton.offsetWidth - 0.5) * strength,
      y: ((event.clientY - bounding.top) / magnetButton.offsetHeight - 0.5) * strength,
      ease: Power4.easeOut,
    });

    // magnetButton.style.transform = 'translate(' + (((( event.clientX - bounding.left)/(magnetButton.offsetWidth))) - 0.5) * strength + 'px,'+ (((( event.clientY - bounding.top)/(magnetButton.offsetHeight))) - 0.5) * strength + 'px)';
  }
}

function initMagneticButtons() {
  // Magnetic Buttons
  // Found via: https://codepen.io/tdesero/pen/RmoxQg
  var magnets = document.querySelectorAll(".magnetic");
  var strength = 100;

  // START : If screen is bigger as 540 px do magnetic
  if (window.innerWidth > 540) {
    // Mouse Reset
    magnets.forEach((magnet) => {
      magnet.addEventListener("mousemove", moveMagnet);
      $(this.parentNode).removeClass("not-active");
      magnet.addEventListener("mouseleave", function (event) {
        gsap.to(event.currentTarget, 1.5, {
          x: 0,
          y: 0,
          ease: Elastic.easeOut,
        });
        gsap.to($(this).find(".btn-text"), 1.5, {
          x: 0,
          y: 0,
          ease: Elastic.easeOut,
        });
      });
    });

    // Mouse move
    function moveMagnet(event) {
      var magnetButton = event.currentTarget;
      var bounding = magnetButton.getBoundingClientRect();
      var magnetsStrength = magnetButton.getAttribute("data-strength");
      var magnetsStrengthText = magnetButton.getAttribute("data-strength-text");

      gsap.to(magnetButton, 1.5, {
        x: ((event.clientX - bounding.left) / magnetButton.offsetWidth - 0.5) * magnetsStrength,
        y: ((event.clientY - bounding.top) / magnetButton.offsetHeight - 0.5) * magnetsStrength,
        rotate: "0.001deg",
        ease: Power4.easeOut,
      });
      gsap.to($(this).find(".btn-text"), 1.5, {
        x: ((event.clientX - bounding.left) / magnetButton.offsetWidth - 0.5) * magnetsStrengthText,
        y: ((event.clientY - bounding.top) / magnetButton.offsetHeight - 0.5) * magnetsStrengthText,
        rotate: "0.001deg",
        ease: Power4.easeOut,
      });
    }
  } // END : If screen is bigger as 540 px do magnetic

  // Mouse Enter
  $(".btn-click.magnetic").on("mouseenter", function () {
    if ($(this).find(".btn-fill").length) {
      gsap.to($(this).find(".btn-fill"), 0.6, {
        startAt: { y: "76%" },
        y: "0%",
        ease: Power2.easeInOut,
      });
    }
    if ($(this).find(".btn-text-inner.change").length) {
      gsap.to($(this).find(".btn-text-inner.change"), 0.3, {
        startAt: { color: "#eb3424" },
        color: "#FFFFFF",
        ease: Power3.easeIn,
      });
    }
    // if ($(this).find(".btn-text-inner.change").length) {
    //   gsap.to($(this).find(".btn-text-inner.change"), 0.3, {
    //     startAt: { color: "#1C1D20" },
    //     color: "#FFFFFF",
    //     ease: Power3.easeIn,
    //   });
    // }
    $(this.parentNode).removeClass("not-active");
  });

  // Mouse Leave
  $(".btn-click.magnetic").on("mouseleave", function () {
    if ($(this).find(".btn-fill").length) {
      gsap.to($(this).find(".btn-fill"), 0.6, {
        y: "-76%",
        ease: Power2.easeInOut,
      });
    }
    if ($(this).find(".btn-text-inner.change").length) {
      gsap.to($(this).find(".btn-text-inner.change"), 0.3, {
        color: "#eb3424",
        ease: Power3.easeOut,
        delay: 0.3,
      });
    }
    $(this.parentNode).removeClass("not-active");
  });
}
