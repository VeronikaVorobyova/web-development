<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "connect_db.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = $_POST['incoming_id'];
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $stmt = $connect_db->prepare($sql);
        $stmt -> execute();
        $result = $stmt->get_result();
        $rows = $result->num_rows;
        if($rows> 0){
            while($row = mysqli_fetch_assoc($result)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                    <span style="font-size:12px; position: absolute; right: 30px">'. $row['dtime'] .'</span>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="php/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                    <span style="font-size:12px";>'. $row['dtime'] .'</span>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No available posts.As soon as you send a message, they will appear here.. </div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }
