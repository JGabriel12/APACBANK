<?php include '../php/conecta_db.php';
$id_usuario = $_GET["id_usuario"];
$consulta_usuarios_conta = "SELECT * FROM cadastro_usuario as u INNER JOIN conta as c ON (u.id_usuario = c.id_usuario) WHERE $id_usuario = u.id_usuario AND c.status_conta = 1 ";
$consulta_usuarios_conta_bd = $mysqli->query($consulta_usuarios_conta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Lista dos usuários com contas</title>
  <link rel="stylesheet" href="../css/links.css">
  <link rel="stylesheet" href="../css/listagemConta.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<header>
  <h1>Contas criadas</h1>
</header>

<body class="main-bg">
  <table class="tabela" border="1px" cellpadding="5px" cellspacing="0">
    <tr>
      <td>ID</td>
      <td>NOME</td>
      <td>CPF</td>
      <td>Contas</td>
      <td>Saldo</td>
      <td>DEPÓSITO</td>
      <td>SAQUE</td>
      <td>TRANSFERÊNCIA</td>
      <td>Data de criação</td>
      <td>CONTA</td>
    </tr>

    <?php while ($dado = $consulta_usuarios_conta_bd->fetch_array()) { ?>
      <form action="../screens/deposito.php" method="POST">
        <tr>
          <td><input type="hidden" name="id_usuario" value="<?php echo $dado["id_usuario"] ?>"><?php echo $dado["id_usuario"] ?></td>
          <td><?php echo strtoupper($dado["nome_usuario"]) ?></td>
          <td><?php echo $dado["cpf_usuario"] ?></td>
          <td><?php echo $dado["tipo_conta"] ?></td>
          <td><?php echo $dado["saldo_conta"] ?>R$</td>
          <td>
            <a class="btn btn-primary" href="deposito.php?id_usuario=<?php echo $dado["id_usuario"] ?>&tipo_conta=<?php echo $dado["tipo_conta"] ?>&saldo_conta=<?php echo $dado["saldo_conta"] ?>&id_conta=<?php echo $dado["id_conta"] ?>">Depósitar</a>
          </td>
          <td>
            <a class="btn btn-primary" href="../screens/saque.php?id_usuario=<?php echo $dado["id_usuario"] ?>&tipo_conta=<?php echo $dado["tipo_conta"] ?>&saldo_conta=<?php echo $dado["saldo_conta"] ?>&id_conta=<?php echo $dado["id_conta"] ?>">Sacar</a>
          </td>
          <td>
            <a class="btn btn-primary" href="../screens/transferencia.php?id_usuario=<?php echo $dado["id_usuario"] ?>&tipo_conta=<?php echo $dado["tipo_conta"] ?>&saldo_conta=<?php echo $dado["saldo_conta"] ?>&id_conta=<?php echo $dado["id_conta"] ?>">Transferir</a>
          </td>
          <td><?php echo $dado["data_de_criacao"] ?></td>
          <td><a class="btn btn-danger" href="../php/excluir_conta.php?id_usuario=<?php echo $dado["id_usuario"] ?>&tipo_conta=<?php echo $dado["tipo_conta"] ?>&saldo_conta=<?php echo $dado["saldo_conta"] ?>&id_conta=<?php echo $dado["id_conta"] ?> ">Desativar</a></td>
          <td><a class="btn btn-primary" href="listagem_usuarios.php">Voltar</a></td>
      </form>
    <?php } ?>

  </table>
</body>

</html>