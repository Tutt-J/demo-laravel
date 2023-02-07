import "./bootstrap";
import * as bootstrap from "bootstrap";

import jQuery from "jquery";
window.$ = jQuery;

jQuery(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {;
            $("header").removeClass("header--transparent");
            $(".header__logo--transparent").addClass('d-none');
            $(".header__logo--visible").removeClass('d-none');
        }
        if ($(this).scrollTop() < 50) {
            $("header").addClass("header--transparent");
            $(".header__logo--transparent").removeClass('d-none');
            $(".header__logo--visible").addClass('d-none');
        }
    });
});
