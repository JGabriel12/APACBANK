<?php
include 'conecta_db.php';
$id_usuario = $_POST["id_usuario"];                   // Meu id
$id_conta = $_POST["id_conta"];                       // Meu id da conta
$saldo_conta = $_POST["saldo_conta"];                 // Meu saldo atual
$tipo_conta = $_POST["tipo_conta"];                   // Meu tipo de conta atual
$saldo_transferencia = $_POST["saldo_transferencia"]; // Saldo da transferencia
$id_destino = $_POST["id_destino"];                   // Id da conta destino
$tipo_conta_destino = $_POST["tipo_conta_destino"];   // Tipo da conta destino
$hoje = date('Y/m/d');                                // Data atual

switch ($tipo_conta_destino) {
  case 1:
    $tipo_conta_destino = "Conta corrente";
    break;
  case 2:
    $tipo_conta_destino = "Conta poupança";
    break;
  case 3:
    $tipo_conta_destino = "Conta jurídica";
    break;
}




if (($id_destino == null) || ($saldo_transferencia <= 0) || ($tipo_conta_destino == 0)) {
  echo "<script>
  alert('Preencha todos os campos!');
  window.location.href='../screens/listagem_usuarios.php';  
  </script>";
}
if (($saldo_conta > 0) && ($saldo_conta >= $saldo_transferencia) && ($id_destino !== null) && ($tipo_conta_destino !== null)) {


  $query_select = "SELECT saldo_conta FROM conta as c INNER JOIN cadastro_usuario as u ON (c.id_usuario = 
    u.id_usuario) WHERE c.tipo_conta = '$tipo_conta_destino' AND c.id_usuario = $id_destino";

  $resultado_query = mysqli_query($conexao, $query_select);
  $resultado = mysqli_fetch_array($resultado_query);
  $saldo_conta_destino = $resultado['saldo_conta'];

  $saldo_conta -= $saldo_transferencia;
  $saldo_conta_destino += $saldo_transferencia;



  $query = "UPDATE conta SET saldo_conta = '$saldo_conta' WHERE id_usuario = '$id_usuario' AND tipo_conta = '$tipo_conta'";

  $query2 = "UPDATE conta SET saldo_conta = '$saldo_conta_destino' WHERE id_usuario = '$id_destino' AND tipo_conta = '$tipo_conta_destino'";

  $query3 = "INSERT INTO transacao (tipo_transacao, data_transacao, valor_transacao, id_conta_origem, id_conta_destino) VALUES ('Transferência', '$hoje', '$saldo_transferencia', '$id_conta', '$id_destino')";


  /* ---------------------------------------------------------------------------------------------------------- */

  $query_select_nome_destino = "SELECT * FROM conta as c INNER JOIN cadastro_usuario as u ON (c.id_usuario = 
    u.id_usuario) WHERE c.id_usuario = $id_destino";

  $resultado_query2 = mysqli_query($conexao, $query_select_nome_destino);
  $resultado2 = mysqli_fetch_array($resultado_query2);
  $user_destino = $resultado2['id_usuario'];


  if ($id_usuario ===  $user_destino) {

    if ($tipo_conta === $tipo_conta_destino) {
      echo "<script>
        alert('Erro!');
        window.location.href='../screens/listagem_usuarios.php';  
        </script>";
    }
  }

  /* ---------------------------------------------------------------------------------------------------------- */


  if (
    $conexao->query($query)
    && $conexao->query($query2) && $conexao->query($query3) === true
  ) {
    echo "<script>
      alert('Transação realizada com sucesso!');
      window.location.href='../screens/listagem_usuarios.php';
      </script>";
  } else {
    echo "Erro " . $query3 . "<br>" . $conexao->error;
  }
} else {
  echo "<script>
    alert('Falha ao transferir!');
    window.location.href='../screens/listagem_usuarios.php';  
    </script>";
}
