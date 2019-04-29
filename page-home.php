<?php get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>			
<?php $bg_img = get_the_post_thumbnail_url();?>



<div class="vedio_bg">
    <div class="home__hero__video">
        <video autoplay muted loop id="myVideo">
          <source src="http://localhost/equfin/wp-content/uploads/2019/04/heroVideo.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
    <div class="slider_main_home">
        <div class="slider_one">
            <div class="row logo_main_slider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/heritage_logo.png">
            </div>
             <div class="row main_heading_slider">
                 about us
             </div>
             <div class="row heading_slider">
                 <h2>
                     Access to Money. For Everyone.
                 </h2>
             </div>
             <div class="para">
                 We nurture relations and grow our business by solving real everyday problems. Learn more of our journey, grow with us. 
             </div>
             <div class="button_slider">
                 <a href="" class="buttonBlue">learn more</a>
             </div>
        </div>
        <div class="slider_one">
            <div class="row logo_main_slider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/heritage_logo.png">
            </div>
             <div class="row main_heading_slider">
                 Investor
             </div>
             <div class="row heading_slider">
                 <h2>
                     Trusty Partnership. Reliable Investment.
                 </h2>
             </div>
             <div class="para">
                We nurture relations and grow our business by solving real everyday problems. Learn more of our journey, grow with us. 
             </div>
             <div class="button_slider">
                 <a href="" class="buttonBlue">learn more</a>
             </div>
        </div>
        <div class="slider_one">
            <div class="row logo_main_slider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/heritage_logo.png">
            </div>
             <div class="row main_heading_slider">
                 product & tech.
             </div>
             <div class="row heading_slider">
                 <h2>
                    Financial Inclusion. Tech Driven.
                 </h2>
             </div>
             <div class="para">
                Our product lineup and state of the art technology allow our clients access to money where and when they need it most. 
             </div>
             <div class="button_slider">
                 <a href="" class="buttonBlue">learn more</a>
             </div>
        </div>
    </div>
    </div>
    <!-- <div class="slider_main_home" id="z-index-lisder">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/footerBack.jpg">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/footerBack.jpg">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/footerBack.jpg">
        </div>
    </div> -->
</div>

