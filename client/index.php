<?php
	
	require_once ('config.php');
	require_once ('libs/func.php');
	
	$view = empty($_GET['view']) ? 'index' : $_GET['view'];
	
	$page = new PageController();
	(method_exists($page, $view)) ? $page->$view() : $page->error();
	

