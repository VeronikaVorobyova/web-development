<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$id = $_GET['id'];

deleteNew($link, $id);

header("Location: http://127.0.0.1/index.php");