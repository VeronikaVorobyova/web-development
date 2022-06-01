<?php
    session_start();
    include_once "connect_db.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = $_POST['searchTerm'];

    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $output = "";
    $stmt = $connect_db -> prepare($sql);
    $stmt -> execute();
    $result_u = $stmt -> get_result();
    $rows = $result_u -> num_rows;
    if($rows > 0){
        include_once "data.php";
    }else{
        $output .= 'No user has found related to your search query. ';
    }
    echo $output;
