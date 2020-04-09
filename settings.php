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
                        <div class="card content-box">
                            <p>Отделы</p>
                            <div class="form-group">
                                <label for="subdivision">Подразделение</label>
                                <input type="text" class="form-control" id="subdivision" placeholder="Введите название">
                            </div>
                            <div class="form-group">
                                <label for="department">Отдел</label>
                                <select class="selectpicker" name="" id="department">
                                    <option value="" disabled selected>Выберите отдел</option>
                                    <option value="">Фб1 </option>
                                    <option value="">Фармеры </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="role">Роли</label>
                                <select class="selectpicker" name="" id="role">
                                    <option value="" disabled selected>Выберите роли</option>
                                    <option value="">Веб </option>
                                    <option value="">Фармер </option>
                                </select>
                            </div>
                            <div class="btns">
                                <button type="button" class="btn btn-danger">
                                    Удалить
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                        <div class="card content-box">
                            <p>Отделы и роли</p>
                            <div class="form-group">
                                <label for="department2">Отдел</label>
                                <select class="selectpicker" name="" id="department2">
                                    <option value="" disabled selected>Выберите подразделение</option>
                                    <option value="">Фб1 </option>
                                    <option value="">Фармеры </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="role2">Роли</label>
                                <select class="selectpicker" name="" id="role2">
                                    <option value="" disabled selected>Выберите роли</option>
                                    <option value="">Веб </option>
                                    <option value="">Фармер </option>
                                </select>
                            </div>
                            <div class="btns">
                                <button type="button" class="btn btn-danger">
                                    Удалить
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                        <div class="card content-box">
                            <p>Роли</p>
                            <div class="form-group">
                                <label for="role3">Роль</label>
                                <input type="text" class="form-control" id="role3" placeholder="Введите название">
                            </div>
                            <div class="btns">
                                <button type="button" class="btn btn-danger">
                                    Удалить
                                </button>
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

    <script src="js/script.js"></script>

</body>

</html>