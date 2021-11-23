<?php
include 'conecta_db.php';
$id_usuario = $_POST["id_usuario"];
$saldo_conta = $_POST["saldo_conta"];
$tipo_conta = $_POST["tipo_conta"];
$deposito_atual = $_POST["deposito_atual"];

if ($deposito_atual == null) {
  echo "Insira um saldo válido!";
} else {
  $saldo_conta += $deposito_atual;

  $query = "INSERT INTO conta (saldo_conta, id_usuario, tipo_conta) VALUES ('$saldo_conta','$id_usuario','$tipo_conta')";

  if ($conexao->query($query) === true) {
    echo "<script>
  alert('Depósito realizado com sucesso!');
  window.location.href='../screens/listagem_usuarios.php';
  </script>";
  } else {
    echo "Erro " . $query . "<br>" . $conexao->error;
  }
}
