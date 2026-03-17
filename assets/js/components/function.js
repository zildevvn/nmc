

(function ($) {
    "use strict";

    function initHeaderScroll() {
        let lastScrollTop = 0;
        const $header = $('#site-header');
        const scrollThreshold = 100;

        $(window).on('scroll', function () {
            let scrollTop = $(this).scrollTop();

            // Detect scroll direction and prevent jitter
            if (Math.abs(lastScrollTop - scrollTop) <= 5) return;

            // Add is-scrolled when scrollY > 100px
            if (scrollTop > scrollThreshold) {
                $header.addClass('is-scrolled');
            } else {
                $header.removeClass('is-scrolled');
            }

            lastScrollTop = scrollTop;
        });
    }

    function initMarquee() {
        const $marquees = $('.partners-section__marquee, .logos-section__marquee');
        $marquees.each(function () {
            const $this = $(this);
            // Duplicate the content to allow for a seamless infinite scroll loop
            const content = $this.html();
            $this.append(content);
        });
    }

    function initFaqAccordion() {
        $('.faq-item.is-active .faq-item__answer').show();

        $('.faq-item__question').on('click', function () {
            const $parent = $(this).parent();
            const $answer = $parent.find('.faq-item__answer');

            $('.faq-item').not($parent).removeClass('is-active').find('.faq-item__answer').slideUp();

            $parent.toggleClass('is-active');
            $answer.slideToggle();
        });
    }

    $(document).ready(function () {
        initHeaderScroll();
        initMarquee();
        initFaqAccordion();

        $('.btn-top').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 600);
        });

        AOS.init({
            once: false
        });
    });
})(jQuery); 