<?php

	class Entretien {	
		private $entr_id;
		private $entr_libelle;
		private $entre_date;
		private $stat_etat_id;
		private $pers_id;
		private $veh_id;
		private $statut_entretien_id;
	
				
		function __construct ($entr_id = 0, $entr_libelle = "",$entre_date="",$stat_etat_id=0,$pers_id,$veh_id=0,$statut_entretien_id=0){
			$this->entr_id = $entr_id;
			$this->entr_libelle = $entr_libelle;
			$this->entre_date=$entre_date;
			$this->stat_etat_id=$stat_etat_id;
			$this->pers_id=$pers_id;
			$this->veh_id=$veh_id;
			$this->statut_entretien_id=$statut_entretien_id;
		}

		public function getEntr_id(){
			return $this->entr_id;
		}

		public function setEntr_id($entr_id){
			$this->entr_id = $entr_id;
		}

		public function getEntr_libelle(){
			return $this->entr_libelle;
		}

		public function setEntr_libelle($entr_libelle){
			$this->entr_libelle = $entr_libelle;
		}

		public function getEntre_date(){
			return $this->entre_date;
		}

		public function setEntre_date($entre_date){
			$this->entre_date = $entre_date;
		}

		public function getStat_etat_id(){
			return $this->stat_etat_id;
		}

		public function setStat_etat_id($stat_etat_id){
			$this->stat_etat_id = $stat_etat_id;
		}

		public function getPers_id(){
			return $this->pers_id;
		}

		public function setPers_id($pers_id){
			$this->pers_id = $pers_id;
		}

		public function getVeh_id(){
			return $this->veh_id;
		}

		public function setVeh_id($veh_id){
			$this->veh_id = $veh_id;
		}

		public function getStatut_entretien_id(){
			return $this->statut_entretien_id;
		}

		public function setStatut_entretien_id($statut_entretien_id){
			$this->statut_entretien_id = $statut_entretien_id;
		}
	}