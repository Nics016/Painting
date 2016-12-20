<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Good Painters LLC</title>
	<?php wp_head(); ?>
	<?php 
		// ACF
		$title_left = get_field("title_left", 6);
	 	$phone_top_right = get_field("phone_top_right", 6);
	 	$name = check_input($_POST['first_name'])." ".check_input($_POST['last_name']);
	 	$show_sentbox = "false";
	 	if ($name != " ")
	 		$show_sentbox = "true";
	 ?>
	 <script>
	 	// If client have just sent a request, show sentbox
	 	jQuery(window).bind("load", function(){
	 		var show_sent = <?= $show_sentbox ?>;
	 		if (show_sent){
	 			$('html, body').animate({ scrollTop: 0 }, 'slow');
	 			$(".messagesent").show(1000).delay(3000).hide(5000);
			}
	 	});
	 </script>
</head>
<body>
	<!-- MAIN-WRAP -->
	<div id="main-wrap">
		<!-- HEADER -->
		<header id="main-header">
			<!-- MESSAGESENT -->
			<div class="messagesent">
				<span class="messagesent-text">Thanks for your request! We'll contact you soon.</span>
			</div>
			<!-- END OF MESSAGESENT -->

			<!-- CALLNOW -->
			<div class="callnow">
				<div class="container clearfix">
					<a href="<?php site_url(); ?>">
					<img src="<?= get_template_directory_uri()."/img/logo.jpg" ?>" alt="" class="callnow-logo">
					</a>
					<a href="<?php site_url(); ?>" class="callnow-company">
						<?= $title_left ?>
					</a>
					<span class="callnow-phone">
						<?= $phone_top_right ?>
					</span>
				</div>
			</div>
			<!-- END OF CALLNOW -->

			<!-- TOP-MENU -->
			<div class="topmenu">
				<div class="container">
					<ul id="top-menu">
						<li><a href="<?php site_url(); ?>">Home</a></li>
						<li><a href="#pluses">About Us</a></li>
						<li><a href="#explanation">Examples</a></li>
						<li><a href="#reviews">Our Clients</a></li>
						<li><a href="#team">Our Team</a></li>
						<li><a href="#main-footer">Contacts</a></li>
					</ul>
				</div>
			</div>
			<!-- END OF TOP-MENU -->
		</header>
		<!-- END OF HEADER -->
