<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
      body{
        background-image: url('https://www.telegraph.co.uk/content/dam/education/2018/10/17/GCSE-results-indy_1_trans_NvBQzQNjv4BqqVzuuqpFlyLIwiB6NTmJwQ958V0Mg0UPCnMT8_pZrSs.png?imwidth=450');

      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-6 md-4">
            <form class="form-signin" action="Ocorrencia.php" method="post">
              <?php
                if(isset($erro) && $erro != "") {
                  echo "<div class='alert alert-danger' role='alert'>$erro</div>";
                }
                ?>
                <br><br>
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <label for="inputEmail" class="sr-only">E-mail:</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
        <br><label for="inputPassword" class="sr-only">Senha:</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="senha">
        <br><button class="btn  btn-success btn-block" type="submit">Entrar</button>
      </div>
      </div>
    </div>
  </form>
  </div>
</body>
</html>
