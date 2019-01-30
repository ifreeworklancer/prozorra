import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown();
        }
    });

    /**
     * Scroll link
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.menu').slideUp();
        }
    });


    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Modal
     */
    var modalFeedback = $('.custom-modal--feedback');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-modal-feedback').on('click', function (e) {
        e.preventDefault();
        $(modalFeedback).addClass('active');
        $(modalMask).addClass('active');
    });


    $(closeModal).on('click', function () {
        $(modalFeedback).removeClass('active');
        $(modalMask).removeClass('active');
    });


    $(modalMask).on('click', function () {
        $(modalFeedback).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });


    /**
     * Sliders
     */
    if ($('.reviews-slider')) {

        var elem1 = document.querySelector('.reviews-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                cellAlign: 'left',
                contain: false,
                draggable: false,
                adaptiveHeight: true,
                wrapAround: true,
            });

            var prevArrowReviews = document.querySelector('.slider-arrow-item--prev-reviews');

            prevArrowReviews.addEventListener('click', function () {
                flkty1.previous(true, false);
            });

            var nextArrowReviews = document.querySelector('.slider-arrow-item--next-reviews');

            nextArrowReviews.addEventListener('click', function () {
                flkty1.next(true, false);
            });
        }
    }

   /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.img--about', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.audience-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('#feedback', {
        origin: 'bottom',
        delay: 500,
        distance: '400px',
    });
    ScrollReveal().reveal('.result-item', {
        origin: 'left',
        delay: 500,
        distance: '400px',
    });
    ScrollReveal().reveal('.speakers-item', {
        origin: 'bottom',
        delay: 500,
        distance: '200px',
    });
    ScrollReveal().reveal('.image-item--tariffs', {
        origin: 'left',
        delay: 500,
        distance: '200px',
    }, 50);
    ScrollReveal().reveal('.tariffs-item', {
        origin: 'right',
        delay: 500,
        distance: '200px',
    });
    ScrollReveal().reveal('.tariffs-free-item', {
        origin: 'right',
        delay: 500,
        distance: '200px',
    });
    ScrollReveal().reveal('.contacts-item', {
        origin: 'left',
        delay: 500,
        distance: '400px',
    });


})(jQuery)