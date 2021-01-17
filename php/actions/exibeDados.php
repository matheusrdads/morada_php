<?php

include('./php/actions/conexaodb.php');
    $email = $_SESSION['email'];
    
    $query = "SELECT * FROM usuarios WHERE email = '$email';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);