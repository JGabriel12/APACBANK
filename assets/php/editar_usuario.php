<?php
include '../php/conecta_db.php';

$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$nome_usuario = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$cpf_usuario = filter_input(INPUT_POST, 'cpf_usuario', FILTER_SANITIZE_NUMBER_INT);


$result_usuario = "UPDATE cadastro_usuario SET nome_usuario = '$nome_usuario', cpf_usuario = '$cpf_usuario' WHERE id_usuario = '$id_usuario'";

if ($conexao->query($result_usuario) === true) {
  echo "<script>
alert('Usuario atualizado com sucesso!');
window.location.href='../screens/listagem_usuarios.php';  
</script>";
} else {
  echo "Erro " . $result_usuario . "<br>" . $conexao->error;
}
