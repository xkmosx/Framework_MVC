<?php
class Database {
	#---------------------------------------------
	public static function conectar() {
		$conexion =  new PDO("mysql:charset=".CHARSET.";host=".HOST.";dbname=".DB."",USER,PASSWORD);
		return $conexion;
	}
}