<?php

unset($_SESSION['password']);
unset($_SESSION['login']);
unset($_SESSION['id']);

header("Location: http://localhost/index.php");