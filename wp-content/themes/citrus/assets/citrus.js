(function ($) {
  $(document).ready(function () {
    $windowW = $(window).innerWidth();
    $headerH = $(".site-header").outerHeight();    
  });

  $(window).on("load", function () {
    $('body').addClass('loaded');
  });

})(jQuery);
