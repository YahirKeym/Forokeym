<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require dirname(__FILE__).'/sources/dependencias/requires.dependencia.php';
	$oPortal = new portalForo($bd_config);


	echo $oPortal->getHeader();
?>