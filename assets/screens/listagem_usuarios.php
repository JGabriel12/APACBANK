<?php include '../php/conecta_db.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Lista dos usuários</title>
  <link rel="stylesheet" href="../css/links.css" />
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
      <td>CONTAS CRIADAS</td>
      <td>CRIAR CONTA</td>
      <td>USUÁRIO</td>
      <td>CONTA</td>
    </tr>

    <?php while ($dado = $consulta_usuarios_bd->fetch_array()) { ?>
      <form action="assets/screens/editar_user.php" method="POST">
        <tr>
          <td><input type="hidden" name="id_usuario" value="<?php echo $dado["id_usuario"] ?>"><?php echo $dado["id_usuario"] ?></td>
          <td><?php echo strtoupper($dado["nome_usuario"]) ?></td>
          <td><?php echo $dado["cpf_usuario"] ?></td>
          <td>
            <a href="usuarios_com_contas.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Contas</a>
          </td>
          <td>
            <a href="conta.php">Criar conta</a>
          </td>
          <td>
            <a href="editar_usuario.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Editar |</a>
            <a href="excluir_usuario.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Excluir </a>
          </td>
          <td>
            <a href="excluir_conta.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Desativar conta </a>
          </td>
      </form>
    <?php } ?>

  </table>
</body>

</html>