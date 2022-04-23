<?php

namespace App\Controller;

class HomeController
{

    public function primeiro_exemplo($params){
        echo "Hello World da Controller! O valor informado é: ".$params[1];
    }

    public function formulario_primeiro_exercicio(){
        require '../src/View/formulario_exer1.php';
    }

    public function resultado_primeiro_exercicio(){
        $valor_pago = $_POST['valor_pago'];
        $valor_produto = $_POST['valor_produto'];
        $resultado = $valor_pago - $valor_produto;
        if($resultado > 0)
            $resultado = "O valor do troco é $resultado";
        else if ($resultado == 0)
            $resultado = "Não há troco!";
        else
            $resultado = "O valor pago é insuficiente!";
        require '../src/View/formulario_exer1.php';
    }

    public function formulario_segundo_exercicio(){
        require '../src/View/formulario_exer2.php';
    }

    public function resultado_segundo_exercicio(){
        $valor_quilo = $_POST['valor_quilo'];
        $quantidade_produto = $_POST['quantidade_produto'];
        $resultado2 = $valor_quilo * $quantidade_produto;
        $resultado2 = "O valor final a ser pago $resultado2";
        require '../src/View/formulario_exer2.php';
    }

    public function formulario_terceiro_exercicio(){
        require '../src/View/formulario_exer3.php';
    }

    public function resultado_terceiro_exercicio(){
        $n = $_POST['n'];
        $resultado3=$n;
        if($resultado3 < 10)
            $resultado3 = "O valor é menor que 10";
        else if ($resultado3 > 10)
            $resultado3 = "O valor é maior que 10!";
            
        else if ($resultado3 == 10)
            $resultado3 = "O valor é igual a dez!";
        require '../src/View/formulario_exer3.php';
    }

    public function formulario_quarto_exercicio(){
        require '../src/View/formulario_exer4.php';
    }

    public function resultado_quarto_exercicio(){
        $n = $_POST['n'];
        $resultado4=$n;
        if($resultado4 < 0)
            $resultado4 = "O valor é NEGATIVO!!";
        else if ($resultado4 > 0)
            $resultado4 = "O valor é POSITIVO!!";
            
        else if ($resultado4 == 0)
            $resultado4 = "O valor é ZERO!!";
        require '../src/View/formulario_exer4.php';
    }

    public function formulario_quinto_exercicio(){
        require '../src/View/formulario_exer5.php';
    }

    public function resultado_quinto_exercicio(){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $resultado5=($nota1+$nota2+$nota3+$nota4)/4;
        if($resultado5 > 7)
            $resultado5 = "O Aluno foi APROVADO!!";
        else if ($resultado5 < 7)
            $resultado5 = "O Aluno foi REPROVADO!!";
        
        require '../src/View/formulario_exer5.php';
    }

}