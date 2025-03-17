/* Header
================================*/
$(document).ready(function () {
  "use strict";
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      $("header").addClass("move");
    } else {
      $("header").removeClass("move");
    }
  });
});

/* Gallery
============================*/
$(document).ready(function () {
  "use strict";
  $('[data-fancybox="gallery"]').fancybox({
    keyboard: true,
    protect: true,
    arrows: true,
    infobar: true,
    buttons: ["slideShow", "share", "zoom", "fullScreen", "thumbs", "close"],
    thumbs: {
      autoStart: true,
    },
  });
});

/* Show Password
===========================*/
var state = false;
function toggle() {
  if (state) {
    document.getElementById("password").setAttribute("type", "password");
    document.getElementById("show_pass").setAttribute("class", "fa fa-eye");
    state = false;
  } else {
    document.getElementById("password").setAttribute("type", "text");
    document
      .getElementById("show_pass")
      .setAttribute("class", "fas fa-eye-slash");
    state = true;
  }
}

/* OWL Slider
=======================*/
$(document).ready(function () {
  "use strict";
  $(".template_slide").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    smartSpeed: 3000,
    rtl: true,
    autoplayHoverPause: true,
    margin: 35,
    autoplay: true,
    responsive: {
      0: { items: 1 },
      577: { items: 1 },
      767: { items: 2 },
      991: { items: 3 },
      1200: { items: 3 },
    },
  });
  $(".testimonials_slid").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    smartSpeed: 3000,
    rtl: true,
    margin : 25,
    autoplayHoverPause: true,
    autoplay: true,
    responsive: {
      0: { items: 1 },
      577: { items: 1 },
      767: { items: 1 },
      991: { items: 2 },
      1200: { items: 2 },
    },
  });
});

/*Smooth Scroll
================================*/
$(document).ready(function () {
  "use strict";
  var scroll_btn = $("header .navbar ul.navbar-nav li a");
  function goToByScroll(id) {
    $("html , body").animate(
      {
        scrollTop: $(id).offset().top,
      },
      "slow"
    );
  }
  scroll_btn.click(function () {
    goToByScroll($(this).attr("href"));
    return false;
  });
});

/* Top
=============================*/
$(document).ready(function () {
  "use strict";
  var scrollbutton = $(".up_btn");
  $(window).scroll(function () {
    $(this).scrollTop() >= 700 ? scrollbutton.show() : scrollbutton.hide();
  });
  scrollbutton.click(function () {
    $("html , body").animate(
      {
        scrollTop: 0,
      },
      600
    );
  });
});

/*Loading
==========================*/
$(window).on("load", function () {
  "use strict";
  AOS.init({
    offset: 20,
    duration: 700,
    easing: "ease-in-out",
  });
  $(".load_cont").fadeOut(function () {
    $(this).parent().fadeOut();
    $("body").css({
      "overflow-y": "visible",
    });
  });
});
