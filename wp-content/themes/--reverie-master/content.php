<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article class="page2" id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<!--<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php reverie_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure> <?php the_excerpt(); ?>
	</div>-->
	<div class="bg">
				
					
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