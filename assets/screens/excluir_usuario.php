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
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="main-bg">
  <section class="sec-form">
    <header>
      <div class="mt-5">
        <h1 class="titulo">Excluir usuário</h1>
      </div>
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
        <input class="rodape btn btn-primary mt-5" type="submit" value="Excluir" />
      </div>
    </form>
  </section>
</body>

</html>