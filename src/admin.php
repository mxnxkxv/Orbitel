<?php
require_once('db.php');

// Получение данных из таблицы registred_users
$sql = "SELECT id, login, email, phone FROM registered_users";
$result = mysqli_query($conn, $sql);

// Получение данных из таблицы registred_users
$sql = "SELECT id, name, phone FROM requests_users";
$result2 = mysqli_query($conn, $sql);
?>

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
                        <a class="menu__link" href="index.php">Выход</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--Header-->

    <!--Main-->
    <main class="main">
        <section class="section reg-users">
            <h1 class="reg-users__title roboto-bold">Список пользователей</h1>
            <table class="reg-users__table">
                <tr>
                    <th>Логин</th>
                    <th>Email</th>
                    <th>Телефон</th>
                    <th>Удалить пользователя</th>
                </tr>

                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['login']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                        echo "<td><form method='post' action='delete_user.php'><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit'>Удалить</button></form></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Нет пользователей</td></tr>";
                }
                ?>

            </table>
        </section>
        <section class="section req-users">
            <h1 class="req-users__title roboto-bold">Список заявок</h1>
            <table class="req-users__table">
                <tr>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Подтвердить заявку</th>
                </tr>

                <?php
                if (mysqli_num_rows($result2) > 0) {
                    while($row = mysqli_fetch_assoc($result2)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                        echo "<td><form method='post' action='delete_requests.php'><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit'>Подтвердить</button></form></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Заявок нет</td></tr>";
                }
                ?>

            </table>
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