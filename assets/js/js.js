jssor_1_slider_init = function() {

    var jssor_1_options = {
        $AutoPlay: true,
        $SlideDuration: 800,
        $SlideEasing: $Jease$.$OutQuint,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*responsive code begin*/
    /*you can remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1920);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*responsive code end*/
};




$(document).ready(function(){
    $('.slider-2').slick({
        centerMode: true,
        // centerPadding: '280px',
        slidesToShow: 5,
        responsive: [
          {
            breakpoint: 968,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '90px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 680,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '15px',
              slidesToShow: 3
            }
          }
        ]
      });
  });
  

  $(document).ready(function(){
  $('.products-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
});