<?php get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>			
<?php $bg_img = get_the_post_thumbnail_url();?>
<div class="header_pages" style="background: url(<?php echo $bg_img; ?>);">
	<div class="container">
		<div class="row">
			<div class="container-fluid">
				<div class="heading_page">
					<?php the_title();?>				
				</div>
				<div class="heading_under_page">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="main_bg_services">
	<div class="container">
		<div class="slider_services">
			<?php $data_query =  new WP_Query(array('post_type' => 'services', 'order_by'=>'Des', 'posts_per_page' => 4));?>
			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
			<div>
				<div class="row">
					<div class="col-md-6">
						<div class="row slider_services_icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/whatwedoNeeds.png">
						</div>
						<div class="row heading_slider_services">
							<h3>
								<?php the_title();?>
							</h3>
						</div>
						<div class="row">
							<?php the_content();?>
						</div>
					</div>
					<div class="col-md-6">
						<?php the_post_thumbnail();?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>



<?php }
}
get_footer();
?>