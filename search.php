<!DOCTYPE html>
<html>
<head>
    <title>Расписание занятий. Поиск</title>
    <meta charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>

<body>

<header class="container">
    <div class="row">
        <h1 class="col-sm-8">Расписание занятий</h1>
        <nav class="col-sm-4">
            <p>Главная</p>
            <p>Поиск</p>
            <p>Контакты</p>
        </nav>
    </div>
</header>
<section class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-2">
                <a class="btn btn-secondary" href="#">Студент</a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <a class="btn btn-secondary" href="#">Преподаватель</a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <a class="btn btn-secondary" href="#">Администратор</a>
            </div>
        </div>
    </div>

    <div class="row">
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
        <div class="btn col-md-2 text-center btn-primary">Искать</div>
    </div>

</section>
<footer class="container">
    <div class="row">
        <p class="col-sm-4">&copy; 2016 Alex_Green</p>
        <ul class="col-sm-8">
            <li class="col-sm-1">
                <a href="http://twitter.com/deadpoolweid">
                    <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/twitter.svg">
                </a>
            </li>
            <li class="col-sm-1" id="vk">
            </li>
            <li class="col-sm-1">
                <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/instagram.svg">
            </li>
            <li class="col-sm-1">
                <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/medium.svg">
            </li>
        </ul>
    </div>
</footer>
</body>

</html>
