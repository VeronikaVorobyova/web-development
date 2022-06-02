<?php
session_start();
include_once "connect_db.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM chat.users WHERE email = '{$email}'";
        $stmt = $connect_db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->num_rows;
        if ($rows > 0) {
            echo "$email - This email address already exists! ";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions = ["jpeg", "png", "jpg"];
                if (in_array($img_ext, $extensions) === true) {
                    $types = ["image/jpeg", "image/jpg", "image/png"];
                    if (in_array($img_type, $types) === true) {
                        $time = time();
                        $new_img_name = $time . $img_name;
                        if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                            $ran_id = rand(time(), 100000000);
                            $status = "Online";
                            $encrypt_pass = md5($password);
                            $insert_sql = "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')";
                            $stmt = $connect_db->prepare($insert_sql);
                            $stmt->execute();
                            if ($stmt) {
                                $select_sql2 = "SELECT * FROM users WHERE email = '{$email}'";
                                $stmt2 = $connect_db->prepare($select_sql2);
                                $stmt2->execute();
                                $result2 = $stmt2->get_result();
                                $rows2 = $result2->num_rows;
                                if ($rows2 > 0) {
                                    $result = mysqli_fetch_assoc($result2);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    echo "success";
                                } else {
                                    echo "This email address does not exist!";
                                }
                            } else {
                                echo "Something went wrong.Please try again!";
                            }
                        }
                    } else {
                        echo "Load image file - jpeg, png, jpg ";
                    }
                } else {
                    echo "Load image file - jpeg, png, jpg ";
                }
            }
        }
    } else {
        echo "$email Invalid email address! ";
    }
} else {
    echo "All input fields are required!";
}