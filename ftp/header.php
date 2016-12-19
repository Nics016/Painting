<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Good Painters LLC</title>
	<?php wp_head(); ?>
</head>
<body>
	<!-- MAIN-WRAP -->
	<div id="main-wrap">
		<!-- HEADER -->
		<header id="main-header">
			<!-- CALLNOW -->
			<div class="callnow">
				<div class="container clearfix">
					<a href="<?php site_url(); ?>">
					<img src="<?= get_template_directory_uri()."/img/logo.jpg" ?>" alt="" class="callnow-logo">
					</a>
					<a href="<?php site_url(); ?>" class="callnow-company">
						The Good Painters LLC
					</a>
					<span class="callnow-phone">
						Call Now: (206) 769-6430
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
