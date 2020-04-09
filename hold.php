<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Холд (new)</title>
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
    <link rel="stylesheet" type="text/css" href="css/hold.css">
    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <!-- Modal Add Account-->
    <div class="modal fade modal-add_account" id="addPreset">
        <div class="modal-dialog  modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Добавить пресет</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="preset">Выберите пресет</label>

                        <select class="selectpicker" name="" id="preset">
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>
                            <option value="">Выберите пресет</option>

                        </select>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Add Account -->
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
                                    <option value="" disabled selected>Статус</option>
                                    <option value="">Статус 5</option>
                                    <option value="">Статус 10</option>
                                </select>
                                <select class="selectpicker" name="" id="">
                                    <option value="">Сотрудник</option>
                                    <option value="">Сотрудник 1</option>
                                    <option value="">Сотрудник 2</option>
                                </select>
                            </div>
                        </div>



                        <div class="card" style="padding: 15px;">
                            <h6>Холд</h6>
                            <div style="border-top: 1px solid #e7e9ea;overflow-x:auto;overflow-y: hidden;">
                                <table id="container-table" class="table-staff table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="select-all">Все</th>
                                            <th>Название MLA</th>
                                            <th>Тип рег.</th>
                                            <th>Дата рег.</th>
                                            <th>Логин</th>
                                            <th>Пароль</th>
                                            <th>Сотрудник</th>
                                            <th>Добавить пресет</th>
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
                                            <td class="type_registr"><i class="fa fa-envelope"></i></td>
                                            <td>2020-03-11</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td>Дмитрий Фомин</td>
                                            <td>
                                                <div class="addPreset_modal">
                                                    <i class="fa fa-plus" data-toggle="modal" data-target="#addPreset"></i>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                    <label class="custom-control-label" for="checkboxId2"></label>
                                                </div>
                                            </td>
                                            <td>Maryse1</td>
                                            <td class="type_registr"><i class="fa fa-envelope"></i></td>
                                            <td>2020-03-11</td>
                                            <td>test</td>
                                            <td>test1</td>
                                            <td>Аня Новикова</td>
                                            <td>
                                                <div class="addPreset_modal" >
                                                    <i class="fa fa-plus" data-toggle="modal" data-target="#addPreset"></i>
                                                </div>
                                            </td>
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
            <button class="btn btn-primary cansel">Отмена <i data-feather="x-circle"></i></button>
            <button class="btn btn-primary ">Передать <i style="transform: rotate(45deg)" data-feather="send"></i></button>
            <select class="selectpicker" name="" id="">
                <option value="">Фб 1</option>
                <option value="">ФБ 2</option>
            </select>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/container.js"></script>


</body>

</html>