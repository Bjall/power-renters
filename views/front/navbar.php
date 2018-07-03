<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/PowerRenters/css/stylefront.css"/>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Script -->
		<script type="text/javascript" src="/PowerRenters/js/script.js"></script>
	</head>

	<body>
		<!-- Navbar -->
		<nav id="navbar">	
			<ul>
				<li><a href="/PowerRenters/views/front/agence.php">Agences</a></li>
				<li><a href="/PowerRenters/controllers/accueilController.php?option=ListeVoitures">Voitures</a></li>
				<li><a href="/PowerRenters/controllers/accueilController.php?option=ListeUtilitaires">Utilitaires</a></li>
				<li><a href="/PowerRenters/controllers/accueilController.php?option=ListeMotos">Motos</a></li>
				<li><a href="/PowerRenters/controllers/accueilController.php?option=ListeVelos">Vélos</a></li>
				<li><a href="/PowerRenters/views/front/accueil.php">Professionnels</a></li>
				<li class="menu-deroulant"><a href="">Votre compte</a>
					<ul class="submenu">
						<li><a href="/PowerRenters/views/front/inscription.php">S'inscrire</a></li>
						<li><a href="/PowerRenters/views/front/connexion.php">Se connecter</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<!-- Bandeau sous la navbar -->
		<div id="bandeau">
			<ul id="elements-bandeau">
				<li><a href="/PowerRenters/views/front/accueil.php"><img src="/PowerRenters/images/logonegatif.png" alt="image article" class="logo"/></a></li>
				<li id="slogan">Louez votre prochaine aventure</li>
				<li id="marque">Power Renters</li>
			</ul>
		</div>
	</body>
</html>