<!DOCTYPE html>
<html>
	<head>
		<title>Recherche Accessoire</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>
		
		<div>
			<p class= "contenu"> Recherche Accessoire </p>
		</div>


		<div class="formulaire">
			<label for="numeroaccessoire" class="contenuform">Rechercher un accessoire par numéro:</label>

			<form action="/PowerRenters/controllers/adminControllerAccessoire.php" method="GET">
				<input type="hidden" name="option" value="chercherAccessoireNum">
				<input  type="text" name="numeroaccessoire" class="contenuform" required/> 
				<input type="submit" name="submit" class="contenuform"/>
			</form>

			<br/>

			<label for="nomaccessoire" class="contenuform">Rechercher un accessoire par nom:</label>
			<form action="/PowerRenters/controllers/adminControllerAccessoire.php" method="GET">
				<input type="hidden" name="option" value="chercherAccessoireLib">
				<input type="text" name="nomaccessoire" class="contenuform" required/> 
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