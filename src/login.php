<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    echo "Заполните все поля!";
} else {
    $sql = "SELECT * FROM `registered_users` WHERE login = '$login' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Добро пожаловать, " . $row['login'];
            if ($row['login'] === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: user.php");
            }
            exit();
        }
    } else {
        echo "Такой пользователь не зарегистрирован";
    }
}

?>