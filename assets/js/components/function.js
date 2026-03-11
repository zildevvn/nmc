

(function ($) {
    "use strict";

    function initMarquee() {
        const $marquee = $('.partners-section__marquee');
        if ($marquee.length) {
            // Duplicate the content to allow for a seamless infinite scroll loop
            const content = $marquee.html();
            $marquee.append(content);
        }
    }

    $(document).ready(function () {
        initMarquee();

        $('.btn-top').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 600);
        });
    });
})(jQuery); 