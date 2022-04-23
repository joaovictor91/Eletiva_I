<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

$router = new App\Router($method, $path);

$router->get('/', 'App\Controller\HomeController::index');

$router->get('/categorias',
    'App\Controller\CategoriaController::index');

$router->get('/categorias/novo',
    'App\Controller\CategoriaController::create');

$router->post('/categorias/salvar',
        'App\Controller\CategoriaController::store');

$router->get('/produtos',
        'App\Controller\ProdutoController::index');

$router->get('/produtos/novo',
        'App\Controller\ProdutoController::create');
    
$router->post('/produtos/salvar',
            'App\Controller\ProdutoController::store');

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