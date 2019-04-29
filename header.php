<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<?php wp_head();?>
<body>

<header>
	<div class="pos_fixed_left_header_block row">
		<div class="logo_container col-md-4" >
			<?php 
			   $custom_logo_id = get_theme_mod( 'custom_logo' );
			   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
			<img src="<?php echo $image[0]; ?>" alt="">
		</div>
		<div class="col-md-4 text-center menu_container">
			<div id="burgerIcon" class="order-3">
	            <span class="span0"></span>
	            <span class="noe_dis"></span>
	            <span class="noe_dis"></span>
	            <span class="span4"></span>
	        </div>
	        <span class="menu">
	        	menu
	        </span>
		</div>
		<div class="row social_links">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
		</div>
	</div>
</header>

<div class="menu_full_screen">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="rows_fro_list">
					<div class="heading_menu">
						about us
					</div>
					<div class="list_menu_item">
						<?php wp_nav_menu(array('theme_location' => 'my-custom-menu'));?>
					</div>
				</div>
				<div class="rows_fro_list">
					<div class="heading_menu">
						what we do
					</div>
					<div class="list_menu_item">
						<?php wp_nav_menu(array('theme_location' => 'web-des'));?>
					</div>
				</div>
				<div class="rows_fro_list">
					<div class="heading_menu">
						investor
					</div>
					<div class="list_menu_item">
						<ul>
							<li>overview</li>
							<li>reports and result</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="rows_fro_list">
					<div class="heading_menu">
						blog and media
					</div>
					<div class="list_menu_item">
						<?php wp_nav_menu(array('theme_location' => 'extra-menu'));?>
					</div>
				</div>
				<div class="rows_fro_list">
					<div class="heading_menu">
						contact Us
					</div>
					<div class="list_menu_item">
						<?php wp_nav_menu(array('theme_location' => 'logo-menu'));?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>