<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response) {
    $htmlContent = "
        <!DOCTYPE html>
        <html lang='ca'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Pàgina Principal</title>
        </head>
        <body>
            <h1>Institut Tecnològic de Barcelona</h1>
            <p>Professors: Rai i David</p>
            <p>Visca el Giro!</p>
        </body>
        </html>
    ";
    $response->getBody()->write($htmlContent);
    return $response->withHeader('Content-Type', 'text/html');
});

$app->run();
?>