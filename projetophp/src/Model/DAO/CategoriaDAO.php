<?php



namespace App\Model\DAO;

use App\Model\Domain\Categoria;

class CategoriaDAO
{
    
    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(Categoria $categoria)
    {
        try{
            //$sql = "INSERT INTO clientes (nome, telefone, email)
            //                              VALUES (:nome, :telefone, :email)";
            $sql = "INSERT INTO categorias (descricao) VALUES (:descricao)";
            $p = $this->dao->getConn()->prepare($sql);
            $p->bindValue(":descricao", $categoria->getDescricao());
            //$p->bindValue(":nome", $cliente->getNome());
            //$p->bindValue(":telefone", $cliente->getTelefone();
            //$p->bindValue(":email", $cliente->getEmail();
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar()
    {
        try{
            $sql = "SELECT * FROM categorias";
            return $this->dao->getConn()->query($sql);
        }catch(\Exception $e){
            return 0;
        }
    }

}
