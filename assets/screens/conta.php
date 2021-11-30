<?php include '../php/conecta_db.php'; ?>

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
        <h1 class="titulo">Cadastro da conta</h1>
      </div>
    </header>

    <form action="../php/criar_conta.php" id="formulario" name="formulario" class="form" method="POST">

      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario = $_GET["id_usuario"]; ?>" />


      <div class="tipo_conta adjust">
        <select name="tipo_conta" id="tipo_conta">
          <option value="0" selected>Informe o tipo da conta</option>
          <option value="1">Conta corrente</option>
          <option value="2">Conta Poupança</option>
          <option value="3">Conta Jurídica</option>
        </select>
      </div>

      <div class="submit">
        <input class="submitContent btn btn-primary" type="submit" value="Cadastrar" />
      </div>
    </form>
  </section>
</body>

</html>