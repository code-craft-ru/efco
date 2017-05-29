window.$W = $(window);
window.$D = $(document);
window.$H = $('html');
window.$B = $('body');

require('./formValidate.js');
/* -- Общие плагины и функции -- */

// "Scroll to" function
function scrollTo(elem, pSpeed, headerCut) { // elem -  jq-елемент или значение скролла
    if (elem) {
        var offset = typeof elem != 'number' ? elem.offset().top : elem,
            speed = pSpeed || 700;

        if (!headerCut) {
            offset -= $('.js-header').outerHeight();
        }

        $('html, body').animate({'scrollTop': offset}, speed);
    }
}

// scroll click plugin
$.fn.scrollLink = function (pSettings) {
    var settingsSpeed = 700,
        settings = pSettings || '';

    $(this).each(function () {
        var $this = $(this);

        if (settings.speed) settingsSpeed = settings.speed;

        $this.bind('click', function (e) {
            var href = $this.attr('href') || $this.data('href');
            if (typeof href != 'number') {
                href = $(href);
                if (settings.margin) {
                    href = href.offset().top - parseInt(href.css('margin-top'));
                }
            }
            if (settings && settings.callbackBefore) {
                settings.callbackBefore();
            }

            scrollTo(href, settingsSpeed);

            if (settings && settings.callbackAfter) {
                settings.callbackAfter();
            }
            e.preventDefault();

        });
    });

};


// Scroll link
(function (){
    var $scrollTrigger = $('.js-scroll-link');
    if (!$scrollTrigger.length) return;
    $scrollTrigger.scrollLink();
})();


$(function(){
    var el = $('.js-header-fix');

    $(window).on('scroll' , function(){
        var offset = Math.floor($(window).scrollTop()),
            hTop = 129;

        if(offset > hTop){
            el.addClass('_fixed');
        }else{
            el.removeClass('_fixed');
        }
    })
});

$(function(){
    var el = $('.js-accordion');
    if(!el.length) return;

    el.find('.js-accordion__item').on('click', function(){
        $(this).toggleClass('_open');
    });
});

$(function(){
    var el = $('.js-slider-fade');
    if(!el.length) return;

    require('slick-carousel');

    el.slick({
        fade: true,
        dots: true,
        arrows: false
    });
});


$(function(){
    require('magnific-popup');
    $('.js-link-popup').magnificPopup({
        type: 'inline',
        midClick: true,
    });

   
});


$(function(){
    // логика для попапа подпики отписки
    var el = $('.js-switch-subscript__input');
    if(!el.length) return;

    $('.js-switch-subscript__on').on('click' ,function(){
        el.val(true);
    });
    $('.js-switch-subscript__off').on('click' ,function(){
        el.val(false);
    });
});