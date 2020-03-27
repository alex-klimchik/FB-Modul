$(document).ready(function() {

    $(function() {
        $(".sidebar-toggle").click(function() {
            $('body').toggleClass('is-collapsed');

        })

    });
    $(".closebtn").click(function() {
        $(".sidebar ").css("margin-left", "-250px");
        console.log("heloo");
    });
});