"use strict";

(function ($) {
    // Testimonial slider
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 2,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        autoplayTimeout: 10000,
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
