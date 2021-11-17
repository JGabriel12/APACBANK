<?php include '../php/conecta_db.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastro_usuario as u INNER JOIN conta as c ON (u.id_usuario = c.id_usuario) WHERE $id_usuario = u.id_usuario";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>depósito</title>
</head>

<body>
  <h1>Olá, <?php echo strtoupper($row_usuario['nome_usuario']); ?></h1>
  <span>Seu saldo é: </span> <?php echo $row_usuario['saldo_conta']; ?>
</body>

</html>