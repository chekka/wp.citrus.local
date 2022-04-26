(function ($) {

  $windowW = $(window).innerWidth();
  $windowH = $(window).innerHeight();
  $headerH = $(".site-header").outerHeight();

  $(document).ready(function () {
    $windowW = $(window).innerWidth();
    $windowH = $(window).innerHeight();
    $headerH = $(".site-header").outerHeight();
    // $('body.home main.container').height($windowH * 12);
    $('body.home').append('<div id="layer"></div>');

    $('#testimonial-slider').slick({
      "dots": true,
      "arrows": false,
      "autoplay": true,
      "autoplaySpeed": 15000,
    });

    $('div[data-stretch-type="full"] .panel-widget-style').each(function () {
      var h = $(this).parents('div[data-stretch-type="full"]').innerHeight();
      // $(this).css({ "height":h+"px" });
    });

    $('.scroll-down').on('click', function () {
      $('html, body').animate({ 
        scrollTop: $(".site-footer").offset().top
      }, 5000);
    });
    
  });

  $(window).on("load", function () {
    $('body').addClass('loaded');
  });

  $(window).on("scroll", function () {
    var st = $(this).scrollTop();
    // console.log(st);
    if (st < 10)
    {
      $('#frontscreen img').css({ "transform": "scale(1)" });
      // $('#logos').css({ "transform": "scale(1)" });
      $('#tunnel img').css({ "transform": "scale(1)" });
      $('#tunnel').css({ "opacity": 0 });
    }
    $('#frontscreen img').css({ "transform": "scale(1." + ("0000" + st).slice(-4) + ")" });
    if (st > 3000)
    {
      var tunnelScale = (st - 3000) / 1000
      if (tunnelScale > 1)
      {
        $('#tunnel img').css({ "transform": "scale(" + tunnelScale + ")" });
      }
      $('#tunnel').css({ "opacity": (st - 3000) / 3000 });
    }
    if (st > 6000)
    {
      $('#logos').css({ "transform": "scale(" + ("0000" + (st - 6000)).slice(-4) * 0.00025 + ")" });
    } else
    {
      // $('#logos').css({ "opacity": 0 });
    }

    if (st > 9000)
    {
      $(".home #layer, .home .panel-layout > div:last-child").css({ "opacity": ((st - 9000) / 2000) });
    } else
    {
      $(".home #layer, .home .panel-layout > div:last-child").css({ "opacity": 0 });
    }
  });

})(jQuery);
