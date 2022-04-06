<?php

require_once __DIR__ . "/../utils/connect.php";
require_once __DIR__ . "/../utils/function.php";

$id = $_GET["id"];
$row = pickOneNew($link, $id);
?>

<div id="container">

    <?php require_once __DIR__ . "/header.php" ?>

    <div id="news1">
        <div id="data">
            <p>
                <?= $row['data'] ?>
            </p>
        </div>
        <h1 class="news">
            <?= $row['title'] ?>
        </h1>
        <img src=<?= $row['pic'] ?> style="width: 80%" alt="" />
        <p>
            <?= $row['full_text'] ?>
        </p>
    </div>

    <?php
    require_once __DIR__ . "/footer.php"
    ?>