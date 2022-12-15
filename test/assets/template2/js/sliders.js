new Swiper('.product-slider', {
    loop: true,
    centeredSlides: true,
    grabCursor: true,
    breakpoints: {
        // when window width is >= 320px

        0: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        578: {
            slidesPerView: 1,
            spaceBetween: 0
        },

        900: {
            slidesPerView: 1.4,

        },
        1000: {
            slidesPerView: 1.7,
        },

        1200: {
            slidesPerView: 2.1,

        },

        1400: {
            slidesPerView: 2.5,

        },

        1600: {
            slidesPerView: 2.8,
        }
    },

    slidesPerView: 3,
    navigation: {
        nextEl: ".product-card__navbut .swiper-arrow-next",
        prevEl: ".product-card__navbut .swiper-arrow-prev",
    },
});