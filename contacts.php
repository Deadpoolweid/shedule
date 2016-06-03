<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Контакты
    </title>
    <? require_once "coms/links.php" ?>
</head>
<body>
<? require_once "coms/header.php" ?>
<section class="container">
    <div class="row">
        <div class="col-md-3"><img src="media/images/contact.jpg" /></div>
        <div class="col-md-6">
            <h1>Cвяжись со мной</h1>
            <span>
                Если у тебя есть вопросы или предложения по улучшению сайта, наполнению его контентом, либо другим вопросам заполни форму ниже:
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div>
                    <input class="input_txt" placeholder="Имя" name="Name2" type="text" required="true" autofocus="true"/>
                </div>
                <div>
                    <input class="input_txt" placeholder="E-mail" name="Name" type="text" email required="true"/>
                </div>
                <div>
                    <input class="input_txt" placeholder="Тема" name="Name" type="text" required="true"/>
                </div>
                <div>
                    <textarea class="text_area" cols="32" rows="3" placeholder="Сообщение" required="true"></textarea>
                </div>
                <div>
                    <input class="btn btn-secondary" name="Submit" type="submit" value="Отправить" />
                    <input class="btn btn-secondary" name="Reset" type="reset" value="Очистить поля" />
                </div>
            </form>
        </div>
    </div>
</section>

<? require_once "coms/footer.php" ?>
</body>
</html>