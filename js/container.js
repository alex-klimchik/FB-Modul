$(document).ready(() => {

    // Инит иконок
    feather.replace();

    // Подсчет выбранных чекбоксов
    let countCheckbox = () => {
        let count = 0;
        $('#container-table tbody tr .custom-control-input').each((inx, el) => {
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
        }
    }

    //ДЛЯ ОТМЕТКИ ВСЕХ ТОЧЕК В ТАБЛИЦЕ В ОБЛАСТИ ВИДИМОСТИ 
    $('.select-all').click(function (event) {
        $('#container-table .custom-control-input').prop('checked', true);
        $('#container-table tr').addClass('colorize');
        countCheckbox();
    });

    //ДЛЯ ЗАКРАСКИ СТРОКИ ПРИ ВЫБРАНОМ ЧЕКБОКСЕ
    $('#container-table').on('change', '.custom-control-input', function () {
        if ($(this).is(":checked")) {
            $(this).closest('tr').addClass('colorize');
        } else {
            $(this).closest('tr').removeClass('colorize');
        }
        countCheckbox();
    });

    // Кнопка "отмена" убирает все чекбокси
    $('.cansel').click(() => {
        $('#container-table .custom-control-input').prop('checked', false);
        $('#container-table tr').removeClass('colorize');
        countCheckbox()
    })
})