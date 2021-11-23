<?php
include 'conecta_db.php';
$id_usuario = $_POST["id_usuario"];
$saldo_conta = $_POST["saldo_conta"];
$tipo_conta = $_POST["tipo_conta"];
$deposito_atual = $_POST["deposito_atual"];

if ($deposito_atual == null) {
  echo "Você não tem saldo!";
} else {
  $saldo_conta -= $deposito_atual;

  $query = "UPDATE conta SET saldo_conta = '$saldo_conta' WHERE id_usuario = '$id_usuario' AND tipo_conta = '$tipo_conta'";

  if ($conexao->query($query) === true) {
    echo "<script>
  alert('Saque realizado com sucesso!');
  window.location.href='../screens/listagem_usuarios.php';
  </script>";
  } else {
    echo "Erro " . $query . "<br>" . $conexao->error;
  }
}
