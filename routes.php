<?php
// controllers and action.
$controllers = array(
  	'pages' 		=>	['home', 'error'],
  	'works' 		=>	['index', 'create', 'edit', 'delete', 'postCreate', 'postUpdate'],
  	'calendar'		=>	['index', 'getDataCalendar']
); 
// exception page error
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
	$controller = 'pages';
	$action 	= 'error';
}
// import controller
include_once('controllers/' . $controller . '_controller.php');
// create class name controller.
$class = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $class;
$controller->$action();