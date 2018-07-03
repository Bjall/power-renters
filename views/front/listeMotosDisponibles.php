<!DOCTYPE html>
<html>
	<head>
		<title>Véhicules disponibles</title>
	</head>

	<body>
		<?php 
			include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/navbar.php');
			include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/VehiculeDAO.php');
		?>
		
		<div id="container2">
			<section class="liste_vehicule">
				<h1>Les motos disponibles</h1>
				<?php
					if(isset($liste_vehicules)) {
						$res = "";
						for($i=0;$i<count($liste_vehicules);$i++) {
							if($liste_vehicules[$i]->getVeh_type()->getCategorie()->getCat_libelle() == "Motos") {
								$res .= "<article class=\"vehicule_fiche\">";
								$res .= "<img class=\"vehicule_left\" src=\"/PowerRenters/images/photos/".$liste_vehicules[$i]->getVeh_photo()."\">";
								$res .= "<div class=\"vehicule_middle\">";
								$res .= "<p><span id=\"categorie\">".$liste_vehicules[$i]->getVeh_type()->getCategorie()->getCat_libelle()." | ".$liste_vehicules[$i]->getVeh_type()->getType_veh_libelle()."<span></p>";
								$res .= "<p><span id=\"veh_exemples\">".$liste_vehicules[$i]->getVeh_modele()->getVehmmod_libelle()."<span></p>";
								$res .= "<p id=\"prix_par\">Prix par jour dès <span id=\"prix\">".$liste_vehicules[$i]->getVeh_type()->getType_veh_prix()." €</span><p>";
								$res .= "</div>";
								$res .= "<div class=\"vehicule_right\">";
								$res .= "<ul>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/gearbox.svg\">Manuelle</li>";
								$res .= "<li><img class=\"icone\" src=\"/PowerRenters/icones/users.svg\">".$liste_vehicules[$i]->getVeh_nb_place()." places</li>";
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