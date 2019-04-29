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
					the company
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main_content_container" style="background: url(<?php echo get_template_directory_uri(); ?>/images/aboutBackground.jpg);">
	<div class="container">
		<div class="content_page">
			<?php the_content();?>
		</div>
		<div class="row align-center">
			<div class="col-md-6 pad-0">
				<div class="heading_row_after_content">
					Our Vision
				</div>
				<div class="para_container">
					<p>
						Consumer access to finance has become increasingly difficult. Equfin’s vision is to deliver financial solutions to people, when and where they need it;
					</p>
					<p class="small_text">
						We use technology and innovation to solve real financing problems and provide value to our clients, our team and stakeholders. We deliver financial access to people and markets by striving to be best of breed and best of speed.
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4 text-center left_about_column">
						<span class="img_container">
							<img src="<?php echo get_template_directory_uri(); ?>/images/aboutIcon1.png">
						</span>
						<span class="heading_inside_the_image text-center">
							quickly
						</span>
					</div>
					<div class="col-md-4 text-center left_about_column">
						<span class="img_container">
							<img src="<?php echo get_template_directory_uri(); ?>/images/aboutIcon2.png">
						</span>
						<span class="heading_inside_the_image text-center">
							quickly
						</span>
					</div>
					<div class="col-md-4 text-center left_about_column">
						<span class="img_container">
							<img src="<?php echo get_template_directory_uri(); ?>/images/aboutIcon3.png">
						</span>
						<span class="heading_inside_the_image text-center">
							quickly
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section_2_about_page">

		<div class="block_left_about">
			<h2>
				Our Strategy
			</h2>
			<div class="row">
				<p>
					Equfin’s experience, partnerships, data, research and continuous testing, empowers our strategic growth.
				</p>
				<p>
					We grow organically by solving everyday issues. At the cornerstone of our growth ethos is mobilizing our people and technology to continuously research, test and evolve.
				</p>
			</div>
		</div>
		<div class="block_right_about">
			<img src="<?php echo get_template_directory_uri(); ?>/images/aboutImage1.jpg">
		</div>
	</div>
	<div class="container clear-left team_container_about_page">
		<div class="row heading_team_section">
			<h2>
				Our Team
			</h2>
			<p>
				Equfin unites individuals whose industry experience spans across multiple decades, industries and continents. A truly experienced, multicultural, world class team.
			</p>
		</div>
		<?php $data_query =  new WP_Query(array('post_type' => 'teams', 'order_by'=>'Des', 'posts_per_page' => 4));?>
		<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
		<div class="row main_row_team_section">
			<div class="col-md-3 the_post_thumbnail_team">
				<?php the_post_thumbnail();?>
			</div>
			<div class="col-md-3 the_title_team">
				<h2><?php the_title();?></h2>
				<p class="tags_title_teams">
					<?php
						$terms = get_the_terms( $post->ID , 'categoriesa' ) ? get_the_terms( $post->ID , 'categoriesa' ) : [];
						// var_dump($terms);
						if ( count( $terms ) > 0 ) {
							foreach ( $terms as $term ) {
								echo $term->name;
							}
						}
					?>
						
				</p>
			</div>
			<div class="col-md-6 the_content_team">
				<p><?php the_content();?></p>
			</div>
		</div>
		<?php endwhile?>
	</div>
</div>

<?php	}
	}
?>
<?php get_footer();?>