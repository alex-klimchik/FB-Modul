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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                    <div class="card" style="padding: 15px;">
                        <h6>Пресеты</h6>
                        <div style="border-top: 1px solid #e7e9ea;overflow-x:auto;">
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
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-active">активен</span></td>
                                        <td>2 час. 29 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>02-03-2020</td>
                                        <td><span class="status-no-active">заблокирован	</span></td>
                                        <td>14 мин.</td>
                                        <td>expected...</td>

                                        <td class="setting-offers">
                                            <button type="button" class="btn-mini btn-outline-edit" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-search"></i></button>
                                            <button type="button" class="btn-mini btn-outline-add" data-toggle="tooltip" data-placement="bottom" title="??????"><i class="fas fa-lock"></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>


            <script src="js/script.js"></script>
</body>

</html>