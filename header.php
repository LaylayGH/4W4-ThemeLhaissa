<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Thème du Lhaissa</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	<link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
<div class="EnteteMenu">
	<section class="menuPrincipal bck-bleu-300">
		<input type="checkbox" id="check-burger">
		<label for="check-burger">
			<svg width="34" height="34" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
		</label>
		<?php wp_nav_menu(array("container" => "nav")); ?>
		<div class="liensSections bck-orange-200">
			<a href="#accueil"><span class="material-symbols-outlined">home</span></a>
			<a href="#evenement"><span class="material-symbols-outlined">mist</span></a>
			<a href="#galerie"><span class="material-symbols-outlined">panorama</span></a>
			<a href="#footer"><span class="material-symbols-outlined">pending</span></a>
		</div>
	</section>
</div>

	<div id="entete" class="global bck-beige-300 clr-orange-300">
		<header>
			<img src="http://localhost/4w4-lhaissa/wp-content/uploads/2024/03/club-de-voyage.png" width="20%" height="20%" />
			<div id="TextesEntete">
            <h1><?php echo get_bloginfo("name") ?> &copy;</h1>
            <h3><?php echo get_bloginfo("description") ?></h3>
			</div>
		</header>
	</div>
