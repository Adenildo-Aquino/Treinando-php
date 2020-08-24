<?php
// Encerrando a Sessão
session_start();
session_unset();
session_destroy();
header('location: index.php');


?>