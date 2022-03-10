<?php
/**
 * SQL-запрос новости, которая далее будет помещаться в pageNew и blockNews
 */

$mysqli = require ('utils/connect.php');

$count = mysqli_query('SELECT COUNT(*) as count FROM news');

echo $count;

