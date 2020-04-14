<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Контейнер</title>
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

    <!-- Datepicker  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- cookie -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="css/container.css">

</head>

<body>
    <div class="wrapper">
        <!--Sidebar-->
        <?php require_once('blocks/sidebar.php'); ?>
        <!--Sidebar END-->

        <div class="page-container">

            <main>
                <!--Header-->
                <?php require_once('blocks/header.php'); ?>
                <!--Header END-->

                <div class="container-fluid" style="position: relative;">

                    <div class="main-content">

                        <div class="card card-bloks-shadow " style="padding: 15px;">
                            <h6>Контейнер</h6>
                            <div style="border-top: 1px solid #e7e9ea;overflow-x:auto;overflow-y: hidden;">
                                <table id="mainTable" class="table-staff table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="select-all">Все</th>
                                            <th>Название MLA</th>
                                            <th>Дата создания</th>
                                            <th>Дата завершения</th>
                                            <th>Логин</th>
                                            <th>Пароль</th>
                                            <th>Токен</th>
                                            <th>Прокси</th>
                                            <th>Расход аккаунта</th>
                                            <th>Сотрудник</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId1">
                                                    <label class="custom-control-label" for="checkboxId1"></label>
                                                </div>
                                            </td>
                                            <td>Lorena1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>303.0<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Дмитрий Фомин</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td>00.00.00</td>
                                            <td>00.00.00</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>251.61<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
                                            <td>Аня Новикова</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </main>

        </div>
    </div>
    <footer style="display: none">
        <div>
            <select class="selectpicker" name="" id="">
                <option value="">Фб 1</option>
                <option value="">ФБ 2</option>
            </select>
            <button class="btn btn-primary ">Отправить <i style="transform: rotate(45deg);" data-feather="send"></i></button>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkboxId3">
                <label class="custom-control-label" for="checkboxId3">Передать в Lagoon</label>
            </div>
        </div>
        <div>
            <div class="count">
                Выбрано: <span>0</span>
            </div>
            <button class="btn btn-primary cansel-all">Отмена <i data-feather="x-circle"></i></button>
        </div>
    </footer>


    <script src="js/script.js"></script>
    <script>
        $(document).ready(() => {
            // Инит иконок
            feather.replace();
        });
    </script>

</body>

</html>