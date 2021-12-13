<?php include '../php/conecta_db.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Lista dos usuários</title>
  <link rel="stylesheet" href="../css/links2.css" />
  <link rel="stylesheet" href="../css/listagemConta2.css" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<header>
  <h1>Lista de usuários</h1>
</header>

<body class="main-bg">
  <table class="table table-responsive" border="1px" cellpadding="5px" cellspacing="0">
    <thead class="thead">
      <tr>
        <td class="table-itens">ID</td>
        <td class="table-itens">NOME</td>
        <td class="table-itens">CPF</td>
        <td class="table-itens">CONTAS CRIADAS</td>
        <td class="table-itens">CRIAR CONTA</td>
        <td class="table-itens">USUÁRIO</td>
      </tr>
    </thead>

    <?php while ($dado = $consulta_usuarios_bd->fetch_array()) { ?>
      <form action="assets/screens/editar_user.php" method="POST">
        <tbody class="tbody">
          <tr>
            <td><input type="hidden" name="id_usuario" value="<?php echo $dado["id_usuario"] ?>"><?php echo $dado["id_usuario"] ?></td>
            <td class="table-itens"><?php echo strtoupper($dado["nome_usuario"]) ?></td>
            <td class="table-itens"><?php echo $dado["cpf_usuario"] ?></td>
            <td>
              <a class="btn btn-primary margin" href="usuarios_com_contas.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Contas</a>
            </td>
            <td>
              <a class="btn btn-primary" href="conta.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Criar conta</a>
            </td>
            <td>
              <a class="btn btn-primary" href="editar_usuario.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Editar</a>
              <a class="btn btn-danger" href="excluir_usuario.php?id_usuario=<?php echo $dado["id_usuario"] ?>">Excluir </a>
            </td>
          </tr>
        </tbody>
      </form>
    <?php } ?>
  </table>
</body>

</html>