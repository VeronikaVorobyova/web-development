<?php 
    session_start();
    include_once "connect_db.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)){
        $sql = "SELECT * FROM users WHERE email = '{$email}'";
        $stmt = $connect_db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows=$result->num_rows;

        if($rows > 0){
            $row = mysqli_fetch_assoc($result);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Online";
                $sql2 = "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}";
                $stmt1 = $connect_db->prepare($sql2);
                if($stmt1 = $connect_db->prepare($sql2)){
                    $stmt1->execute();
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "Something went wrong.Please try again! ";
                }
            }else{
                echo "Mail or password is incorrect!";
            }
        }else{
            echo "$email - This email address does not exist!";
        }
    }else{
        echo "All input fields are required!";
    }
