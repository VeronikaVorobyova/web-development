<?php
require_once __DIR__ . '/connect.php';

/**
 * SQL-запрос новости, которая далее будет помещаться в pageNew и blockNews
 */
$query = 'SELECT COUNT(*) as count FROM news';
$count = mysqli_query($link, $query);
$res = $count->fetch_assoc();
$counter = $res['count'];
echo $counter;
