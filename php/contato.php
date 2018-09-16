<?php

    $emailSender = "marcoaraujo@serrajr.eng.br";//"atendimento@serrajr.eng.br";
    $emailDestinatario = "marcoaraujoneves@gmail.com";//"comercial@serrajr.eng.br";

    $nomeRemetente = $_POST['nome'];
    $emailRemetente = $_POST['email'];
    $telRemetente = $_POST['numero'];
    $msgRemetente = $_POST['msg'];

    $msgHTML = '<html><body>
                <p> Mensagem recebida através do Site </p>
                <h3> Nome: '.$nomeRemetente.' </h3>
                <h3> E-mail: '.$emailRemetente.'  </h3>
                <h3> Telefone: '.$telRemetente.'  </h3>
                <p><i> Mensagem: '.$msgRemetente.' </i></p>
                <hr></body></html>';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From: ".$emailSender."\r\n";
    $headers .= "Return-Path: ".$emailSender."\r\n";
    $headers .= "Reply-To: ".$emailRemetente."\r\n";

    $envio = mail($emailDestinatario, "Contato Site da SerraJr", $msgHTML, $headers,$emailSender);
    
    if($envio)
        echo "Mensagem enviada com sucesso";
    else
        echo "A mensagem não pode ser enviada";
?>