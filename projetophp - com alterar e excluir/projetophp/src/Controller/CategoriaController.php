<?php


namespace App\Controller;

use App\Model\DAO\CategoriaDAO;
use App\Model\Domain\Categoria;

class CategoriaController
{
    public function index()
    {
        $categoriaDAO=new CategoriaDAO();
        $dados=$categoriaDAO->consultar();
        require "../src/View/Categoria/index.php";
    }
    
    public function create()
    {
        require "../src/View/Categoria/create.php";
    }
    
    public function store()
    {
        $categoria = new Categoria();
        $categoria->setDescricao($_POST['descricao']);
        $categoriaDAO = new CategoriaDAO();
        if ($categoriaDAO->inserir($categoria)){
            $resultado = "Registro inserido com sucesso!";
        } else {
            $resultado = "Não foi possível inserir o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /categorias');
        exit;
    }
    public function edit($parametro)
    {
        $categoriaDAO = new CategoriaDAO();
        $dados = $categoriaDAO->consultarPorId($parametro[1]);
        require "../src/View/Categoria/edit.php";
    }

    public function update($parametros){
        $categoria = new Categoria();
        $categoria->setId($parametros[1]);
        $categoria->setDescricao($_POST['descricao']);
        $categoriaDAO = new CategoriaDAO();
        if ($categoriaDAO->alterar($categoria)){
            $resultado = "Registro alterado com sucesso!";
        } else {
            $resultado = "Não foi possível alterar o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /categorias');
        exit;
    }

    public function delete($parametro)
    {
        $categoriaDAO = new CategoriaDAO();
        $dados = $categoriaDAO->consultarPorId($parametro[1]);
        require "../src/View/Categoria/delete.php";
    }

    public function remove($parametros){
        $categoria = new Categoria();
        $categoria->setId($parametros[1]);
        $categoriaDAO = new CategoriaDAO();
        if ($categoriaDAO->excluir($categoria)){
            $resultado = "Registro excluído com sucesso!";
        } else {
            $resultado = "Não foi possível excluir o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /categorias');
        exit;
    }

}
