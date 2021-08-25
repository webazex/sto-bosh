$(document).ready(function () {
    console.log($.fn.jquery);

    function showMobileMenu(btn, mobMenu) {
        console.log(btn);
        $(btn).css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transition': 'all 0.3s ease-in-out',
            'justify-content': 'space-around'
        });
        $(btn +' span').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transition': 'all 0.3s ease-in-out',
            'position': 'initial'
        });
        $(btn + ' span:nth-child(2)').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transition': 'all 0.3s ease-in-out',
            'display': 'block'
        });
        $(btn + ' span:nth-child(1)').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transform-origin': 'center',
            'transform': 'rotate(0deg)',
            'transition': 'all 0.3s ease-in-out'
        });
        $(btn + ' span:nth-child(3)').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transform-origin': 'center',
            'transform': 'rotate(0deg)',
            'transition': 'all 0.3s ease-in-out'
        });
        $(mobMenu).hide(300);
    }

    function hideMobileMenu(btn, mobMenu) {
        $(this).css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transition': 'all 0.3s ease-in-out',
            'justify-content': 'center'
        });
        $(btn + ' span').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transition': 'all 0.3s ease-in-out',
            'position': 'absolute'
        });
        $(btn + ' span:nth-child(2)').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transition': 'all 0.3s ease-in-out',
            'display': 'none'
        });
        $(btn + ' span:nth-child(1)').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transform-origin': 'center',
            'transform': 'rotate(45deg)',
            'transition': 'all 0.3s ease-in-out'
        });
        $(btn + ' span:nth-child(3)').css({
            '-webkit-transition': 'all 0.3s ease-in-out',
            '-moz-transition': 'all 0.3s ease-in-out',
            '-ms-transition': 'all 0.3s ease-in-out',
            '-o-transition': 'all 0.3s ease-in-out',
            'transform-origin': 'center',
            'transform': 'rotate(-45deg)',
            'transition': 'all 0.3s ease-in-out'
        });
        $(mobMenu).show(300);
    }

    $('#mBtnBurger').click(function () {
        if ($('.mobile-dropdown').is(':visible')) {
            showMobileMenu('#mBtnBurger', '.mobile-dropdown');
        }
        if ($('.mobile-dropdown').is(':hidden')) {
            hideMobileMenu('#mBtnBurger', '.mobile-dropdown');
        }
    });
    $('#stoBtn').click(function () {
        $('#sto').show(300);
    });
    $( "#datepicker" ).datepicker();
    // ===click=not=in=target=close=calc=====
    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $("#sto"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide(300); // скрываем его
        }
    });
    $('.slider-section__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.droplist__item-row').click(function () {
        let rowIcon = $(this).children('.item-row').children('.item-row__service-pack').find('.service-pack__icon span:last-child');
        let thisProps = $(this).find('.item-row__grid-service-prop');
        if(thisProps.hasClass('open')){
            thisProps.removeClass('open');
            rowIcon.css({'transform': 'rotate(0deg)'});
        }else{
            $('.item-row__grid-service-prop').not(thisProps).removeClass('open');
            $('.item-row__service-pack').not(thisProps).find('.service-pack__icon span:last-child').css({'transform': 'rotate(0deg)'});
            thisProps.addClass('open');
            rowIcon.css({'transform': 'rotate(90deg)'});
        }

    })
});