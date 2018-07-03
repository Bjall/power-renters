<?php 

class VehPorte {

	private $veh_porte_id;
	private $veh_porte_libelle;

	function __construct ($veh_porte_id='', $veh_porte_libelle=''){
		$this->veh_porte_id= $veh_porte_id;
		$this->veh_porte_libelle= $veh_porte_libelle;
	}

	public function getVeh_porte_id(){
		return $this->veh_porte_id;
	}

	public function setVeh_porte_id($veh_porte_id){
		$this->veh_porte_id = $veh_porte_id;
	}

	public function getVeh_porte_libelle(){
		return $this->veh_porte_libelle;
	}

	public function setVeh_porte_libelle($veh_porte_libelle){
		$this->veh_porte_libelle = $veh_porte_libelle;
	}

}
?>