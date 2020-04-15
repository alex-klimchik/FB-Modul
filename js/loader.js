$(document).ready(() => {
    $(function () {
        $('.loader').fadeOut(600);
        setTimeout(() => {
            $('.page-loading').removeClass('d-none').css('display', 'none').fadeIn(400);
        }, 600)
    });
})