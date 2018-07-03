<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>

		<!-- Formulaire de connexion -->
		<fieldset>
			<form id="formulaire-connexion" method="post" action="/PowerRenters/controllers/connexionController.php">
				<legend>Connectez-vous</legend>
				<!-- E-mail -->
				<input type="email" name="email" placeholder="ranger@power.com" required>
				<!-- Mot de passe -->
				<input type="password" name="password" placeholder="Mot de passe">
				<!-- Submit -->
				<input type="submit" value="Se connecter">
			</form>
		</fieldset>
	</body>
</html>
<script>	
	$(".message_info").click(function(){
		$(this).hide();
	});
</script>