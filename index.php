	<?php get_header(); ?>

	<div id="accueil" class="global">
		<section>
			<h2>Accueil</h2>
			<h6><a href="https://www.nba.com/lakers/">Lien du site des Lakers ®️</a></h6>
			<h6><a href="https://www.lebronjames.com/">Site de Lebron James, joueur des Lakers</a></h6>
			<h6><a href="https://fr.wikipedia.org/wiki/Lakers_de_Los_Angeles">Wikipédia des Lakers, équipe de la NBA</a></h6>
		</section>
		<?php get_template_part("gabarits/vague") ?>
	</div>
	<div id="evenement" class="global">
		<section>
			<h2>Événement </h2>
			<blockquote>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <small>Magnam magni dignissimos recusandae sequi libero quasi quos.</small> Deserunt pariatur provident neque necessitatibus amet accusamus nemo explicabo et ut eius molestiae ipsam ex perferendis, vel, blanditiis tempora corporis, praesentium consectetur.</blockquote>
		</section>
			<?php get_template_part("gabarits/vague") ?>
	</div>
	<div id="galerie" class="global diagonal">
		<section>
			<h3>Galerie</h3>
			<div class="cours">
				<?php
				/*
                if (have_posts()){
                    while(have_posts()){
                        the_post();
                        the_title('<h3>','</h3>');
                        echo wp_trim_words(get_the_content(),30);

                    }
                }
            */
				if (have_posts()) :
					while (have_posts()) : the_post();
						$titre = get_the_title();
						$sigle = substr($titre, 0, 7);
						$titreCours = substr($titre, 8, -5);
						$duree = substr($titre, -6, 6);
						$titrefinale = trim(substr($titre, 7), $duree);
				?>
						<div class="carte">
							<h5><?= $sigle; ?></h5>
							<h6><?= $titrefinale; ?></h6>
							<p><?= $duree; ?></p>

							<p><?= wp_trim_words(get_the_content(), 20); ?> </p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
	</div>
	<div id="footer" class="global">
		<section>
			<h2>Footer</h2>
			<h6>Tous droits réservés &copy;</h6>
			<h6><a href="https://github.com/LaylayGH">Voici mon github!</a></h6>
			<input type="button" value="Lakers ®️">
		</section>
	</div>
</body>

</html>