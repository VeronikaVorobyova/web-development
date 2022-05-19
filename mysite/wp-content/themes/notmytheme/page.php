<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<!-- Team Section Start -->
<div class="section section-padding bg-light">
	<div class="container">
		<div class="row">
			<!-- Section Title Start -->
			<div class="section-title">
				<h2 class="title"><?php the_title(); ?></h2>
			</div>
		<!-- Section Title End -->
			<div class="team-block">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
