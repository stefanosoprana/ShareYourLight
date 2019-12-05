
require('./bootstrap');

// *** SB-ADMIN-2 ***
$( document ).ready(function() {

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  // $(document).on('click', 'a.scroll-to-top', function(e) {
  //   var $anchor = $(this);
  //   $('html, body').stop().animate({
  //     scrollTop: ($($anchor.attr('href')).offset().top)
  //   }, 1000, 'easeInOutExpo');
  //   e.preventDefault();
  // });


// *** JavaScript Form ***

  $('.section__page__button button').click(function() {

    if ($('.section__page__description textarea').val() !== "" && $('.section__page__title input').val() !== "") {
      $(this).parent('.section__page__button').addClass('display-none')
      $('.section__section').fadeIn()
    }
    else {
      alert('riempi i campi')
    }

  })


  $('.section__section__button button').click(function() {

    if ($('.section__section__title input').val() !== "") {
      $(this).parent('.section__section__button').addClass('display-none')
      $('.section__element').fadeIn()
    }
    else {
      alert('riempi i campi')
    }
  })

  // if ($('.section__element select').val() == "titles") {
  //   // $('.section__title').fadeIn()
  //     console.log('ok');
  // }
  // else {
  //   console.log('non ok');
  // }







//   $('.section__element__select select').on('change', function (e) {
//     var optionSelected = $("option:selected", this);
//     var valueSelected = this.value;
//
//     if (valueSelected == 'titolo') {
//       $('.option').addClass('display-none')
//       $('.section__title').removeClass('display-none');
//       $('.add_element').removeClass('display-none');
//     }
//
//     if (valueSelected == 'sottotitolo') {
//       $('.option').addClass('display-none')
//       $('.section__subtitle').removeClass('display-none');
//     }
//
//     if (valueSelected == 'immagine') {
//       $('.option').addClass('display-none')
//       $('.section__image').removeClass('display-none');
//     }
//
//     if (valueSelected == 'descrizione') {
//       $('.option').addClass('display-none')
//       $('.section__description').removeClass('display-none');
//     }
//
// });

});
