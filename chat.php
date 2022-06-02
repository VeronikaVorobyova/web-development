<?php
session_start();
include_once "php/connect_db.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
        $user_id = $_GET['user_id'];
        $sql = "SELECT * FROM users WHERE unique_id = {$user_id}";
        $stmt = $connect_db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->num_rows;
        if ($rows > 0) {
          $row = mysqli_fetch_assoc($result);
        } else {
          header("location: users.php");
        }
        ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img']; ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chat-box"> </div>
            <form action="#" class="typing-area">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Write a message ... "
                    autocomplete="off">
                <button class="btn-2"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <script src="javascript/chat.js"></script>


</body>

</html>