<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "apacbank";

$conexao = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conexao, 'utf8');



// Conexão do banco de dados
/* $mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno)
  echo "Falha na conecção"; */
