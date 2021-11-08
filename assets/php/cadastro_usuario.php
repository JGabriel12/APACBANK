<?php

include 'conecta_db.php';

$nome_usuario = $_POST["nome_usuario"];
$cpf_usuario = $_POST["cpf_usuario"];
$senha_usuario = $_POST["senha_usuario"];
$confirmaSenha_usuario = $_POST["confirmaSenha_usuario"];


if ($nome_usuario == null) {
  echo "Nome invalido!";
} else if ($cpf_usuario == null) {
  echo "CPF invalido!";
} else if (($senha_usuario != $confirmaSenha_usuario) || ($senha_usuario == null) || ($confirmaSenha_usuario == null)) {
  echo "Senhas diferentes ou invalidas";
} else {

  $senha_usuario_codificada = md5($senha_usuario);
  $confimaSenha_usuario_codificada = md5($confirmaSenha_usuario);

  $query = "INSERT INTO cadastro_usuario (nome_usuario, cpf_usuario, senha_usuario, confirmaSenha_usuario) VALUES ('$nome_usuario', '$cpf_usuario', '$senha_usuario_codificada', '$confimaSenha_usuario_codificada')";

  if ($conexao->query($query) === true) {
    echo "<script>
  alert('Usuario cadastrado com sucesso!');
  window.location.href='../screens/tela_inicial.php';
  </script>";
  } else {
    echo "Erro " . $query . "<br>" . $conexao->error;
  }
}



$conexao->close();
