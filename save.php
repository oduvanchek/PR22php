<?php
$data = "Имя: {$_POST['name']}\nEmail: {$_POST['email']}\nСообщение: {$_POST['email']}\n--------------\n";

file_put_contents(__DIR__ . "feedback.txt", $data, FILE_APPEND);

echo "Спасибо за отзыв!";