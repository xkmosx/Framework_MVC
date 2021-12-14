<?php
class Welcome {
	private $mwelcome;

	public function __construct(){
		require_once "models/MWelcome.php";
		$this->mwelcome = new MWelcome();
	}

	public function index(){
		$data = array(
			'listar' => $this->mwelcome->listar()
		);
		require_once "views/welcome.php";
	}
}