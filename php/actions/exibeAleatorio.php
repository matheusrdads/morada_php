<?php
    include('./php/actions/conexaodb.php');

    $query = "SELECT * FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario  ORDER BY rand() LIMIT 12;";

    // $query = "SELECT * FROM contato  ORDER BY rand() LIMIT 12;";
    $result = mysqli_query($conn, $query);