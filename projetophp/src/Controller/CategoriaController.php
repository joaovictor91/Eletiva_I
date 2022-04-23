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
        $categoriaDAO = new CategoriaDAO();
        $dados = $categoriaDAO->consultar();
        require "../src/View/Categoria/index.php";
    }

}
