<?php
if (isset($_GET['c'])) {
	$controlador = cargarControlador(ucfirst($_GET['c']));
	if (isset($_GET['m'])) {
		if (isset($_GET['i'])) {
			cargarMetodo($controlador, $_GET['m'], $_GET['i']);
		} else {
			cargarMetodo($controlador, $_GET['m']);
		}
	} else {
		cargarMetodo($controlador, METODO_PRINCIPAL);
	}
} else {
	$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
	$metodo = METODO_PRINCIPAL;
	$controlador->$metodo();
}