<!DOCTYPE html>
<html>
	<head>
		<title>Véhicules disponibles</title>
	</head>

	<body>
		<?php 
			include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/navbar.php');
			include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/locationDAO.php');
		?>
		
		<div id="container2">
			<section class="liste_vehicule">
				<h1>Les voitures disponibles</h1>
				<?php
					if(isset($listeVehiculeDispo)) {
						$res = "";
						for($i=0;$i<count($listeVehiculeDispo);$i++) {
							if($listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle() == "Voiture") {
								$res .= "<article class=\"vehicule_fiche\">";
								$res .= '<img class="vehicule_left" src="/PowerRenters/images/photos/'.$listeVehiculeDispo[$i]->getVeh_photo().'">';
								$res .= "<div class=\"vehicule_middle\">";
								$res .= "<p><span id=\"categorie\">".$listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle()." | ".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_libelle()."<span></p>";
								$res .= "<div id=\"veh_modele\"><p>".$listeVehiculeDispo[$i]->getVeh_modele()->getVehmmod_libelle()."</p></div>";
								$res .= "<p id=\"prix_par\">Prix par jour dès <span id=\"prix\">".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_prix()." €</span><p>";
								$res .= "</div>";
								$res .= "<div class=\"vehicule_right\">";
								$res .= "<ul>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/clim.svg\">Climatisation</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/gearbox.svg\">Manuelle</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/users.svg\">".$listeVehiculeDispo[$i]->getVeh_nb_place()." places</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/doors.svg\">".$listeVehiculeDispo[$i]->getVeh_porte()->getVeh_porte_libelle()." portes</li>";
								$res .= "</ul>";
								$res .= '<a href="http://localhost/PowerRenters/controllers/adminControllerLocation.php?option=choisirVehicule&id='.$listeVehiculeDispo[$i]->getVeh_id().'">Réserver</a>';


								$res .= "</div>";
								$res .= "</article>";
							}
							if($listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle() == "Velo") {
								$res .= "<article class=\"vehicule_fiche\">";
								$res .= "<img class=\"vehicule_left\" src=\"/PowerRenters/images/photos/".$listeVehiculeDispo[$i]->getVeh_photo()."\">";
								$res .= "<div class=\"vehicule_middle\">";
								$res .= "<p><span id=\"categorie\">".$listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle()." | ".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_libelle()."<span></p>";
								$res .= "<p><span id=\"veh_exemples\">".$listeVehiculeDispo[$i]->getVeh_modele()->getVehmmod_libelle()."<span></p>";
								$res .= "<p id=\"prix_par\">Prix par jour dès <span id=\"prix\">".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_prix()." €</span><p>";
								$res .= "</div>";
								$res .= "<div class=\"vehicule_right\">";
								$res .= "<ul>";
								$res .= "<li></li>";
								$res .= "<li></li>";
								$res .= "<li></li>";
								$res .= "<li></li>";
								$res .= "</ul>";
								$res .= "<a href=\"http://www.google.fr\">Réserver</a>";
								$res .= "</div>";
								$res .= "</article>";
							}
							if($listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle() == "Motos") {
								$res .= "<article class=\"vehicule_fiche\">";
								$res .= "<img class=\"vehicule_left\" src=\"/PowerRenters/images/photos/".$listeVehiculeDispo[$i]->getVeh_photo()."\">";
								$res .= "<div class=\"vehicule_middle\">";
								$res .= "<p><span id=\"categorie\">".$listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle()." | ".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_libelle()."<span></p>";
								$res .= "<p><span id=\"veh_exemples\">".$listeVehiculeDispo[$i]->getVeh_modele()->getVehmmod_libelle()."<span></p>";
								$res .= "<p id=\"prix_par\">Prix par jour dès <span id=\"prix\">".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_prix()." €</span><p>";
								$res .= "</div>";
								$res .= "<div class=\"vehicule_right\">";
								$res .= "<ul>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/gearbox.svg\">Manuelle</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/users.svg\">".$listeVehiculeDispo[$i]->getVeh_nb_place()." places</li>";
								$res .= "</ul>";
								$res .= "<a href=\"http://www.google.fr\">Réserver</a>";
								$res .= "</div>";
								$res .= "</article>";
							}
							if($listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle() == "Utilitaire") {
								$res .= "<article class=\"vehicule_fiche\">";
								$res .= "<img class=\"vehicule_left\" src=\"/PowerRenters/images/photos/".$listeVehiculeDispo[$i]->getVeh_photo()."\">";
								$res .= "<div class=\"vehicule_middle\">";
								$res .= "<p><span id=\"categorie\">".$listeVehiculeDispo[$i]->getVeh_type()->getCategorie()->getCat_libelle()." | ".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_libelle()."<span></p>";
								$res .= "<p><span id=\"veh_exemples\">".$listeVehiculeDispo[$i]->getVeh_modele()->getVehmmod_libelle()."<span></p>";
								$res .= "<p id=\"prix_par\">Prix par jour dès <span id=\"prix\">".$listeVehiculeDispo[$i]->getVeh_type()->getType_veh_prix()." €</span><p>";
								$res .= "</div>";
								$res .= "<div class=\"vehicule_right\">";
								$res .= "<ul>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/clim.svg\">Climatisation</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/gearbox.svg\">Manuelle</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/users.svg\">".$listeVehiculeDispo[$i]->getVeh_nb_place()." places</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/doors.svg\">".$listeVehiculeDispo[$i]->getVeh_porte()->getVeh_porte_libelle()." portes</li>";
								$res .= "</ul>";
								$res .= "<a href=\"http://www.google.fr\">Réserver</a>";
								$res .= "</div>";
								$res .= "</article>";
							}
						}
						print($res);
					}
				?>
			</section>
		</div>
	</body>
</html>