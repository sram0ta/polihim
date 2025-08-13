window.addEventListener("load", () => {
    ScrollTrigger.refresh();
});



window.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    openLanguage();
    openMenu();
    galleryAdvantages();
    galleryBenefits();
    galleryHistory();
    achievementLottie();
    scaleAnimation();
    qualityAnimation();
    // heroAnimation();
    ourClientsItemsAnimation();
    advantagesAnimation();
    productsLottie();

    const preloader = document.querySelector('.preloader');
    const numberEl = document.querySelector('.preloader__number');

    let current = 1;
    const max = 99;
    const duration = 1500;
    const interval = Math.floor(duration / (max - current));

    const counterInterval = setInterval(() => {
        current++;
        if (current > max) {
            clearInterval(counterInterval);
            return;
        }
        numberEl.textContent = current.toString().padStart(2, '0');
    }, interval);

    preloader.classList.add('active');

    setTimeout(() => {
        preloader.classList.remove('active');
        preloader.classList.add('done');
    }, duration);
});

const openLanguage = () => {
    let langToggle = document.querySelectorAll('.header__lang__activity');
    let langAll = document.querySelectorAll('.header__lang__all');

    if (langToggle.length && langAll.length) {
        langToggle.forEach((toggle, index) => {
            toggle.addEventListener('click', () => {
                toggle.classList.toggle('active');
                if (langAll[index]) {
                    langAll[index].classList.toggle('active');
                }
            });
        });
    }
};

const openMenu = () => {
    if (window.innerWidth > 1024) return;

    const button = document.getElementById('menuToggleButton');
    const titles = button.querySelectorAll('.button-long__title');
    const menu = document.getElementById('menu');
    const body = document.body;

    if (!button || !menu) return;

    const labels = {
        ru: { open: 'Закрыть', closed: 'Меню' },
        en: { open: 'Close', closed: 'Menu' },
    };

    const shortLang = (document.documentElement.lang || 'en').slice(0, 2);
    const label = labels[shortLang] || labels['en'];

    button.addEventListener('click', function () {
        const isOpen = body.classList.toggle('fixed');
        menu.classList.toggle('active');

        titles.forEach(title => {
            title.textContent = isOpen ? label.open : label.closed;
        });
    });
};




const galleryAdvantages = () => {
    if (document.querySelector('#advantages-gallery')) {
        const remToPx = (rem) => {
            return parseFloat(getComputedStyle(document.documentElement).fontSize) * rem;
        };

        const swiper = new Swiper("#advantages-gallery", {
            slidesPerView: 1.25,
            speed: 500,
            loop: false,
            spaceBetween: remToPx(0.5),
            navigation: {
                prevEl: '.possibilities ._prev',
                nextEl: '.possibilities ._next',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 1.25
                }
            }
        });
    }
}

const galleryBenefits = () => {
    if (document.querySelector('#benefits-gallery')) {
        const swiper = new Swiper("#benefits-gallery", {
            slidesPerView: 1,
            speed: 500,
            loop: false,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                prevEl: '.benefits ._prev',
                nextEl: '.benefits ._next',
            },
        });
    }
}

