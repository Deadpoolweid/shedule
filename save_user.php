<!DOCTYPE html>
<html>
<head>
    <Title>Регистрация</Title>
    <? require_once "coms/links.php" ?>
</head>
<body>
<? require_once "coms/header.php" ?>

<section>
    <div class="row">
        <div class="col-md-5">

            <?php

            //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
            if (isset($_POST['login'])) {
                $login = $_POST['login'];
                if ($login == '') {
                    unset($login);
                }
            }

            //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

            if (isset($_POST['password'])) {
                $password = $_POST['password'];
                if ($password == '') {
                    unset($password);
                }
            }

            //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
            if (empty($login) or empty($password))
            {
                exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
            }

            //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
            $login = stripslashes($login);
            $login = htmlspecialchars($login);
            $password = stripslashes($password);
            $password = htmlspecialchars($password);
            //удаляем лишние пробелы
            $login = trim($login);
            $password = trim($password);

            // подключаемся к базе
            include("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
            // проверка на существование пользователя с таким же логином
            $result = $db->query("SELECT id FROM users WHERE login='$login'");

            $myrow = mysqli_fetch_array($result);
            if (!empty($myrow['id'])) {
                exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
            }
            ?>


            <?
            // если такого нет, то сохраняем данные
            $result2 = $db->query("INSERT INTO users (login,password) VALUES('$login','$password')");
            // Проверяем, есть ли ошибки
            if ($result2 == 'TRUE') {
                echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a class='btn btn-secondary' href='login.php'>Вход</a>";
            } else {
                echo "Ошибка! Вы не зарегистрированы.";
            }
            ?>
        </div>
    </div>
</section>

<? require_once "coms/footer.php" ?>
</body>
</html>