<?php



namespace App\Controller;

use App\Model\DAO\ProdutoDAO;
use App\Model\Domain\Produto;


class ProdutoController
{
    public function index()
    {
        $produtoDAO = new ProdutoDAO();
        $dados = $produtoDAO->consultar();
        require "../src/View/Produto/index.php";
    }
    
    public function create()
    {
        require "../src/View/Produto/create.php";
    }
    
    public function store()
    {
        $produto = new Produto();
        
        $produto->setNome($_POST['nome']);
        $produto->setValor($_POST['valor']);
        $produto->setQuantidade($_POST['quantidade']);
        $produto->setTipo($_POST['tipo']);
        $produtoDAO = new ProdutoDAO();
        
        if ($produtoDAO->inserir($produto)){
            $resultado = "Registro inserido com sucesso!";
        } else {
            $resultado = "Não foi possível inserir o registro!";
        }
        $produtoDAO = new ProdutoDAO();
        $dados = $produtoDAO->consultar();
        require "../src/View/Produto/index.php";
    }
}
