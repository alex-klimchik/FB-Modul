<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Сотрудники</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/staff-page.css">
    <link rel="stylesheet" type="text/css" href="css/staff-add.css">
    <link rel="stylesheet" type="text/css" href="css/stages-page.css">

    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

  
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <div class="container-fluid py-4">
            <div class="row">

                <div class="col-12">
                    <div class="staff-department">
<!--                        <div class="form-group">-->
<!--                            <select class="form-style selectpicker" id="allStaff" data-live-search="false">-->
<!--                                <option>Отдел</option>-->
<!--                                <option>ФМ1</option>-->
<!--                                <option>Фарм</option>-->
<!--                            </select>-->
<!--                        </div>-->
                        <div class="staff-add">
                            <button type="button" class="btn-new-ticket btn" data-toggle="modal" data-target="#exampleModalStaff"  data-placement="top" title="Добавить сотрудника">
                                <i class="fa fa-plus staff-fa" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <ul id="tabs" class="staff-tab nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#open-tickets" data-toggle="tab"
                               class="nav-link staff-tabs text-uppercase active">Сотрудники</a></li>
                        <li class="nav-item">
                            <a href="" data-target="#exit-tickets" data-toggle="tab" class="staff-tabs nav-link small text-uppercase">Заблокированные</a>
                        </li>
                    </ul>

                    <div id="tabsContent" class="tab-content">

                        <!-- ====== Tab - OPEN TICKETS  ======= -->

                        <div id="open-tickets" class="tab-pane fade active show">
                            <div class="staff-t card" >
                                <div style="overflow-x:auto;">
                                    <table class="table-staff table table-striped">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>ФИО</th>
                                            <th>Должность</th>
                                            <th>Телефон</th>
                                            <th>Отдел</th>
                                            <th>Ставка</th>
                                            <th>ЗП</th>
                                            <th>Аккаунтов</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ====== Tab - EXIT TICKETS  ======= -->

                        <div id="exit-tickets" class="tab-pane fade">
                            <!--<div class="head-line-staff">-->
                                <!--<h4>Заблокированные</h4>-->
                            <!--</div>-->

                            <div class="staff-t card">
                                <div style="overflow-x:auto;">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>ФИО</th>
                                            <th>Должность</th>
                                            <th>Телефон</th>
                                            <th>Отдел</th>
                                            <th>Ставка</th>
                                            <th>ЗП</th>
                                            <th>Аккаунтов</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>Шкурко Ксения</td>
                                            <td>Фармер (трастовый)</td>
                                            <td>+38(063) 39-38-607</td>
                                            <td>ФМ1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td class="setting-offers">
                                                <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalStaffEdit" data-placement="bottom" title="Редактировать"><i data-feather="edit-2"></i></button>
                                                <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- ====== THE END Tab - EXIT TICKETS  ======= -->
                    </div>
                    </div>
                </div>

            <!-- ===== Modal staff Add===== -->

            <div>

                <div class="modal fade" id="exampleModalStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class=" modal-lg modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавить сотрудника</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="content-new-ticket">

                                <form class="login100-form validate-form">

                                    <div class=" wrap-input100 validate-input" data-validate = "Укажите Фамилию">
                                        <span class="label-input100">Фамилия:</span>
                                        <input class="input100" type="text" name="username" >
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class=" wrap-input100 validate-input" data-validate = "Укажите Ваше Имя">
                                            <span class="label-input100">Имя:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Укажите Nickname">
                                            <span class="label-input100">Nickname:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Отдел:</span>
                                        <select class="input-select form-control" id="exampleFormControlSelect1">
                                            <option>ФМ1</option>
                                            <option>Фарм</option>
                                        </select>

                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Укажите Email">
                                        <span class="label-input100">Email:</span>
                                        <input class="input100" type="text" name="username">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Укажите Телефон">
                                        <span class="label-input100">Телефон:</span>
                                        <input class="input100" type="text" name="username">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Укажите Логин">
                                        <span class="label-input100">Логин:</span>
                                        <input class="input100" type="text" name="username">
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input" data-validate="Укажите Пароль">
                                        <span class="label-input100">Пароль:</span>
                                        <input class="input100" type="password" name="pass">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Должность:</span>
                                        <select class="input-select form-control" id="exampleFormControlSelect2">
                                            <option>Фармер (трастовый)</option>
                                            <option>Фармер (не трастовый)</option>
                                            <option>Помощник Тим-лида</option>
                                            <option>Ответственный за вайты</option>
                                            <option>Тим-лид</option>
                                        </select>

                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Укажите Логин">
                                        <span class="label-input100">ЗП:</span>
                                        <input class="input100" type="text" name="username">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Укажите Логин">
                                        <span class="label-input100">Ставка:</span>
                                        <input class="input100" type="text" name="username">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input-hid">

                                    </div>

                                    <div class=" container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        </div>
                                        <div class="wrap-login100-form-btn">
                                            <button type="submit" class="btn btn-primary login100-form-btn">
                                                Добавить
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="modal-staff-f modal-footer"></div>
                    </div>
                </div>
                </div>
            </div>           <!-- ===== THE END Modal staff Add ===== -->


            <!-- ===== Modal staff Edit===== -->

            <div>

                <div class="modal fade" id="exampleModalStaffEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class=" modal-lg modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Добавить сотрудника</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="content-new-ticket">

                                    <form class="login100-form validate-form">

                                        <div class=" wrap-input100 validate-input" data-validate = "Укажите Фамилию">
                                            <span class="label-input100">Фамилия:</span>
                                            <input class="input100" type="text" name="username" >
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class=" wrap-input100 validate-input" data-validate = "Укажите Ваше Имя">
                                            <span class="label-input100">Имя:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Укажите Nickname">
                                            <span class="label-input100">Nickname:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input">
                                            <span class="label-input100">Отдел:</span>
                                            <select class="input-select form-control" id="exampleFormControlSelect1">
                                                <option>ФМ1</option>
                                                <option>Фарм</option>
                                            </select>

                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Укажите Email">
                                            <span class="label-input100">Email:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Укажите Телефон">
                                            <span class="label-input100">Телефон:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Укажите Логин">
                                            <span class="label-input100">Логин:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>


                                        <div class="wrap-input100 validate-input" data-validate="Укажите Пароль">
                                            <span class="label-input100">Пароль:</span>
                                            <input class="input100" type="password" name="pass">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input">
                                            <span class="label-input100">Должность:</span>
                                            <select class="input-select form-control" id="exampleFormControlSelect2">
                                                <option>Фармер (трастовый)</option>
                                                <option>Фармер (не трастовый)</option>
                                                <option>Помощник Тим-лида</option>
                                                <option>Ответственный за вайты</option>
                                                <option>Тим-лид</option>
                                            </select>

                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Укажите Логин">
                                            <span class="label-input100">ЗП:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Укажите Логин">
                                            <span class="label-input100">Ставка:</span>
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input-hid">

                                        </div>

                                        <div class=" container-login100-form-btn">
                                            <div class="wrap-login100-form-btn">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                            </div>
                                            <div class="wrap-login100-form-btn">
                                                <button type="submit" class="btn btn-primary login100-form-btn">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="modal-staff-f modal-footer"></div>
                        </div>
                    </div>
                </div>
            </div>           <!-- ===== THE END Modal staff Edit ===== -->

        </div>


        <!-------------------  STAFF CONTENT THE END-------------------------->

        <script>
            $(document).ready(function() {

                $(function() {
                    $(".sidebar-toggle").click(function() {
                        $('.sidebar').toggleClass("sidebarNone")
                        $(".main").toggleClass("mainfull");
                    })
                });
            });
        </script>
        <!--feather-icons-->
        <script>
            feather.replace()
        </script>
        <script src="js/validate-form-staff.js"></script>


    </div>
</div>

        </main>


</body>
</html>