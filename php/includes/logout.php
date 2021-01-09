<?php
session_start();
session_destroy();
header('Location: http://localhost/projeto_moradav9/index.php');
exit();
?>