/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/pages/form-wizard.init.js ***!
  \************************************************/
/*
Template Name: Minible - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Form wizard Js File
*/
$(function ($) {
  var form = $("#signup-form");
  form.steps({
    headerTag: "h8",
    bodyTag: "section",
    transitionEffect: "slide",
    onFinished: function (event, currentIndex) {
      var check = true;
      let questions_length=parseInt( document.getElementById("questions").value);
      let question_one= parseInt(document.getElementById("question_one").value);
      let length= question_one + questions_length ;
      var i = question_one;
      for (i; i <= length -1; i++) {
        if (!$("input[name='question[" + i + "]']:checked").val())
          check = false;
      }
      if (check)
        document.getElementById("signup-form").submit();
      else
        alert("Select All Questions")
      // window.location.href = "thankYouEN.html";
    },
  });

  var form_ar = $("#signup-form_ar");
  form_ar.steps({
    headerTag: "h8",
    bodyTag: "section",
    transitionEffect: "slide",
    labels: {
      previous: "السابق",
      next: "التالي",
      finish: "ارسال",
      current: "",
    },
    onFinished: function (event, currentIndex) {
      var check = true;
      let questions_length=parseInt( document.getElementById("questions").value);
      let question_one= parseInt(document.getElementById("question_one").value);
      let length= question_one + questions_length ;
      var i = question_one;
      for (i; i <= length -1; i++) {
        if (!$("input[name='question[" + i + "]']:checked").val())
          check = false;
      }
      if (check)
        document.getElementById("signup-form_ar").submit();
      else
        alert($("input[name='question[" + i + "]']:checked").val()+"إختر جميع الاسئلة")
      // window.location.href = "thankYouEN.html";
    },
  });
  /*$("#vertical-example").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide",
    stepsOrientation: "vertical"
  });*/
},
);
/******/ })()
;

