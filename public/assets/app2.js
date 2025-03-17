$(document).ready(function () {
  $(".submit").click(function () {
    $(".ui.modal").modal("show");
  });
  $(".dropdown").dropdown();
  $(".ui.accordion").accordion();
  $(".ui.radio.checkbox").checkbox();
  $(window).on("resize", function () {
    if ($(window).width() < 992) {
      $(".sidebar").addClass("sidebar-hidden");
      $(".content").addClass("content-full");
      $(".content").removeClass("content-shrink");
      $(".fa-bars").removeClass("hidden2");
      $(".sidebar-logo").addClass("hidden2");
      $(".mobile-view").addClass("hidden2");
      $(".fa-bars").click(function () {
        $(".mobile-view").toggleClass("hidden2");
      });
    } else {
      $(".sidebar").removeClass("sidebar-hidden");
      $(".sidebar").removeClass("sidebar-active");
      $(".content").removeClass("content-full");
      $(".content").addClass("content-shrink");
      $(".fa-bars").addClass("hidden2");
      $(".mobile-view").removeClass("hidden2");
    }
  });
  if ($(window).width() < 992) {
    $(".sidebar").addClass("sidebar-hidden");
    $(".content").addClass("content-full");
    $(".content").removeClass("content-shrink");
    $(".fa-bars").removeClass("hidden2");
    $(".sidebar-logo").addClass("hidden2");
    $(".mobile-view").addClass("hidden2");
    $(".fa-bars").click(function () {
      $(".mobile-view").toggleClass("hidden2");
    });
  } else {
    $(".sidebar").removeClass("sidebar-hidden");
    $(".sidebar").removeClass("sidebar-active");
    $(".content").removeClass("content-full");
    $(".content").addClass("content-shrink");
    $(".fa-bars").addClass("hidden2");
    $(".mobile-view").removeClass("hidden2");
  }
  $(".fa-bars").click(function () {
    $(".sidebar").toggleClass("sidebar-active");
    $(".sidebar").toggleClass("sidebar-hidden");
  });
});

