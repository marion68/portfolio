<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">

		<div class="bg">
			<article class="page2">
					
					<h1>MES TRAVAUX<br/> RÉCENTS</h1>
						<ul>
							<li><a href="tout">Tout</a></li>
							<li><a href="web">Web</a></li>
							<li><a href="photographie">Photographie</a></li>
							<li><a href="print">Print</a></li>
						</ul>
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/chasseur-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>AU CHASSEUR</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/muckli-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>PRIMEUR MUCKLI</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/lud-anne-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>FAIRE PART ANNE & LUDWIG</h3>
		                </figcaption>
		            </figure>

		            <figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/elise-jo-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>ÉLISE & JONATHAN</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/portraits-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>PORTRAITS</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/dollinger-miniature.jpg" alt="photo1">
		                </div></a>
		                <figcaption>
		                    <h3>LA FERME DOLLINGER</h3>
		                </figcaption>
		            </figure>


		            <figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/chasseur-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>AU CHASSEUR</h3>
		                </figcaption>
		            </figure>

					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/elise-jo-2-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>FAIRE PART DE REMERCIEMENTS</h3>
		                </figcaption>
		            </figure>
					
					<figure class="figure">
		                <a href="#"><div class="thumb">
		                	<div class="zoom"> + </div>
		                	<img src="imgs/islande-miniature.jpg" alt="photo1"></a>
		                </div>
		                <figcaption>
		                    <h3>ISLANDE</h3>
		                </figcaption>
		            </figure>

				</article>


		</div>
	
	<?php/* if ( have_posts() ) : ?>
	
		<?php /* Start the Loop ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable  ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>*/

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>