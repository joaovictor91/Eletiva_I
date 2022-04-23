<?php



namespace App\Model\Domain;

class Produto
{
    private $codigoproduto;
    private $nome;
    private $valor;
    private $quantidade;
    private $tipo;
    
    /**
     * @return mixed
     */
    public function getCodigoproduto()
    {
        return $this->codigoproduto;
    }

    /**
     * @param mixed $codigoproduto
     */
    public function setCodigoproduto($codigoproduto)
    {
        $this->codigoproduto = $codigoproduto;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $nome
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
   
}
