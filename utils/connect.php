<?php
$database = require_once('./data/database.php');

// Подключение к БД
$mysqli = new mysqli($database['host'], $database['user'],
    $database['password'], $database['db_name']);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") ";
}

// проверка, авторизован ли пользователь под администратором ранее
if (isset($_SESSION['admin']) && ($_SESSION['admin'] > 0))
    $is_admin = 1;
else
    $is_admin = 0;

?>