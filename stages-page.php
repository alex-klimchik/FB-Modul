<!DOCTYPE html>
<html>

<head>
    <title>Этапы</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stages-page.css">

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

            <div class="container-fluid ">
                <h6 style="color: #000; font-size: 21px; margin-bottom: 1rem">Этапы</h6>
                <div class="row">
                    <div class="col-12">

                        <div class="additions proxy-account">
                            <div class="additions-choice">
                                <select class="selectpicker" id="typeAllAccount">
                                    <option>Тип аккаунтов</option>
                                    <option>Брут</option>
                                    <option>Арендованные</option>
                                    <option>Фармер</option>
                                    <option>Фармер 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-flex mt-3">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pr-0  ">
                        <div class="thumb bg-stages-bl">
                            <div class="stages-headline access-bg">
                                <h5>Доступные этапы</h5>
                            </div>
                            <div class="stages-contant-bl">
                                <ol>
                                    <li><a>Регистрация</a></li>
                                    <li><a>Прогрев куки</a></li>
                                    <li><a>Перенос в MLA</a></li>
                                    <li><a>100 друзей</a></li>
                                    <li><a>Фан-Пейдж</a></li>
                                    <li><a>Бизней-Менеджер</a></li>
                                    <li><a>Поднятие</a></li>
                                    <li><a>Конец Фарма</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pr-lg-0 pr-xl-0 pr-md-3">
                        <div class="thumb bg-stages-bl">
                            <div class="stages-headline access-bg">
                                <h5>Добавить этап</h5>
                            </div>
                            <div class="stages-contant-bl">

                                <form class="stage-add">

                                    <div class="stage-bl-wrap mb-2">
                                        <div class="stage-icon">
                                            <i data-feather="edit-2"></i>
                                        </div>
                                        <div class="stage-s mb-0 form-group">
<!--                                            <label for="example2" class="bmd-label-floating">Введите этап</label>-->
                                            <input type="text" class="form-br form-control" id="example2" placeholder="Введите этап">
                                        </div>
                                    </div>

                                    <div class="stage-bl-wrap">
                                        <div class="stage-icon">
                                            <i data-feather="list"></i>
                                        </div>
                                        <div class="stage-s mb-0 form-group stages-btn">
                                            <select class="form-control selectpicker" id="stageS">
                                                <option>Добавить после</option>
                                                <option>Регистрация</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-3 mr-2 stage-btn">
                                        <button type="button" class="task-add btn" data-placement="top" title="Добавить этап">
                                            <i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pr-0">
                        <div class="thumb bg-stages-bl">
                            <div class="stages-headline access-bg">
                                <h5>Доступные задачи</h5>
                            </div>
                            <div class="stages-contant-bl">
                                <ul class="task-wrap">
                                    <li><a>Регистрация</a>
                                        <div class="task-list">
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Перенести и переименовать аккаунт</span>
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Уникализировать фото</span>
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Заполнить информацию</span>
                                        </div>
                                    </li>

                                    <li><a>Прогрев куки</a>
                                        <div class="task-list">
                                            <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Смотреть видео</span>
                                            <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Играть игру</span>
                                            <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Сделать репост</span>
                                        </div>
                                    </li>
                                    <li><a>Перенос в MLA</a>
                                        <div class="task-list">
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Создать фан-пейдж</span>
                                        </div>
                                    </li>
                                    <li><a>100 друзей</a>
                                        <div class="task-list">
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Создать БМ</span>
                                        </div>
                                    </li>
                                    <li><a>Поднятие</a>
                                        <div class="task-list">
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Тестовая</span>
                                          <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Есть или нет3</span>
                                        </div>
                                    </li>
                                    <li><a>Конец Фарма</a>
                                        <div class="task-list">
                                           <span> <i class="mr-2 task-ic" data-feather="more-horizontal"></i>Финальная задача</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="thumb  bg-stages-bl">
                            <div class="stages-headline access-bg">
                                <h5>Добавить задачу</h5>
                            </div>
                            <div class="stages-contant-bl">

                                <form class="stage-add">
                                    <div class="stage-bl-wrap mb-2">
                                        <div class="stage-icon">
                                            <i data-feather="edit-2"></i>
                                        </div>
                                        <div class="stage-s mb-0 form-group">
<!--                                            <label for="exampleTask" class="bmd-label-floating">Введите задачу</label>-->
                                            <input type="text" class="form-br form-control" id="exampleTask" placeholder="Введите задачу">
                                        </div>
                                    </div>

                                    <div class="stage-bl-wrap">
                                        <div class="stage-icon">
                                            <i data-feather="list"></i>
                                        </div>
                                        <div class="stage-s mb-0 form-group stages-btn">
                                            <select class="form-control selectpicker" id="stageS2">
                                                <option>Добавить после</option>
                                                <option>Регистрация</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-3 mr-2 stage-btn">
                                        <button type="button" class="task-add btn" data-placement="top" title="Добавить этап">
                                            <i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>

    </div>
</div>
        <script src="js/script.js"></script>

        <!--feather-icons-->
        <script>
            feather.replace()
        </script>



</body>

</html>