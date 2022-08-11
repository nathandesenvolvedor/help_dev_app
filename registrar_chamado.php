<?php 

session_start();

/* //print_r($_POST);
//O primeiro parametro fopen vai criar um arquivo 'arquivo.text' e deixar os registros dos chamados. E o segundo parametro vai adicionar um mode (No site do php há alguns modes fopen)
$text = 'Título: ' . $_POST['titulo'] . ' Categoria: ' .  $_POST['categoria'] . ' Descrição: ' . $_POST['descricao']. PHP_EOL;

$arquivo = fopen('arquivo.app', 'a');

//Escrita no arquivo direcionado no fopen com o texto
fwrite($arquivo, $text);
fclose($arquivo);

header('Location: msg_abrir_chamado.php'); */

    //Montando o texto
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);
    //implode('#',$_POST);

    $text = $_SESSION['id'].' # ' . $titulo.' # '.$categoria.' # '.$descricao.PHP_EOL;
    
    //http://php.net/manual/pt_BR/function.fopen.php
    //Abrindo o arquivo
    $arquivo = fopen('arquivo.app','a');

    //Escrevendo texto no arquivo
    fwrite($arquivo,$text);

    //Fechando o arquivo
    fclose($arquivo);

    //echo $texto;
    header('Location: msg_abrir_chamado.php')

?>