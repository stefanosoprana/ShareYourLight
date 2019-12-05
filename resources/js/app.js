/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


$( document ).ready(function() {

  // *** BARS MENU ***

  $('.bars-menu__button').click(function() {

    // BUTTON

    $('.bars:nth-child(1)').toggleClass('rotate45')
    $('.bars:nth-child(2)').toggleClass('opacity-none')
    $('.bars:nth-child(3)').toggleClass('rotate135')

    $('.bars-menu').slideToggle("fast" , function() {
      $('.header').toggleClass('position-fixed')
      $('.section-story').toggleClass('position-relative-story')
    });
  })

  // *** ANIMATION ON HOVER ***

  $('.image__box').mouseenter(function() {
    $('.place-holder').hide()
    $(this).children('.image__box__inside')
    .addClass('scale')
    .removeClass('opacity')

    $(this).removeClass('relative')
    .addClass('zoomIn')

    $(this).children('.image__box__text')
    .removeClass('opacity-none')
    .removeClass('base-position')
    .addClass('slide-text')
  })

  $('.image__box').mouseleave(function() {
    $('.place-holder').show()
    $(this).children('.image__box__inside')
    .removeClass('scale')
    .addClass('opacity')

    $(this).removeClass('zoomIn')
    .addClass('relative')

    $(this).children('.image__box__text')
    .addClass('opacity-none')
    .addClass('base-position')
    .removeClass('slide-text')

  })

// *** CAROUSEL ***

$('.carousel').carousel({
  interval: false
});

function generalCarousel(selectorId) {

  function findCarousel(item) {
      return $(selectorId).find(item)
    }

  findCarousel(".toSlide1").click(function() {

    if (findCarousel('.section-carousel__title__subtitle span').hasClass('selected')) {
      findCarousel('.section-carousel__title__subtitle span').removeClass('selected')
    }

    findCarousel(".toSlide1").addClass('selected')

    if (findCarousel(".toSlide1").hasClass('selected')) {
      findCarousel(".toSlide1").removeClass('cursor-pointer')
      findCarousel(".toSlide2").addClass('cursor-pointer')
    }

    findCarousel('.carousel').carousel(0)

  })

  findCarousel('.dots li[data-slide-to=0]').click(function() {

    if (findCarousel('.section-carousel__title__subtitle span').hasClass('selected')) {
      findCarousel('.section-carousel__title__subtitle span').removeClass('selected')
    }
    findCarousel(".toSlide1").addClass('selected')

    if (findCarousel('.dots li').hasClass('active')) {
      findCarousel('.dots li').removeClass('active')
    }

    findCarousel('.dots li[data-slide-to=0]').addClass('active')

    findCarousel('.carousel').carousel(0)

  })

  findCarousel(".toSlide2").click(function() {


    if (findCarousel('.section-carousel__title__subtitle span').hasClass('selected')) {
      findCarousel('.section-carousel__title__subtitle span').removeClass('selected')
    }

    findCarousel(".toSlide2").addClass('selected')

    if (findCarousel(".toSlide2").hasClass('selected')) {
      findCarousel(".toSlide2").removeClass('cursor-pointer')
      findCarousel(".toSlide1").addClass('cursor-pointer')
    }

    findCarousel('.carousel').carousel(1)

  })

  findCarousel('.dots li[data-slide-to=1]').click(function() {

    if (findCarousel('.section-carousel__title__subtitle span').hasClass('selected')) {
      findCarousel('.section-carousel__title__subtitle span').removeClass('selected')
    }

    findCarousel(".toSlide2").addClass('selected')

    if (findCarousel('.dots li').hasClass('active')) {
      findCarousel('.dots li').removeClass('active')
    }

    findCarousel('.dots li[data-slide-to=1]').addClass('active')

    findCarousel('.carousel').carousel(1)

  })

}

generalCarousel("#firstCarousel")

generalCarousel("#secondCarousel")

// *** TEXT SLIDE UP ***

function fadeInElement(element, space){
  var spaceTop = $(element).offset().top
  var viewportTop = spaceTop - space
  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > viewportTop){
      $(element).removeClass('slideBase')
      .removeClass('opacity-none')
      .addClass('slideUp')
    } else {
      $(element).removeClass('slideUp')
      .addClass('opacity-none')
      .addClass('slideBase')
    }
  })
}

fadeInElement('.section-background-fix__main__text', 1000)

fadeInElement('.section-community__header', 1100)

});
