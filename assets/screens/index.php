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
        <h1 class="titulo">Cadastro do usuário</h1>
      </div>
    </header>
    <form action="../php/cadastro_usuario.php" id="formulario" name="formulario" class="form mt-5 " method="POST">
      <div class="nome">
        <label for="nome_usuario">Nome</label>
        <input class="inputContent" type="text" placeholder="Informe seu nome" name="nome_usuario" id="nome_usuario" />
      </div>
      <div class="cpf adjust">
        <label for="cpf_usuario">CPF</label>
        <input class="inputContent inputCpf" type="number" placeholder="Informe seu CPF" name="cpf_usuario" id="cpf_usuario" maxlength="11" />
      </div>
      <div class="senha adjust">
        <label class="form-label" for="senha_usuario">Senha</label>
        <input class="inputContent senhas" type="password" placeholder="Sua senha" name="senha_usuario" id="senha_usuario" />
        <input class="inputContent senhas" type="password" placeholder="Confirme sua senha" name="confirmaSenha_usuario" id="confirmaSenha_usuario" />

      </div>

      <div class="submit">
        <input class="submitContent btn btn-primary" type="submit" value="Cadastrar" />
      </div>
    </form>
  </section>
</body>

</html>