<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercício 5</title>
</head>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Lista  de Exercícios I</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                
            <li class="nav-item">
                    <a class="nav-link" href="/formulario-primeiro-exercicio">Exercicio 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/formulario-segundo-exercicio">Exercicio 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/formulario-terceiro-exercicio">Exercicio 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/formulario-quarto-exercicio">Exercicio 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/formulario-quinto-exercicio">Exercicio 5</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
<form action="/resultado-quinto-exercicio" method="POST">
    <h1>Exercício 5</h1>
    <div class="row">
        <div class="col">
            <label for="nota1">Informe a primeira nota:</label>
            <input class="form-control" type="text" name="nota1" id="nota1"/>
        </div>
        <div class="col">
            <label for="nota2">Informe a segunda nota:</label>
            <input class="form-control" type="text" name="nota2" id="nota2"/>
        </div>
        <div class="col">
            <label for="nota3">Informe a terceira nota:</label>
            <input class="form-control" type="text" name="nota3" id="nota3"/>
        </div>
        <div class="col">
            <label for="nota4">Informe a quarta nota:</label>
            <input class="form-control" type="text" name="nota4" id="nota4"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>

<div class="alert alert-info">
<?php
    if (isset($resultado5)){
        echo $resultado5;
    }
?>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
