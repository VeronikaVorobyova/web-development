<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/mysite/wp-content/themes/mytheme/utils/function.php";

$count = countNews($link);
$result = showAllNews($link);
?>


<div id="container">

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/mysite/wp-content/themes/mytheme/templates/sidebar.php" ?>

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
                    <?php while (have_posts()) : the_post(); ?>

                    <div class="carousel-item active" data-bs-interval="10000">

                        <img id="img" src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" style="" alt="" />

                        <div class="carousel-caption d-none d-md-block">
                            <h3>"<?php the_title(); ?>"</h3>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <!-- <?php for ($i = 0; $i < $count; $i++) { ?>
                    <?php $row = $result->fetch_assoc(); ?>

                    <div class="carousel-item" data-bs-interval="2000">

                        <img id="img" src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" style="" alt="" />

                        <div class="carousel-caption d-none d-md-block">
                            <h3>"<?php the_title(); ?>"</h3>
                        </div>

                    </div>

                    <?php }; ?> -->
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


        <div class="content">
            <?php while (have_posts()) : the_post(); ?>
            <div class="smol-new">
                <div class="info-list">
                    <P> <?php the_time("Y-m-d"); ?> </P>
                </div>
                <h5 class="title">
                    <a href="<?php the_permalink(); ?>">
                        "<?php the_title(); ?>"
                    </a>
                </h5>
                <!-- <p><?php the_excerpt(); ?></p> -->
                <img src="<?php the_post_thumbnail_url(); ?>">
                <a href="<?php the_permalink() ?>" class="article btn btn_outline-primary">
                    Читать далее..
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>