<?php
    session_start();
    require_once 'conexaodb.php';


    if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location:../../index.php');
    
	exit();
}
 
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
 
$query = "select * from usuario where email = '{$email}' and senha = '{$senha}' ";
 
$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION = $result->fetch_assoc();
	header('Location: http://localhost/projeto_moradav9/perfil.php');
	exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    
    echo "<script>alert('Houve um erro ao salvar...');</script>";

    header('Location:../../index.php');
    
	exit();
}

?>