<?php
session_start();

require_once "conexaodb.php";

$id = $_SESSION['idusuario'];

if (isset($_POST['estrela'])) {
  $estrela = $_POST['estrela'];

  $result_avaliacoes = " UPDATE  servicos SET estrela = '$estrela'   WHERE usuario = '$id' ";

  $resultado_avaliacoes = mysqli_query($conn, $result_avaliacoes);
  if (mysqli_insert_id($conn)) {
    header("Location: ./php/actions/perfilpublico.php");
  }
}
