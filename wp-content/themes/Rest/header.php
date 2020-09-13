<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href=" <?php echo get_stylesheet_directory_uri(); ?>/style.css">

        <?php wp_head(); ?>
    </head>

	<body>
		
		<header>
			<nav>
				<ul>
					<li><a href="http://localhost/wordpress/">Menu</a></li>
					<li><a href="?page_id=23">Sobre</a></li>
					<li><a href="?page_id=26">Contato</a></li>
				</ul>
			</nav>

			<h1><img src=" <?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

			<p>Rua Marechal 29 – Copacabana – Rj</p>
            <p class="telefone">2422-9201</p>
		</header>
