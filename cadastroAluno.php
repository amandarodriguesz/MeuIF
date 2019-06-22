<?php
include_once "funcao.php";

$destino = 'imagens/' . $_FILES['arquivo']['name'];

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

move_uploaded_file( $arquivo_tmp, $destino  );


$aluno_novo = array();
$aluno_novo['nome'] = $_POST['nome'];
$aluno_novo['email'] = $_POST['email'];
$aluno_novo['senha'] = $_POST['senha'];
$aluno_novo['foto'] = $destino;


salvarAluno($aluno_novo);

header("location: cadastrarJogador.php");










 ?>
