<!DOCTYPE html>
<?php
 session_start();
  include_once "funcao.php";

   $usuario = obterUsuarioByLogin( $_SESSION["login"]);

 ?>
<html>
<head>
    <title>Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark" style="margin-bottom: 1rem">
    <a class="navbar-brand" href="#">MeuIF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <?php 
                if($usuario['id_tipo']==2){
                    echo '<a class="nav-link" href="cadastroMetas.php">Adicionar Metas</a>';
                }

                ?>
                
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
           
            <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Logout</a>
        </form>
    </div>
</nav>

</body>
</html>