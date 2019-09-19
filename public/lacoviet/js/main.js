$(document).ready(function () {
    $('.nav-mobile').click(function () {
        $('.nav-list').toggle();
    });

    $('.nav-list').on('click', '.nav-click', function () {
        $(this).siblings('.nav-submenu').toggle();
        $(this).children('.nav-arrow').toggleClass('nav-rotate');
    });

    // $(window).on("scroll", function() {
    //     var scrollHeight = $(document).height();
    //     var scrollPosition = $(window).height() + $(window).scrollTop();
    //     console.log(scrollPosition);
    //     if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
    //         // when scroll to bottom of the page
    //         alert("OK");
    //     }
    // });

    $(".slides.owl-carousel").owlCarousel({
        loop: false,
        rewind: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        dots: false,
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
        },
    });

    $(".bestselling-grid.owl-carousel").owlCarousel({
        loop: false,
        rewind: true,
        margin: 0,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        },
    });

    // Page pagination
    $('.pagination li [rel=prev]').html('Trước');

    $('.pagination li [rel=next]').html('Sau');

    $('.pagination .disabled').hide();
    
    // Product image in product view page
    var $imagesSlider = $(".slider-for > div"),
        $thumbnailsSlider = $(".slider-nav > div");

    $imagesSlider.slick({
      speed:300,
      slidesToShow:1,
      slidesToScroll:1,
      cssEase:'linear',
      fade:true,
      draggable:false,
      asNavFor:".slider-nav > div",
    });

    $thumbnailsSlider.slick({
      speed:300,
      slidesToShow:5,
      slidesToScroll:1,
      cssEase:'linear',
      centerMode:true,
      draggable:false,
      focusOnSelect:true,
      asNavFor:".slider-for > div",
      prevArrow: $('.slick-prev'),
      nextArrow: $('.slick-next'),
      responsive: [
        {
          breakpoint: 720,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 350,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });

    $('.slick-prev').html('<');
    $('.slick-next').html('>');
});
