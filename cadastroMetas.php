<?php
  include_once "funcao.php";
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Metas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body >
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark" style="margin-bottom: 1rem">
    <a class="navbar-brand" href="#">MeuIF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Adicionar Metas</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
           
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>
<div class="container ">

<h1>Adicionar Meta</h1>
    <hr>
<form method="post" enctype="multipart/form-data" action="cadastroAluno.php">
    <div class="form-group">
        <label for="Nome">Meta:</label>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>

    </div>
    <div class="form-group">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Aluno:</label>
        <select class="custom-select " id="inlineFormCustomSelect">
            <option selected>Escolha</option>
            <option value="1">Gabriel</option>
            <option value="2">Ana</option>
            <option value="3">Felipe</option>
        </select>
    </div>



    <a type="submit" class="btn btn-primary" href="Principal.php">Enviar</a>
</form>
</div>


</body>
</html>