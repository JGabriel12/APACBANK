<?php include '../php/conecta_db.php';
$id_usuario = $_GET["id_usuario"];
$consulta_usuarios_conta = "SELECT * FROM cadastro_usuario as u INNER JOIN conta as c ON (u.id_usuario = c.id_usuario) WHERE $id_usuario = u.id_usuario ";
$consulta_usuarios_conta_bd = $mysqli->query($consulta_usuarios_conta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Lista dos usuários com contas</title>
</head>
<header>
  <h1>Lista de usuários com contas</h1>
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

    <?php while ($dado = $consulta_usuarios_conta_bd->fetch_array()) { ?>
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
            <a href="editar_conta.php">Editar conta</a>
            <a href="excluir_conta.php">Excluir conta</a>
          </td>
          <td><a href="listagem_usuarios.php">Voltar</a></td>
      </form>
    <?php } ?>

  </table>
</body>

</html>