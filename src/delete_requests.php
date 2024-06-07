<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['id'];

    // Удаление пользователя из базы данных
    $sql = "DELETE FROM requests_users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    if ($stmt->execute()) {
        header("Location: admin.php");
//        echo "Пользователь успешно удален.";
    } else {
        echo "Ошибка при удалении завяки";
    }

    $stmt->close();
}

$conn->close();

exit();
?>
