<!DOCTYPE html>
<html>
	<head>
		<title>Power Renters - Location tous véhicules</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	</head>
	<body>
		<!-- <nav id="menuhaut">
			<ul>
				<li><a href="accueil.php" title="Page d'accueil">Accueil</a></li>
		<li><a href="agence.php" title="Page liste">Agences</a></li>
		<li><a href="liste_voitures.php" title="Page formulaire">Voitures</a></li>
		<li><a href="liste_voitures.php" title="Page formulaire">Utilitaires</a></li>
		<li><a href="liste_voitures.php" title="Page formulaire">Motos</a></li>
		<li><a href="liste_voitures.php" title="Page formulaire">Vélos</a></li>
		<li><a href="accueil.php" title="Page formulaire">Professionnels</a></li>
		<li><a href="creationCompte.php" title="Page formulaire">Votre compte</a></li>
			</ul>
		</nav>

		<div id="bandeau">
			<ul class="listeb">
				<li><img src="../images/logonegatif.png" alt="image article" class="logo"/></li>
		    	<li><p id="slogan">Power Renters</p></li>
			</ul>
		</div> -->
		<?php 
include '../header.php';
	?>
		<div id="container">
			<section class="liste_vehicule">
				<h1>Votre réservation</h1>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="../images/fiat-500.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Economique<span></p>
						<p><span id="veh_exemples">Fiat 500, Renault Twingo, Opel Adam, Smart Forfour<span><p>
					
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="../icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="../icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="../icones/users.svg">4 places</li>
							<li><img class="icone" src="../icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">XXX Prix véhicule</a>
					</div>
				</article>
				<h1>Vos options et accessoires</h1>
				<article class="vehicule_fiche">
					
					<div class="vehicule_left" id="accessoires">
						<ul class="accessoireliste">
							<li>
								<input id="radioButton" type="checkbox">
								<label>Siège auto</label>
								
					<img src="../images/siege.png" class="" id="siege">

</li>
<li>
		<input id="radioButton" type="checkbox">
	<label>GPS</label>

					<img src="../images/gps.png" class="" id="gps">
				</li>
				</ul>
				</div>
				<div class="vehicule_right">
				<a href="http://www.google.fr">XXX Prix options</a>
				</div>
				</article>
			</section>
		</div>

	</body>
</html>