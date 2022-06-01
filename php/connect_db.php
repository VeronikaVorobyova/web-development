<?php

$connect_db = new mysqli("localhost", "root", "root", "chat");

if(!$connect_db){
    echo "Database connection error".mysqli_connect_error();
  }
