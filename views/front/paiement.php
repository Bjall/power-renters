<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>

		<form class="myformpaiement">
			<div class="divent">	
				<p>Paiement sécurisé sur internet</p>
				<p>Montant de la transaction : XX euros </p>
				<img src="../images/logocb.jpg" class="logocb" alt="Photo cb" />
			</div>
			<div class="divtest">
				<label class="formlabel">Numéro de la carte bancaire : </label><input class="forminput" type="text" name="ttNumCarte" value="" required /> <br>
			</div>
			<label class="formlabel">Date d'expiration : </label>
			<div class="forminput">
				<select >
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				<select>
					<option value="1">17</option>
					<option value="2">18</option>
					<option value="3">19</option>
					<option value="4">20</option>				
				</select>
			</div>
			<label class="formlabel">Cryptogramme visuel de votre carte : </label><input class="forminput" id="crypt" type="text" name="ttNumCarte" value="" required /> <br>
			<div class="validationPaiement"/>
				<input type="submit" id="ok">
			</div>
			<p>Votre transaction est sécurisé </p>
			<p>Votre paiement sera réalisé en toute sécurité </p>
		</form>
	</body>
</html>