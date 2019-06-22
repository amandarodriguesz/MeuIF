<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="Logar.php" method="post">
    <?php
      if(isset($erro) && $erro != "") {
        echo "<div class='alert alert-danger' role='alert'>$erro</div>";
      }
     ?>

  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  <label for="inputEmail" class="sr-only">E-mail:</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Email address"  autofocus name="login">
  <label for="inputPassword" class="sr-only">Senha:</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="senha">
  <button class="btn btn-lg btn-primary btn-block" type="submit" >Entrar</button>
</form>
</body>
</html>
