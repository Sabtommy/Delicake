"use strict";

(function ($) {
    // Background set
    $(".set-bg").each(function () {
        var bg = $(this).data("setbg");
        $(this).css("background-image", "url(" + bg + ")");
    });

    // Hero slider
    $(".hero__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: [
            "<span class='fa fa-angle-left'></span>",
            "<span class='fa fa-angle-right'></span>",
        ],
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false,
    });

    // Categories slider
    $(".categories__slider").owlCarousel({
        loop: true,
        margin: 22,
        items: 5,
        dots: false,
        nav: true,
        navText: [
            "<span class='arrow_carrot-left'><span/>",
            "<span class='arrow_carrot-right'><span/>",
        ],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
                margin: 0,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            },
        },
    });

    // Testimonial slider
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 2,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
        },
    });

    // Related products slider
    $(".related__products__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: false,
        nav: true,
        navText: [
            "<span class='arrow_carrot-left'><span/>",
            "<span class='arrow_carrot-right'><span/>",
        ],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
        },
    });

    // Select
    $("select").niceSelect();

    // Magnific Popup
    $(".video-popup").magnificPopup({
        type: "iframe",
    });

    // Barfiller
    $("#bar1").barfiller({
        barColor: "#111111",
        duration: 2000,
    });
    $("#bar2").barfiller({
        barColor: "#111111",
        duration: 2000,
    });
    $("#bar3").barfiller({
        barColor: "#111111",
        duration: 2000,
    });

    // Single product
    $(".product__details__thumb img").on("click", function () {
        $(".product__details__thumb .pt__item").removeClass("active");
        $(this).addClass("active");
        var imgurl = $(this).data("imgbigurl");
        var bigImg = $(".big_img").attr("src");
        if (imgurl != bigImg) {
            $(".big_img").attr({
                src: imgurl,
            });
        }
    });

    // Quantity change
    var proQty = $(".pro-qty");
    var newVal;
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on("click", ".qtybtn", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.hasClass("inc")) {
            newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
})(jQuery);
