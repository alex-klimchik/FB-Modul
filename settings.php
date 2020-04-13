<!DOCTYPE html>
<html>

<head>
    <title>Modul FB</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
</head>

<body>
    <div class="wrapper">
        <!--Sidebar-->
        <?php require_once('blocks/sidebar.php'); ?>
        <!--Sidebar END-->

        <div class="page-container">
            <!--Header-->
            <?php require_once('blocks/header.php'); ?>
            <!--Header END-->
            <main>

                <div class="container-fluid" style="position: relative;">
                    <h6 style="color: #000; font-size: 21px; margin-bottom: 1rem">Настройки</h6>

                    <div class="main-content">
                        <div class="card card-bloks-shadow content-box">
                            <div class="stages-headline access-bg">
                                <h5>Антидетект</h5>
                            </div>
<!--                            <p>Антидетект</p>-->
                            <div class="form-group">
                                <!-- <label for="ant">Добавить</label> -->
                                <input type="text" class="form-control" id="ant" placeholder="Добавить">
                            </div>
                            <ul class="task-list">
                                <li>
                                    <i class="mr-2 task-ic" data-feather="minus"></i>MLA
                                </li>
                            </ul>
                            <div class="btns">
                                <!-- <button type="button" class="btn btn-danger">
                                    Удалить
                                </button> -->
                                <button type="button" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                        <div class="card card-bloks-shadow content-box">
                            <div class="stages-headline access-bg">
                                <h5>Тип регистрации</h5>
                            </div>
<!--                            <p>Тип регистрации</p>-->
                            <div class="form-group">
                                <!-- <label for="registr">Добавить</label> -->
                                <input type="text" class="form-control" id="registr" placeholder="Добавить">
                            </div>
                            <ul class="task-list">
                                <li><i class="mr-2 task-ic" data-feather="minus"></i>E-mail</li>
                                <li><i class="mr-2 task-ic" data-feather="minus"></i>Телефон</li>
                                <li><i class="mr-2 task-ic" data-feather="minus"></i>MLA</li>
                            </ul>
                            <div class="btns">
                                <!-- <button type="button" class="btn btn-danger">
                                    Удалить
                                </button> -->
                                <button type="button" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                        <div class="card card-bloks-shadow content-box">
                            <div class="stages-headline access-bg">
                                <h5>Тип прокси</h5>
                            </div>
<!--                            <p>Тип прокси</p>-->
                            <div class="form-group">
                                <!-- <label for="proxy">Добавить</label> -->
                                <input type="text" class="form-control" id="proxy" placeholder="Добавить">
                            </div>
                            <ul class="task-list">
                                <li><i class="mr-2 task-ic" data-feather="minus"></i>static</li>
                                <li><i class="mr-2 task-ic" data-feather="minus"></i>3g/4g</li>
                            </ul>
                            <div class="btns">
                                <!-- <button type="button" class="btn btn-danger">
                                    Удалить
                                </button> -->
                                <button type="button" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script src="js/script.js"></script>
    <!--feather-icons-->
    <script>
        feather.replace()
    </script>

</body>

</html>