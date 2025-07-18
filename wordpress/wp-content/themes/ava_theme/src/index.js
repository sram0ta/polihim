window.addEventListener("load", () => {
    ScrollTrigger.refresh();
});

window.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    openLanguage();
    galleryAdvantages();
    scaleAnimation();
    qualityAnimation();
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
        let swiper = new Swiper("#advantages-gallery", {
            slidesPerView: 1.25,
            speed: 500,
            loop: false,
            spaceBetween: 10,
            navigation: {
                prevEl: '.advantages ._prev',
                nextEl: '.advantages ._next',
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








