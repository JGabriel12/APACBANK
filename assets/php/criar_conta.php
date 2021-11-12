<?php

include 'conecta_db.php';
$id_usuario = $_POST["id_usuario"];
$data_de_criacao = $_POST["data_de_criacao"];
$tipo_conta = $_POST["tipo_conta"];
$saldo_conta = 0;

if ($data_de_criacao == null) {
  echo "Data invalida";
} else if ($tipo_conta == null || $tipo_conta == 0) {
  echo "Escolha um tipo de conta válido";
} else {

  switch ($tipo_conta) {
    case 1:
      $tipo_conta = "Conta corrente";
      $saldo_conta = 100;
      break;
    case 2:
      $tipo_conta = "Conta poupança";
      $saldo_conta = 500;
      break;
    case 3:
      $tipo_conta = "Conta jurídica";
      $saldo_conta = 1000;
      break;
  }

  $query = "INSERT INTO conta (data_de_criacao, tipo_conta, saldo_conta, id_usuario) VALUES ('$data_de_criacao', '$tipo_conta','$saldo_conta','$id_usuario')";

  if ($conexao->query($query) === true) {
    echo "<script>
  alert('Conta cadastrado com sucesso!');
  window.location.href='../screens/listagem_usuarios.php';
  </script>";
  } else {
    echo "Erro " . $query . "<br>" . $conexao->error;
  }
}
