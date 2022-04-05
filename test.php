<?php
require("./utils/connect.php");
require("./utils/function.php");

$count = countNews($link);
$result = showAllNews($link);
?>

<div id="content">
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div id="news">
            <div id="data">
                <p>
                    <?= $row['data'] ?>
                </p>
            </div>
            <a href="src/news1.html">

                <img src="src/image/Hockey.jpg" style="width: 200px" alt="" />
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