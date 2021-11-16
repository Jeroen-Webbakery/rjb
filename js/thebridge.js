




$(document).ready(function () {

    $(".hamburger").click(function () {
        $("#navbarNavDropdown, .contact_info").toggleClass("active");
        $("body, html").toggleClass("no-scroll");
        $("#wrapper-navbar").removeClass("scrolled-up").removeClass("scrolled-down");
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


    /* Hamburger menu */
    let isOpen = false;

    /* Hamburger layers */
    const hamburgerTop = document.getElementsByClassName('hamburgerTop')[0];
    const hamburgerMiddle = document.getElementsByClassName('hamburgerMiddle')[0];
    const hamburgerBottom = document.getElementsByClassName('hamburgerBottom')[0];

    document.getElementsByClassName('hamburger')[0].addEventListener('click', toggle);

    function toggle() {
        if (isOpen) {
            hamburgerTop.classList.remove('open');
            hamburgerMiddle.classList.remove('open');
            hamburgerBottom.classList.remove('open');
            isOpen = false;
            return;
        }
        hamburgerTop.classList.add('open');
        hamburgerMiddle.classList.add('open');
        hamburgerBottom.classList.add('open');
        isOpen = true;
    }

});


document.addEventListener("DOMContentLoaded", function () {

    el_autohide = document.querySelector('#wrapper-navbar');

    // add padding-top to bady (if necessary)
    navbar_height = document.querySelector('#wrapper-navbar').offsetHeight;
    document.body.style.paddingTop = '0px';


    if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener('scroll', function () {
            let scroll_top = window.scrollY;
            if (scroll_top < last_scroll_top) {
                el_autohide.classList.remove('scrolled-down');
                el_autohide.classList.add('scrolled-up');
            } else {
                el_autohide.classList.add('scrolled-up');
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }

    window.addEventListener('scroll', myFunction);

    // Get the navbar
    var navbar = document.getElementById("wrapper-navbar");


    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        let scrollPosition = Math.round(window.scrollY);

        if (scrollPosition < 50) {
            navbar.classList.remove("scrolled-up");
            navbar.classList.remove("scrolled-down");
        } else {

        }
    }


    // if

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
                    scrollTop: target.offset().top - 100
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


$(document).ready(function () {
    $('.voorzieningen_text_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 8,
        centerMode: true,
        vertical: true,
        fade: false,
        dots: false,
        arrows: false,
        useTransform: true,
        asNavFor: '.voorzieningen_slider',
        focusOnSelect: true
    });

    $('.voorzieningen_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: false,
        fade: true,
        dots: true,
        useTransform: true,
        prevArrow: $('.prev_voorziening_slide'),
        nextArrow: $('.next_voorziening_slide'),
        cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
        asNavFor: '.voorzieningen_text_slider',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    fade: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.hotspot_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: false,
        fade: true,
        dots: true,
        useTransform: true,
        prevArrow: $('.prev_hotspot_slide'),
        nextArrow: $('.next_hotspot_slide'),
        cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
    });
});

$(document).ready(function () {
    $('.client_slider').slick({
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        slidesToShow: 3,
        centerMode: false,
        dots: false,
        arrows: true,
        prevArrow: $('.client_left'),
        nextArrow: $('.client_right'),
        variableWidth: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});

$(document).ready(function () {
    $('.bullet_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        centerMode: true,
        dots: false,
        prevArrow: $('.prev_bullet'),
        nextArrow: $('.next_bullet'),
        vertical: true,
        swipeToSlide: true,
        focusOnSelect: true,
    });
});

$(document).ready(function () {
    $('.work_at_slider').slick({
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        slidesToShow: 2,
        centerMode: false,
        dots: false,
        arrows: true,
        prevArrow: $('.client_left'),
        nextArrow: $('.client_right'),
        variableWidth: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});

jQuery(document).ready(function () {
    function resizeForm() {
        var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
        if (width > 1024) {
            $(document).ready(function () {
                // instantiate TimelineMax
                const tl = new TimelineMax();

                tl
                    .from($(".header_image_left"), 1, {
                        height: 0,
                        duration: 2,
                        ease: "power2.out"

                    })
                    .fromTo($(".header_right"), 1, {
                            right: -1000
                        }, {
                            duration: 2,
                            right: 0,
                            ease: "power2.out"
                        },
                        "<"
                    )
                    .fromTo($(".logo"), 1, {
                            height: 0
                        }, {
                            duration: 3,
                            height: 400,
                            ease: "power2.out"
                        },
                        ">"
                    );

            });

        } else {
            $(document).ready(function () {
                // instantiate TimelineMax
                const tl = new TimelineMax();

                tl
                    .fromTo($(".header_image_left"), 1, {
                        height: 0
                    }, {
                        duration: 2,
                        height: 260,
                        ease: "power2.out"
                    })
                    .fromTo($(".header_right"), 1, {
                            bottom: -1000
                        }, {
                            duration: 2,
                            bottom: 0,
                            ease: "power2.out"
                        },
                        "<"
                    )
                    .fromTo($(".logo"), 1, {
                            height: 0
                        }, {
                            duration: 3,
                            height: 200,
                            ease: "power2.out"
                        },
                        ">"
                    );

            });
        }
    }

    window.onresize = resizeForm;
    resizeForm();
});





