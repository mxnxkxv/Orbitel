<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['id'];

    // Удаление пользователя из базы данных
    $sql = "DELETE FROM registered_users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Ошибка при удалении пользователя.";
    }

    $stmt->close();
}

$conn->close();

// Перенаправление обратно на страницу списка пользователей
//header("Location: users_list.php");
exit();
?>
