
$(document).ready(function() {
    $(".custom-collapsible-toggle").click(function() {
        var $i = $(this).children("i");
        var $parent = $(this).siblings();
        console.log($parent);
        if ($i.is(".fa-caret-down")){
            $parent.removeClass("in");
            $i.removeClass("fa-caret-down");
            $i.addClass("fa-caret-right");
        } else {
            $i.removeClass("fa-caret-right");
            $i.addClass("fa-caret-down");
            $parent.addClass("in");
        }
        return false;
    });
});
$('.responsive').slick({
  dots: true,
	prevArrow: $('.prev'),
	nextArrow: $('.next'),
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});