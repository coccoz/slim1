<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

//curl http://localhost:8080/alunni
$app->get('/alunni', "AlunniController:index");

//curl http://localhost:8080/alunni/2
$app->get('/alunni/{id:\d+}', "AlunniController:show");

//curl -X POST http://localhost:8080/alunni -H "Content-Type: application/json" -d '{"nome": "ciccio"}
$app->get('/alunni', "AlunniController:create");

//curl -X POST http://localhost:8080/alunni -H "Content-Type: application/json" -d '{"nome": "ciccio"}
$app->get('/alunni', "AlunniController:create");

//curl -X POST http://localhost:8080/alunni2 -H "Content-Type: application/json" -d '{"nome": "ciccio"}
$app->get('/alunni', "AlunniController:update");

$app->run();
