<html>
<head>
    <title>Регистрация</title>
    <? require_once "coms/links.php"; ?>
</head>
<body>
<?php require_once "coms/header.php"; ?>

<section class="container">
    <form action="save_user.php" method="post">
        <div class="row">
            <!--**** save_user . php - это адрес обработчика . То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user . php методом "post" ***** -->

            <label class="col-md-2"> Ваш логин:<br></label>
            <input class="col-md-2 input_txt" name="login" type="text" size="15" maxlength="15">
        </div>
        <div class="row">
            <!--**** В текстовое поле(name = "login" type = "text") пользователь вводит свой логин ***** -->
            <label class="col-md-2"> Ваш пароль:<br></label>
            <input class="col-md-2 input_txt" name="password" type="password" size="15" maxlength="15">
        </div>

        <!--**** В поле для паролей(name = "password" type = "password") пользователь вводит свой пароль ***** -->
        <p>
            <input class="btn btn-secondary" type="submit" name="submit" value="Зарегистрироваться">
            <!--**** Кнопочка(type = "submit") отправляет данные на страничку save_user . php ***** -->
        </p>
    </form>
</section>

<? require_once "coms/footer.php"; ?>
</body>
</html>