(function ($) {
  'use strict';

  var wasVisible;

  $(function () {
    document.getElementById("toggle-menu-icon").onclick = function () {
      $(this).toggleClass("active");
      $(".navbar ul.navbar-section.top").slideToggle("fast");
    }
    
    ///////////////Mobile Dimension change/////////////
    wasVisible = $(".dropdown-toggle").is(":visible")
    $(window).resize(function () {
      console.log('here');
      var isVisible = $(".dropdown-toggle").is(":visible");
      if (!wasVisible) {
        if (isVisible) {
          $(".navbar-section.top").css({ display: "none" });
          $(".dropdown-toggle a").removeClass('active');
        }
      } else {
        if (!isVisible) {
          $(".navbar-section.top").css({ display: "inherit" });
        }
      }
      wasVisible = isVisible;
    });
  })

})(jQuery);