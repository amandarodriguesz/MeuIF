<?php
include_once 'funcao.php';
$metas = obterMetas();
$alunos = obterDadosAluno();
$i = 1;

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

        <div class="header">

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
                            <li class="nav-item">
                                <a href="visualizarMetas.php" class="nav-link">Metas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php

            ?>
            <div class="container bg-color">

                <div class="row">
                    <?php foreach ($alunos as $aluno) {
                        $porcent = ($aluno['notas'] * 7) + (30 - $aluno['faltas']) / 10;
                        foreach ($metas as $meta) {
                            
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                <div class="tile-progress tile-<?php if($porcent < 30){echo 'red';}else if($porcent >= 30 && $porcent<= 60){echo 'primary';} else if($porcent <99){echo 'blue';}else{echo 'green';} ?>">
                                    <div class="tile-header">
                                    <h4><?php echo $aluno['nome'] ?></h4>
                                        <h4><?php echo $meta['objetivo'] . ' Pontos' ?></h4>
                                        <span class="texto"><?php echo $meta['recompensa'] ?>
                                    </div>
                                    <div class="tile-progressbar">
                                        <span data-fill="<?php echo $porcent ?>%" style="width:<?php echo $porcent ?>%;"></span>
                                    </div>
                                    <div class="tile-footer">
                                        <h4>
                                            <span class="pct-counter"><?php echo $porcent ?></span>% completo
                                        </h4>
                                        
                                    </div>
                                </div>

                            </div>
                            <?php $i++;
                        }
                    } ?>
                </div>
            </div>
            <!-- <header id="main-header">

            </header> -->
            <!--/ HEADER-->
            <!-- <section id="service" class="section-padding wow fadeInUp delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="service-title pad-bt15">Qual a função?</h2>
                            <p class="sub-title pad-bt15">Através deste sistema é possível para o pais registrar ocorrências,criar metas para seus filhos, receber notificações e avisos da instituição. </p>
                            <hr class="bottom-line">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>A</span>lunos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="">learn more...</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>P</span>rofessores</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="">learn more...</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <h3><span>I</span>nstituição</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="">learn more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
            
        </section>
        
        <section id="blog" class="section-padding wow fadeInUp delay-05s">
        </section>
       
        <section id="contact" class="section-padding wow fadeInUp delay-05s">
            <div class="container">

            </div>
        </section>
       -->
            <footer id="contact" class="section-padding">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <div class="container">
                                    &copy; 2019 - MeuIF - <a>Privacy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/wow.js"></script>
            <script src="js/jquery.bxslider.min.js"></script>
            <script src="js/custom.js"></script>
            <script src="contactform/contactform.js"></script>

</body>

</html>