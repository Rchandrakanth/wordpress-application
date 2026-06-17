(function ($) {
    "use strict";

    var resizeElements;

    $(document).ready(function () {

        var bar = ".search_bar";
        var input = bar + " input[type='text']";
        var button = bar + " button[type='submit']";
        var dropdown = bar + " .search_dropdown";
        var dropdownLabel = dropdown + " > span";
        var dropdownList = dropdown + " ul";
        var dropdownListItems = dropdownList + " li";

        resizeElements = function () {
            var barWidth = $(bar).outerWidth();
            var labelWidth = $(dropdownLabel).outerWidth();

            $(dropdown).width(labelWidth);

            var dropdownWidth = $(dropdown).outerWidth();
            var buttonWidth = $(button).outerWidth();
            var inputWidth = barWidth - dropdownWidth - buttonWidth;
            var inputWidthPercent = (inputWidth / barWidth) * 100 + "%";
        };

        function dropdownOn() {
            $(dropdownList).fadeIn(25);
            $(dropdown).addClass("active");
        }

        function dropdownOff() {
            $(dropdownList).fadeOut(25);
            $(dropdown).removeClass("active");
        }

        resizeElements();

        $(dropdown).on("click", function (event) {
            event.preventDefault();
            event.stopPropagation();

            if ($(this).hasClass("active")) {
                dropdownOff();
            } else {
                dropdownOn();
            }
        });

        $("html").on("click", dropdownOff);

        $(dropdownListItems).on("click", function () {
            $(this).siblings("li.selected").removeClass("selected");
            $(this).addClass("selected");

            $(this)
                .parents("form.search_bar:first")
                .find("input[type=text]")
                .focus();

            $(dropdownLabel).text($(this).text());
            resizeElements();
        });

        $(window).on("resize", function () {
            resizeElements();
        });

    });

})(jQuery);
