<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$id = $_GET["id"];
$row = pickOneNew($link, $id);
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php" ?>
<div id="container">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/sidebarOfNew.php" ?>
    <div id="content">
        <div id="big_new">
            <div id="data">
                <p>
                    <?php echo $row['data'] ?>
                </p>
            </div>
            <h1 class="news">
                <?php echo $row['title'] ?>
            </h1>
            <img class="big-picture" src=<?php echo $row['pic'] ?> alt="" />
            <p>
                <?php echo $row['full_text'] ?>
            </p>
        </div>
    </div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.php"
?>