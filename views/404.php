<!DOCTYPE html>
<html>
	<head>
		<title>404 Not Found</title>
	</head>

	<body>
		<?php 
			include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/navbar.php');
		?>

		<article>
			<h1>Erreur 404 - Page non trouvée</h1>
			<div class="erreur">
				<img src="/PowerRenters/images/404.gif" height="400px">
			</div>
		</article>

	</body>
</html>