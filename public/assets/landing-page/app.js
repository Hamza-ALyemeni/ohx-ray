$(document).ready(function () {
  $(".submit").click(function () {
    $(".ui.modal").modal("show");
  });
  $(".hidden").removeClass("hidden");
});
(function ($) {
  var form = $("#signup-form");
  form.steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "fade",
    labels: {
      previous: "Previous",
      next: "Next",
      finish: "Finish",
      current: "",
    },
    titleTemplate: '<h3 class="title">#title#</h3>',
    onStepChanged: function (event, currentIndex, priorIndex) {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    },
    onFinished: function (event, currentIndex) {
      var check = true;
      for (var i = 1; i <= 48; i++) {
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

  var form = $("#signup-form-ar");
  form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    labels: {
      previous: "السابق",
      next: "التالي",
      finish: "ارسال",
      current: "",
    },
    titleTemplate: '<h3 class="title">#title#</h3>',

    onStepChanged: function (event, currentIndex, priorIndex) {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    },

    onFinished: function (event, currentIndex) {
        debugger;
        var check = true;
      for (var i = 1; i <= 48; i++) {
        if (!$("input[name='question[" + i + "]']:checked").val())
          check = false;
      }
      if (check)
      document.getElementById("signup-form-ar").submit();
      else
        alert("من فضلك اجب على كل الاسئلة")

    },
  });
})(jQuery);
var numValid = 1;
function scrollProgressBar() {
  var getMax = function () {
    return 48;
  };

  var getValue = function () {
    var x = numValid - 1
    return x
  };

  var progressBar = $(".progress-bar"),
    max = getMax(),
    value,
    width;

  var getWidth = function () {
    // Calculate width in percentage

    value = getValue();
    width = (value / max) * 100;
    width = width + "%";
    return width;
  };

  var setWidth = function () {
    progressBar.css({ width: getWidth() });
  };

  $(document).on("change", setWidth);
  $(window).on("resize", function () {
    setWidth();
  });
}
$(document).ready(function () {
  scrollProgressBar();
});
document.addEventListener("change", (e) => {
  if (e.target.attributes[0].nodeValue === "radio" && $('input[type=radio]:checked').length == numValid) {

    numValid++;
  }
});
