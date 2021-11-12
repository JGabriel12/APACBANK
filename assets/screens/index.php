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
      <h1 class="titulo">Cadastro do usuário</h1>
    </header>
    <form action="../php/cadastro_usuario.php" id="formulario" name="formulario" class="form" method="POST">
      <div class="nome">
        <label for="nome_usuario">Nome</label>
        <input class="inputContent" type="text" placeholder="Informe seu nome" name="nome_usuario" id="nome_usuario" />
      </div>
      <div class="cpf">
        <label for="cpf_usuario">CPF</label>
        <input class="inputContent" type="number" placeholder="Informe seu CPF" name="cpf_usuario" id="cpf_usuario" maxlength="11" />
      </div>
      <div class="senha">
        <label for="senha_usuario">Senha</label>
        <input class="inputContent senhas" type="password" placeholder="Sua senha" name="senha_usuario" id="senha_usuario" />
        <input class="inputContent senhas" type="password" placeholder="Confirme sua senha" name="confirmaSenha_usuario" id="confirmaSenha_usuario" />
      </div>
      <div class="submit">
        <input class="submitContent" type="submit" value="Cadastrar" />
      </div>
    </form>
  </section>
</body>

</html>