(function ($) {
  var range = $("#range"),
    imgs = range.children(),
    imgWidth = imgs.first().outerWidth(),
    imgLen = imgs.length,
    current = 1,
    totalImgsWidth = imgLen * imgWidth;
  $("div#slider").css("overflow", "hidden");
  $("#slider-nav")
    .show()
    .find("button")
    .on("click", function () {
      var direction = $(this).data("dir"),
        loc = imgWidth;

      //update current value
      if (direction === "next") {
        current++;
      } else {
        current--;
      }

      if (current < 1) {
        current = imgLen;
        direction = "next";
        loc = totalImgsWidth - imgWidth;
      } else if (current > imgLen) {
        //Are we at end? Should we reset?
        current = 1;
        loc = 0;
      }

      transition(range, loc, direction);
    });

  function transition(container, loc, direction) {
    var unit;
    if (direction && loc !== 0) {
      unit = direction == "next" ? "-=" : "+=";
    }
    container.animate({
      "margin-left": unit ? unit + loc : loc,
    });
  }
})(jQuery);
