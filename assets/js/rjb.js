import AOS from 'aos';
import {TimelineMax} from "gsap/all";


$(document).ready(function () {
    if ($.cookie('count') === '1') {
        // do nothing
    } else {
        $("#start_screen").addClass("d-none");
    }

    $(".menu_button").click(function () {
        $(".open_icon").toggleClass("hide");
        $(".close, .close_icon").toggleClass("hide");
        $(".menu_button, #wrapper-navbar").toggleClass("open");
        $(".nav-link, .dropdown-item, .menu_info").toggleClass("fade_in");
        $(".top_menu").toggleClass("black");
    });

    $(".nav-link, .dropdown-item, .navbar-brand, .menu_button.open").click(function () {
        $(".menu_button").addClass("menu_closed").removeClass("menu_open");
        $(".open_icon").removeClass("hide");
        $(".close, .close_icon").addClass("hide");
        $(".menu_button, #wrapper-navbar, .top_menu").removeClass("open");
        $(".top_menu").removeClass("black");
    });

    $(".privacy_modal_link").click(function () {
        $(".privacy_modal").addClass("active");
        $(".menu_container").toggleClass("fade_out");
    });

    $(".disclaimer_modal_link").click(function () {
        $(".disclaimer_modal").addClass("active");
        $(".menu_container").toggleClass("fade_out");
    });

    $(".close").click(function () {
        $(".privacy_modal, .disclaimer_modal").removeClass("active");
        $(".menu_container").removeClass("fade_out");
    });


    document.onkeydown = function (evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            $(".modal").removeClass("active");
            $("menu_container").removeClass("fade_out");
        }
    };

    function homeSlider() {
        $('.header_slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000,
            fade: true,
            cssEase: 'ease-in-out',
            pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            // prevArrow: $('.prev_header_slide'),
            // nextArrow: $('.next_header_slide'),
        });
    }
    homeSlider();


});

$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {

                });
            }
        }
    });

window.onload = function () {
    var current = location.pathname;
    $('#nav li a').each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
};


if ($.cookie('count') === '1') {

    const tl = new TimelineMax();

    tl
        .from($("#start_logo"), 2, {
            top: '55%',
            duration: 2,
            ease: "power3.out"
        })
        .from($("#start_screen, #start_logo"), 2, {
                opacity: 1,
                display: 'flex',
                duration: 1,
                ease: "none"
            },
            ">"
        )
} else {
    // Do nothing
}

window.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        once: true,
        duration: 2000
    })
});

$(window).on('load', function () {
    AOS.refresh();
});






// tl.set(".loader", {
//     display: 'block'
//
// });
// tl.set(".loader__element", 1,{
//         scaleX: 1,
//         ease: 'expo.inOut',
//         stagger: 0.1,
// });
// tl.set(".loader__element", {
//     transformOrigin: 'center left',
// })
// tl.set(".loader__element", 0.8, {
//         scaleX: 0,
//         ease: 'expo.inOut',
//         stagger: -0.1,
// })
// tl.set(".loader", {
//     display: 'none',
// })
// tl.to(".loading-screen", {
//     duration: 0.5,
//     width: "100%",
//     right: "0%",
//     ease: "expo.inOut",
// });
// tl.to(".loading-screen", {
//     duration: 0.5,
//     width: "100%",
//     right: "0%",
//     ease: "expo.inOut",
// });
//
// tl.to(".loading-screen", {
//     duration: 0.5,
//     width: "100%",
//     right: "100%",
//     ease: "expo.inOut",
//     delay: 0.3,
// });
// tl.set(".loading-screen", { right: "-100%" });


jQuery(document).ready(function () {
    function resizeForm() {
        let width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
        if (width < 1024) {
            $(document).ready(function () {
                function portfolioSlider() {
                    $('.portfolio_slider').slick({
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 5000,
                        pauseOnHover: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: true,
                        prevArrow: $('.prev_portfolio_item'),
                        nextArrow: $('.next_portfolio_item'),
                    });
                }
                portfolioSlider();
            });

        } else {

        }
    }

    window.onresize = resizeForm;
    resizeForm();
});

