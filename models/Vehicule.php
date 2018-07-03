<?php

	class Vehicule{
		private $veh_id;
		private $veh_date_achat;
		private $veh_photo;
		private $veh_nb_place;
		private $veh_assur;
		private $veh_date_mec;
		private $veh_kmage;
		private $veh_ch_fisc;
		private $veh_ch_reel;
		private $veh_cyl;
		private $veh_type;
		private $veh_boite;
		private $veh_carb;
		private $veh_couleur;
		private $veh_modele;
		private $veh_porte;
		private $veh_typepermis;
		private $disposeOption;

		function __construct($veh_id = '', $veh_date_achat = '', $veh_photo = '', $veh_nb_place = '', $veh_assur = '', $veh_date_mec = '', $veh_kmage = '', $veh_ch_fisc = '', $veh_ch_reel = '', $veh_cyl = '', $veh_type = '', $veh_boite = '', $veh_carb = '', $veh_couleur = '', $veh_modele = '', $veh_porte = '', $veh_typepermis = '',$disposeOption=''){
			$this->veh_id = $veh_id;
			$this->veh_date_achat = $veh_date_achat;
			$this->veh_photo = $veh_photo;
			$this->veh_nb_place = $veh_nb_place;
			$this->veh_assur = $veh_assur;
			$this->veh_date_mec = $veh_date_mec;
			$this->veh_kmage = $veh_kmage;
			$this->veh_ch_fisc = $veh_ch_fisc;
			$this->veh_ch_reel = $veh_ch_reel;
			$this->veh_cyl = $veh_cyl;
			$this->veh_type = $veh_type;
			$this->veh_boite = $veh_boite;
			$this->veh_carb = $veh_carb;
			$this->veh_couleur = $veh_couleur;
			$this->veh_modele = $veh_modele;
			$this->veh_porte = $veh_porte;
			$this->veh_typepermis = $veh_typepermis;
			$this->disposeOption=$disposeOption;
		}

		public function getVeh_id(){
			return $this->veh_id;
		}

		public function setVeh_id($veh_id){
			$this->veh_id = $veh_id;
		}

		public function getVeh_date_achat(){
			return $this->veh_date_achat;
		}

		public function setVeh_date_achat($veh_date_achat){
			$this->veh_date_achat = $veh_date_achat;
		}

		public function getVeh_photo(){
			return $this->veh_photo;
		}

		public function setVeh_photo($veh_photo){
			$this->veh_photo = $veh_photo;
		}

		public function getVeh_nb_place(){
			return $this->veh_nb_place;
		}

		public function setVeh_nb_place($veh_nb_place){
			$this->veh_nb_place = $veh_nb_place;
		}

		public function getVeh_assur(){
			return $this->veh_assur;
		}

		public function setVeh_assur($veh_assur){
			$this->veh_assur = $veh_assur;
		}

		public function getVeh_date_mec(){
			return $this->veh_date_mec;
		}

		public function setVeh_date_mec($veh_date_mec){
			$this->veh_date_mec = $veh_date_mec;
		}

		public function getVeh_kmage(){
			return $this->veh_kmage;
		}

		public function setVeh_kmage($veh_kmage){
			$this->veh_kmage = $veh_kmage;
		}

		public function getVeh_ch_fisc(){
			return $this->veh_ch_fisc;
		}

		public function setVeh_ch_fisc($veh_ch_fisc){
			$this->veh_ch_fisc = $veh_ch_fisc;
		}

		public function getVeh_ch_reel(){
			return $this->veh_ch_reel;
		}

		public function setVeh_ch_reel($veh_ch_reel){
			$this->veh_ch_reel = $veh_ch_reel;
		}

		public function getVeh_cyl(){
			return $this->veh_cyl;
		}

		public function setVeh_cyl($veh_cyl){
			$this->veh_cyl = $veh_cyl;
		}

		public function getVeh_type(){
			return $this->veh_type;
		}

		public function setVeh_type($veh_type){
			$this->veh_type = $veh_type;
		}

		public function getVeh_boite(){
			return $this->veh_boite;
		}

		public function setVeh_boite($veh_boite){
			$this->veh_boite = $veh_boite;
		}

		public function getVeh_carb(){
			return $this->veh_carb;
		}

		public function setVeh_carb($veh_carb){
			$this->veh_carb = $veh_carb;
		}

		public function getVeh_couleur(){
			return $this->veh_couleur;
		}

		public function setVeh_couleur($veh_couleur){
			$this->veh_couleur = $veh_couleur;
		}

		public function getVeh_modele(){
			return $this->veh_modele;
		}

		public function setVeh_modele($veh_modele){
			$this->veh_modele = $veh_modele;
		}

		public function getVeh_porte(){
			return $this->veh_porte;
		}

		public function setVeh_porte($veh_porte){
			$this->veh_porte = $veh_porte;
		}

		public function getVeh_typepermis(){
			return $this->veh_typepermis;
		}

		public function setVeh_typepermis($veh_typepermis){
			$this->veh_typepermis = $veh_typepermis;
		}

		public function getDisposeOption(){
			return $this->disposeOption;
		}

		public function setDisposeOption($disposeOption){
			$this->disposeOption = $disposeOption;
		}
	}