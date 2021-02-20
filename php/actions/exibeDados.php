
<?php
require_once "conexaodb.php";
// include('./php/actions/conexaodb.php');

$id = $_SESSION['idusuario'];

// $query = "SELECT * FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario WHERE idusuario = $id ; ";

$query ="SELECT * FROM usuarios WHERE idusuario = $id;";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
