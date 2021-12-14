<?php
function cargarControlador ($controlador) {
	$archivoControlador = 'controllers/'.$controlador.'.php';
	$nombreControlador = $controlador;
	if (!is_file($archivoControlador)) {
		$archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
		$nombreControlador = CONTROLADOR_PRINCIPAL;
	}
	require_once $archivoControlador;
	$control = new $nombreControlador();
	return $control;
}

function cargarMetodo ($controlador, $metodo, $id = null) {
	if (isset($metodo) && method_exists($controlador, $metodo)) {
		if ($id == null) {
			$controlador->$metodo();
		} else {
			$controlador->$metodo($id);
		}
	} else {
		$metodo = METODO_PRINCIPAL;
		$controlador->$metodo();
	}
}