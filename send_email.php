<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "cibulgeorgij@gmail.com"; // Введіть свою email адресу
    $subject = "Повідомлення з сайту";
    $body = "Ім'я: $name\nEmail: $email\nПовідомлення:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Повідомлення було надіслано успішно!";
    } else {
        echo "Виникла помилка при відправці повідомлення.";
    }
}
?>