if ($(".product-slider").length > 0) {
    new Swiper('.product-slider', {
        Width: 552,
        loop: true,
        centeredSlides: true,
        grabCursor: true,
        spaceBetween: 0,
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
}


if ($(".main-sliderr").length > 0) {

    const swipere = new Swiper('.main-sliderr', {
        loop: true,
        centeredSlides: true,
        grabCursor: true,
        spaceBetween: 0,
        slidesPerView: 1,
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        //     type: 'progressbar',
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,

        }
    });

    let totalSlide = $('.main-sliderr .swiper-slide').length - 2;
    var fragment = document.querySelector('.main-slider__current');
    var fragment2 = document.querySelector('.main-slider__totalSlide');
    var current = swipere.realIndex + 1;
    var idx = current < 10 ? ("0" + current) : current;
    var tdx = totalSlide < 10 ? ("0" + totalSlide) : totalSlide;
    fragment.innerHTML = (idx + ' |');
    fragment2.innerHTML = (tdx);

    $('.progressbar-text').html(("0" + current) + '. ' +$('.main-slider__title').eq(1).text())

    swipere.on('slideChange', function () {
        var fragment = document.querySelector('.main-slider__current');
        var fragment = document.querySelector('.main-slider__current');
        var current = swipere.realIndex + 1;
        if (current > totalSlide)
            current = 1;
        var idx = current < 10 ? ("0" + current) : current;
        var tdx = totalSlide < 10 ? ("0" + totalSlide) : totalSlide;
        fragment.innerHTML = (idx + ' | ');
        fragment2.innerHTML = (tdx);
        //progressbar
        $('.main-sliderr_progressbar_line1').css({
            "width": (current / totalSlide * 100) + '%',
        })
        $('.progressbar-text').html(("0" + current) + '. ' +$('.main-slider__title').eq(current).text())
    });



    // progressbar




}