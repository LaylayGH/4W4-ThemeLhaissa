		<?php get_header(); ?>

	<div id="accueil" class="global  bck-orange-200">
		<section>
						<div class="voyages">

				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
						$titre = get_the_title();
				?>
						<div class="carte">
							<h5><?= $titre; ?></h5>
							<p><?= get_the_content(); ?></p>
                     <p><?= the_category(); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
		<?php get_template_part("gabarits/vague") ?>
	</div>
   <div id="galerie" class="global diagonal bck-bleu-200 clr-mauve-300">
		<section>
			<h3>Galerie</h3>
		</section>

      	<?php get_footer() ?>