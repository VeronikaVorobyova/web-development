<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$id = $_GET["id"];
$row = pickOneNew($link, $id);
?>

<div id="container">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php" ?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/sidebar.php" ?>
    <div id="news1">

        <div id="data">
            <p>
                <?php echo $row['data'] ?>
            </p>
        </div>
        <h1 class="news">
            <?php echo $row['title'] ?>
        </h1>
        <img src=<?php echo $row['pic'] ?> style="width: 80%" alt="" />
        <p>
            <?php echo $row['full_text'] ?>
        </p>
    </div>

    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.php"
    ?>