<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un Accessoire</title>
</head>

<body>
	<?php
	include_once('adminNavbar.php');
	?>

	<!-- Formulaire ajout accessoire-->
	<div class="formulaire">
		<form  action="/PowerRenters/controllers/adminControllerAccessoire.php" method="GET" >
			<input type="hidden" name="option" value="ajoutAccessoire">
			<legend class= "contenuCenter">Ajout d'un accessoire</legend>


			<label class="contenuformbis">Nom de l'accessoire :</label>
			<input class="contenuformbis" type="text" name="libelle" value="" required/>

			<label class="contenuformbis">Prix de l'accessoire :</label>
			<input class="contenuformbis" type="number" step="0.01"name="prix" value="" required/>

			<label class="contenuformbis">Stock :</label>
			<input class="contenuformbis" type="number"  name="stock" value="" required/>

			<div class="validation">
				<input class="contenuformbis" id="leboutondenathalie" type="submit" value="Ajouter">
			</div>

		</form>
	</div>						

</body>

<footer>
	<a href="mentionlegales.php">Mentions legales</a>
	<a href="apropos.php"> A propos</a>
	<a href="faq.php">FAQ</a>
</footer>
</html>