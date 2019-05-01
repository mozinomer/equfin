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
					<?php the_title();?>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main_content_container_heading">
	<div class="container">
		<div class="row align-center_item">
			<div class="col-md-6 heading_partners">
				<?php echo get_post_meta($post->ID, 'heading', true) ; ?>
			</div>
			<div class="col-md-6">
				<?php the_content();?>
			</div>
		</div>
		<?php echo do_shortcode('[wpforms id="66" title="false" description="false"]');?>
	</div>
</div>
<?php }
}
get_footer();?>

