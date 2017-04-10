$(function() {
    $("ul.dropdown-menu").on("click", "[data-keepOpenOnClick]", function(e) {
        e.stopPropagation();
    });
});
