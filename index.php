	<?php get_header(); ?>

	<div id="accueil" class="global  bck-orange-200 clr-beige-200">
		<section>
			<h2>Nos voyages de découverte</h2>
						<div class="voyages">

				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
						$titre = get_the_title();
				?>
						<div class="carte">
							<h5><?= $titre; ?></h5>
							<p><?= wp_trim_words(get_the_content(),30); ?></p>
							<p><?= the_category();  ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
		<?php get_template_part("gabarits/vague") ?>
	</div>
	<div id="evenement" class="global bck-beige-300">
		<section>
			<h2>Événement </h2>
			<blockquote>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <small>Magnam magni dignissimos recusandae sequi libero quasi quos.</small> Deserunt pariatur provident neque necessitatibus amet accusamus nemo explicabo et ut eius molestiae ipsam ex perferendis, vel, blanditiis tempora corporis, praesentium consectetur.</blockquote>
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