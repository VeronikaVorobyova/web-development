<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/data/database.php");

// Подключение к БД
$link = new mysqli(
    $database['host'],
    $database['user'],
    $database['password'],
    $database['db_name']
);

mysqli_set_charset($link, "utf8");

if ($link->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $link->connect_errno . ") ";
}

// проверка, авторизован ли пользователь под администратором ранее
if (isset($_SESSION['admin']) && ($_SESSION['admin'] > 0))
    $is_admin = 1;
else
    $is_admin = 0;