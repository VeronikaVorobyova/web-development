<?php
require_once __DIR__ . "/../utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">
    <div id="sidebar">
        <p><a href="../auth/auth.php">Войти в систему</a></p>
        <p><a href="../data/static/about.php">О сайте</a></p>
    </div>
    <div id="content">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div id="news1">
                <div id="data">
                    <p>
                        <?= $row['data'] ?>
                    </p>
                </div>
                <a href="src/news1.html">

                    <img src=<?= $row['pic'] ?> style="width: 200px" alt="" />
                    <p class="news">
                        <?= $row['title'] ?>
                    </p>
                    <p>
                        <?= $row['preview'] ?>
                    </p>
                </a>
            </div>
        <?php }; ?>
    </div>
</div>