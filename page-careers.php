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
	<div class="container main_section_careers_page">
		<div class="row">
			<div class="col-12">
			<h3>
				Working at Heritage BPO
				</h3>
			</div> 
		</div>
		<div class="row">
                <div class="col-md-6">
               		 Heritage BPO was built on the principles of inclusion, diversity and open-mindedness. Whilst the people that make up the company bring together a wealth of experience and industry knowledge, what has allowed them and the company to thrive, is their character, personality and unique background.
            	</div>
                <div class="col-md-6 mt-4 mt-md-0">
                    Our primary goal is to nurture a culture that allows people to be themselves, express their opinions, share their views and be an active component of the company’s growth and development.
                    <br><br>
                    <strong>We are not looking for people to work for us but people to work with us.</strong>
                </div>
        </div>
        <div class="row mt-10">
        	<div class="col-12 text-center">
	        	<h3 class="heading_careers_page">
	        		Vacancies
			    </h3>
		    </div> 
   		</div>
        <div class="row">
        	<div class="col-12 text-center">
        		There are no available positions at Heritage BPO.
	   		</div> 
	    </div>
        <div class="row">
        	<div class="col-12 col-lg-8 offset-lg-2 text-center">
        		If you are interested in becoming part of a world class team that places people first, please enter your details and upload your CV below.
	   		</div> 
	    </div>
	</div>
	<div class="container">
		<?php echo do_shortcode('[wpforms id="66" title="false" description="false"]');?>
	</div>
</div>
<?php }
}
get_footer();?>



