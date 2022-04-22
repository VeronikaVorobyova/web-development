<?php
session_start();

unset($_SESSION['password']);
unset($_SESSION['login']);
unset($_SESSION['id']);

header("Location: http://127.0.0.1/index.php");