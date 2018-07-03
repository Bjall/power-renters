<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>

		<!-- Formulaire d'inscription -->
		<section id="container1">
			<article>
				<form id="formulaire-inscription" method="post" action="/PowerRenters/controllers/inscriptionController.php">
					<legend>Inscrivez-vous</legend>
					<!-- Civilité (radio) -->
					<label class="formlabel">Civilité *</label>
						<input class="formradio" type="radio" name="radCivilite" value="1" id="1" checked="checked" /><label for="1">Mme</label>
						<input class="formradio" type="radio" name="radCivilite" value="2" id="2" /><label for="2">M.</label>
					<!-- Nom -->
					<label class="formlabel">Nom *</label><input class="forminput" type="text" name="nom" value="<?php if(isset($_SESSION['nom'])) {echo($_SESSION['nom']);} ?>" required/>
					<!-- Prénom -->
					<label class="formlabel">Prénom *</label><input class="forminput" type="text" name="prenom" value="<?php if(isset($_SESSION['prenom'])) {echo($_SESSION['prenom']);} ?>" required/>
					<!-- Date de naissance -->
					<label class="formlabel">Date de naissance *</label><input class="forminput" type="date" name="birthdate" value="<?php if(isset($_SESSION['birthdate'])) {echo($_SESSION['birthdate']);} ?>" required>
					<!-- E-mail -->
					<label class="formlabel">E-mail *</label><input class="forminput" type="email" name="email" value="<?php if(isset($_SESSION['email'])) {echo($_SESSION['email']);} ?>" required>
					<!-- Mot de passe -->
					<label class="formlabel">Mot de passe *</label><input class="forminput" type="password" name="password">
					<label class="formlabel">Saisissez à nouveau<br>votre mot de passe *</label><input class="forminput" type="password" name="password-check">
					<!-- Statut client (combo box) -->
					<label class="formlabel" id="label-stat-combo">Vous êtes *</label>
					<select class="combo" name="cbStat">
						<option value="1">Particulier</option>
						<option value="2">Professionnel</option>
					</select>
					<div>
						<legend>Vos coordonnées</legend>
						<!-- Adresse -->
						<label class="formlabel">Adresse</label><input class="forminput" type="text" name="adresse1" value="<?php if(isset($_SESSION['adresse1'])) {echo($_SESSION['adresse1']);} ?>"/>
						<label class="formlabel">Complément adresse</label><input class="forminput" type="text" name="adresse2" value="<?php if(isset($_SESSION['adresse2'])) {echo($_SESSION['adresse2']);} ?>"/>
						<label class="formlabel">Complément adresse</label><input class="forminput" type="text" name="adresse3" value="<?php if(isset($_SESSION['adresse3'])) {echo($_SESSION['adresse3']);} ?>"/>
						<label class="formlabel">Code postal</label><input class="forminput" type="text" id="cp" name="codepostal" value="<?php if(isset($_SESSION['codepostal'])) {echo($_SESSION['codepostal']);} ?>"/>
						<label class="formlabel">Ville</label><input class="forminput" type="text" id="ville" name="ville" value="<?php if(isset($_SESSION['ville'])) {echo($_SESSION['ville']);} ?>"/>
						<!-- Checkbox -->
						<div id="checkbox-validation">
							<input type="checkbox"><label>Je m'abonne à la newsletter</label>
						</div>
						<div id="checkbox-validation">
							<input type="checkbox" name="checkboxCGU" required><label>En cochant cette case, j'accepte et je reconnais avoir pris connaissance des Conditions d'annulation et de modification en vigueur</label>
						</div>
					</div>
					<!-- Submit -->
					<div class="validation">
						<input id="bouton-inscription" type="submit" value="S'inscrire">
					</div>
				</form>
			</article>
		</section>
	</body>
</html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js"></script>
<link rel="Stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" />
<script type="text/javascript">
	var cache = {};
	$(function ()
	{
		$("#cp, #ville").autocomplete({
			source: function (request, response)
			{
				// Si la réponse est dans le cache
				if ((1 + '-' + request.term) in cache)
				{
					response($.map(cache[1 + '-' + request.term], function (item)
					{
						return {
							label: item.CodePostal + ", " + item.Ville,
							value: function ()
							{
								if ($(this).attr('id') == 'cp')
								{
									$('#ville').val(item.Ville);
									return item.CodePostal;
								}
								else
								{
									$('#cp').val(item.CodePostal);
									return item.Ville;
								}
							}
						}
					}));
				}
				// Sinon -> Requete Ajax
				else
				{
					var objData = {};
					if ($(this.element).attr('id') == 'cp')
					{
						objData = { codePostal: request.term, pays: 1, maxRows: 15 };
					}
					else
					{
						objData = { ville: request.term, pays: 1, maxRows: 15 };
					}
					$.ajax({
						url: "./AutoCompletion.php",
						dataType: "json",
						data: objData,
						type: 'POST',
						success: function (data)
						{
							// Ajout de reponse dans le cache
							cache[(1 + '-' + request.term)] = data;
							response($.map(data, function (item)
							{

								return {
									label: item.CodePostal + " " + item.Ville,
									value: function ()
									{
										if ($(this).attr('id') == 'cp')
										{
											$('#ville').val(item.Ville);
											return item.CodePostal;
										}
										else
										{
											$('#cp').val(item.CodePostal);
											return item.Ville;
										}
									}
								}
							}));
						}
					});
				}
			},
			minLength: 3,
			delay: 600
		});
	});
</script>