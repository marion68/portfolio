<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">

		<div class="bg">
			<article class="page2">
					<div id="#travauxrecents"></div>
					<div id="travaux"><h1>MES TRAVAUX<br/> RÉCENTS</h1></div>
						<div id="tri">
							<ul>
								<li><a href="#">Tout</a></li>
								<li><a href="#" onclick="return false;" data-filter=".web">Web</a></li>
								<li><a href="#">Photographie</a></li>
								<li><a href="#">Print</a></li>
							</ul>
						</div>
						<div id="mestravaux">
					<figure class="figure web">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/chasseur-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>AU CHASSEUR</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/muckli-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>PRIMEUR MUCKLI</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/lud-anne-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>FAIRE PART ANNE & LUDWIG</h3>
		                </figcaption>
		            </figure>

		            <figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/elise-jo-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>ÉLISE & JONATHAN</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/portraits-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>PORTRAITS</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/dollinger-miniature.jpg" alt="photo1">
		                </div></a>
		                <figcaption>
		                    <h3>LA FERME DOLLINGER</h3>
		                </figcaption>
		            </figure>


		            <figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/chasseur-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>AU CHASSEUR</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/elise-jo-2-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>FAIRE PART DE REMERCIEMENTS</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/islande-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>ISLANDE</h3>
		                </figcaption>
		            </figure>

		            <figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/chasseur-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>AU CHASSEUR</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/elise-jo-2-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>FAIRE PART DE REMERCIEMENTS</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/islande-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>ISLANDE</h3>
		                </figcaption>
		            </figure>
		        </div>

		            <div id="propos"></div>
		            <div id="apropos">
		            	<h1>À PROPOS<br/> DE MOI</h1>
		            </div>

				</article>


		</div>
	

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>