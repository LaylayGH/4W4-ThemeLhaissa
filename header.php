
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
<div class="EnteteMenu">
	<header class="menuPrincipal">

		<input type="checkbox" id="check-burger">
		<label for="check-burger">
			<svg width="34" height="34" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#552583"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
		</label>
		<?php wp_nav_menu(array("container" => "nav")); ?>

		<div class="liensSections">
			<a href="#accueil">Accueil</a>
			<a href="#evenement">Évènement</a>
			<a href="#galerie">Galerie</a>
			<a href="#footer">Footer</a>
		</div>
	</header>
</div>
	<div id="entete" class="global">
		<header>
			<img src="http://localhost/4w4-lhaissa/wp-content/uploads/2024/03/lakers-logo.png" alt="Lakers" width="40%" height="20%" />
			<div id="TextesEntete">
				<h2>Thème de Lhaissa</h2>
				<h4>4W4 - Conception d'interfaces</h4>
				<h6>Février 2024</h6>
			</div>
		</header>
	</div>
