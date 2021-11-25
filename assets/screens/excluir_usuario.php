<?php
include '../php/conecta_db.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastro_usuario WHERE id_usuario = $id_usuario";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>APACBANK</title>
  <link rel="stylesheet" href="../css/mainScreen.css" />
  <link rel="stylesheet" href="../css/listagemConta.css" />
</head>

<body class="main-bg">
  <section class="sec-form">
    <header>
      <h1 class="titulo">Excluir usuário</h1>
    </header>
    <form action="../php/excluir_usuario.php" id="formulario" name="formulario" class="form" method="POST">
      <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $row_usuario['id_usuario']; ?>" />
      <div class="nome">
        <label for="nome_usuario">Nome</label>
        <input class="inputContent" type="text" placeholder="Informe seu nome" name="nome_usuario" id="nome_usuario" value="<?php echo $row_usuario['nome_usuario']; ?>" />
      </div>
      <div class="cpf">
        <label for="cpf_usuario">CPF</label>
        <input class="inputContent" type="number" placeholder="Informe seu CPF" name="cpf_usuario" id="cpf_usuario" maxlength="11" value="<?php echo $row_usuario['cpf_usuario']; ?>" />
      </div>
      <div class="submit">
        <input class="rodape" type="submit" value="Excluir" />
      </div>
    </form>
  </section>
</body>

</html>