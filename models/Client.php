<?php

	class Client {
		private $cli_id;
		private $civilite;
		private $cli_nom;
		private $cli_prenom;
		private $cli_date_naissance;	
		private $cli_mail;
		private $cli_mdp;
		private $statutPersonne;
		private $cli_permis_numero;	
		private $adresse;
		private $detenir_permis;
		
		function __construct ($cli_id = '', $civilite = '', $cli_nom = '', $cli_prenom = '', $cli_date_naissance = '', $cli_mail = '', $cli_mdp = '', $statutPersonne = '', $cli_permis_numero='0', $adresse = '', $detenir_permis = ''){
			$this->cli_id = $cli_id;
			$this->civilite = $civilite;
			$this->cli_nom = $cli_nom;
			$this->cli_prenom = $cli_prenom;
			$this->cli_date_naissance = $cli_date_naissance;		
			$this->cli_mail = $cli_mail;
			$this->cli_mdp = $cli_mdp;
			$this->statutPersonne = $statutPersonne;
			$this->cli_permis_numero = $cli_permis_numero;		
			$this->adresse = $adresse;
			$this->detenir_permis = $detenir_permis;
		}

		public function getCli_id(){
			return $this->cli_id;
		}

		public function setCli_id($cli_id){
			$this->cli_id = $cli_id;
		}

		public function getCivilite(){
			return $this->civilite;
		}

		public function setCivilite($civilite){
			$this->civilite = $civilite;
		}

		public function getCli_nom(){
			return $this->cli_nom;
		}

		public function setCli_nom($cli_nom){
			$this->cli_nom = $cli_nom;
		}

		public function getCli_prenom(){
			return $this->cli_prenom;
		}

		public function setCli_prenom($cli_prenom){
			$this->cli_prenom = $cli_prenom;
		}

		public function getCli_date_naissance(){
			return $this->cli_date_naissance;
		}

		public function setCli_date_naissance($cli_date_naissance){
			$this->cli_date_naissance = $cli_date_naissance;
		}

		public function getCli_mail(){
			return $this->cli_mail;
		}

		public function setCli_mail($cli_mail){
			$this->cli_mail = $cli_mail;
		}

		public function getCli_mdp(){
			return $this->cli_mdp;
		}

		public function setCli_mdp($cli_mdp){
			$this->cli_mdp = $cli_mdp;
		}

		public function getStatutPersonne(){
			return $this->statutPersonne;
		}

		public function setStatutPersonne($statutPersonne){
			$this->statutPersonne = $statutPersonne;
		}

		public function getCli_permis_numero(){
			return $this->cli_permis_numero;
		}

		public function setCli_permis_numero($cli_permis_numero){
			$this->cli_permis_numero = $cli_permis_numero;
		}

		public function getAdresse(){
			return $this->adresse;
		}

		public function setAdresse($adresse){
			$this->adresse = $adresse;
		}

		public function getDetenirPermis(){
			return $this->detenir_permis;
		}

		public function setDetenirPermis($detenir_permis){
			$this->detenir_permis = $detenir_permis;
		}
		
	}