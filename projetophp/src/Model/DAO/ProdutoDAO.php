<?php



namespace App\Model\DAO;

use App\Model\Domain\Produto;

class ProdutoDAO
{
    
    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }



    public function inserir(Produto $produto)
    {
        try{
            
            $sql = "INSERT INTO produto (nome, valor, quantidade, tipo)
                      VALUES (:nome, :valor, :quantidade, :tipo)";
            $p = $this->dao->getConn()->prepare($sql);
            $p->bindValue(":nome", $produto->getNome());
            $p->bindValue(":valor", $produto->getValor());
            $p->bindValue(":quantidade", $produto->getQuantidade());
            $p->bindValue(":tipo", $produto->getTipo());
            return $p->execute();
            
        } catch(\Exception $e){
            return 0;
        }
    }


    public function consultar()
    {
        try{
            $sql = "SELECT * FROM produto";
            return $this->dao->getConn()->query($sql);
        }catch(\Exception $e){
            return 0;
        }
    }

}
