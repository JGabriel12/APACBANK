<?php

include '../php/conecta_db.php';
include '../php/cadastro_usuario.php';
/* $id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuario_cadastro WHERE id_usuario = $id_usuario";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>APACBANK</title>
  <link rel="stylesheet" href="../css/mainScreen.css" />
</head>

<body>
  <h1>Bem vindo ao APACBANK <?php $nome_usuario[$id_usuario] ?> </h1>

  <a href="conta.html">Criar conta</a>
</body>

</html>