<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mysite/wp-content/themes/mytheme/utils/connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "/mysite/wp-content/themes/mytheme/utils/function.php";

$id = $_GET['id'];

deleteNew($link, $id);

header("Location: http://127.0.0.1/mysite/wp-content/themes/mytheme/index.php");