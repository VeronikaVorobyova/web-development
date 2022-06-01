<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "connect_db.php";
        $logout_id = $_GET['logout_id'];
        if(isset($logout_id)){
            $status = "Offline";
            $sql = "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}";
            $stmt = $connect_db -> prepare($sql);
            $stmt -> execute();
            if($stmt){
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../login.php");
    }
