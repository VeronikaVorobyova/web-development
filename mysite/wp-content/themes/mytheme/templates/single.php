<?php
// get_header();

$id_post = $_GET['id_post'];
get_post($id_post)
?>

<div id="container">
    <div id="content">
        <div id="big_new">
            <div id="data">
                <p>
                    <?php the_time() ?>
                </p>
            </div>
            <h1 class="news">
                <?php the_title() ?>
            </h1>
            <img class="big-picture" src=<?php the_post_thumbnail_url(); ?> alt="" />
            <p>
                <?php the_excerpt() ?>
            </p>
        </div>
    </div>
</div>