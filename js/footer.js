$(document).ready(() => {

    // Подсчет выбранных чекбоксов
    let countCheckbox = () => {
        let count = 0;
        $('#mainTable tbody tr .custom-control-input').each((inx, el) => {
            if (el.checked) count++;
        })
        if (count > 0) {
            $('footer').show();
            $('footer').animate({
                bottom: '0'
            }, 140);
            $('.count span').html(count);
        } else {
            $('footer').animate({
                bottom: '-50'
            }, 140);
            $('footer').hide(140);
            $('.count span').html(count);
        }
    }

    //ДЛЯ ОТМЕТКИ ВСЕХ ТОЧЕК В ТАБЛИЦЕ В ОБЛАСТИ ВИДИМОСТИ 
    $('.select-all').click(function (event) {
        $('#mainTable .custom-control-input').prop('checked', true);
        $('#mainTable tr').addClass('colorize');
        countCheckbox();
    });

    //ДЛЯ ЗАКРАСКИ СТРОКИ ПРИ ВЫБРАНОМ ЧЕКБОКСЕ
    $('#mainTable').on('change', '.custom-control-input', function () {
        if ($(this).is(":checked")) {
            $(this).closest('tr').addClass('colorize');
        } else {
            $(this).closest('tr').removeClass('colorize');
        }
        countCheckbox();
    });

    // Кнопка "отмена" убирает все чекбокси
    $('.cansel-all').click(() => {
        $('#mainTable .custom-control-input').prop('checked', false);
        $('#mainTable tr').removeClass('colorize');
        countCheckbox()
    })
})