<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/sidebar.php" ?>

    <?php $row = $result->fetch_assoc(); ?>


    <?php for ($i = 0; $i < $count; $i++) { ?>
    <div class="galery">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                            <img id="img" src=<?php echo $row['pic'] ?> class="d-block w-100" style="" alt="" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
    </div>
    <?php }; ?>

    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <?php for ($i = 0; $i < $count; $i++) { ?>
                    <div class="slider__item">
                        



                
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