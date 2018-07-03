<?php
class contratLocation {
	private $contrat_id;
	private $contrat_date;
	private $contrat_lieux;
	private $contrat_date_fin;
	private $contrat_date_debut;
	private $contrat_caution;
	private $contrat_date_reservation;
	private $contrat_acompte;
	private $client; //objet de client
	private $vehcontrat;//objet vehicule
		
		
	function __construct($pcontrat_id, $pcontrat_date, $pcontrat_lieux, $pcontrat_date_debut,  $pcontrat_date_fin, $pcontrat_caution, $pcontrat_date_reservation, $pcontrat_acompte, $pclientcontrat, $pvehcontrat){
		$this->contrat_id=$pcontrat_id;
		$this->contrat_date=$pcontrat_date;
		$this->contrat_lieux=$pcontrat_lieux;
		$this->contrat_date_debut=$pcontrat_date_debut;
		$this->contrat_date_fin=$pcontrat_date_fin;
		$this->contrat_caution=$pcontrat_caution;
		$this->contrat_date_reservation=$pcontrat_date_reservation;
		$this->contrat_acompte=$pcontrat_acompte;
		$this->client= $pclientcontrat;
		$this->vehcontrat=$pvehcontrat;

	}

	public function getVehContrat(){
		return $this->vehcontrat;
	}

	public function setVehContrat($pveh_contrat){
		$this->vehcontrat = $pveh_contrat;
	}

	public function getModVehContrat(){
		return $this->vehmodelecontrat;
	}

	public function setModVehContrat($pvehmod_contrat){
		$this->vehmodelecontrat = $pvehmod_contrat;
	}



	public function getClient(){
		return $this->client;
	}

	public function setClientContrat($pcli_contrat){
		$this->clientcontrat = $pcli_contrat;
	}

	public function getContrat_id(){
		return $this->contrat_id;
	}

	public function setContrat_id($contrat_id){
		$this->contrat_id = $contrat_id;
	}

	public function getContrat_date(){
		return $this->contrat_date;
	}

	public function setContrat_date($contrat_date){
		$this->contrat_date = $contrat_date;
	}

	public function getContrat_lieux(){
		return $this->contrat_lieux;
	}

	public function setContrat_lieux($contrat_lieux){
		$this->contrat_lieux = $contrat_lieux;
	}

	public function getContrat_date_fin(){
		return $this->contrat_date_fin;
	}

	public function setContrat_date_fin($contrat_date_fin){
		$this->contrat_date_fin = $contrat_date_fin;
	}

	public function getContrat_date_debut(){
		return $this->contrat_date_debut;
	}

	public function setContrat_date_debut($contrat_date_debut){
		$this->contrat_date_debut = $contrat_date_debut;
	}

	public function getContrat_caution(){
		return $this->contrat_caution;
	}

	public function setContrat_caution($contrat_caution){
		$this->contrat_caution = $contrat_caution;
	}

	public function getContrat_date_reservation(){
		return $this->contrat_date_reservation;
	}

	public function setContrat_date_reservation($contrat_date_reservation){
		$this->contrat_date_reservation = $contrat_date_reservation;
	}

	public function getContrat_acompte(){
		return $this->contrat_acompte;
	}

	public function setContrat_acompte($contrat_acompte){
		$this->contrat_acompte = $contrat_acompte;
	}
}