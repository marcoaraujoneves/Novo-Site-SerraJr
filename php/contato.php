<?php

    $emailSender = "marcoaraujo@serrajr.eng.br";//"atendimento@serrajr.eng.br";
    $emailDestinatario = "marcoaraujoneves@gmail.com";//"comercial@serrajr.eng.br";

    $nomeRemetente = $_POST['nome'];
    $emailRemetente = $_POST['email'];
    $telRemetente = $_POST['numero'];
    $msgRemetente = $_POST['msg'];

    $msgHTML = '<html><body> <h2 style="color:#EE3B24;"> Mensagem recebida através do Site </h2>
                <table rules="all" style="border-color: #666;" cellpadding="10">
                <tr style="background: #eee;"><td><strong>Nome:</strong> </td><td> '.$nomeRemetente.' </td></tr>
                <tr style="background: #eee;"><td><strong> E-mail: </strong> </td><td>'.$emailRemetente.' </td></tr>
                <tr style="background: #eee;"><td><strong> Telefone: </strong> </td><td>'.$telRemetente.'  </td></tr>
                <tr style="background: #eee;"><td><strong> <i> Mensagem: </strong> </td><td>'.$msgRemetente.' </i></td></tr>
                </table>
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