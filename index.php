<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Thème du Lhaissa</title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="entete" class="global">
			<header>
				<img src="images/lakers-logo.png" alt="Lakers" width="40%" height="20%" />
				<div id="TextesEntete">
				<h2>Thème de Lhaissa</h2>
				<h4>4W4 - Conception d'interfaces</h4>
				<h6>Février 2024</h6>
				</div>
			<div class="vague">
			<svg
				data-name="Layer 1"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 1200 120"
				preserveAspectRatio="none"
			>
				<path
					d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
					class="shape-fill"
				></path>
			</svg>
			</div>

		</div>
			</header>
		<div id="accueil" class="global">
			<section><h2>Accueil</h2>
			<div class="cours">
			<?php
			/*if(have_posts()){
			while (have_posts()) {
					the_post();
					the_title('<h3\>','<\h3>');
					the_content();
				}
			} */

			if(have_posts()):
			while (have_posts()) :the_post()?>
			<div class="carte">
			  <h3><?php the_title(); ?></h3>
			  <p><?php echo wp_trim_words(get_the_content(), 30) ?></p>
			  <?php endwhile; ?>
			  <?php endif; ?>
			</div>
			</div>
			</section>
		</div>
		<div id="evenement" class="global">
			<section><h2>Événement <img src="images/nba-logo.png" alt="NBA" width="7%" height="5%" /></h2>
			<blockquote>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <small>Magnam magni dignissimos recusandae sequi libero quasi quos.</small> Deserunt pariatur provident neque necessitatibus amet accusamus nemo explicabo et ut eius molestiae ipsam ex perferendis, vel, blanditiis tempora corporis, praesentium consectetur.</blockquote>
			<div class="vague2">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
			</section>
		</div>
		<div id="galerie" class="global diagonal">
			<section>
				<h3>Galerie</h3>
				<h6><a href="https://www.nba.com/lakers/">Lien du site des Lakers ®️</a></h6>
				<h6><a href="https://www.lebronjames.com/">Site de Lebron James, joueur des Lakers</a></h6>
				<h6><a href="https://fr.wikipedia.org/wiki/Lakers_de_Los_Angeles">Wikipédia des Lakers, équipe de la NBA</a></h6>
			</section>
		</div>
		<div id="footer" class="global">
			<section><h2>Footer</h2>
			<h6>Tous droits réservés &copy;</h6>
				<h6><a href="https://github.com/LaylayGH">Voici mon github!</a></h6>
				<input type="button" value="Lakers ®️">
			</section>
		</div>
	</body>
</html>
