<?php
// abrindo o aquivo 
$arquivo = fopen('arquivo.hd', 'a');

//tratando o texto caso o usuario digitar # vai aparecer - 
$titulo = str_replace('#', '-' , $_POST['titulo']);
$categoria = str_replace('#', '-' , $_POST['categoria']);
$descricao = str_replace('#', '-' , $_POST['descricao']);

//pegando o texto em uma variavel 
$texto = $titulo .' # '. $categoria .' # '. $descricao . PHP_EOL;

// referencia do arquivo $arquivo e o texto $texto 
// escrevendo o texto 
fwrite($arquivo , $texto);

// fechando o arquivo 
fclose($arquivo);
header('location: abrir_chamado.php');
?>