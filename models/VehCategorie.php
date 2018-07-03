<?php 

	class VehCategorie {

		private $cat_id;
		private $cat_libelle;

		function __construct($cat_id = '', $cat_libelle = '') {
			$this->cat_id = $cat_id;
			$this->cat_libelle = $cat_libelle;
		}

		public function getCat_id(){
			return $this->cat_id;
		}

		public function setCat_id($cat_id){
			$this->cat_id = $cat_id;
		}

		public function getCat_libelle(){
			return $this->cat_libelle;
		}

		public function setCat_libelle($cat_libelle){
			$this->cat_libelle = $cat_libelle;
		}

	}