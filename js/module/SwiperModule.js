export default function SwiperModule() {
    // HERO
    var swiperHeroThumb = new Swiper(".swiperHeroThumb", {
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            320: {
                slidesPerView: 2,
                // spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                // spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                // spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                // spaceBetween: 20,
            },
        },
    });

    var swiperHeroBg = new Swiper(".mySwiperBg", {
        spaceBetween: 10,
        speed: 2000,
        // touchEventsTarget: 'container',
        preventInteractionOnTransition: true,
        allowTouchMove: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperHeroThumb
        },
    });

    var swiperHeroBox = new Swiper(".mySwiperBox", {
        spaceBetween: 10,
        speed: 2000,
        allowTouchMove: false,
        thumbs: {
            swiper: swiperHeroThumb
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    swiperHeroBg.controller.control = swiperHeroBox;
    swiperHeroBox.controller.control = swiperHeroBg;
    // Giới thiệu chung
    var swiperCoverFlow = new Swiper(".homeCoverFlow", {
        effect: "coverflow",
        speed: 2500,
        // autoplay: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
    // Vì sao chọn chúng tôi
    var homeChooseThumb = new Swiper(".homeChooseThumb", {
        direction: 'vertical',
        spaceBetween: 20,
        breakpoints: {
            320: {
                slidesPerView: 1,
                // spaceBetween: 20,
            },
            640: {
                slidesPerView: 1,
                // spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                // spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                // spaceBetween: 20,
            },
        },
        // freeMode: true,
        // watchSlidesProgress: true,
    });

    var homeChoose = new Swiper(".homeChoose", {
        spaceBetween: 10,
        speed: 2000,
        effect: "fade",
        // touchEventsTarget: 'container',
        // preventInteractionOnTransition: true,
        allowTouchMove: false,
        simulateTouch: true,
        navigation: {
            nextEl: ".home-choose-next",
            prevEl: ".home-choose-prev",
        },
        thumbs: {
            swiper: homeChooseThumb,
        },
    });

    // CHUYÊN CUNG CẤP SP NỔI BẬC
    var homeOutsThumb = new Swiper(".homeOutsThumb", {
        spaceBetween: 20,
        // slidesPerView: 1,
        // freeMode: true,
        // watchSlidesProgress: true,
    });

    var homeOuts = new Swiper(".homeOuts", {
        spaceBetween: 10,
        speed: 2000,
        // touchEventsTarget: 'container',
        // preventInteractionOnTransition: true,
        // allowTouchMove: false,
        // simulateTouch: true,
        pagination: {
            el: '.progress-line',
            type: 'progressbar',
            // clickable: true, // Cho phép thanh tiến trình là clickable
        },
        navigation: {
            nextEl: ".home-outs-next",
            prevEl: ".home-outs-prev",
        },
        thumbs: {
            swiper: homeOutsThumb,
        },
    });


    // KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI
    var talkSwiperThumb = new Swiper(".talkSwiperThumb", {
        // spaceBetween: 100,
        // slidesPerView: 1,

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
                direction: 'horizontal',
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
                direction: 'horizontal',

            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,

            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,

            },
        },
        direction: 'vertical',
        freeMode: true,
        watchSlidesProgress: true,
    });

    var talkSwiperMain = new Swiper(".talkSwiperMain", {
        spaceBetween: 10,
        // slidesPerView: 1,

        effect: "cards",
        grabCursor: true,
        speed: 500,
        touchEventsTarget: 'container',
        centeredSlides: true,
        simulateTouch: true,
        pagination: {
            el: '.talk-line',
            type: 'progressbar',
        },
        navigation: {
            nextEl: ".talk-next",
            prevEl: ".talk-prev",
        },
        thumbs: {
            swiper: talkSwiperThumb,
        },
        on: {
            slideChangeTransitionStart: function () {
                const totalSlides = this.slides.length;
                const currentSlideIndex = this.activeIndex + 1;
                const progress = (currentSlideIndex / totalSlides) * 100;
                document.documentElement.style.setProperty('--progress', progress + '%');
            }
        },
        // autoplay: {
        //     delay: 5000, // Thời gian chuyển slide tự động
        //     disableOnInteraction: false, // Không ngừng chuyển slide tự động khi người dùng tương tác
        // }
    });

    // CẬP NHẬT LIÊN TỤC
    var homeUpdateSwiperThumb = new Swiper(".homeUpdateSwiperThumb", {
        // direction: 'vertical',
        spaceBetween: 20,
        breakpoints: {
            320: {
                slidesPerView: 2,
                // spaceBetween: 20
            },
            640: {
                slidesPerView: 3,
                // spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                // spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                // spaceBetween: 1000,
            },
        },
    });

    var homeUpdateSwiperMain = new Swiper(".homeUpdateSwiperMain", {
        speed: 500,
        paginationClickable: true,
        slidesPerView: 1,
        spaceBetween: 1000,
        navigation: {
            nextEl: ".home-update-next",
            prevEl: ".home-update-prev",
        },
        thumbs: {
            swiper: homeUpdateSwiperThumb,
        },
    });

    // Product
    var productSliderThumb = new Swiper(".productSliderThumb", {
        // direction: 'vertical',
        spaceBetween: 20,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        // freeMode: true,
        // watchSlidesProgress: true,
    });

    var productSlider = new Swiper(".productSlider", {
        spaceBetween: 10,
        effect: "fade",
        // touchEventsTarget: 'container',
        // preventInteractionOnTransition: true,
        allowTouchMove: false,
        simulateTouch: true,

        navigation: {
            nextEl: ".product-next",
            prevEl: ".product-prev",
        },
        thumbs: {
            swiper: productSliderThumb,
        },
    });

    var productSimilarMain = new Swiper(".productSimilarMain", {
        spaceBetween: 10,
        speed: 2000,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        // touchEventsTarget: 'container',
        // preventInteractionOnTransition: true,
        // allowTouchMove: true,

        pagination: {
            el: ".product-similar-pagination",
            clickable: true,
        },
    });



    // About
    var mySwiperAbout = new Swiper(".mySwiperAbout", {
        paginationClickable: true,
        slidesPerView: 1,
        breakpoints: {
            320: {
                slidesPerView: 4,
                spaceBetween: 20,
                grid: {
                    rows: 1,
                },
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 20,
                grid: {
                    rows: 1,
                },
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
                grid: {
                    rows: 1,
                },
            },
            1024: {
                slidesPerView: 4,
                grid: {
                    rows: 2,
                },
            },
        },
    });


}