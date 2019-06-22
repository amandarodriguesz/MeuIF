<?php
  include_once "funcao.php";
  $login= $_POST["login"];
  $senha= $_POST["senha"];
  // echo "Usuário $email tem a senha $senha";
  $usuario = obterUsuarioByLogin($login);
  $erro = "";
  if ($usuario) {
    // var_dump($jogador);
    if ($usuario["senha"] == $senha) {
      // setcookie("email", $email);
      session_start();
      $_SESSION["login"] = $login;
      header("location: Principal.php");
      // include_once "index.php";

      exit(0);
    } else {
      $erro = "senha inválida";
    }
  } else {
    $erro =  "Usuário não encontrado";
  }
  if ($erro != "") {
    include_once "login.php";
  }
 ?>