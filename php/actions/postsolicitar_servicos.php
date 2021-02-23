<?php
session_start();

require_once "conexaodb.php";
require "exibeDados.php";


$id = $data['idusuario'];

if( !empty($_POST['descricao'])  && !empty($_POST['categoria']) ) {

        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];
        
        
        $sql = "INSERT INTO `servicos`( `usuario`, `tipo`, `categoria`, `descricao` ) VALUES ( '$id', 'solicitando', '$categoria', '$descricao' )";
        $resultado = $conn->query($sql);


        header("Location: ../../perfil.php");

    
    } else if( empty($_POST['descricao'])) {

        echo ("<script>
        window.alert('É necessário uma mensagem!')
        window.location.href='../../perfil.php';
    </script>");
        
    } 