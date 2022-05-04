<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/sidebar.php" ?>

    <div class="container-smol">

        <div class="galery">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                <div class="carousel-indicators">

                
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    
                    <?php for ($i = 0; $i < $count; $i++) { ?>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <?php }; ?>
                    

                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">

                        <?php $row = $result->fetch_assoc(); ?>

                        <img id="img" src=<?php echo $row['pic'] ?> class="d-block w-100" style="" alt="" />

                        <div class="carousel-caption d-none d-md-block">
                            <h3><?php echo $row['title'] ?></h3>
                        </div>

                    </div>

                    <?php for ($i = 0; $i < $count; $i++) { ?>
                    <?php $row = $result->fetch_assoc(); ?>

                    <div class="carousel-item" data-bs-interval="2000">

                        <img id="img" src=<?php echo $row['pic'] ?> class="d-block w-100" style="" alt="" />

                        <div class="carousel-caption d-none d-md-block">
                            <h3><?php echo $row['title'] ?></h3>
                        </div>

                    </div>

                    <?php }; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Previous</span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Next</span>

                </button>

            </div>

        </div>

        <div id="content">

            <?php $result = showAllNews($link); ?>
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
</div>

</div>