"use strict";
$ = jQuery;

$(document).ready(function () {
  $("p:empty").remove();
  //scroll animation
  //Run animation
  imageAnimation();
  fadeInUpInit();
  fadeInLeft();
  fadeInRight();
  //button animation
  initMagneticButtons();
  //Block function
  header();
  headerFadeout();
  homeBlogs();
  homeTestimonial();
  homeValue();
  serviceFlow();
  pageNews();

  postDetail();

  // Slider
  //Header aminations
  // header();
  footer();
});
