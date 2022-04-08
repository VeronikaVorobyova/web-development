<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/sidebar.php" ?>

    <div id="content">
        <?php while ($row = $result->fetch_assoc()) {
        ?>
        <div id="news1">
            <div id="data">
                <p>
                    <?php echo $row['data'] ?>
                </p>
            </div>
            <a href="/templates/pageOfNew.php?id=<?php echo $row['id'] ?>">
                <img id="img" src=<?php echo $row['pic'] ?> style="" alt="" />
                <p class="news">
                    <?php echo $row['title'] ?>
                </p>
                <p>
                    <?php echo $row['preview'] ?>
                </p>
            </a>
        </div>
        <?php }; ?>
    </div>

</div>