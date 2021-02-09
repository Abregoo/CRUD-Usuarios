<?php

class Conexion {

	//Conexion, con patron de Singleton
	private $host = "localhost";
	private $db_name = "usuarios_google";
	private $user = "root";
	private $pass = "";

	private static $conexion = null;
	private $conn;

	private function __construct() {
		try {
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->pass);
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}

	public static function getInstance() {
		if(!self::$conexion) {
			self::$conexion = new Conexion();
		}
		return self::$conexion;
	}

	public function getPrepareStatement($sql) {
		return $this->conn->prepare($sql);
	}
	
}