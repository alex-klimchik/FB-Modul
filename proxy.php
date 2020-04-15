<!DOCTYPE html>
<html>

<head>
    <title>Proxy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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

    <link rel="stylesheet" type="text/css" href="css/loader.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/proxy.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media-all.css">


    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>

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
                        <div class="row">
                            <div class="col-12">
                                <div class="additions">
                                    <div class="additions-choice">
                                        <select class="selectpicker" id="proxyAllAccount">
                                            <option>FB account</option>
                                            <option>Фармер</option>
                                            <option>Фармер 2</option>
                                        </select>
                                    </div>
                                    <div class="additions-modal" data-toggle="modal" data-target="#proxyModalAdd" data-placement="top" title="Добавить">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="staff-t card">
                                    <h6 class="table-headline">Proxy</h6>
                                    <div class="table-scroll">
                                        <table id="mainTable" class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th class="select-all">Все</th>
                                                    <th>Имя прокси</th>
                                                    <th>IP</th>
                                                    <th>Сетевой протокол</th>
                                                    <th>Порт</th>
                                                    <th>Логин</th>
                                                    <th>Пароль</th>
                                                    <th>Начало действий</th>
                                                    <th>Дата окончания</th>
                                                    <th>ФИО</th>
                                                    <th>Закреплен FB</th>
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
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="checkboxId2">
                                                            <label class="custom-control-label" for="checkboxId2"></label>
                                                        </div>
                                                    </td>
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="checkboxId3">
                                                            <label class="custom-control-label" for="checkboxId3"></label>
                                                        </div>
                                                    </td>
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="checkboxId4">
                                                            <label class="custom-control-label" for="checkboxId4"></label>
                                                        </div>
                                                    </td>
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="checkboxId5">
                                                            <label class="custom-control-label" for="checkboxId5"></label>
                                                        </div>
                                                    </td>
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="checkboxId6">
                                                            <label class="custom-control-label" for="checkboxId6"></label>
                                                        </div>
                                                    </td>
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="checkboxId7">
                                                            <label class="custom-control-label" for="checkboxId7"></label>
                                                        </div>
                                                    </td>
                                                    <td>Прокси 1</td>
                                                    <td>12.12.12</td>
                                                    <td>socks5</td>
                                                    <td>1</td>
                                                    <td>proxy_teamlead</td>
                                                    <td>proxy</td>
                                                    <td>2019-11-21</td>
                                                    <td>2019-11-23</td>
                                                    <td>Помощник Тимлида</td>
                                                    <td>te123123</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ===== Modal proxy Add===== -->

                        <div>

                            <div class="modal fade" id="proxyModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                <div class=" modal-lg modal-dialog" role="document">
                                    <div class="b-border modal-content ">
                                        <div class="modal-header mb-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Добавить Proxy</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body modal-border">

                                            <form class="proxy-add">

                                                <div class="proxy-fr-wrap">
                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="clipboard"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <!-- <label for="example2" class="bmd-label-floating">Введите этап</label>-->
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Имя прокси">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="list"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group ">
                                                            <div class="stages-btn ">
                                                                <select class="selectpicker form-br input-select form-control">
                                                                    <option>FB аккаунт</option>
                                                                    <option>.....</option>
                                                                    <option>.....</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="pro-ico stage-icon">
                                                            <i class="modal-ic" data-feather="clock"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <!--                                                     <label for="example2" class="bmd-label-floating">Дата регистрации</label>-->
                                                            <label>
                                                                <input type="text" class="form-br dateselect" required="required" placeholder="Дата регистрации" />
                                                            </label>


                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="monitor"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="IP">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="key"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Пароль">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="proxy-fr-wrap">

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="server"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="http(s)">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="more-horizontal"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group ">
                                                            <div class="stages-btn ">
                                                                <select class="selectpicker form-br input-select form-control" id="stageS">
                                                                    <option>Порт</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="pro-ico stage-icon">
                                                            <i class="modal-ic" data-feather="clock"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <!--                                                    <label for="example2" class="bmd-label-floating">Дата окончания</label>-->
                                                            <label>
                                                                <input type="text" class="form-br dateselect" required="required" placeholder="Дата окончания" />
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="user"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Login">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="rotate-ccw"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Повторно пароль">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="modal-footer mt-2">
                                            <div class="wrap-login100-form-btn">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                            </div>
                                            <div class="wrap-login100-form-btn">
                                                <button type="submit" class="add-btn btn btn-primary ">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ===== THE END Modal proxy Add ===== -->


                        <!-- ===== Modal proxy EDIT ===== -->

                        <div>

                            <div class="modal fade" id="proxyModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                <div class=" modal-lg modal-dialog" role="document">
                                    <div class="b-border modal-content ">
                                        <div class="modal-header mb-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Редактировать Proxy</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body modal-border">

                                            <form class="proxy-add">

                                                <div class="proxy-fr-wrap">
                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="clipboard"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <!-- <label for="example2" class="bmd-label-floating">Введите этап</label>-->
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Имя прокси">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="list"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group ">
                                                            <div class="stages-btn ">
                                                                <select class="form-br selectpicker input-select form-control">
                                                                    <option>FB аккаунт</option>
                                                                    <option>.....</option>
                                                                    <option>.....</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="pro-ico stage-icon">
                                                            <i class="modal-ic" data-feather="clock"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <!--                                                    <label for="example2" class="bmd-label-floating">Дата регистрации</label>-->
                                                            <label>
                                                                <input type="text" class="form-br dateselect" required="required" placeholder="Дата регистрации" />
                                                            </label>


                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="monitor"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="IP">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="key"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Пароль">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="proxy-fr-wrap">

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="server"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="http(s)">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="more-horizontal"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group ">
                                                            <div class="stages-btn">
                                                                <select class="selectpicker form-br input-select form-control" id="stageS">
                                                                    <option>Порт</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="pro-ico stage-icon">
                                                            <i class="modal-ic" data-feather="clock"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <!--                                                    <label for="example2" class="bmd-label-floating">Дата окончания</label>-->
                                                            <label>
                                                                <input type="text" class="form-br dateselect" required="required" placeholder="Дата окончания" />
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="user"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Login">
                                                        </div>
                                                    </div>

                                                    <div class="stage-bl-wrap mb-2">
                                                        <div class="stage-icon">
                                                            <i class="modal-ic" data-feather="rotate-ccw"></i>
                                                        </div>
                                                        <div class="stage-s mb-0 form-group">
                                                            <input type="text" class="form-br form-control" id="example2" placeholder="Повторно пароль">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="modal-footer mt-2">
                                            <div class="wrap-login100-form-btn">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                            </div>
                                            <div class="wrap-login100-form-btn">
                                                <button type="submit" class="add-btn btn btn-primary ">
                                                    Сохранить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ===== THE END Modal proxy EDIT ===== -->


                    </div>
                </main>
            </div>
        </div>
    </div>
    <footer style="display: none">
   
        <div>
        <div class="count">
                Выбрано: <span>0</span>
            </div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#proxyModalEdit">Редактировать <i class="ft-icon" data-feather="edit-2"></i></button>
            <button class="btn btn-primary cansel-all">Удалить <i class="ft-icon" data-feather="trash-2"></i></button>
           

        </div>
        <div>
          
        <button class="bottom-btn btn btn-primary cansel-all"> <i class="fas fa-times"></i></button>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script>
        $(document).ready(() => {
            $('.dateselect').datepicker({
                format: 'mm/dd/yyyy',
                // startDate: '-3d'
            });

            /* <!--feather-icons--> */
            feather.replace();
        });
    </script>
    <!-- loader script -->
    <script src="js/loader.js"></script>

</body>

</html>