<?php

	class Accessoire {
		private $accessoire_id;
		private $accessoire_libelle;
		private $accessoire_prix_u_ht;
		private $accessoire_stock;
		private $accessoire_statut;
		
		public function __construct($accessoire_id = 0, $accessoire_libelle = '', $accessoire_prix_u_ht = 0, $accessoire_stock = 0, $accessoire_statut = 0){
			$this->accessoire_id = $accessoire_id;
			$this->accessoire_libelle = $accessoire_libelle;
			$this->accessoire_prix_u_ht = $accessoire_prix_u_ht;
			$this->accessoire_stock = $accessoire_stock;
			$this->accessoire_statut = $accessoire_statut;
		}

		public function getAccessoire_id(){
			return $this->accessoire_id;
		}
		public function setAccessoire_id($accessoire_id){
			$this->accessoire_id = $accessoire_id;
		}

		public function getAccessoire_libelle(){
			return $this->accessoire_libelle;
		}
		public function setAccessoire_libelle($accessoire_libelle){
			$this->accessoire_libelle = $accessoire_libelle;
		}

		public function getAccessoire_prix_u_ht(){
			return $this->accessoire_prix_u_ht;
		}
		public function setAccessoire_prix_u_ht($accessoire_prix_u_ht){
			$this->accessoire_prix_u_ht = $accessoire_prix_u_ht;
		}

		public function getAccessoire_stock(){
			return $this->accessoire_stock;
		}
		public function setAccessoire_stock($accessoire_stock){
			$this->accessoire_stock = $accessoire_stock;
		}

		public function getAccessoire_statut(){
			return $this->accessoire_statut;
		}
		public function setAccessoire_statut($accessoire_statut){
			$this->accessoire_statut = $accessoire_statut;
		}

	}