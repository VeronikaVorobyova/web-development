<?php
// Начинаем сессию и подключаемся к БД
session_start();
require_once 'utils/connect.php';
// ------------------------------------------
// Отрисовка
require_once 'templates/header.php';
require_once 'templates/mainPage.php';
require_once 'templates/footer.php';
