<?php

    session_start();
    
    if(!$_SESSION['email']) {
	header('Location: http://localhost/projeto_moradav9/index.php');
    exit();
    }
?>