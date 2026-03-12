

(function ($) {
    "use strict";

    function initMarquee() {
        const $marquees = $('.partners-section__marquee, .logos-section__marquee');
        $marquees.each(function() {
            const $this = $(this);
            // Duplicate the content to allow for a seamless infinite scroll loop
            const content = $this.html();
            $this.append(content);
        });
    }

    function initHeaderScroll() {
        let lastScrollTop = 0;
        const $header = $('#site-header');
        const scrollThreshold = 100;

        $(window).on('scroll', function() {
            let scrollTop = $(this).scrollTop();

            // Detect scroll direction
            if (Math.abs(lastScrollTop - scrollTop) <= 5) return;

            if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
                // Scroll Down
                $header.addClass('is-hidden');
            } else {
                // Scroll Up
                $header.removeClass('is-hidden');
            }
            lastScrollTop = scrollTop;
        });
    }

    $(document).ready(function () {
        initMarquee();
        initHeaderScroll();

        $('.btn-top').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 600);
        });

        AOS.init();
    });
})(jQuery); 