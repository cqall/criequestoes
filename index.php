<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);


$app->get('/', function() {  
	echo "Pronto para comecar";
});


$app->run();

 ?>