<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/sidebar.php" ?>

    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <?php for ($i = 0; $i < $count; $i++) { ?>
                <div class="slider__item">
                    <?php $row = $result->fetch_assoc(); ?>
                    <!-- Элемент 1 -->
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
                </div>
                <?php }; ?>
            </div>
            <a href="#" class="slider__control" data-slide="prev"></a>
            <a href="#" class="slider__control" data-slide="next"></a>
            <ol class="slider__indicators">
                <?php for ($i = 0; $i < $count; $i++) { ?>
                <li data-slide-to="<?php echo $i ?>"></li>
                <?php }; ?>
            </ol>
        </div>
    </div>
</div>