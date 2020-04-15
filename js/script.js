let mySingleton = (function () {
    let instance;
    return {
        getInstance: function () {
            if (!instance) {
                $('body').on('click', '.sidebar .sidebar-link', collapseSidebar);
                instance = true;
            }
        },
        deleteInstance: function () {
            if (instance) {
                $('body').off('click', '.sidebar .sidebar-link', collapseSidebar);
                instance = false;
            }
        }
    }
})();

function collapseSidebar() {
    Cookies.set('sidebar', true);
}

function closeSidebar() {
    if (window.innerWidth < 1001) {
        // on
        mySingleton.getInstance();
    } else {
        // off
        mySingleton.deleteInstance();

    }
}



// Document Ready ------------------------------------------------------
$(document).ready(function () {
    closeSidebar();
    $(window).resize(function () {
        closeSidebar();
    })



    //Кнопка открыть/закрыть главное меню
    $('.sidebar-toggle , .closebtn').on('click', function (e) {
        $('body').toggleClass('is-collapsed');

        // Запись/удаление состояния sidebar в cookies
        if (!stateSidebar) {
            stateSidebar = true;
            Cookies.set('sidebar', true);
        } else {
            stateSidebar = false;
            Cookies.remove('sidebar');
        }

    });

    // Добавления сласса .active в сайдбар
    $(function () {
        var current = location.pathname.slice(1);
        if (current === '') current = 'index.php';
        $('.sidebar-nav li a').each(function () {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.parent().addClass('active');
            }
        })
    })

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
    };

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
    });
});