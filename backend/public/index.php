<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get("/", function (Request $request, Response $response) {
    $response->getBody()->write("Hello World!");
    return $response;
});
$app->get('/tasks', function (Request $request, Response $response) {
    $response->getBody()->write(json_encode([
        [
            'id' => 0,
            'checked' => false,
            'task' => "Comprare il pane"
        ],
        [
            'id' => 1,
            'checked' => false,
            'task' => "Lavare i pavimenti"
        ],
        [
            'id' => 2,
            'checked' => true,
            'task' => "Mettere da parte 10 euro"
        ],
    ]));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withHeader('Access-Control-Allow-Origin', '*');
});

$app->run();