<?php

	class Adresse {	
		private $adresse_id;
		private $adresse_l1;
		private $adresse_l2;
		private $adresse_l3;
		private $cp_id;
		private $cpville;

		function __construct ($adresse_l1, $adresse_l2, $adresse_l3, $cpville)
		{
			$this->adresse_l1 = $adresse_l1;
			$this->adresse_l2 = $adresse_l2;
			$this->adresse_l3 = $adresse_l3;
			$this->cpville = $cpville;
		}
		
		public function getAdresse_id(){
			return $this->adresse_id;
		}

		public function setAdresse_id($adresse_id){
			$this->adresse_id = $adresse_id;
		}

		public function getAdresse_l1(){
			return $this->adresse_l1;
		}

		public function setAdresse_l1($adresse_l1){
			$this->adresse_l1 = $adresse_l1;
		}

		public function getAdresse_l2(){
			return $this->adresse_l2;
		}

		public function setAdresse_l2($adresse_l2){
			$this->adresse_l2 = $adresse_l2;
		}

		public function getAdresse_l3(){
			return $this->adresse_l3;
		}

		public function setAdresse_l3($adresse_l3){
			$this->adresse_l3 = $adresse_l3;
		}

		public function getCp_id(){
			return $this->cp_id;
		}

		public function setCp_id($cp_id){
			$this->cp_id = $cp_id;
		}

		public function getCli_id(){
			return $this->cli_id;
		}

		public function setCli_id($cli_id){
			$this->cli_id = $cli_id;
		}

		public function getCpville(){
			return $this->cpville;
		}

		public function setCpville($cpville){
			$this->cpville = $cpville;
		}
	}