<?php include_once "funcao.php";
include 'menuSuperior.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
  <div class="container">
    <h1>Cadastro de Aluno</h1>
    <form method="post" enctype="multipart/form-data" action="cadastroAluno.php">
      <div class="form-group">
        <label for="Nome">Nome do Aluno</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome">
      </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço do Aluno</label>
    <input type="email" class="form-control" id="email" name="email"aria-describedby="emailHelp" placeholder="Seu email">
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
  </div>
  <div class="form-group ">
 <label for="foto" >Selecione uma foto sua:</label>
   <input name="arquivo" type="file" />
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
  </div>
  </body>
</html>
