	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<div class="bgfooter">
	<!-- <footer class="full-width" role="contentinfo"> -->		
			<footer id="footer" class="pagecenter">
				<h1>SUIVEZ-MOI</h1>
				<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/flickr.png" alt="logo-flickr" /></a>

				<div id="titre2"><h1>CONTACTEZ-MOI</h1></div>
				<form action="" method="post">
					<div id="form1">
					    <input type="text" name="user_fname" id="user_fname" placeholder="Prénom" /><br/>
					    <input type="text" name="user_lname" id="user_lname" placeholder="Nom" /><br/>
					    <input type="text" name="user_mail" id="user_mail" placeholder="Mail" />
					</div>

				
				    <textarea name="user_message" id="user_message" placeholder="Message"></textarea>
				    <div class="clear"></div>
				    <input type="submit" id="submit"name="submitLogin" value="ENVOYER"  />
				
					<div class="clear"></div>
				</form>			
			</footer>
			<div class="clear"></div>
	<!-- </footer>  -->
</div>

<?php wp_footer(); ?>

<script>
	(function($) {
		//$(document).foundation();
		$.localScroll();
		var container = document.querySelector('#mestravaux');
	// init
	var iso = new Isotope( container, {
	  // options
	  itemSelector: '.figure'
});
	})(jQuery);
</script>

	
</body>
</html>