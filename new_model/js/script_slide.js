// responsive du slide de la page d'acceuil

$(document).ready(function () {
    var width = $(window).width();
    if (width < 800) {
      $(".slider_content").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
      });
    } else if (width < 1500 && width > 800) {
      $(".slider_content").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
      });
    }
  });
  