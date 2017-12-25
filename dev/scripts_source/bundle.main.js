window.$W = $(window);
window.$D = $(document);
window.$H = $('html');
window.$B = $('body');

require('./formValidate.js');
require('./whereBuyMapComponent.js');

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
        // $(this).toggleClass('_open');
        if($(this).hasClass('_open')){
            $(this).removeClass('_open');
        }else{
            el.find('.js-accordion__item').removeClass('_open');
            $(this).addClass('_open');
        }
    });
});

$(function(){
    var el = $('.js-slider-fade');
    if(!el.length) return;

    require('slick-carousel');

    el.slick({
        fade: true,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 7000
    });
});


$(function(){
    var link = $('.js-link-popup');
    if(!link.length) return; 
    
    require('magnific-popup');
    require('slick-carousel');

    $('.js-link-popup').magnificPopup({
        type: 'inline',
        midClick: true,
    });

    var isInit = false;

    function initPopupSlider(){
        var slider = $('.js-slider-popup');
        if(!slider) return;

        if(isInit) return;
        
        slider.sliderPopup();

        isInit= true;
        
    }
    $('.js-link-popup').on('mfpOpen' , function(){
        window.initExtraFuncPopups()
    });

    window.initExtraFuncPopups = function (){
        var inst = $.magnificPopup.instance;
        if(inst.currItem.src === "#popup-about-milk"){
            initPopupSlider();            
        }

        if(inst.currItem.src === "#popup-webcamera"){
            $('.js-webcamera-slider').slick({
                arrows: false,
                dots: true
            });
        }
    }
   
});

$(function(){
    var link = $('.js-load-post');

    if(!link.length) return;

    require('magnific-popup');

    var container = $('.js-load-post__content'),
        idPopup = '#popup-about-milk';

    link.on('click', function(){
        var url = $(this).data().url,
            content = '';

        $.magnificPopup.open({ items: { src: idPopup}});
        container.html('');
        $.ajax({
            url: url,
            method: 'POST',
            success: function(data){
                container.html(data);
                initPopupSlider();
            },
            error: function(err){
                if(err) container.html('error');
            }
        })
    });

    function initPopupSlider(){
        var slider = $('.js-slider-popup');
        if(!slider) return;
        
        slider.sliderPopup();
    }
});

$(function(){
    var moreBtn = $('.js-load-post__more');
    if(!moreBtn.length) return;

    var tab = $('.js-load-post__tab');
        
    function init(){
        tab.data('show', 2);
        tab.each(function(){
           var tabCurr = $(this);

           $(this).children().each(function(i ,el){

                if(i>tabCurr.data().show){
                    $(this).hide();
                }  

           })

           if(checkAllShowItem(tabCurr)){
                moreBtn.hide();
           }else{
                moreBtn.show();
           }
        })

    }
       
    function checkAllShowItem(activeTab){
        var count =0;
        activeTab.children().map(function(i ,el){
            if($(this).css('display') === 'none') count++ ;
        })
        return count > 0 ? false : true; 
    }


    moreBtn.on('click' , function(){
        var activeTab = tab.filter('._active'),
            show = activeTab.data().show,
            nextShow = show+=3;

            activeTab.data('show', nextShow);

            activeTab.children().each(function(i ,el){
                
                  if(i>nextShow){
                     $(this).hide();
                  }else{
                    $(this).show();
                  }
            })
    
            if(checkAllShowItem(activeTab)){
                moreBtn.hide();
            }else{
                moreBtn.show();
            }

    });

    $('.js-tabs-btn').on('click' , function(){

        setTimeout(function(){
            var curr = $('.js-load-post__tab').filter('._active');
            
            if(checkAllShowItem(curr)){
                    moreBtn.hide();
            }else{
                moreBtn.show();
            }
        },60)

        
    })


    init();
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



(function($){
    $.fn.sliderPopup = function(){

        require('slick-carousel');

        $(this).each(function(i , el){
            
        var $el = $(this),
            $slides = $el.find('.js-slider-popup__slides'),
            $arrl = $el.find('.js-slider-popup__arr-l'),
            $arrr = $el.find('.js-slider-popup__arr-r'),
            $slideTitle = $el.find('.js-slider-popup__slide-title'),
            $magnific = $el.find('.js-slider-popup__magnific');

            $slides.slick({
                dots: false,
                arrows: false,
                fade: true
            });

            $arrl.on('click' ,function(){
                $slides.slick('slickPrev');
            });
            $arrr.on('click' ,function(){
                $slides.slick('slickNext');
            });

            // setTitle
            $slides.on('afterChange' , function(e, slick ,curr,next){
                var currentSlide = slick.$slides[curr];
                $slideTitle.html($(currentSlide).find('img').attr('alt'));
            });
            $slides.on('init' , function(e, slick ,curr,next){
                var currentSlide = slick.$slides[curr];
                $slideTitle.html($(currentSlide).find('img').attr('alt'));
            });

            $magnific.on('click' ,function(){
                var slick = $slides.slick('getSlick');
                console.log(slick)
                var currentSlide = slick.$slides[slick.currentSlide],
                    imgSrc = $(currentSlide).find('img').attr('src');
                    console.log(imgSrc)
                $.magnificPopup.open({
                  items: {
                    src: imgSrc,
                    type: 'image',
                    markup: '<div id="popup-mailing" class="popup__mailing mfp-hide">'+
                              '<div class="popup__close">'+
                                    '<span class="icon icon--close"></span>'+
                              '</div>'+ 
                              '<div class="popup__content">'+
                                '<div class="mfp-img"></div>'+
                              '</div>'+
                            '</div>'
                  },
                });
            })
        })
    };
})($);

// tabs Plugin
;(function ($) {
    $.fn.tabs = function () {

        $(this).each(function () {
            var $this = $(this),
                $btns = $this.find('.js-tabs-btn'),
                $tabs = $this.find('.js-tabs-tab');

            function tabSwitch(numb) {
                $tabs.removeClass('_active')
                    .eq(numb).addClass('_active');

                $btns.removeClass('_active')
                    .eq(numb).addClass('_active');
            }

            $btns.bind('click', function () {
                var index = $(this).index();
                tabSwitch(index);
            });

        })

    };
})(jQuery);

$(function(){
    var el = $('.js-tabs');
    if(!el.length) return;

    el.tabs();

})



window.popupsManager = {
    open(id){
        $.magnificPopup.open({ items: { src: id}});
        window.initExtraFuncPopups();
    }
};