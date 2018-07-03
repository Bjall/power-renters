<?php 

	class VehCouleur {
		private $veh_coul_id;
		private $veh_coul_libelle;

		function __construct ($veh_coul_id = '', $veh_coul_libelle = ''){
			$this->veh_coul_id = $veh_coul_id;
			$this->veh_coul_libelle = $veh_coul_libelle;
		}

		public function getVeh_coul_id(){
			return $this->veh_coul_id;
		}

		public function setVeh_coul_id($veh_coul_id){
			$this->veh_coul_id = $veh_coul_id;
		}

		public function getVeh_coul_libelle(){
			return $this->veh_coul_libelle;
		}

		public function setVeh_coul_libelle($veh_coul_libelle){
			$this->veh_coul_libelle = $veh_coul_libelle;
		}

	}