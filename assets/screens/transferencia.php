<?php
include '../php/conecta_db.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$tipo_conta = filter_input(INPUT_GET, 'tipo_conta', FILTER_SANITIZE_STRING);
$saldo_conta = filter_input(INPUT_GET, 'saldo_conta', FILTER_SANITIZE_NUMBER_FLOAT);
$id_conta = filter_input(INPUT_GET, 'id_conta', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "SELECT * FROM cadastro_usuario as u INNER JOIN conta as c ON (u.id_usuario = c.id_usuario) WHERE $id_usuario = u.id_usuario";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Depósito</title>
  <link rel="stylesheet" href="../css/mainScreen.css">
  <link rel="stylesheet" href="../css/listagemConta.css" />

</head>

<body>
  <h1>Olá, <?php echo strtoupper($row_usuario['nome_usuario']); ?></h1>
  <span>Seu saldo nessa conta é: </span> <?php echo $saldo_conta; ?>
  <br>
  <form action="../php/transferencia.php" method="POST">
    <input type="number" name="saldo_transferencia" id="saldo_transferencia" placeholder="Saldo para transferência">
    <br>
    <br>
    <input type="number" name="id_destino" id="id_destino" placeholder="Número da conta destino">
    <select name="tipo_conta_destino" id="tipo_conta_destino">
      <option value="0" selected>Informe o tipo da conta</option>
      <option value="1">Conta corrente</option>
      <option value="2">Conta Poupança</option>
      <option value="3">Conta Jurídica</option>
    </select>

    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario ?>">
    <input type="hidden" name="id_conta" id="id_conta" value="<?php echo $id_conta ?>">
    <input type="hidden" name="tipo_conta" id="tipo_conta" value="<?php echo $tipo_conta ?>">
    <input type="hidden" name="saldo_conta" id="saldo_conta" value="<?php echo $saldo_conta ?>">
    <input type="submit" name="submit_deposito" id="submit_deposito" value="Transferir">
  </form>
</body>

</html>