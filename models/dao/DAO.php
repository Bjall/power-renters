<?php

	class DAO extends PDO {

		public function __construct() {
			$login = "root";
			$password = "";
			$database = "powerrenters";
			$server = "localhost";
			parent::__construct("mysql:host=$server;charset=utf8;dbname=$database", $login, $password);
		}
		
	}