<?php include '../php/conecta_db.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$tipo_conta = filter_input(INPUT_GET, 'tipo_conta', FILTER_SANITIZE_STRING);
$result_usuario = "SELECT * FROM cadastro_usuario as u INNER JOIN conta as c ON (u.id_usuario = c.id_usuario) WHERE $id_usuario = u.id_usuario";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

// SELECT saldo_conta FROM `conta` WHERE tipo_conta = "Conta corrente" AND id_usuario = 1;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="../css/mainScreen.css" />

<head>
  <meta charset="UTF-8">
  <title>depósito</title>
</head>

<body>
  <h2>Bem vindo, <?php echo strtoupper($row_usuario['nome_usuario']); ?></h2>
  <span>Conta do tipo:
    <select id="select" name="tipo_conta" id="tipo_conta">
      <option value="0" selected>Informe o tipo da conta</option>
      <option value="1">Conta corrente</option>
      <option value="2">Conta Poupança</option>
      <option value="3">Conta Jurídica</option>
    </select>
  </span>

  <br>
  <span>Seu saldo é: <?php echo $row_usuario["saldo_conta"]; ?> R$</span>

</body>

</html>