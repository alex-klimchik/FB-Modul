<!DOCTYPE html>
<html>

<head>
    <title>Аккаунты (new)</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/accounts.css">

</head>

<body>

    <!-- Modal New Account-->
    <div class="modal fade modal-new_account" id="newAccount">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Аккаунт</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal_account-stage">
                        <span class="active">Новый Аккаунт</span>
                        <span>Акк Зарегистрирован</span>
                        <span>СП Заполнен</span>
                        <span>ФП Заполнен</span>
                        <span>БМ Заполнен</span>
                    </div>
                    <div class="modal_account-collapse" id="accordion">

                        <div class="item-collapse">
                            <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                                <span>Основные 1</span>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <div id="collapseOne" data-parent="#accordion" class="collapse item-collapse_container">
                                <div>
                                    <ul class="item-collapse_box">
                                        <li class="box-title">Интерес 1</li>
                                        <li class="box-theme">Доберманы</li>
                                        <li>www.website.com www.website.com www.website.com www.website.com www.website.com www.website.com www.website.com</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                    </ul>
                                    <ul class="item-collapse_box">
                                        <li class="box-title">Интерес 1</li>
                                        <li class="box-theme">Доберманы</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                    </ul>
                                    <ul class="item-collapse_box">
                                        <li class="box-title">Интерес 1</li>
                                        <li class="box-theme">Доберманы</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                        <li>www.website.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item-collapse">
                            <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                <span>Основные 2</span>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <div id="collapseTwo" data-parent="#accordion" class="collapse item-collapse_container">
                                Test 2
                            </div>
                        </div>
                        <div class="item-collapse">
                            <div data-toggle="collapse" data-target="#collapseTree" aria-expanded="false">
                                <span>Основные 3</span>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <div id="collapseTree" data-parent="#accordion" class="collapse item-collapse_container">
                                Test 3
                            </div>
                        </div>
                    </div>

                    <div class="modal_account-content">

                        <div class="content-tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#comment">Комментарий</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#task">Задача</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="comment">
                                    <input type="text" placeholder="Комментарий" />
                                    <div>
                                        <span>Срок:</span>
                                        <input type="text" placeholder="01.01.2020 12:00" />
                                    </div>
                                    <div>
                                        <span>Наблюдатель:</span>
                                        <input type="text" placeholder="Кияшко Андрей" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="task">
                                    <input type="text" placeholder="Задача" />
                                    <div>
                                        <span>Срок:</span>
                                        <input type="text" placeholder="01.01.2020 12:00" />
                                    </div>
                                    <div>
                                        <span>Наблюдатель:</span>
                                        <input type="text" placeholder="Кияшко Андрей" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-tasks">
                            <p>Задачи</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkOne">
                                <label class="form-check-label task-red" for="checkOne">
                                    31.03.2020 15:00 Отредактировать фото
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkTwo">
                                <label class="form-check-label task-green" for="checkTwo">
                                    31.03.2020 15:00 Отредактировать фото
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkThree">
                                <label class="form-check-label" for="checkThree">
                                    31.03.2020 15:00 Отредактировать фото
                                </label>
                            </div>
                        </div>

                        <div class="content-history">
                            <p>История</p>
                            <div>
                                <p>01.01.2020 12:00 Добавить аватарку</p>
                                <p>02.01.2020 12:00 Добавить аватарку</p>
                                <p>03.01.2020 12:00 Добавить аватарку</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal New Account -->

    <div class="wrapper">
        <!--Sidebar-->
        <?php require_once('blocks/sidebar.php'); ?>
        <!--Sidebar END-->

    <div class="page-container">

            <!--Header-->
            <?php require_once('blocks/header.php'); ?>
            <!--Header END-->

     <main>

                <div class="main-content">
                    <div class="additions">
                        <div class="additions-choice">
                            <select class="selectpicker" name="" id="">
                                <option value="">Сотрудники</option>
                                <option value="">Владислав Ковальчук </option>
                                <option value="">Name Surname </option>
                            </select>
                            <select class="selectpicker" name="" id="">
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                                <option value="">Пресет</option>
                                <option value="">Пресет 2</option>
                                <option value="">Пресет 44</option>
                            </select>
                            <select class="selectpicker" name="" id="">
                                <option value="">Брут</option>

                            </select>
                        </div>


                    </div>
                    <div class="main-content_table">
                        <div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-registered"></i> Регистрация</b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini" data-toggle="modal" data-target="#newAccount">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Test Modal</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-cookie-bite"></i> Прогрев куки</b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini" data-toggle="modal" data-target="#newAccount">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Test Modal</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-people-carry"></i> Перенос в MLA</b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini" data-toggle="modal" data-target="#newAccount">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Test Modal</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">!!!</span>/!!!!</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">!!!</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> кликни </div>
                                            <div><span>Дополнительно <br> задач:</span> сюда</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Это модалка</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> тест
                                                </p>
                                                <p><span>Дата завершения:</span> модалки
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-user-friends"></i> 100 друзей </b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-address-card"></i> Фан-Пейдж</b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-user-tie"></i> Бизнес-Менеджер </b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fa fa-credit-card"></i> Привязка карты </b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-angle-double-up"></i> Поднятие </b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="board-col">
                                <div class="board-header">
                                    <b> <i class="fas fa-hourglass-end"></i> Конец Фарма </b><span>20</span>
                                </div>
                                <div class="board-main">
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__card-mini ">
                                        <div class="card-content_left">
                                            <div class="account__title"><span>Alex</span></div>
                                            <div>
                                                <p class="content_numbers"><span>Задачи:</span> <span
                                                        class="content_color-green">3</span>/7</p>
                                                <p class="content_numbers"><span>Просрочено:</span> <span
                                                        class="content_color-red">0</span></p>
                                            </div>
                                            <div><span>Переход на след <br> этап:</span> 01/02/2020 </div>
                                            <div><span>Дополнительно <br> задач:</span> 3</div>
                                        </div>
                                        <div class="card-content_right">
                                            <div>
                                                <p><span>Ответственный:</span></p>
                                                <p>Иванов Иван</p>
                                            </div>
                                            <div class="content_date">
                                                <p><span>Дата создания:</span> 01/01/2020
                                                </p>
                                                <p><span>Дата завершения:</span> 01/01/2020
                                                </p>
                                            </div>
                                            <div class="card-content_icons">
                                                <i class="fas fa-envelope-open"></i>
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>

    </script>

    <script src="js/script.js"></script>
    <script src="js/accounts.js"></script>

    <script>
        $(document).ready(() => {
            $(".sidebar-toggle")[0].click();
        })

    </script>
</body>

</html>