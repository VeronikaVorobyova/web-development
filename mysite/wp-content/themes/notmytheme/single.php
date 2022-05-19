<?php get_header(); ?> <main class="content__wrapper"> <!--Main layout--> <div class="container"> <!--Section: News of the day--> <section class="border-bottom mb-2 mt-5"> <div class="row gx-5"> <div class="col-md-6 mb-4"> <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5 hover-image-scale" data-mdb-ripple-color="light"> <a class="popup-link" href="<?=the_post_thumbnail_url()?>"> <img src="<?=the_post_thumbnail_url()?>" title="<?=the_title()?>" class="img-fluid hover-image-scale" />

</a> </div> </div> <div class="col-md-6 mb-4"> <div class="row mb-3"> <div class="col-sm-8"> <span class="badge bg-secondary px-2 py-1 shadow-1-strong"> <?=the_time('j F Y')?> </span> </div> <div class="col-sm-4"> <span class="text-primary text-opacity-75 text-uppercase font-monospace fw-bold"> <?=the_category(', ')?> </span> </div> </div> <h4><strong><?=the_title()?></strong></h4> <p class="text-muted"><?=the_excerpt()?></p> </div> </div> <p class="text-muted"><?=the_content()?></p> <?=the_tags('<p class="post-tags"><span>'.esc_html__('Тэги:').'</span>' , '' , '</p>')?> </section> <!--Section: News of the day--> </main> <?php get_footer();