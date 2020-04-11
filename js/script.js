
let stateSidebar = !!Cookies.get('sidebar');

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

    //Состояние sidebar
    if (stateSidebar) {
        $('body').toggleClass('is-collapsed').click();
    };

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

});