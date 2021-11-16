<?php
include '../php/conecta_db.php';

$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$saldo_conta = filter_input(INPUT_POST, 'saldo_conta', FILTER_SANITIZE_NUMBER_FLOAT);

if ($saldo_conta == 0) {
  echo "<script>
alert('Para desativar sua conta, seu saldo precisa ser = 0');
window.location.href='../screens/listagem_usuarios.php';  
</script>";
} else {
  $result_usuario = "UPDATE conta SET status_conta = 0 WHERE id_usuario = '$id_usuario'";
}

if ($conexao->query($result_usuario) === true) {
  echo "<script>
alert('Conta deletada com sucesso!');
window.location.href='../screens/listagem_usuarios.php';  
</script>";
} else {
  echo "Erro " . $result_usuario . "<br>" . $conexao->error;
}
