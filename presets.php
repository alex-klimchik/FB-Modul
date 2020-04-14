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

    <!--feather-icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/loader.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/presets.css">
    <link rel="stylesheet" type="text/css" href="css/styles-all.css">
    <link rel="stylesheet" type="text/css" href="css/media-all.css">
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

                <div class="container-fluid" style="position: relative;">
                    <div class="card" style="padding: 15px;">
                        <h6 class="table-headline">Пресеты</h6>
                        <div class="table-scroll">
                            <table class="table-staff table table-striped">
                                <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th>Дата создания</th>
                                        <th>Статус</th>
                                        <th>Длительность</th>
                                        <th>Эффективность</th>
                                        <th>Действие</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="modal" data-target="#exampleModalPreSearch" data-placement="bottom" title="??????"><i data-feather="search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-lock" data-toggle="tooltip" data-placement="bottom" title="??????"><i data-feather="lock"></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- ===== Modal staff Edit===== -->

                    <div>

                        <div class="modal fade" id="exampleModalPreSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class=" modal-lg modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Название</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body modal-border">

                                        <div class="completed-tasks">
                                            <div class="task-direction">
                                                <div class="task-icon">
                                                   <button type="button" class="btn-mini btn-outline-edit"><i data-feather="list"></i></button>
                                                </div>
                                                <div class="task-headline">
                                                   <h5>Регистрация</h5>
                                                </div>
                                            </div>
                                            <div class="completed-task">
                                                <ul class="task-all">
                                                    <li class="task-name">
                                                        <button type="button" class="btn-mini btn-outline-edit" ><i data-feather="clock"></i></button>
                                                        <span>Перенести и переименовать аккаунт - 1мин</span>
                                                    </li>
                                                    <li class="task-name">
                                                        <button type="button" class="btn-mini btn-outline-edit" ><i data-feather="clock"></i></button>
                                                        <span>Заполнить информацию -4мин</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="completed-tasks">
                                            <div class="task-direction">
                                                <div class="task-icon">
                                                    <button type="button" class="btn-mini btn-outline-edit"><i data-feather="list"></i></button>
                                                </div>
                                                <div class="task-headline">
                                                    <h5>Перенос в MLA</h5>
                                                </div>
                                            </div>
                                            <div class="completed-task">
                                                <ul class="task-all">
                                                    <li class="task-name">
                                                        <button type="button" class="btn-mini btn-outline-edit" ><i data-feather="clock"></i></button>
                                                        <span>Создать фан-пейдж -7мин</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="completed-tasks">
                                            <div class="task-direction">
                                                <div class="task-icon">
                                                    <button type="button" class="btn-mini btn-outline-edit"><i data-feather="list"></i></button>
                                                </div>
                                                <div class="task-headline">
                                                    <h5>100 друзей</h5>
                                                </div>
                                            </div>
                                            <div class="completed-task">
                                                <ul class="task-all">
                                                    <li class="task-name">
                                                        <button type="button" class="btn-mini btn-outline-edit" ><i data-feather="clock"></i></button>
                                                        <span>Создать БМ -2мин</span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>           <!-- ===== THE END Modal staff Edit ===== -->



                </div>

            </main>

            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
            <script src="js/script.js"></script>
            <!--feather-icons-->
            <script>
                feather.replace()
            </script>
            <!-- loader script -->
            <script src="js/loader.js"></script>
</body>

</html>