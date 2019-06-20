<?php
    if(! empty($_POST['action'])){
        $result = '';
        switch($_POST['action']){
            case 'NOVA_POSTAGEM':
                include('classe_postagem.php');
                $novaPostagem = new Postagem();
                $novaPostagem->setIdPostagem($_POST['idPostagem']);
                $novaPostagem->create();
                $result = $_POST['action'];
                echo json_encode($result);
                break;
            case 'LISTA_POSTAGENS':
                include('classe_postagem.php');
                $novaPostagem = new Postagem(); 
                echo $novaPostagem->listaJson();
                break;
            case 'DELETA_POSTAGEM':
                include('../model/Postagem.php');
                $novaPostagem = new Postagem(); 
                $novaPostagem->setIdPostagem($_POST['idPostagem']);
                $novaPostagem->delete();
                $return = $_POST['idPostagem'];
                echo json_encode($result);
                break;
        }
    }
    else{        
        echo 'Não existe ação';
        alert("Postagem Deletada");

    }
?>