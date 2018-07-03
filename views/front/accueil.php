<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/navbar.php');
		?>

		<!-- Formulaire de recherche d'un véhicule -->
		<section id="container1">
			<div class="firstpart">
				<form method="get" action="/PowerRenters/controllers/adminControllerLocation.php" class="myform">
					<input type="hidden" name="option" value="chercherVehiculeDispo">
					<label class="formtitre">Date de début:</label>
						<input type="date" class="formfirstinput" id="calendarone" value="<?php echo date('Y-m-d'); ?>"/>
						<input type="time" class="formfirstinput" id="calendarone" value="<?php echo date('H:i'); ?>"/>
					<label class="formtitre">Date de fin:</label>
						<input type="date" name="date" class="formfirstinput" id="calendartwo"/>
						<input type="time" class="formfirstinput" id="calendarone"/>
					<label class="formtitre">Ville:</label>
						<input type="text" class="formfirstinput" value="Bordeaux"/></br>
					<label class="formtitre">Choisissez votre véhicule:</label></br>
						<div class="radiolist">
							<div class="radiolistcol">
								<div class="radiolistitem">
									<input type="radio" name="vehicule" value="voiture" id="voiture" checked="checked"/><img src="/PowerRenters/icones/car.svg" class="icone"/><label for="voiture" class="">Voitures</label>
								</div>
								<div class="radiolistitem">
									<input type="radio" name="vehicule" value="utilitaire" id="utilitaire"/><img src="/PowerRenters/icones/van.svg" class="icone"/><label for="utilitaire" class="">Utilitaires</label>
								</div>
							</div>
							<div class="radiolistcol">
								<div class="radiolistitem">
									<input type="radio" name="vehicule" value="moto" id="moto"/><img src="/PowerRenters/icones/motorbike.svg" class="icone"/><label for="moto" class="">Motos</label>
								</div>
								<div class="radiolistitem">
									<input type="radio" name="vehicule" value="velo" id="velo"/><img src="/PowerRenters/icones/bicycle.svg" class="icone"/><label for="velo" class="">Vélos</label>
								</div>
							</div>
						</div>
					<div class="validation">
						<input type="submit" class="ok">
					</div>
				</form>
			</div>
		</section>
	</body>
</html>