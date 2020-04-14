<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Задачи</title>
    <meta charset="utf-8">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/staff-page.css">
    <link rel="stylesheet" type="text/css" href="css/tasks-page.css">
    <link rel="stylesheet" type="text/css" href="css/styles-all.css">
    <link rel="stylesheet" type="text/css" href="css/media-all.css">

    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<div class="wrapper">

    <!--Sidebar-->
    <?php require_once('blocks/sidebar.php'); ?>
    <!--Sidebar END-->

    <div class="page-container">

        <!-- loader -->
        <?php require_once('blocks/preloader.php'); ?>

        <main class="page-loading d-none">
        <!--Header-->
        <?php require_once('blocks/header.php'); ?>
        <!--Header END-->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">

                        <div class="additions">
                            <div class="additions-choice-wrap">
                                <div class="additions-choice add-mr ">
                                    <select class="selectpicker" id="oneStaff">
                                        <option>Сотрудник</option>
                                        <option>.....</option>
                                        <option>......</option>
                                    </select>
                                </div>
                                <div class="additions-choice add-mr">
                                    <select class="selectpicker" id="oneAccount">
                                        <option>Аккаунт</option>
                                        <option>.....</option>
                                        <option>......</option>
                                    </select>
                                </div>
                                <div class="additions-choice add-mr">
                                    <select class="selectpicker" id="oneStatus">
                                        <option>Статус</option>
                                        <option>.....</option>
                                        <option>......</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">

                        <ul id="tabs" class="staff-tab nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#open-tickets" data-toggle="tab"
                                   class="staff-tabs nav-link text-uppercase active">Задачи</a></li>
                            <li class="nav-item">
                                <a href="" data-target="#exit-tickets" data-toggle="tab"
                                   class="staff-tabs nav-link small text-uppercase">Новая задача</a>
                            </li>
                        </ul>

                        <div id="tabsContent" class="tab-content">

                            <!-- ====== Tab - TASKS  ======= -->

                            <div id="open-tickets" class="tab-pane fade active show">
                                <div class="staff-t card">
                                    <div class="table-scroll">
                                        <table class="table-staff table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Название</th>
                                                <th>Сотрудник</th>
                                                <th>Аккаунт</th>
                                                <th>Статус</th>
                                                <th>Описание</th>
                                                <th>Время завершения</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-active">Новая</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-active">Новая</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-active">Новая</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-active">Новая</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-active">Новая</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-no-active">Завершена</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-no-active">Завершена</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-no-active">Завершена</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Виктория Суходольска</td>
                                                <td>Pamela26</td>
                                                <td><span class="status-no-active">Завершена</span></td>
                                                <td>123123123123123</td>
                                                <td><span>21/03/2020 12:03</span></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- ====== Tab - NEW TASK ======= -->

                            <div id="exit-tickets" class="tab-pane fade">

                                <div class="staff-t card">
                                    <div style="overflow-x:auto;">
                                        <div class="new-task-wrap">



                                            <form class="form-add">

                                                <div class="form-fr-wrap">

                                                    <div class="form-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="edit-2"></i>
                                                        </div>

                                                        <div class="tasks-s mb-0 form-group">
                                                            <span class="label-input100">Введите название задачи:</span>
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Имя прокси">
                                                        </div>

                                                    </div>

                                                    <div class="form-bl-wrap mb-2">
                                                        <div class=" stage-icon">
                                                            <i class="modal-ic" data-feather="clock"></i>
                                                        </div>
                                                        <div class="tasks-s mb-0 form-group">
                                                            <span class="label-input100">Срок выполнения:</span>
                                                            <label>
                                                                <input type="text" class="form-br dateselect" required="required" placeholder="Дата регистрации"/>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-fr-wrap">

                                                    <div class="form-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="alert-circle"></i>
                                                        </div>
                                                        <div class="tasks-s mb-0 form-group ">
                                                            <div id="stages-btn">
                                                                <span class="label-input100">Кому назначить:</span>
                                                                <select class="selectpicker input-select form-control" id="">
                                                                    <option>Сотрудник</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="user"></i>
                                                        </div>
                                                        <div class="tasks-s mb-0 form-group ">
                                                            <div id="stages-btn">
                                                                <span class="label-input100">Выберите сотрудника:</span>
                                                                <select class="selectpicker input-select form-control" id="">
                                                                    <option>Дмитрий Фомин</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>

                                                <div class="form-bt-wrap">
                                                    <div class="stage-icon-txt">
                                                        <i class="modal-ic" data-feather="edit-3"></i>
                                                    </div>
                                                    <div class="tasks-s mb-0 form-group">
                                                        <span class="label-input100">Введите описание задачи:</span>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>

                                                 <div class="form-but-wrap mt-3">
                                                     <button type="submit" class="add-btn btn btn-primary ">
                                                         Добавить
                                                     </button>
                                                 </div>

                                            </form>



                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ====== THE END Tab - EXIT TICKETS  ======= -->
                        </div>
                    </div>
                </div>



            </div>


            <!-------------------  STAFF CONTENT THE END-------------------------->

           
            <!--feather-icons-->
            <script>
                feather.replace()
            </script>
            <script>
                $(function() {
                    $('.dateselect').datepicker({
                        format: 'mm/dd/yyyy',
                        // startDate: '-3d'
                    });
                });
            </script>


    </div>
</div>

</main>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
<script src="js/script.js"></script>
<!-- loader script -->
<script src="js/loader.js"></script>
</body>
</html>