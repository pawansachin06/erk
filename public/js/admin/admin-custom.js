(function ($) {
    $("ul.side-nav-menu li").each(function () {
        $(this).find("ul.dropdown-menu li").each(function () {
            if ($(this).find("a").attr("href") == window.location.href) {
                $(this).parents("li.nav-item.dropdown").addClass("open");
            }
        });
    });

})(jQuery);