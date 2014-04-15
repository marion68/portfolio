<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="bg">
		<article class="page2" <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				
					
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
			<!--<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php //endwhile; // End the loop ?>-->

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>