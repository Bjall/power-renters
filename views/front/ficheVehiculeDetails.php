<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>
		<?php
		echo'
		<div id="container3">
			<section class="liste_vehicule">
				<article class="fiche">
					<img class="fiche_photo" src="/PowerRenters/images/photos/'.$detailVehicule[0]->getVeh_photo().'">
					

					<aside class="fiche_details">
						<h1 id="veh_nom">'.$detailVehicule[0]->getVeh_modele()->getVehmmod_libelle().'</h1>
						<span id="categorie">'.$detailVehicule[0]->getVeh_type()->getCategorie()->getCat_libelle().' | '.$detailVehicule[0]->getVeh_type()->getType_veh_libelle().'<span>
						
						<p id="prix_veh">Tarif de location par jour à partir de <span id="tarif">'.$detailVehicule[0]->getVeh_type()->getType_veh_prix().' €</span><p>
					</aside>
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Afficher les options disponibles : if véhicule....faire appel à la requête qui appelle les accessoires par type =une seule requête avec en paramètre la categorie (peut être rajouter une colonne dans la base)
				</article>
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!récupérer les infos des dates et ville de location!!!!!!!!!!!!!!!!!!!!!!!!!!!	
	
				<form method="get" action="" class="myform_fiche">

					<div class="form_part"><label class="formtitre">Date de début:</label><input type="date" class="formsecondinput" id="calendarone"/></div>
					<div class="form_part"><label class="formtitre">Date de fin:</label><input type="date" class="formsecondinput" id="calendartwo"/></div>
					<div class="form_part"><label class="formtitre">Ville:</label><input type="text" class="formsecondinput"/></div>
					<div class="validation"><input type="submit" id="okfiche" value="Payer"></div>
	//!!!!!!!attention doit s identifier pour louer
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Faire appel à la fonction ajout contrat!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
				</form>
			</section>
		</div>
	</body>
</html>'
?>