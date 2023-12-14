/**
 * Namespace (if any)
 */
/* eslint-disable-next-line no-use-before-define */
var SITE = SITE || {};
SITE.body = $('body');
SITE.html = $('html');
SITE.document = $(document);
SITE.window = $(window);

/**
 * Global functionality
 */
var navToggle = $('.main-nav-toggle');
var hamToggle = $('.js-hamburger');
var nav = $('.main-nav');

navToggle.click(function (event) {
    event.preventDefault();
    nav.toggleClass('hidden');
    hamToggle.toggleClass('is-active');
});

/* Dropdown */
(function () {
    var navList = $('.main-nav__list');
    var hasSub = $('.main-nav__list--has-sub');
    var sub = $('.main-nav__list--sub');
    var dropdownToggle = $('.dropdown-icon');

    dropdownToggle.each(function () {
        $(this).click(function () {
            $(this).toggleClass('dropdown-icon--up');
            $(this).parent().parent().find('.main-nav__list--sub').toggleClass('show');
        });
    });
})();
