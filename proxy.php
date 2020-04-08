<!DOCTYPE html>
<html>

<head>
    <title>Proxy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/proxy.css">


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

                <div class="row">

                    <div class="col-12">
                        <div class="proxy-account">
                            <div class="form-group pr-selec">
                                <select class="input-select form-control" id="proxyAllAccount">
                                    <option>FB account</option>
                                    <option>???</option>
                                    <option>Фармер</option>
                                    <option>Фармер 2</option>
                                </select>

                            </div>
                            <div class="proxy-add">
                                <!--                                <button type="submit" class="add-btn btn btn-sm" data-toggle="modal"-->
                                <!--                                        data-target="#proxyModalAdd">-->
                                <!--                                    <i class="fas fa-plus"> </i> Добавить-->
                                <!--                                </button>-->


                                <button type="button" class="btn-new-ticket btn" data-toggle="modal"
                                        data-target="#proxyModalAdd" data-placement="top" title="Добавить">
                                    <i class="fa fa-plus staff-fa" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="staff-t card">
                            <div style="overflow-x:auto;">
                                <table class="table table-striped ">
                                    <thead>
                                    <tr>
                                        <th>Все</th>
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
                                            <div>
                                                <label class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" checked="">
                                                    <span class="custom-control-label text-hide">Checkbox</span>
                                                </label>
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
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label text-hide">Checkbox</span>
                                                </label>
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
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label text-hide">Checkbox</span>
                                                </label>
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
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label text-hide">Checkbox</span>
                                                </label>
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
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label text-hide">Checkbox</span>
                                                </label>
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
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label text-hide">Checkbox</span>
                                                </label>
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

                    <div class="modal fade" id="proxyModalAdd" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
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
                                                    <i data-feather="clipboard"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                    <!-- <label for="example2" class="bmd-label-floating">Введите этап</label>-->
                                                    <input type="text" class="form-br form-control" id="example2"
                                                           placeholder="Имя прокси">
                                                </div>
                                            </div>


                                            <div class="stage-bl-wrap">
                                                <div class="stage-icon">
                                                    <i data-feather="list"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group ">
                                                    <select class="form-br input-select form-control" id="proxy-account">
                                                        <option>FB аккаунт</option>
                                                        <option>.....</option>
                                                        <option>.....</option>
                                                    </select>
                                                </div>
                                            </div>




                                            <div class="stage-bl-wrap mb-2">
                                                <div class="pro-ico stage-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                     <label for="example2" class="bmd-label-floating">Дата регистрации</label>
                                                    <label>
                                                        <input type="text" class="form-br dateselect" required="required" placeholder="дд.мм.гг"/>
                                                    </label>


                                                </div>
                                            </div>

                                            <div class="stage-bl-wrap mb-2">
                                                <div class="stage-icon">
                                                    <i data-feather="monitor"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                    <input type="text" class="form-br form-control" id="example2"
                                                           placeholder="IP">
                                                </div>
                                            </div>

                                            <div class="stage-bl-wrap mb-2">
                                                <div class="stage-icon">
                                                    <i data-feather="key"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                    <input type="text" class="form-br form-control" id="example2"
                                                           placeholder="Пароль">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="proxy-fr-wrap">

                                            <div class="stage-bl-wrap mb-2">
                                                <div class="stage-icon">
                                                    <i data-feather="server"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
<!--                                                     <label for="example2" class="bmd-label-floating">Протокол</label>-->
                                                    <input type="text" class="form-br form-control" id="example2"
                                                           placeholder="http(s)">
                                                </div>
                                            </div>

                                            <div class="stage-bl-wrap">
                                                <div class="stage-icon">
                                                    <i data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group ">
                                                    <select class="form-br input-select form-control" id="stageS">
                                                        <option>Порт</option>
                                                        <option>......</option>
                                                        <option>......</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="stage-bl-wrap mb-2">
                                                <div class="pro-ico stage-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                    <label for="example2" class="bmd-label-floating">Дата окончания</label>
                                                    <label>
                                                        <input type="text" class="form-br dateselect" required="required" placeholder="дд.мм.гг"/>
                                                    </label>


                                                </div>
                                            </div>

                                            <div class="stage-bl-wrap mb-2">
                                                <div class="stage-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                    <input type="text" class="form-br form-control" id="example2"
                                                           placeholder="Login">
                                                </div>
                                            </div>

                                            <div class="stage-bl-wrap mb-2">
                                                <div class="stage-icon">
                                                    <i data-feather="rotate-ccw"></i>
                                                </div>
                                                <div class="stage-s mb-0 form-group">
                                                    <input type="text" class="form-br form-control" id="example2"
                                                           placeholder="Повторно пароль">
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <div class="modal-footer mt-2 mb-2">
                                    <div class="wrap-login100-form-btn">
                                        <button type="submit" class="add-btn btn btn-primary ">
                                            Добавить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           <!-- ===== THE END Modal proxy Add ===== -->


            </div>

        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script>
            $(function() {
                $('.dateselect').datepicker({
                    format: 'mm/dd/yyyy',
                    // startDate: '-3d'
                });
            });
        </script>

        <script src="js/script.js"></script>
        <!--feather-icons-->
        <script>
            feather.replace()
        </script>


</body>

</html>