<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//

echo 'this is not in public folder';
die('dsd');
//
//// match for the routes
$match = $router->match();

//$newbob =  $match['target'];
//// create $controller and method variables from match target
list($controller, $method) = explode("@", $match['target']);


// pass those to call_user_func_array

if (is_callable(array($controller, $method))) {
	$object = new $controller();
	// call method on that object passing params
	call_user_func_array(array($object, $method), array($match['params']));
} else {
	echo "Cannot find $controller -> $method";
	exit();
}



/*
	*/
