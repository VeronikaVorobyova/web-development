<?php
require("./utils/connect.php");
require("./utils/function.php");

$test = addNews($link, "kok", "жопа", "ляля", "data/img/kok.jpg");

var_dump($test);
