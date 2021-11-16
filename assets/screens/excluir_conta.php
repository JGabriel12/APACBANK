<?php
include '../php/conecta_db.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$result_conta = "SELECT * FROM conta WHERE id_usuario = $id_usuario";
$resultado_conta = mysqli_query($conexao, $result_conta);
$row_conta = mysqli_fetch_assoc($resultado_conta);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>APACBANK</title>
  <link rel="stylesheet" href="../css/mainScreen.css" />
</head>

<body class="main-bg">
  <section class="sec-form">
    <header>
      <h1 class="titulo">Excluir conta</h1>
    </header>
    <form action="../php/excluir_conta.php" id="formulario" name="formulario" class="form" method="POST">
      <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $row_conta['id_usuario']; ?>" />

      <div class="data">
        <label for="data_de_criacao">Data de criação da conta:</label>
        <input class="inputContent" type="number" name="data_de_criacao" id="data_de_criacao" maxlength="11" value="<?php echo $row_conta['data_de_criacao']; ?>" />
      </div>

      <div class="submit">
        <input class="submitContent" type="submit" value="Excluir" />
      </div>
    </form>
  </section>
</body>

</html>