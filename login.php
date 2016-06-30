<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Вход
    </title>
    <? require_once "coms/links.php" ?>
</head>
<body>
<? require_once "coms/header.php" ?>
<section class="container">
    <form action="testreg.php" method="post">
        <div class="row">
            <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
            <p>
                <label class="col-md-2">Ваш логин:</label>
                <input class="input_txt col-md-2" name="login" type="text" size="15" maxlength="15">
            </p>
        </div>
        <div class="row">
            <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->

            <p>

                <label class="col-md-2">Ваш пароль:<br></label>
                <input class="col-md-2 input_txt" name="password" type="password" size="15" maxlength="15">
            </p>
        </div>
        <div class="row">
            <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->

            <p class="col-md-2">
            </p>
                <input class="btn btn-secondary" type="submit" name="submit" value="Войти">

                <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
                <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->
                <a class="btn btn-secondary" href="reg.php">Зарегистрироваться</a>

        </div>
    </form>
</section>

<?php

echo $_SESSION['login'].$_SESSION['id'];
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
}
else
{

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Открыть</a>";
}
?>

<? require_once "coms/footer.php" ?>
</body>
</html>