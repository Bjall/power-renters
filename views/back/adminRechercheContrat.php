<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>

		<label for="ttnom">Numéro contrat: </label>
			<form action="/PowerRenters/controllers/adminControllerContrat.php" method="GET">
				<input type="hidden" name="option" value="rechercheContratNum">
				<input type="text" name="contratnumero"/>
				<input type="submit" name="submit"/>	
			</form>
	</body>
</html>