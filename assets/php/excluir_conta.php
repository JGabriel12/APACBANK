<?php
include '../php/conecta_db.php';

$id_usuario = $_GET["id_usuario"];
$id_conta = $_GET["id_conta"];
$saldo_conta = $_GET["saldo_conta"];
$tipo_conta = $_GET["tipo_conta"];

if ($saldo_conta >= 1) {
  echo "<script>
alert('Para desativar sua conta, seu saldo precisa ser = 0');
window.location.href='../screens/listagem_usuarios.php';  
</script>";
} else {
  $result_usuario = "UPDATE conta SET status_conta = 0 WHERE id_conta = '$id_conta'";


  if ($conexao->query($result_usuario) === true) {
    echo "<script>
alert('Conta deletada com sucesso!');
window.location.href='../screens/listagem_usuarios.php';  
</script>";
  } else {
    echo "Erro " . $result_usuario . "<br>" . $conexao->error;
  }
}
