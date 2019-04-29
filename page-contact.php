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
<div class="main_bg_contact">
	<div class="container">
		<div class="row">
			<div class="col-xl-5">
				<div class="row heading_form_required_main">
					<h1>
						What can we do for you?
					</h1>
				</div>
				<div class="form_container">
					<span class="heading_form_required">
						Required fields <sup>*</sup>
					</span>
					<?php echo do_shortcode('[contact-form-7 id="30" title="contact"]');?>
				</div>
			</div>
			<div class="col-xl-6 offset-xl-1 main_right_conbtact">
				<div class="row mt-10 mt-xl-0">
					<div class="col-12 text-center text-sm-left">
						<h3>
							HQ Office Details
						</h3>
					</div> 
				</div>
				<div class="row mt-xl-10">
                    <div class="col-4"><h5>Address</h5></div>
                    <div class="col-8 smallText mt-1">Antheon 2, Monovoliko, Kato Polemidia, 4151, Limassol, Cyprus</div>
                </div>
                <div class="row mt-6">
                    <div class="col-4"><h5>Email</h5></div>
                    <div class="col-8 smallText mt-1"><a href="mailto:contact@equfin.com">contact@equfin.com</a> </div>
                </div>
                <div class="row mt-6">
                    <div class="col-4"><h5>Phone</h5></div>
                    <div class="col-8 smallText mt-1"><a href="mailto:+35725250515">(+357) 25 367 377</a></div>
                </div>
                <div class="row mt-6">
                    <div class="col-12 contact__content__social text-center text-sm-left">
                        <a href="https://www.facebook.com/equfin" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/EquFin" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/equfin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>


<?php }
}
get_footer();?>

