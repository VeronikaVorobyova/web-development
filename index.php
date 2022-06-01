<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header style="text-transform: uppercase; text-align: center;">messenger Waaaaasuppp</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="name-details">
          <div class="field input">
            <label>First name</label>
            <input type="text" name="fname" required>
          </div>
          <div class="field input">
            <label>Surname</label>
            <input type="text" name="lname" required>
          </div>
        </div>
        <div class="field image">
          <label>Select avatar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Start using Waaaaasuppp">
        </div>
      </form>
      <div class="link">Already registered?<a href="login.php"> Log in</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>