<?php

include('./php/actions/conexaodb.php');

$id = $_SESSION['idusuario'];

$query = "SELECT * FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario WHERE idusuario = $id ; ";
// $query = "SELECT * FROM servicos WHERE idusuario = $id; ";

$result = mysqli_query($conn, $query);





if ($result->num_rows > 0) {

  while ($rows = $result->fetch_assoc()) {

    $idservicos = $rows['idservicos'];
  }
}

$row = mysqli_num_rows($result);

if ($row == 1) {
  $_SESSION['idservicos'] = $idservicos;
}
