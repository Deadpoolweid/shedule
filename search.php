<?php require_once 'session.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Расписание занятий. Поиск</title>
    <meta charset="utf-8" />
    <? require_once "coms/links.php" ?>
</head>

<body>

<? require_once "coms/header.php" ?>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <a class="btn btn-secondary" href="#">Преподаватель</a>
            </div>
            <div class="col-md-2">
                <a class="btn btn-secondary" href="#">Студент</a>
            </div>
            <div class="col-md-2">
                <a class="btn btn-secondary" href="#">Администратор</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="search col-md-6">
            <div class="row">
                <label class="col-md-4">Форма обучения</label>
                <select class="col-md-3">
                    <option>Очная</option>
                    <option>Заочная</option>
                </select>
            </div>
            <div class="row">
                <label class="col-md-4">Факультет</label>
                <select class="col-md-3">
                    <option>МФиИ</option>
                    <option>Психологии</option>
                </select>
            </div>
            <div class="row">
                <label class="col-md-4">Группа</label>
                <select class="col-md-3">
                    <option>120431</option>
                    <option>120432</option>
                </select>
            </div>
            <div class="row">
                <label class="col-md-4">Неделя</label>
                <input type="week" />
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-5"></div>
        <div class="btn col-md-2 text-center btn-primary">Искать</div>
    </div>

</section>
<? require_once "coms/footer.php" ?>
</body>

</html>
