<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$app = new \Slim\App();

$app->get('/', function (Request $req,  Response $res, array $args) {
    return $res->withStatus(200)->write('Test if docker is working');
});

$app->get('/test', function (Request $req,  Response $res, array $args) {
    return $res->withStatus(200)->write('Test if router is working');
});

$app->run();