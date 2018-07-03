<?php 

	class VehMarque {

		private $vehmar_id;
		private $vehmar_libelle;

		function __construct ($vehmar_id='', $vehmar_libelle='') {

			$this->vehmar_id= $vehmar_id;
			$this->vehmar_libelle= $vehmar_libelle;
		}

	public function getVehmar_id(){
		return $this->vehmar_id;
	}

	public function setVehmar_id($vehmar_id){
		$this->vehmar_id = $vehmar_id;
	}

	public function getVehmar_libelle(){
		return $this->vehmar_libelle;
	}

	public function setVehmar_libelle($vehmar_libelle){
		$this->vehmar_libelle = $vehmar_libelle;
	}


	}

 ?>