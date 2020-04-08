<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Контейнер (new)</title>
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


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/container.css">
    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>
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

                    <div class="main-content">
                        <div class="additions">
                            <div class="additions-choice">
                                <input class="datepicker" data-provide="datepicker" placeholder="Дата регистрации">
                                <select class="selectpicker" name="" id="">
                                    <option value="">Этап</option>
                                    <option value="">Пресет 2</option>
                                    <option value="">Пресет 44</option>
                                    <option value="">Пресет</option>
                                    <option value="">Пресет 2</option>
                                    <option value="">Пресет 44</option>
                                    <option value="">Пресет</option>
                                </select>
                                <select class="selectpicker" name="" id="">
                                    <option value="">Статус</option>
                                </select>
                                <select class="selectpicker" name="" id="">
                                    <option value="">Сотрудник</option>
                                </select>
                            </div>
                        </div>



                        <div class="card" style="padding: 15px;">
                            <h6 style="color: #000; font-size: 21px; margin-bottom: 1rem">Контейнер</h6>
                            <div style="border-top: 1px solid #e7e9ea;overflow-x:auto;overflow-y: hidden;">
                                <table id="container-table" class="table-staff table table-striped">
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
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId1">
                                                    <label class="custom-control-label" for="checkboxId1"></label>
                                                </div>
                                            </td>
                                            <td>Lorena1</td>
                                            <td>-</td>
                                            <td>-</i></td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td class="symbol-token">T</td>
                                            <td class="symbol-proxy">P</td>
                                            <td>0<i class="fa fa-sync-alt calc-spend" title="Пересчитать"></i></td>
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
                                            <td>-</td>
                                            <td>-</i></td>
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
    <footer>
        <div class="btns-wrap">
            <div class="count">
                Выбрано: <span></span>
            </div>
            <button class="btn btn-primary cansel">Отмена <i style="color: #F44455" data-feather="x-circle"></i></button>
            <button class="btn btn-primary ">Отправить <i style="transform: rotate(45deg);color: #f9c323;" data-feather="send"></i></button>
            <select class="selectpicker" name="" id="">
                <option value="">Фб 1</option>
                <option value="">ФБ 2</option>
            </select>
            <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" id="checkboxId3">
                <label class="custom-control-label" for="checkboxId3">Передать в Lagoon</label>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/container.js"></script>


</body>

</html>