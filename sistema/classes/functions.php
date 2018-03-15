<?php
	require_once('../config.php');
	require_once(DBAPI);

	$condominios = null;
	$condominio = null;

	function index(){
		global $condominios;
		$condominios = find_all('condominios');
	}

?>