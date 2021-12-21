import barba from '@barba/core';
import AOS from 'aos';
import gsap from 'gsap';
import {TimelineMax} from "gsap/all";


$(document).ready(function () {
    if ($.cookie('count') === '1') {
        // do nothing
    } else {
        $("#start_screen").addClass("d-none");
    }

    $(".menu_button").click(function () {
        $(".open_icon, .close, .close_icon").toggleClass("hide");
        $(".menu_button, #wrapper-navbar").toggleClass("open");
        $(".nav-link, .dropdown-item").toggleClass("fade_in");
    });

    $(".nav-link, .dropdown-item, .navbar-brand").click(function () {
        $(".open_icon, .close, .close_icon").toggleClass("hide");
        $(".menu_button, #wrapper-navbar").removeClass("open");
    });

    $(".privacy_modal_link").click(function () {
        $(".privacy_modal").addClass("active");
        $("body, html").toggleClass("no-scroll");
    });

    $(".disclaimer_modal_link").click(function () {
        $(".disclaimer_modal").addClass("active");
        $("body, html").toggleClass("no-scroll");
    });

    $(".close").click(function () {
        $(".privacy_modal, .disclaimer_modal").removeClass("active");
        $("body, html").removeClass("no-scroll");
    });


    document.onkeydown = function (evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            $(".modal").removeClass("active");
            $("body, html").removeClass("no-scroll");
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


function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
        setTimeout(() => {
            done();
        }, n);
    });
}

function pageTransition() {
    let tl = gsap.timeline();
    tl.set('.loader', {
        display: 'block'
    }).set('.loader__element', {
        transformOrigin: 'center right',
    }, "<").to('.loader__element', 1, {
        scaleX: 1,
        ease: 'expo.inOut',
        stagger: -5,
    }).set('.loader__element', {
        transformOrigin: 'center left',
    }).to('.loader__element', 0.8, {
        scaleX: 0,
        ease: 'expo.inOut',
        stagger: -0.1,
    }).set('.loader', {
        display: 'none',
    });
}


$(function () {
    barba.init({
        cacheIgnore: true,
        prefetchIgnore: true,
        preventRunning: false,
        sync: false,
        debug: true,

        prevent: ({el}) => el.classList && el.classList.contains('prevent'),


        transitions: [{
            async leave(data) {

                const done = this.async();

                pageTransition();
                await delay(1000);

                let scrollX = 0
                let scrollY = 0

                barba.hooks.leave(() => {
                    scrollX = barba.history.current.scroll.x;
                    scrollY = barba.history.current.scroll.y;
                });

                window.scrollTo(scrollX, scrollY);

                done();

                barba.hooks.enter(() => {
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

                    function resizeForm() {
                        var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
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

                    $('.image-popup-vertical-fit').magnificPopup({
                        type: 'image',
                        mainClass: 'mfp-with-zoom',
                        gallery: {
                            enabled: true
                        },

                        zoom: {
                            enabled: true,

                            duration: 300, // duration of the effect, in milliseconds
                            easing: 'ease-in-out', // CSS transition easing function

                            opener: function (openerElement) {

                                return openerElement.is('img') ? openerElement : openerElement.find('img');
                            }
                        }
                    })
                });


            },
        },
        ],
    });
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

