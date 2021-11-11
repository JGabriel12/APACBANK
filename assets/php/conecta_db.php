<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "apacbank";

$conexao = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conexao, 'utf8');

// Conexão do banco de dados
$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno)
  echo "Falha na conecção";

// Selec dos usuarios cadastrados
$consulta = "SELECT * FROM cadastro_usuario as u INNER JOIN conta as c on (u.id_usuario = c.id_usuario) WHERE status_usuario = 1";

$conexao1 = $mysqli->query($consulta) or die($mysqli->error);
