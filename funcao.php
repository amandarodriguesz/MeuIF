<?php
  function obterConexao() {
    $conexao = mysqli_connect("localhost", "root", "", "meuif");
    mysqli_set_charset($conexao, 'utf8');
    return $conexao;
  }

/*  function obterQuestoes() {
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,
            "SELECT * FROM questao");
    $questoes = array();
    if ($resultado) {
      $questoes = mysqli_fetch_all($resultado,
          MYSQLI_ASSOC);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $questoes;
  }

  function obterQuestao($jogador_id) {
    $conexao = obterConexao();
    $sql = "SELECT * FROM questao WHERE id NOT IN
      (SELECT questao_id FROM resposta WHERE jogador_id = ?)
      ORDER BY rand() LIMIT 1";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "i", $jogador_id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $questao = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $questao;
}

  function obterQuestaoById($id) {
    $conexao = obterConexao();
    $sql = "select * from questao where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $questao = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $questao;
  }

  function salvarNovaQuestao($questao) {
    $conexao = obterConexao();
    $sql = "insert into questao (pergunta, opcao_a, opcao_b, opcao_c, resposta) values (?, ?, ?, ?, ?)";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "sssss", $questao['pergunta'], $questao['opcao_a'], $questao['opcao_b'], $questao['opcao_c'], $questao['resposta']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }

  function removerQuestao($id) {
    $conexao = obterConexao();
    $sql = "delete from questao where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }

  function alterarQuestao($questao) {
    $conexao = obterConexao();
    $sql = "update questao set pergunta=?, opcao_a=?, opcao_b=?, opcao_c=?, resposta=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "sssssi", $questao['pergunta'], $questao['opcao_a'], $questao['opcao_b'], $questao['opcao_c'], $questao['resposta'], $questao['id']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }*/

  function obterJogadorByEmail($email) {
    $conexao = obterConexao();
    $sql = "select * from jogador where email = ?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "s", $email);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $jogador = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $jogador;
  }

  function salvarResposta($resposta) {
    $conexao = obterConexao();
    $sql = "insert into resposta (questao_id, jogador_id, resposta) values (?, ?, ?)";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "iis", $resposta["questao_id"], $resposta["jogador_id"], $resposta["resposta"]);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }


  function resetarResposta($jogador_id) {
    $conexao = obterConexao();
    $sql = "DELETE FROM resposta WHERE jogador_id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $jogador_id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
}

   function obterQuantidadeQuestoes() {
     $conexao = obterConexao();
     $resultado = mysqli_query($conexao,
             "SELECT COUNT(id) as cont FROM questao");
     $questoes = array();
     if ($resultado) {
       $linha = mysqli_fetch_array($resultado,
           MYSQLI_ASSOC);
     }
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $linha["cont"];
   }

   function obterQuantidadeRespostas($jogador_id) {
     $conexao = obterConexao();
     $sql = "select count(id) as cont from resposta where jogador_id = ?";
     $sentenca = mysqli_prepare($conexao, $sql);
     mysqli_stmt_bind_param($sentenca, "i", $jogador_id);
     mysqli_stmt_execute($sentenca);
     $resultado = mysqli_stmt_get_result($sentenca);
     $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $linha["cont"];
   }

   function salvarAluno($aluno_novo) {
     $conexao = obterConexao();
     $sql = "insert into jogador (nome,email,senha,foto) values (?,?,?,?)";
     $sentenca = mysqli_prepare($conexao, $sql);
     mysqli_stmt_bind_param($sentenca, "ssss", $aluno_novo["nome"], $aluno_novo["email"], $aluno_novo["senha"],$jogador_novo["foto"]);
     mysqli_stmt_execute($sentenca);
     mysqli_close($conexao);
   }

   function pegaRelatorio($jogador_id){

    $conexao = obterConexao();
    $sql = "SELECT jog.nome, ques.pergunta, res.resposta, ques.resposta as certa
            from resposta res inner join questao ques on res.questao_id = ques.id
            inner join jogador jog on jog.id = res.jogador_id
            where res.jogador_id = ?";
  $sentenca = mysqli_prepare($conexao, $sql);
  mysqli_stmt_bind_param($sentenca, "i", $jogador_id);
  mysqli_stmt_execute($sentenca);
 $resultado = mysqli_stmt_get_result($sentenca);

   $questoes = array();
    if ($resultado) {
      $questoes = mysqli_fetch_all($resultado,
          MYSQLI_ASSOC);
    }
     $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
     mysqli_free_result($resultado);
     mysqli_close($conexao);
  return $questoes;
   }

 ?>
