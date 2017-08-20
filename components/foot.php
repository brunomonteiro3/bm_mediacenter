	<!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>

<?php
	/*
		* Default scripts of the webpage
	*/
	global $js;

	get_scripts();
	
	wp_footer();
?>