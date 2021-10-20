<?php
session_start();
// remover indices do array de sessao
// unset()
//unset($_SESSION['x']);



// destuir a variavel de sessão 
 session_destroy();
 header('Location: index.php');

?>