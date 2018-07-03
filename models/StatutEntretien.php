<?php

	class StatutEntretien {	
		private $statut_entretien_id;
		private $statut_entretien_libelle;
	
				
		function __construct ($statut_entretien_id = 0, $statut_entretien_libelle = ""){
			$this->statut_entretien_id = $statut_entretien_id;
			$this->statut_entretien_libelle = $statut_entretien_libelle;			
		}

		public function getStatut_entretien_id(){
			return $this->statut_entretien_id;
		}

		public function setStatut_entretien_id($statut_entretien_id){
			$this->statut_entretien_id = $statut_entretien_id;
		}

		public function getStatut_entretien_libelle(){
			return $this->statut_entretien_libelle;
		}

		public function setStatut_entretien_libelle($statut_entretien_libelle){
			$this->statut_entretien_libelle = $statut_entretien_libelle;
		}
	}