<?php
/*// Начинаем сессию и подключаемся к БД
session_start();
require_once 'utils/connect.php';
// ------------------------------------------
// Отрисовка
require_once 'templates/header.php';
require_once 'templates/mainPage.php';
require_once 'templates/footer.php';*/

$database = [
    'host'=> 'localhost',
    'db_name'=>'mysite',
    'user' => 'root',
    'password'=>''
];

$link = new mysqli($database['host'], $database['user'],
    $database['password'], $database['db_name']);

/**
 * SQL-запрос новости, которая далее будет помещаться в pageNew и blockNews
 */
$query = 'SELECT COUNT(*) as count FROM news';
$count = mysqli_query($link, $query);
//$res = $count->fetch_assoc();
var_dump($count);
