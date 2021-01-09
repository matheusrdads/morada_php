<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "projeto_morada";

// Criando a conexão 
$conn = mysqli_connect($servername, $username, $password, $database);

$conn->set_charset("utf8");

// Verificando a conexão
if (!$conn) {
    die("A conexão do BD falhou" . mysqli_connect_error());
    echo mysqli_connect_error();
}
?>
