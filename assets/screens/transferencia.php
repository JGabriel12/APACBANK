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
  <link rel="stylesheet" href="../css/listagem.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <h1><?php echo strtoupper($row_usuario['nome_usuario']); ?></h1>
  <span class="form mt-5 table-itens">Seu saldo nessa conta é: <?php echo $saldo_conta; ?></span>
  <br>
  <form class="form" action="../php/transferencia.php" method="POST">
    <input type="number" name="saldo_transferencia" id="saldo_transferencia" placeholder="Saldo para transferência">
    <br>
    <br>
    <input type="number" name="id_destino" id="id_destino" placeholder="Número da conta destino">
    <br>
    <br>
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