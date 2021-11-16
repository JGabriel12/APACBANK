<?php
include '../php/conecta_db.php';

$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);


$result_usuario = "UPDATE cadastro_usuario SET status_usuario = 0 WHERE id_usuario = '$id_usuario'";


if ($conexao->query($result_usuario) === true) {
  echo "<script>
alert('Usuario deletado com sucesso!');
window.location.href='../screens/listagem_usuarios.php';  
</script>";
} else {
  echo "Erro " . $result_usuario . "<br>" . $conexao->error;
}
