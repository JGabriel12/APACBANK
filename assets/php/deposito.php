<?php
include 'conecta_db.php';
$saldo_conta = $_POST["saldo_conta"];
$deposito_atual = $_POST["deposito_atual"];

if ($deposito_atual == null) {
  echo "Insira um saldo válido!";
} else {
  $saldo_conta += $deposito_atual;
  echo $saldo_conta;
}
