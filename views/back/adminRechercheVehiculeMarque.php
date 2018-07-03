<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>

			<br/>
			<label for="marquevehicule" class="contenuform">Rechercher un véhicule par marque:</label>

			<form action="/PowerRenters/controllers/adminControllerVehicule.php" method="GET">
				<input type="hidden" name="option" value="ChercherVehiculeMarque">
				<input type="text" name="marquevehicule" class="contenuform"/> 
				<input type="submit" name="submit" class="contenuform"/>

			</form>

			<br/>


		</div>

	</body>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="faq.php">FAQ</a>
	</footer>
</html>