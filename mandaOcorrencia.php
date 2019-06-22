<?php
    include ("funcao.php");
    $ocorrencia=$_POST["ocorrencia"];

    function SalvarDescricao($ocorrencia) {
      $conexao = obterConexao();
      $sql = "insert into ocorrencia (descricao) values {$ocorrencia})";
      $sentenca = mysqli_prepare($conexao, $sql);
      mysqli_stmt_bind_param($sentenca, "s", $ocorrencia);
      mysqli_stmt_execute($sentenca);
      mysqli_close($conexao);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MeuIF</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="loader"></div>
    <div id="myDiv">
        <!--HEADER-->
        <div class="header">
            <div class="bg-color">
                <header id="main-header">
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Meu<span class="logo-dec">IF</span></a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="nav-item">
                                        <a class="nav-link ">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="banner-info text-center wow fadeIn delay-05s">
                                <h2 class="bnr-sub-title">Ocorrências</h2>
                                <div class="brn-btn">
                                </div>
                                <div class="overlay-detail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <partial name="_CookieConsentPartial" />
                        <main role="main" class="pb-3">
                        </main>
                    </div>
                </div>
            </div>
        </div
        <section id="service" class="section-padding wow fadeInUp delay-05s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="service-title pad-bt15">Qual a função?</h2>
                        <p class="sub-title pad-bt15">Através deste sistema é possível registrar suas ocorrências e receber notificações e avisos da instituição. </p>
                        <hr class="bottom-line">
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="service-item">
                              <h1 class="text-center text-success">Mensagem Enviada com Sucesso!</h1>
                        </div>
                    </div>
                    <a href="Ocorrencia.php">Voltar</a>
                </div>
            </div>
        </section>
        <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
        </section>
        <section id="blog" class="section-padding wow fadeInUp delay-05s">
        </section>
        <section id="contact" class="section-padding wow fadeInUp delay-05s">
            <div class="container">
            </div>
        </section>
        <footer id="contact" class="section-padding wow fadeInUp">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="container">
                                &copy; 2019 - MeuIF - <a >Privacy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!---->
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>
</html>
