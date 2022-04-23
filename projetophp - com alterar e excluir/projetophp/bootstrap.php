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

$router->get('/categorias/alterar/{id}',
    'App\Controller\CategoriaController::edit');

$router->get('/categorias/excluir/{id}',
    'App\Controller\CategoriaController::delete');

$router->post('/categorias/atualizar/{id}',
    'App\Controller\CategoriaController::update');

$router->post('/categorias/remover/{id}',
    'App\Controller\CategoriaController::remove');


$router->get('/produtos',
        'App\Controller\ProdutoController::index');

$router->get('/produtos/novo',
        'App\Controller\ProdutoController::create');
    
$router->post('/produtos/salvar',
            'App\Controller\ProdutoController::store');

$router->get('/produtos/alterar/{codigoproduto}',
            'App\Controller\ProdutoController::edit');
        
$router->get('/produtos/excluir/{codigoproduto}',
            'App\Controller\ProdutoController::delete');
        
 $router->post('/produtos/atualizar/{codigoproduto}',
            'App\Controller\ProdutoController::update');
        
$router->post('/produtos/remover/{codigoproduto}',
            'App\Controller\ProdutoController::remove');

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