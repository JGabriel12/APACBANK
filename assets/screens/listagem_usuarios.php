<?php include '../php/conecta_db.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Lista dos usuários</title>
</head>
<header>
  <h1>Lista de usuários</h1>
</header>
<hr color="black" />

<body class="main-bg">
  <table class="tabela" border="1px" cellpadding="5px" cellspacing="0">
    <tr>
      <td>ID</td>
      <td>NOME</td>
      <td>CPF</td>
      <td>Contas</td>
      <td>Data de criação</td>
      <td>Criar conta</td>
      <td>EDITAR / EXCLUIR</td>
    </tr>

    <?php while ($dado = $conexao1->fetch_array()) { ?>
      <form action="editar.php" method="POST">
        <tr>
          <td><input type="hidden" name="id_usuario" value="<?php echo $dado["id_usuario"] ?>"><?php echo $dado["id_usuario"] ?></td>
          <td><?php echo strtoupper($dado["nome_usuario"]) ?></td>
          <td><?php echo $dado["cpf_usuario"] ?></td>
          <td><?php echo $dado["tipo_conta"] ?></td>
          <td><?php echo $dado["data_de_criacao"] ?></td>
          <td>
            <a href="conta.php">Criar conta</a>
          </td>
          <td>
            <a href="editar_user.php">Editar</a>
            <a href="excluir_user.php">Excluir</a>
          </td>
      </form>
    <?php } ?>

  </table>
</body>

</html>