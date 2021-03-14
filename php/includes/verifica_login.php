<?php

    session_start();
    
    if(!$_SESSION['email']) {
	

    echo ("<script>
        window.alert('efetue o login para acessar este conteúdo!')
        window.location.href='login.php';
    </script>");


    // header('Location: login.php');
    // exit();
    }
