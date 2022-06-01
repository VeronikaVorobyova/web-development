<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "connect_db.php";
        $outgoing_id = $_SESSION['unique_id'];

        $incoming_id = $_POST['incoming_id'];
        $message = $_POST['message'];
      
        if(!empty($message)){
            $sql = "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, dtime)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}', '{$dtime}')" or die();
            $stmt = $connect_db->prepare($sql);
            $stmt->execute();
        }
    }else{
        header("location: ../login.php");
}
