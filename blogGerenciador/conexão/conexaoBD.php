<?php
    $banco = 'serrajr';
    $usuario = 'root';
    $senha = '';
    try
    {
        $conexao = new PDO('mysql:host=localhost;dbname=serrajr',$usuario,$senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $e)
    {
        echo 'Erro: '.$e->getMessage(); 
    }
?>