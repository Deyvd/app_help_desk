<?php 
session_start();


$titulo = str_replace('#', '-', $_POST['titulo']  );
$categoria = str_replace('#', '-', $_POST['categoria']  );
$descricao = str_replace('#', '-', $_POST['descricao']  );


$texto = $_SESSION['id'] .'#'. $_POST['titulo'] .'#'. $_POST['categoria'] . '#'. $_POST['descricao'] . PHP_EOL;

//abrindo o arquivo
$arquivo =  fopen('arquivo.hd', 'a');
echo $arquivo; 
//escrevendo o arquivo
fwrite($arquivo, $texto );
//fechando o arquivo
fclose($arquivo);

header('location: abrir_chamado.php')
?>