<?php
session_start();
// remover indices do array de sessao
// unset()
//unset($_SESSION['x']);

echo '<pre>';
 print_r($_SESSION['x']);
echo '<pre />'

// destuir a variavel de sessão 
// sesion_destroy

?>