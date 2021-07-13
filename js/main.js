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
});