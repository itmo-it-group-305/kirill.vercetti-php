<?php
ini_set('display_errors', 1);

// localhost:8080/index.php?action=show&id=1
// localhost:8080/index.php?action=about

// localhost:8080/show/1
// localhost:8080/about

#include 'actions.php';
#include_once 'actions.php';
#require 'actions.php';
require_once 'actions.php';


function runAction($name = null)
{
	$name = $name ?: 'index';
	$action = $name . 'Action';
	$args = array_slice(func_get_args(), 1);

	if (!function_exists($action)) {
		header('HTTP/1.1 404 Not Found');
		exit('404 Not found');
	}

	// $action(...$args);
	call_user_func_array($action, $args);
}

$action = isset($_GET['action']) ? $_GET['action'] : null;

runAction($action);
runAction('show', 56);

# < 5.6 ...
// call_user_func_array('', []);