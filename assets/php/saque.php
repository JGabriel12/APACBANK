<?php
include 'conecta_db.php';
$id_usuario = $_POST["id_usuario"];
$id_conta = $_POST["id_conta"];
$saldo_conta = $_POST["saldo_conta"];
$tipo_conta = $_POST["tipo_conta"];
$deposito_atual = $_POST["deposito_atual"];
$hoje = date('Y/m/d');

if ($deposito_atual == null) {
  echo "Você não tem saldo!";
} else {
  $saldo_conta -= $deposito_atual;

  $query = "UPDATE conta SET saldo_conta = '$saldo_conta' WHERE id_usuario = '$id_usuario' AND tipo_conta = '$tipo_conta'";

  $query2 = "INSERT INTO transacao (tipo_transacao, data_transacao, valor_transacao, id_conta_origem) VALUES ('Saque', '$hoje', '$deposito_atual', '$id_conta')";

  if ($conexao->query($query) && $conexao->query($query2) === true) {
    echo "<script>
  alert('Saque realizado com sucesso!');
  window.location.href='../screens/listagem_usuarios.php';
  </script>";
  } else {
    echo "Erro " . $query . "<br>" . $conexao->error;
  }
}
