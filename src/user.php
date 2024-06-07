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

<!--Modal-->
<div class="modal" id="form-modal">
    <div class="modal__box">
        <a class="modal__close-btn" id="close-form-modal-btn">
            <img class="modal__close-icon" src="media/close.svg" alt="Закрыть форму">
        </a>
        <div class="modal__form-wrapper">
            <form class="modal__form" action="submit_form.php" id="form" method="post">
                <div class="modal__input-box">
                    <h1 class="modal__title">Оставить заявку</h1>
                    <input class="modal__input" type="text"
                           name="name"
                           id="name" placeholder="Имя">
                </div>
                <div class="modal__input-box">
                    <input class="modal__input" type="tel" name="tel"
                           id="tel" placeholder="Телефон">
                </div>
                <button class="modal__submit-btn roboto-bold" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</div>
<!--Modal-->

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
                        <a class="menu__link" href="index.php">Выход</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--Header-->

    <!--Main-->
    <main class="main">
        <section class="section promo">
            <div class="promo__left roboto-bold">
                <h1 class="promo__title">ОРБИТЕЛ</h1>
                <h2 class="promo__subtitle">ГАРАНТИЯ<br>НАДЕЖНОЙ<br>СВЯЗИ</h2>
                <button class="promo__btn btn-open-form-modal roboto-bold">Подключить</button>
            </div>
            <div class="promo__right">
                <div class="promo__right-top">
                    <h2 class="promo__desc">Популярные тарифы</h2>
                </div>
                <div class="promo__bottom">
                    <div class="card btn-open-form-modal">
                        <h1 class="card__name">Домашний Плюс 2</h1>
                        <div>
                            <div class="card__info">
                                <span class="roboto-bold">100Мбит/с</span>
                                <p>Безлимитный интернет<br>
                                    со скоростью до 100 Мбит/с</p>
                                <span class="roboto-bold">Кабельное ТВ</span>
                                <p>150 цифровых<br>
                                    50 аналоговых каналов</p>
                            </div>
                            <div class="card__price roboto-bold">
                                <p>600₽<span class="roboto-regular">/мес</span></p>
                            </div>
                        </div>
                        <p class="card__desc">Тариф рассчитан на несколько устройств<br>
                            домашней сети</p>
                    </div>
                    <div class="card btn-open-form-modal">
                        <h1 class="card__name">Домашний Ультра 2</h1>
                        <div>
                            <div class="card__info">
                                <span class="roboto-bold">300Мбит/с</span>
                                <p>Безлимитный интернет<br>
                                    со скоростью до 300 Мбит/с</p>
                                <span class="roboto-bold">Кабельное ТВ</span>
                                <p>150 цифровых<br>
                                    50 аналоговых каналов</p>
                            </div>
                            <div class="card__price roboto-bold">
                                <p>700₽<span class="roboto-regular">/мес</span></p>
                            </div>
                        </div>
                        <p class="card__desc">Тариф рассчитан на большое количество<br>
                            устройств домашней сети</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9053.376054354323!2d65.3528659!3d55.4392333!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43b7bc5abfc2b8a5%3A0x5ec1ee5695c93dcf!2z0J7RgNCx0LjRgtC10Ls!5e0!3m2!1sru!2sru!4v1717757583356!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<!--script.js-->
<script src="js/script.js"></script>
<!--script.js-->
</body>
</html>