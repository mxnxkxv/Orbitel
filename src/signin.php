<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Официальный сайт провайдера Орбител. Высокоскоростной и надежный интернет, интерактивное и кабельное телевидение по оптимальным тарфиным планам!">
    <title>Орбител — интернет-сервис провайдер</title>

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="media/favicon/favicon-16x16.png">
    <link rel="manifest" href="media/favicon/site.webmanifest">
    <!--Favicons-->

    <!--style.css-->
    <link rel="stylesheet" href="css/style.css">
    <!--style.css-->

</head>
<body class="roboto-regular">
<div class="wrapper">
    <!--Header-->
    <header class="header wrapper-inner roboto-medium">
        <div class="header__left">
            <a href="#"><img src="media/logo.svg" alt="Логотип"></a>
        </div>
        <div class="header__right">
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a class="menu__link" href="https://orbitel.ru/home/">Для дома</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="https://orbitel.ru/business/">Для бизнеса</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="https://orbitel.ru/service/">Сервис и поддержка</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="https://orbitel.ru/about/">О компании</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="signup.php">Регистрация</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="signin.php">Вход</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--Header-->

    <!--Main-->
    <main class="main">
        <section class="section form-login">
            <form class="form" action="login.php" method="post">
                <h1 class="form__title roboto-bold">Вход</h1>
                <input class="form__input roboto-medium" type="text" placeholder="Логин" name="login">
                <input class="form__input roboto-medium" type="password" placeholder="Пароль" name="pass">
                <button class="form__button roboto-bold" type="submit">Войти</button>
            </form>
        </section>
    </main>
    <!--Main-->

    <!--Footer-->
    <footer class="footer section roboto-medium">

        <div class="footer__left">
            <div class="footer__left-top">
                <a class="footer__link" href="https://yandex.ru/maps/org/orbitel/1046805036/?ll=65.352911%2C55.439160&z=16">Курган, ул. Пичугина 16</a>
            </div>
            <div class="footer__left-mid">
                <a class="footer__link" href="mailto:office@orbitel.ru">office@orbitel.ru</a>
                <a class="footer__link" href="tel:88001006545">8 (800) 100-65-45</a>
                <a class="footer__link" href="tel:83522650000">8 (3522) 65-00-00</a>
            </div>
            <div class="footer__left-bottom">
                <a class="footer__link" href="#">Все права защищены © ООО «Орбител»</a>
                <a class="footer__link" href="https://orbitel.ru/information/">Правовая информация</a>
                <a class="footer__link" href="https://orbitel.ru/docs/">Документы</a>
            </div>
        </div>

        <div class="footer__right">
            <a href="https://vk.com/orbitelru"><img src="media/vk.svg" alt="ВКонтакте"></a>
        </div>
    </footer>
    <!--Footer-->
</div>
</body>
</html>