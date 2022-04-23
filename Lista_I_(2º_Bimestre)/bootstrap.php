<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

$router = new App\Router($method, $path);

$router->get('/primeiro-exemplo/{valor}',
    'App\Controller\HomeController::primeiro_exemplo');

$router->get('/formulario-primeiro-exercicio',
    'App\Controller\HomeController::formulario_primeiro_exercicio');

$router->post('/resultado-primeiro-exercicio',
    'App\Controller\HomeController::resultado_primeiro_exercicio');

    $router->get('/formulario-segundo-exercicio',
    'App\Controller\HomeController::formulario_segundo_exercicio');

$router->post('/resultado-segundo-exercicio',
    'App\Controller\HomeController::resultado_segundo_exercicio');

    $router->get('/formulario-terceiro-exercicio',
    'App\Controller\HomeController::formulario_terceiro_exercicio');

$router->post('/resultado-terceiro-exercicio',
    'App\Controller\HomeController::resultado_terceiro_exercicio');

    $router->get('/formulario-quarto-exercicio',
    'App\Controller\HomeController::formulario_quarto_exercicio');

$router->post('/resultado-quarto-exercicio',
    'App\Controller\HomeController::resultado_quarto_exercicio');

    $router->get('/formulario-quinto-exercicio',
    'App\Controller\HomeController::formulario_quinto_exercicio');

$router->post('/resultado-quinto-exercicio',
    'App\Controller\HomeController::resultado_quinto_exercicio');



$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

$result = explode('::', $result);
$controller = new $result[0];
$action = $result[1];
$controller->$action($router->getParams());