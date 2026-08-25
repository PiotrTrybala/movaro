
import { Swiper } from 'swiper';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

document.addEventListener("DOMContentLoaded", () => {

    const reviewsSwiper = document.querySelector(".b-reviews__swiper");

    new Swiper(reviewsSwiper, {
        wrapperClass: 'b-reviews__swiper-wrapper',
        slideClass: 'b-reviews__content',

        modules: [Autoplay],
        loop: true,

        slidesPerView: 1,
        spaceBetween: 30,

        speed: 30000,

        autoplay: {
            delay: 0,
            pauseOnMouseEnter: true,
            disableOnInteraction: false,
            waitForTransition: true,
        },
    });

});