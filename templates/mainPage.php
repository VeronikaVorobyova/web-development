<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">
    <div id="sidebar">
        <p><a href="/templates/auth.php">Войти в систему</a></p>
        <p><a href="/templates/about.php">О сайте</a></p>
    </div>

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
                <img src=<?php echo $row['pic'] ?> style="width: 400px" alt="" />
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