const galleryHistory = () => {
    if (document.querySelector('#history-content') && document.querySelector('#history-ruler')) {

        const galleryHistoryRulerSwiper = new Swiper("#history-ruler", {
            slidesPerView: 2.2,
            speed: 500,
            loop: false,
            allowTouchMove: false,
            simulateTouch: false,
            allowSlidePrev: false,
            allowSlideNext: false,
            keyboard: false,
            mousewheel: false,
        });

        const galleryHistorySwiper = new Swiper("#history-content", {
            slidesPerView: 1,
            speed: 500,
            loop: false,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            virtualTranslate: false,
            observer: true,
            observeParents: true,
            navigation: {
                prevEl: '.history ._prev',
                nextEl: '.history ._next',
            },
            controller: {
                control: galleryHistoryRulerSwiper
            },
            on: {
                init: function () {
                    const activeIndex = this.activeIndex;
                    const rulerSlides = document.querySelectorAll('#history-ruler .swiper-slide');
                    rulerSlides.forEach(slide => slide.classList.remove('is-active'));
                    if (rulerSlides[activeIndex]) {
                        rulerSlides[activeIndex].classList.add('is-active');
                    }
                },
                slideChange: function () {
                    const activeIndex = this.activeIndex;
                    const rulerSlides = document.querySelectorAll('#history-ruler .swiper-slide');
                    rulerSlides.forEach(slide => slide.classList.remove('is-active'));
                    if (rulerSlides[activeIndex]) {
                        rulerSlides[activeIndex].classList.add('is-active');
                    }
                }
            }
        });

        galleryHistorySwiper.init();

        galleryHistoryRulerSwiper.controller.control = galleryHistorySwiper;
    }
};




const scaleAnimation = () => {
    if (window.innerWidth < 1024) return;

    if (document.querySelector('.scale__list')){
        gsap.to('.scale__list', {
            scrollTrigger: {
                trigger: '.scale__list',
                start: 'top 15%',
                toggleClass: { targets: '.scale__list', className: 'active' },
                once: true
            }
        });
    }
}

const achievementLottie = () => {
    const items = document.querySelectorAll(".achievement__content");
    if (!items.length) return;


    items.forEach(item => {
        const iconContainer = item.querySelector(".achievement__content__animate");

        lottie.loadAnimation({
            container: iconContainer,
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: iconContainer.dataset.json,
        });
    });
}

const productsLottie = () => {
    const items = document.querySelectorAll(".products__item");
    if (!items.length) return;

    items.forEach(item => {
        const iconContainer = item.querySelector(".products__item__image");

        lottie.loadAnimation({
            container: iconContainer,
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: iconContainer.dataset.json,
        });
    });
}

const qualityAnimation = () => {

    const items = document.querySelectorAll(".quality__item");
    const rulers = document.querySelectorAll(".quality__ruler__item");
    if (!items.length || rulers.length !== items.length) return;

    rulers[0].classList.add("active");

    items.forEach(item => {
        const iconContainer = item.querySelector(".quality__item__icon");

        lottie.loadAnimation({
            container: iconContainer,
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: iconContainer.dataset.json,
        });
    });

    if (window.innerWidth < 1024) return;

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".quality",
            start: "bottom bottom",
            end: "+=2000",
            scrub: true,
            pin: true,
            pinSpacing: true,
            markers: false,
        },
    });

    items.forEach((item, index) => {
        tl.to(item, {
            y: 0,
            duration: 1,

            onStart: () => {
                rulers[index]?.classList.add("active");
            },
            onReverseComplete: () => {
                if (index !== 0) {
                    rulers[index]?.classList.remove("active");
                }
            },
        });
    });
};

const heroAnimation = () => {
    if (document.querySelector('.upper-information__image')) {
        gsap.to(".upper-information__image", {
            backgroundPositionY: "-40px",
            ease: "linear",
            scrollTrigger: {
                trigger: ".upper-information__image",
                start: "top bottom",
                end: "bottom top",
                scrub: true,
            }
        })
    }
}

const ourClientsItemsAnimation = () => {
    const items = document.querySelectorAll('.our-clients__content__item');

    if (!items.length || window.innerWidth < 576) return;

    items.forEach((item, index) => {
        gsap.to(item, {
            scrollTrigger: {
                trigger: item,
                start: 'top center',
                onEnter: () => {
                    setTimeout(() => {
                        item.classList.add('active');
                    }, index * 150);
                },
            }
        });
    });
};

const advantagesAnimation = () => {
    const items = document.querySelectorAll('.advantages__item');

    if (!items.length || window.innerWidth < 1024) return;

    items.forEach((item) => {
        ScrollTrigger.create({
            trigger: item,
            start: 'top center',
            toggleClass: { targets: item, className: 'active' },
            once: true
        });
    });
};
