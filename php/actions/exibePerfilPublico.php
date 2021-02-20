<?php

include_once 'conexaodb.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM usuarios WHERE idusuario = '$id'";
$result = $conn->query($query);
$data = mysqli_fetch_assoc($result);

print_r($data['nome']);
