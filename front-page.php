	<?php get_header(); ?>

	<div id="entete" class="global">
		<header>
			<img src="http://localhost/4w4-lhaissa/wp-content/uploads/2024/03/club-de-voyage.png" width="40%" height="20%" />
			<div id="TextesEntete">
            <h1><?php echo get_bloginfo("name") ?></h1>
            <h3><?php echo get_bloginfo("description") ?></h3>
			</div>
		</header>
	</div>
	<div id="accueil" class="global">
		<section>
			<h2>Accueil</h2>
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
		</section>
	</div>
	<?php get_footer() ?>
</body>

</html>