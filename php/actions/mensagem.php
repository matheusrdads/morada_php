<?php
// session_start();
require_once "conexaodb.php";
require_once "../includes/verifica_login.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isset($_POST['mensagem']) && ($_POST['categoria'])) {
  $mensagem= $_POST['mensagem'];
  $categoria= $_POST['categoria'];
  $parceiro= $_SESSION['nome'];

  $sql = "INSERT INTO `servicos`( `usuario`, `categoria`, `mensagem`, `parceiro` ) VALUES ( '$id', '$categoria', '$mensagem', '$parceiro' )";
  $resultado = $conn->query($sql);

  if ($resultado) {
      header("Location: ../../perfil.php");
  } else {
      echo "<script>alert('Houve um erro ao salvar...');</script>";
  }
};

// echo "recebido $id";