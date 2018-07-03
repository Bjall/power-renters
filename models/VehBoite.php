<?php 

	class VehBoite {

		private $veh_boite_id;
		private $veh_boite_libelle;

		function __construct($veh_boite_id = '', $veh_boite_libelle = ''){
			$this->veh_boite_id = $veh_boite_id;
			$this->veh_boite_libelle = $veh_boite_libelle;
		}

		public function getVeh_boite_id(){
			return $this->veh_boite_id;
		}

		public function setVeh_boite_id($veh_boite_id){
			$this->veh_boite_id = $veh_boite_id;
		}

		public function getVeh_boite_libelle(){
			return $this->veh_boite_libelle;
		}

		public function setVeh_boite_libelle($veh_boite_libelle){
			$this->veh_boite_libelle = $veh_boite_libelle;
		}

}