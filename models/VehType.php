<?php 


class VehType {
	private $type_veh_id;
	private $type_veh_libelle;
	private $type_veh_prix;
	private $categorie;

	function __construct ($type_veh_id='', $type_veh_libelle='', $type_veh_prix='', $categorie='') {
		$this->type_veh_id= $type_veh_id;
		$this->type_veh_libelle= $type_veh_libelle;
		$this->type_veh_prix= $type_veh_prix;
		$this->categorie= $categorie;
	}

	public function getCategorie(){
		return $this->categorie;
	}

	public function setCategorie($categorie){
		$this->categorie = $categorie;
	}

	public function getType_veh_id(){
		return $this->type_veh_id;
	}

	public function setType_veh_id($type_veh_id){
		$this->type_veh_id = $type_veh_id;
	}

	public function getType_veh_libelle(){
		return $this->type_veh_libelle;
	}

	public function setType_veh_libelle($type_veh_libelle){
		$this->type_veh_libelle = $type_veh_libelle;
	}

	public function getType_veh_prix(){
		return $this->type_veh_prix;
	}

	public function setType_veh_prix($type_veh_prix){
		$this->type_veh_prix = $type_veh_prix;
	}

}

 ?>