<?php include '../php/conecta_db.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
/* $tipo_conta = filter_input(INPUT_GET, 'tipo_conta', FILTER_SANITIZE_STRING); */
$result_usuario = "SELECT * FROM conta as c JOIN cadastro_usuario as u ON (c.id_usuario = u.id_usuario) AND c.id_usuario = $id_usuario ";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_array($resultado_usuario);

foreach ($row_usuario as $row) {
  echo $row['saldo_conta'];
  echo "<hr>";
}

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
  <span>Seu saldo é: <?php
                      foreach ($row_usuario as $row) {
                      }
                      ?> R$</span>

</body>

</html>