<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	            <span></span>
	            <span></span>
	            <span></span>
	            <span></span>
	        </div>
	        <span class="menu">
	        	menu
	        </span>
		</div>
	</div>
</header>