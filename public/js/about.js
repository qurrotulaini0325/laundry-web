document.addEventListener('DOMContentLoaded', function () {
    // Swiper config...
    const faqSwiper = new Swiper('.faq-swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.faq-button-next',
            prevEl: '.faq-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        on: {
            slideChangeTransitionStart: () => {
                const openItems = document.querySelectorAll('.accordion-collapse.show');
                openItems.forEach(item => {
                    const bsCollapse = bootstrap.Collapse.getInstance(item);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                });
            }
        }
    });

    // Manual toggle accordion on button click
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', function (e) {
            const targetSelector = button.getAttribute('data-bs-target');
            const targetEl = document.querySelector(targetSelector);

            const collapseInstance = bootstrap.Collapse.getOrCreateInstance(targetEl);

            if (targetEl.classList.contains('show')) {
                collapseInstance.hide();
                e.stopPropagation();
            } else {
                collapseInstance.show();
            }
        });
    });
});
