<?php get_header();
while (have_posts() ) : the_post();
?>


<div class="single_post_blog">
	<div class="container">
		<a href="blog" class="underlineBtn underlineBtn--black">
			<i class="fas fa-arrow-left"></i> 
			Back to Our Blog
		</a>
		<div class="col-12 col-lg-8 offset-lg-2">
			<div class="row the_post_thumbnail_single_blog">
				<?php the_post_thumbnail();?>
			</div>
			<div class="row get_the_date_single_blog">
				<?php echo get_the_date();?>
			</div>
			<div class="row">
				<h1><?php the_title();?></h1>
			</div>
			<div class="row">
				<?php the_content();?>
			</div>
			<div class="row">
				<div class="col-md-4">
					<?php previous_post_link();?>
				</div>
				<div class="col-md-4">
					share
				</div>
				<div class="col-md-4">
					<?php next_post_link();?>
				</div>
			</div>
		</div>
	</div>
</div>




<?php endwhile; ?>
<?php get_footer();?>