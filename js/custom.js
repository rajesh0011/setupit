$('.owl-carousel-1').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    "<i class='fa fa-angle-left'></i>",
    "<i class='fa fa-angle-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})


$('.owl-carousel-2').owlCarousel({
  loop: true,
  margin: 10,
  dots: false,
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 4
    }
  }
})



// $(document).ready(function () {
//   $(window).scroll(function () {
//     if ($(window).scrollTop() > 76) {
//       $('header').addClass('sticky')
//     }
//     else {
//       $('header').removeClass('sticky')
//     }
//   });
// })

$(document).ready(function () {
  $('.close_menu').click(function () {
    $('.navbar-collapse').removeClass('show')
  });
});
