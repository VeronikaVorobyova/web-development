<?php
session_start();
include_once "connect_db.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
$stmt = $connect_db->prepare($sql);
$stmt->execute();
$result_u = $stmt->get_result();
$rows = $result_u->num_rows;
$output = "";
if ($rows == 0) {
    $output .= "No users available for chat ";
} elseif ($rows > 0) {
    include_once "data.php";
}
echo $output;