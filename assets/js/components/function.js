

(function ($) {
    "use strict";




    $(document).ready(function () {
        $('.btn-top').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 600);
        });
    });
})(jQuery); 