<?php
require_once('connection.php');

if (isset($_GET['page'])) {
	$page = $_GET['page'];

	if (isset($_GET['controller'])) {

		$controller = $_GET['controller'];

		if (isset($_GET['action'])) {
			$action = $_GET['action'];
		} else {
			$action = 'index';
		}
	} else {
		$controller = 'layouts';
		$action = 'index';
	}
} else {
	$page = 'main';
	$controller = 'layouts';
	$action = 'index';
}
require_once('routes.php');
