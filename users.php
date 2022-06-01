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
    <section class="users">
      <header>
        <div class="content">
          <?php
          $sql = "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}";
          $stmt = $connect_db->prepare($sql);
          $stmt->execute();
          $result = $stmt->get_result();
          $rows = $result->num_rows;
          if ($rows > 0) {
            $row = mysqli_fetch_assoc($result);
          }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Go out</a>
      </header>
      <div class="search"> 
        <input type="text" placeholder="Enter a name for your search ... ">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>

</html>