	<?php get_header(); ?>

	<div id="accueil" class="global  bck-orange-200 clr-beige-200">
		<section>
			<h2>Nos voyages à découvrir</h2>
						<div class="voyages">

				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
						$titre = get_the_title();
				?>
						<div class="carte">
							<h5><?= $titre; ?></h5>
							<p><?= wp_trim_words(get_the_content(),30); ?></p>
							<h6><?= the_category();  ?></h6>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
		<?php get_template_part("gabarits/vague") ?>
	</div>
	<div id="evenement" class="global bck-beige-300 clr-bleu-300">
		<section>
			<h2>Ce que nous offrons...</h2>
			<blockquote>
				Découvrez le monde avec Voyage.inc avec nos <small>voyages en groupe, voyages en petit comité, voyages en solo</small>. Chaque voyage est une promesse d'expériences uniques, conçues pour répondre à toutes vos envies d'évasion. Nos destinations soigneusement sélectionnées promettent émerveillement et découvertes à chaque tournant.</blockquote>
		</section>
			<?php get_template_part("gabarits/vague") ?>
			</div>
	<div id="galerie" class="global diagonal bck-bleu-200 clr-mauve-300">
		<section>
			<h3>Galerie</h3>
		</section>
	</div>
	<?php get_footer() ?>
</body>

</html>