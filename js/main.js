// ACTIVE HEADER

  var pathname = window.location.pathname;


  if (pathname=='/') {
    
    $('.head-opc-1').addClass('menu-active');
  }

  if (pathname=='/us.php'||pathname=='/doctor.php'||pathname=='/specialist.php'||pathname=='/history.php') {
    
    $('.head-opc-2').addClass('menu-active');
  }

  if (pathname=='/inductors.php'||pathname=='howtowork.php'||pathname=='/questions.php') {
    
    $('.head-opc-3').addClass('menu-active');
  }

  if (pathname=='/testimonials.php') {
    
    $('.head-opc-4').addClass('menu-active');
  }

  if (pathname=='/treatment.php'||pathname=='/kids.php'||pathname=='/cancer.php'||pathname=='/vision.php'||pathname=='/young.php'||pathname=='/prevention.php'||pathname=='/diabetes.php'||pathname=='/artritis.php'||pathname=='/problems.php') {
    
    $('.head-opc-5').addClass('menu-active');
  }

  if (pathname=='/contact.php') {
    
    $('.head-opc-6').addClass('menu-active');
  }


// ACORDEON

  $('.opc-collapse-1').click(function(){
    $('.opc-panel-1').toggle( "fast" );
    $('.minus-1,.plus-1').toggle( "fast" );
    $('.opc-collapse-1').toggleClass( "active-button" );
  });

  $('.opc-collapse-2').click(function(){
    $('.opc-panel-2').toggle( "fast" );
    $('.minus-2,.plus-2').toggle( "fast" );
    $('.opc-collapse-2').toggleClass( "active-button" );
  });

  $('.opc-collapse-3').click(function(){
    $('.opc-panel-3').toggle( "fast" );
    $('.minus-3,.plus-3').toggle( "fast" );
    $('.opc-collapse-3').toggleClass( "active-button" );
  });

  $('.opc-collapse-4').click(function(){
    $('.opc-panel-4').toggle( "fast" );
    $('.minus-4,.plus-4').toggle( "fast" );
    $('.opc-collapse-4').toggleClass( "active-button" );
  });

  $('.opc-collapse-5').click(function(){
    $('.opc-panel-5').toggle( "fast" );
    $('.minus-5,.plus-5').toggle( "fast" );
    $('.opc-collapse-5').toggleClass( "active-button" );
  });

  $('.opc-collapse-6').click(function(){
    $('.opc-panel-6').toggle( "fast" );
    $('.minus-6,.plus-6').toggle( "fast" );
    $('.opc-collapse-6').toggleClass( "active-button" );
  });

  $('.opc-collapse-7').click(function(){
    $('.opc-panel-7').toggle( "fast" );
    $('.minus-7,.plus-7').toggle( "fast" );
    $('.opc-collapse-7').toggleClass( "active-button" );
  });

  $('.opc-collapse-8').click(function(){
    $('.opc-panel-8').toggle( "fast" );
    $('.minus-8,.plus-8').toggle( "fast" );
    $('.opc-collapse-8').toggleClass( "active-button" );
  });

  $('.opc-collapse-9').click(function(){
    $('.opc-panel-9').toggle( "fast" );
    $('.minus-9,.plus-9').toggle( "fast" );
    $('.opc-collapse-9').toggleClass( "active-button" );
  });

  $('.opc-collapse-10').click(function(){
    $('.opc-panel-10').toggle( "fast" );
    $('.minus-10,.plus-10').toggle( "fast" );
    $('.opc-collapse-10').toggleClass( "active-button" );
  });


(function ($) {
  "use strict";

  // Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 40;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
      }
    });
  });

  // jQuery counterUp (used in Whu Us section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio isotope and filter
  $(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on( 'click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');
  
      portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
    }
  });

})(jQuery);

