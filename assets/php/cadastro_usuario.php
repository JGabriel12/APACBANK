<?php

include 'conecta_db.php';
$id_usuario = $_POST["id_usuario"];
$nome_usuario = $_POST["nome_usuario"];
$cpf_usuario = $_POST["cpf_usuario"];
$senha_usuario = $_POST["senha_usuario"];
$confirmaSenha_usuario = $_POST["confirmaSenha_usuario"];

if ($nome_usuario == null) {
  echo "<script>
  alert('Nome invalido');
  window.location.href='../screens/index.php';
  </script>";
} else if (($cpf_usuario == null) || (strlen($cpf_usuario) != 11)) {
  echo "<script>
  alert('CPF invalido');
  window.location.href='../screens/index.php';
  </script>";
} else if (($senha_usuario != $confirmaSenha_usuario) || ($senha_usuario == null) || ($confirmaSenha_usuario == null)) {
  echo "<script>
  alert('Senha invalida ou diferentes');
  window.location.href='../screens/index.php';
  </script>";
} else {

  $query2 = "SELECT cpf_usuario FROM cadastro_usuario ";

  $resultado_query = mysqli_query($conexao, $query2);
  $resultado = mysqli_fetch_array($resultado_query);
  $user_cpf = $resultado['cpf_usuario'];

  if ($cpf_usuario == $user_cpf) {
    echo "<script>
    alert('CPF já existe');
    window.location.href='../screens/index.php';
    </script>";
  }

  $senha_usuario_codificada = md5($senha_usuario);
  $confimaSenha_usuario_codificada = md5($confirmaSenha_usuario);

  $query = "INSERT INTO cadastro_usuario (nome_usuario, cpf_usuario, senha_usuario, confirmaSenha_usuario) VALUES ('$nome_usuario', '$cpf_usuario', '$senha_usuario_codificada', '$confimaSenha_usuario_codificada')";




  if ($conexao->query($query) === true) {
    echo "<script>
  alert('Usuario cadastrado com sucesso!');
  window.location.href='../screens/listagem_usuarios.php';
  </script>";
  } else {
    echo "Erro " . $query . "<br>" . $conexao->error;
  }
}

$conexao->close();
