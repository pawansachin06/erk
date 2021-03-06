
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


(function ($)
{
    $(document).ready(function () {
        $(".appointment-form .dropdown span").click(function () {
            $(this).toggleClass("open");
        });
        var path = window.location.href;
        $('.custom-navbar li a').each(function () {
            if (this.href === path) {
                $('.custom-navbar li a').removeClass('active');
                $(this).addClass('active');
            }
        });
    });
})(jQuery);