<div class="main_bg_home_page" style="background: url(<?php echo $bg_img;?>);">
	<div class="container main_container_home_page">
		<div class="heading_row">
			TRASPARENT GROWTH
		</div>
		<div class="headign_inner_section_1">
			Heritage BPO in Numbers
		</div>
		<div class="row mt-2 main_row_section_3_section-1">
            <div class="col-sm-6 col-lg-3 section1Anim">
                <div class="row">
                	<div class="col-sm-12">
                		<h2 class="h2_purple">REGISTERED CLIENTS
                		</h2>
                	</div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 home__section1__number">
                		<span class="timer count-number" data-to="1" data-speed="700">1.0</span>m+</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 section1Anim mt-5 mt-sm-0">
                <div class="row">
                	<div class="col-sm-12">
                		<h2 class="h2_purple">ONLINE LOANS ISSUED
                		</h2>
                	</div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 home__section1__number">
                		<span class="timer count-number" data-to="1" data-speed="700">1.0</span>m+</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5 mt-lg-0 section1Anim">
                <div class="row">
                	<div class="col-sm-12">
                		<h2 class="h2_purple">ONLINE APPLICATIONS
                		</h2>
                	</div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 home__section1__number">
                		<span class="timer count-number" data-to="2.3" data-speed="700">2.3</span>m+</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5 mt-lg-0 section1Anim">
                <div class="row">
                	<div class="col-sm-12">
                		<h2 class="h2_purple">FULL TIME EMPLOYEES
                		</h2>
                	</div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 home__section1__number">
                		<span class="timer count-number" data-to="300" data-speed="700">300</span>+</div>
                </div>
            </div>
        </div>
        <div class="row mt-10 section1BAnim" style="clip-path: inset(0%);">
            <div class="col-sm-12">
                <div class="home__section1__image animatedImage active">
                    <div class="row">
                    	<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 animatedContent">
                            <h4 class="banner_home_hading">We have been investing at the frontier of finance and digital technology since 2012.</h4>
                        </div>
                    </div>
                    <div class="row mt-8 mt-sm-12">
                    	<div class="col-sm-12 animatedContent">
                    		<a href="investorsoverview" class="buttonWhite animatedButton" style="--x:115px;--y:">
                    		<span>JOIN OUR JOURNEY</span></a>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-6 mt-sm-16 section_4_home_page">
                <div class="col-sm-12 text-center">
                    <div class="row">
                    	<div class="col-sm-12 section1CAnim">
                    		<h2>PRODUCTS &amp; TECH
                    		</h2>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-12 section1CAnim">
                    		<h3>
                    			Industries We Serve
                    		</h3>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-12 section1CAnim col-lg-8 offset-lg-2">
                            Heritage BPO offers a lineup of Financial products, backed up by robust in-house platforms,
                            that deliver real solutions to consumer needs.
                        </div>
                    </div>
                    <div class="row mt-6 mt-sm-16">
                    	<div class="col-sm-12 col-lg-10 offset-lg-1">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 home__section1__icon section1DAnim">
                                    <div class="row">
                                    	<div class="col-sm-12"><img src="<?php echo get_template_directory_uri(); ?>/images/homeIcon1.png" class="fluid-img" alt="Mortgage Loans"></div>
                                    </div>
                                    <div class="row mt-3">
                                    	<div class="col-sm-12">Industry BPO Solution</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mt-12 mt-sm-0 mt-md-0 home__section1__icon section1DAnim">
                                    <div class="row">
                                    	<div class="col-sm-12"><img src="<?php echo get_template_directory_uri(); ?>/images/homeIcon2.png" class="fluid-img" alt="Mortgage Loans"></div>
                                    </div>
                                    <div class="row mt-3">
                                    	<div class="col-sm-12">eCommerce Solution</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mt-12 mt-sm-5 mt-lg-0 home__section1__icon section1DAnim">
                                    <div class="row">
                                    	<div class="col-sm-12"><img src="<?php echo get_template_directory_uri(); ?>/images/homeIcon3.png" class="fluid-img" alt="Mortgage Loans"></div>
                                    </div>
                                    <div class="row mt-3">
                                    	<div class="col-sm-12">Financial Services</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mt-12 mt-sm-5 mt-lg-0 home__section1__icon section1DAnim">
                                    <div class="row">
                                    	<div class="col-sm-12"><img src="<?php echo get_template_directory_uri(); ?>/images/homeIcon4.png" class="fluid-img" alt="Mortgage Loans"></div>
                                    </div>
                                    <div class="row mt-3">
                                    	<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">Online / Offline Payday Loans</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-12 section1EAnim">
                    	<div class="col-sm-12 col-lg-8 offset-lg-2">
                            Fully compliant, our avant-garde technology, simply delivers. Minimizing the time, steps
                            and difficulty in obtaining access and management to funds.
                        </div>
                    </div>
                    <div class="row mt-8 section1EAnim">
                    	<div class="col-sm-12">
                    		<a href="whatwedo" class="buttonBlue animatedButton">
                    		<span>LEARN MORE</span></a>
                    	</div>
                    </div>
                </div>
        </div>
	</div>
    <div class="home__section2">
    	<div class="home__section2__image"></div>
	</div>
	<div class="main_container_home_page_bg_blog">
		<div class="container blog_container_homepage">
			<div class="row">
				<div class="col-sm-12 section3AAnim">
					<h2>BLOG HEADLINES
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 section3AAnim">
					<h3>
						Latest Blog posts &amp; News
					</h3>
				</div>
			</div>
			<div class="row mt-4">
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by'=>'Des', 'posts_per_page' => 3));?>
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
		<div class="row mt-7">
			<div class="col-sm-12">
				<a href="http://localhost/Heritage BPO/blog/" class="buttonBlue animatedButton" style="--x:125px;--y:">
					<span>
						VISIT OUR BLOG
					</span>
				</a>
			</div> 
		</div>
		</div>
	</div>
</div>











<?php }
}
get_footer();?>

