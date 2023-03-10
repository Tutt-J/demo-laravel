import "./bootstrap";
import * as bootstrap from "bootstrap";

import jQuery from "jquery";
window.$ = jQuery;

jQuery(function () {
    const pathname = window.location.pathname;

    if (pathname != "/") {
        $("header").removeClass("header--transparent");
        $(".header__logo--transparent").addClass("d-none");
        $(".header__logo--visible").removeClass("d-none");
        $("main#public").addClass("padding-top");
    } else {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $("header").removeClass("header--transparent");
                $(".header__logo--transparent").addClass("d-none");
                $(".header__logo--visible").removeClass("d-none");
            }
            if ($(this).scrollTop() < 50) {
                $("header").addClass("header--transparent");
                $(".header__logo--transparent").removeClass("d-none");
                $(".header__logo--visible").addClass("d-none");
            }
        });
    }

    $('a[data-bs-target="#modal"]').click(function(event) {
        event.stopPropagation();
        var id = $(this).data('id');
        var name = $(this).data('name');
        $('.idValue').val(id);
        $("#element-name").text(name);
    });
});
