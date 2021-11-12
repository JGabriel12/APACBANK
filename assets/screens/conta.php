<?php include '../php/conecta_db.php'; ?>
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
      <h1 class="titulo">Cadastro da conta</h1>
    </header>

    <form action="../php/criar_conta.php" id="formulario" name="formulario" class="form" method="POST">
      <div class="data_conta">
        <label for="data_de_criacao">Data atual</label>
        <input class="inputContent" type="date" placeholder="Ano/Mês/Dia" name="data_de_criacao" id="data_de_criacao" />
      </div>
      <div class="tipo_conta">
        <?php while ($dado = $conexao2->fetch_array()) { ?>
          <td><input type="hidden" name="id_usuario" value="<?php echo $dado["id_usuario"] ?>"></td>
        <?php }
        ?>
        <select name="tipo_conta" id="tipo_conta">
          <option value="0" selected>Informe o tipo da conta</option>
          <option value="1">Conta corrente</option>
          <option value="2">Conta Poupança</option>
          <option value="3">Conta Jurídica</option>
        </select>
      </div>

      <div class="submit">
        <input class="submitContent" type="submit" value="Cadastrar" />
      </div>
    </form>
  </section>
</body>

</html>