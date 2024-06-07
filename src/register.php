<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$agree = isset($_POST['agree']);

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email) || empty($tel)) {
    echo "Заполните все поля!";
} elseif (!$agree) {
    echo "Вы должны согласиться с Политикой конфиденциальности!";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают!";
    } else {
        $sql = "INSERT INTO `registered_users` (login, pass, email, phone) VALUES ('$login', '$pass', '$email', '$tel')";
        if ($conn->query($sql) === TRUE) {
            echo "Успешная регистрация!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>