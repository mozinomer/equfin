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
<div class="bg_blog">
	<div class="container main_blog_row">
		<div class="row">
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by'=>'Des', 'posts_per_page' => 4));?>
			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
				<div class="col-sm-6 col-md-4 blogAnim">
					<a href="<?php the_permalink();?>">
					<div class="row the_post_thumbnail_blog">
						<?php the_post_thumbnail();?>
					</div>
					<div class="row inner_row_blog">
						<div class="row the_title_blog">
							<?php the_title();?>
						</div>
						<div class="row date_and_read_more">
							<span class="date_blog_post">
								<?php echo get_the_date();?>
							</span>
							<span class="read_more_blog_post">
								<i class="fas fa-arrow-right class_icon_read_more"></i>
								read more
							</span>
						</div>
					</div>
					</a>
				</div>
			<?php endwhile?>
		</div>
	</div>
</div>
<?php	}
	}
?>
<?php get_footer();?>