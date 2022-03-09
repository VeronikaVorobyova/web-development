<?php
$database = require_once ('./data/database.php');
$connection = @mysqli_connect($database['host'], $database['user'],
    $database['password'], $database['db_name']);
$query = 'SET NAMES utf8';
$result = @mysqli_query($connection, $query);
?>