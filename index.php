<!DOCTYPE html>
<html>

<head>
    <title>Modul FB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- loader -->
    <link rel="stylesheet" type="text/css" href="css/loader.css">
</head>

<body>
    <!-- cookie -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script>
        window.stateSidebar = !!Cookies.get('sidebar');
        //Состояние sidebar
        if (stateSidebar) {
            $('body').toggleClass('is-collapsed').click();
        };
    </script>
    <!-- loader END-->
    <div class="wrapper">
        <!--Sidebar-->
        <?php require_once('blocks/sidebar.php'); ?>
        <!--Sidebar END-->


        <div class="page-container">

            <div class="main-wrap">
                <!-- loader -->
                <?php require_once('blocks/preloader.php'); ?>

                <main class="page-loading d-none">
                    <!--Header-->
                    <?php require_once('blocks/header.php'); ?>
                    <!--Header END-->

                    <div class="container-fluid" style="position: relative;">
                        <div class="card" style="padding: 15px;">
                            <h6>Главная</h6>
                            <div style="border-top: 1px solid #e7e9ea;overflow-x:auto;">

                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>

    <!-- sidebar script -->
    <script src="js/script.js"></script>

    <!-- loader script -->
    <script src="js/loader.js"></script>
</body>

</html>