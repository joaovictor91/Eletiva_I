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

    public function edit($parametro)
    {
        $produtoDAO = new ProdutoDAO();
        $dados = $produtoDAO->consultarPorCodigo($parametro[1]);
        require "../src/View/Produto/edit.php";
    }

    public function update($parametros){
        $produto = new Produto();
        $produto->setCodigoproduto($parametros[1]);
        $produto->setNome($_POST['nome']);
        $produto->setValor($_POST['valor']);
        $produto->setQuantidade($_POST['quantidade']);
        $produto->setTipo($_POST['tipo']);
        $produtoDAO = new ProdutoDAO();
        if ($produtoDAO->alterar($produto)){
            $resultado = "Registro alterado com sucesso!";
        } else {
            $resultado = "Não foi possível alterar o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /produtos');
        exit;
    }

    public function delete($parametro)
    {
        $produtoDAO = new ProdutoDAO();
        $dados = $produtoDAO->consultarPorCodigo($parametro[1]);
        require "../src/View/Produto/delete.php";
    }

    public function remove($parametros){
        $produto = new Produto();
        $produto->setCodigoproduto($parametros[1]);
        $produtoDAO = new ProdutoDAO();
        if ($produtoDAO->excluir($produto)){
            $resultado = "Registro excluído com sucesso!";
        } else {
            $resultado = "Não foi possível excluir o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /produtos');
        exit;
    }

}
