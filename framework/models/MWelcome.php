<?php
class MWelcome {
	private $db;

	public function __construct(){
		$this->db = Database::conectar();
	}

	public function listar() {
		$sql = "SELECT * FROM tblejemplo";
		$res = $this->db->query($sql);
		return $res->FETCHALL(PDO::FETCH_OBJ);
	}
}