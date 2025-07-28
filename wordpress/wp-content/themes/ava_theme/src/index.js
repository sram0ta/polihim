window.addEventListener("load", () => {
    ScrollTrigger.refresh();
});

window.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    openLanguage();
    galleryAdvantages();
    galleryBenefits();
    scaleAnimation();
    qualityAnimation();
    heroAnimation();
    ourClientsItemsAnimation();
});

const wp_ajax = '/wp-admin/admin-ajax.php';

const openLanguage = () => {
    let langToggle = document.querySelector('.header__lang__activity')
    let langAll = document.querySelector('.header__lang__all')

    if (langToggle && langAll) {
        langToggle.addEventListener('click', () => {
            langToggle.classList.toggle('active')
            langAll.classList.toggle('active')
        })
    }
}

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




const scaleAnimation = () => {
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
            end: "+=4000",
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
            backgroundPositionY: "-100px",
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

    if (!items.length || window.innerWidth < 1024) return;

    items.forEach((item, index) => {
        gsap.to(item, {
            scrollTrigger: {
                trigger: item,
                start: 'top center',
                // toggleActions: 'play none none none',
                onEnter: () => {
                    setTimeout(() => {
                        item.classList.add('active');
                    }, index * 150); // задержка между появлением каждого
                },
            }
        });
    });
};

