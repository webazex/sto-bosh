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

    });
    $('.btn-submit').click(function (e) {
        e.preventDefault();
        var url = $(this).closest("form").attr('data-sender');
        var idForm = $(this).closest("form").attr('id');
        var thisBtn = $(this);
        // var DefaultBg = thisBtn.css('background-color');
        var DefaultBg = '#2878EB';
        var DefaultText = thisBtn.children('span').text();
        var thisInputStatus = [];
        $(this).closest('form').find('input[required="required"]').each(function () {

            if($(this).val() !== ''){
                thisInputStatus.push(true);
            }else{
                thisInputStatus.push(false);
            }
        });
        var verifyInputs = true;
        $.each(thisInputStatus, function () {
            if(this == false){
                verifyInputs = false;
            }
        });
        if(verifyInputs === false){
            thisBtn.css({'background-color':'black'});
            thisBtn.children('span').text('Не все поля заполнены');
            thisBtn.attr('disabled', "disabled");
            setTimeout(function () {
                thisBtn.css({'background-color':DefaultBg});
                thisBtn.children('span').text(DefaultText);
                thisBtn.removeAttr('disabled', "disabled");
            }, 3000);
        }else{
            sendAjaxForm(url, idForm);
            // $('.btn-submit').css({'background-color': '#2878EB'});
            // thisBtn.css({'background-color':DefaultBg});
            thisBtn.children('span').text(DefaultText);
            thisBtn.removeAttr('disabled', "disabled");
            $(thisBtn).closest('form').find('input[required="required"]').each(function () {
                $(this).val('');
                $(this).text('');
            })
        }

    });
    function sendAjaxForm(url, idForm) {
        //console.log((JsonData));
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#"+idForm).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                $('.btn-submit').css({'background-color': '#2878EB'});
                //let res = '<div class="content__p-submit-container successed"><span class="container__close-icon">x</span><p>'+JsonData.submitMessage+'</p></div>';
                // $('.popups__content').append(res);
                // $('.popups').show(300);

            },
            error: function(response) { // Данные не отправлены
                // $('.btn-submit').css({'background-color': '#2878EB'});
                let res = '<div class="content__p-submit-container error-bg"><span class="container__close-icon">x</span><p>'+JsonData.errMessage+'</p></div>';
                $('.popups__content').append(res);
                $('.popups').show(300);
            },
            complete: function () {
                // $('.btn-submit').css({'background-color': DefaultBg});
                setTimeout(function () {
                    $('.popups').hide(300);
                    $('.popups__content').html('');
                }, 3000);
            }
        });

    }
});