<?php
require_once 'connect.php';
/**
 * SQL-запрос новости, которая далее будет помещаться в pageNew и blockNews
 */

$count = mysqli_query($link, 'SELECT COUNT(*) as count FROM news');

echo $count;
