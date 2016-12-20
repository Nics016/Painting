<?php 
	// ACF
	$footer_info_email = get_field("footer_info_email", 6);
 ?>
<footer id="main-footer">
	<div class="container clearfix" id="contacts">
		<div class="mainfooter-contacts">
			<span class="mainfooter-contacts-title">
				Contacts
			</span>
			<span class="mainfooter-contacts-text">
				For questions or informations please send us an email:
			</span>
			<a href="mailto:info@thegoodpainters.com" class="mainfooter-contacts-email"><?= $footer_info_email ?></a>
		</div>

		<div class="mainfooter-goback">
			<span class="mainfooter-goback-title">
				Go back to
			</span>
			<a href="#main-header" class="mainfooter-goback-link">Home</a>
			<a href="#request" class="mainfooter-goback-link">Request a Quote</a>
			<a href="#" class="mainfooter-goback-poweredby">Powered by Crosshair Development</a>
		</div>
	</div>
</footer>

</div>
	<!-- END OF MAIN-WRAP -->
<?php wp_footer(); ?>
</body>
</html>