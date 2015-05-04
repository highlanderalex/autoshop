<?php
	
	require_once ('config.php');
	require_once ('class/ServerSoap.php');
	
	ini_set('soap.wsdl_cache_enabled', '0');
	$obj = new SoapServer('auto.wsdl');
	$obj->setClass('ServerSoap');
	$obj->handle();
	
