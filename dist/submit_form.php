<?php
require_once('db.php');

$name = $_POST['name'];
$tel = $_POST['tel'];

if (empty($name) || empty($tel)) {
    echo "Заполните все поля!";
} else {
    $sql = "INSERT INTO `requests_users` (name, phone) VALUES ('$name', '$tel')";
    if ($conn->query($sql) === TRUE) {
        echo "Заявка отправлена!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>