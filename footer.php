





<footer>
	<div class="container">
		<div class="row">
			<div class="col-xl-2 col-lg-3 col-md-4 footer__logo footerAnim">
				<img src="https://equfin.com/wp-content/themes/equfin/assets/img/logoFooter.png" alt="EQUFIN" class="img-fluid d-none d-md-block">
			</div>
			<div class="col-lg-5 col-xl-4 offset-xl-2 col-md-4">
				<div class="row">
                    <div class="col-lg-6 footerAnim">
                        <div class="row mt-10 mt-md-0"><div class="col-sm-12"><a href="aboutus" class="underlineBtn">About us</a> </div> </div>
                        <div class="row "><div class="col-sm-12"><a href="whatwedo" class="underlineBtn">What we do</a> </div> </div>
                        <div class="row "><div class="col-sm-12"><a href="investorsoverview" class="underlineBtn">Investors</a> </div> </div>
                    </div>
                    <div class="col-lg-6 footerAnim">
                        <div class="row  mt-lg-0"><div class="col-sm-12"><a href="careers" class="underlineBtn">Careers</a> </div> </div>
                        <div class="row "><div class="col-sm-12"><a href="blog-media" class="underlineBtn" target="_blank">Blog &amp; Media</a> </div> </div>
                        <div class="row "><div class="col-sm-12"><a href="contact" class="underlineBtn">Contact us</a> </div> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center text-md-left footerAnim">
            	<div class="footer__newsletter">
                    <div class="row"><div class="col-sm-12"><h5><i class="fal fa-envelope"></i> SIGN UP FOR OUR NEWSLETTER</h5> </div> </div>
                    <div class="row"><div class="col-sm-12">
                            <div class="form-group">
                                <form id="eq_newsletter" action="https://formcarry.com/s/xm_-l9AbOFc" method="POST" accept-charset="UTF-8">
                                    <input type="email" name="email" class="form-control" id="newsletterEmail" placeholder="Email Address...">
                                    <!--<label for="newsletterEmail">Email Address...</label>-->
                                    <a href="#" id="submitNewsletter" onclick="document.getElementById('eq_newsletter').submit();"> <span>SUBMIT</span> <i class="fas fa-arrow-right"></i></a>
                                    <input type="hidden" name="_gotcha"><!-- use this to prevent spam -->
                                </form>
                            </div>

                        </div> </div>
                    <div class="row mt-2"><div class="col-sm-6 offset-sm-3 col-md-12 offset-md-0 col-lg-8 footer__privacy">By signing up, you consent to our <a href="privacy">Privacy Policy</a> </div> </div>
                </div>
            </div>
		</div>
		<p class="eq_disclaimer">EQUFIN HOLDINGS is the registered business name of CC Continental City Capital Ltd, a company incorporated and existing under the laws of the Republic of Cyprus under the registration number HE 342311, having its registered office at: Stavrou 56, Flat/Office 104, Strovolos, 2035, Nicosia, Cyprus</p>
	</div>
	<div class="mt-6"><hr></div>
	<div class="container" style="clip-path: inset(0%);">
        <div class="row mt-3">
            <div class="col-md-8 footer__copyright">Copyright © 2019 EQUFIN
                <div class="d-block d-sm-inline-block">
                    <ul class="unorderedList">
                        <li><a href="privacy">Privacy Policy</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 footer__credits text-center text-md-right">Website by <a href="http://www.blenddigital.com/" target="_blank">BLƎND</a></div>
        </div>
    </div>
</footer>
















<?php wp_footer();?>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript">
	$('.slider_main_home').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
	});
</script>

<!-- <script type="text/javascript">
    $( "#burgerIcon" ).click(function() {
      $( ".menu_full_screen" ).animate({'width': 'toggle'});
    });
</script> -->
<script type="text/javascript">
jQuery(document).ready( function() {
  var out = 1;
  jQuery('#burgerIcon').click( function(e) {
    e.preventDefault();

    if( out ) {
        jQuery('.menu_full_screen').animate({
                width: 'toggle'
              },1000,function() {
                    $(".menu_full_screen .container").fadeIn();
                    jQuery("header").css({'background':'linear-gradient(to bottom, #7e3396 0%, #127dc7 100%)'});
                    jQuery("#burgerIcon span").css({'background':'#fff'});
                    jQuery(".menu").css({'color':'#fff'});
                    jQuery(".noe_dis").css({'display':'none'});
                    jQuery(".span4").addClass("span2")
                    jQuery(".span0").addClass("span1")
                  });
        out = 0;
        return;
            }
            else if(! out) {
                $(".menu_full_screen .container").fadeOut();
                jQuery('.menu_full_screen').animate({
                width: 'toggle'
              },1000,function(){
                jQuery("header").css({'background':'#fff'});
                jQuery("#burgerIcon span").css({'background':'#333'});
                    jQuery(".menu").css({'color':'#333'});
                    jQuery(".noe_dis").css({'display':'block'});
                    jQuery(".span4").removeClass("span2")
                    jQuery(".span0").removeClass("span1")
              });
             out = 1;
        return;
            }
        
    });


       
  });
</script>

</body>

</html>