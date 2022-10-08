<?php

session_start();

require_once("vendor/autoload.php");

use PhpClass\Page;
use \Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

$config = array(
    'determineRouteBeforeAppMiddleware' => true,
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false
);

$app = new App(['setting' => $config]);

$app->get("/", function (Request $request, Response $response, array $args){

    $page = new Page([
        "header"=>false,
		"footer"=>false
    ]);

    $page->setTpl('index');

    return $response;
});


$app->run();

?>