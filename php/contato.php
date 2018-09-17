<?php

    $emailSender = "marcoaraujo@serrajr.eng.br";//"atendimento@serrajr.eng.br";
    $emailDestinatario = "marcoaraujoneves@gmail.com";//"comercial@serrajr.eng.br";

    $nomeRemetente = $_POST['nome'];
    $emailRemetente = $_POST['email'];
    $telRemetente = $_POST['numero'];
    $msgRemetente = $_POST['msg'];

    $msgHTML = '<html><body style="font-family:"Verdana",sans-serif;"> <h2 style="color:#EE3B24;"> Mensagem recebida através do Site </h2>
                <table rules="all" style="border-color: #EE3B24;" cellpadding="10">
                <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong>Nome:</strong> </td><td> '.$nomeRemetente.' </td></tr>
                <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> E-mail: </strong> </td><td>'.$emailRemetente.' </td></tr>
                <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> Telefone: </strong> </td><td>'.$telRemetente.'  </td></tr>
                <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> Mensagem: </strong> </td><td><i> '.$msgRemetente.' </i></td></tr>
                </table>
                </body></html>';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From: ".$emailSender."\r\n";
    $headers .= "Return-Path: ".$emailSender."\r\n";
    $headers .= "Reply-To: ".$emailRemetente."\r\n";

    $envio = mail($emailDestinatario, "Contato Site da SerraJr", $msgHTML, $headers,$emailSender);
    
    if($envio)
        include('../msgEnviada.html');
    else
        include('../msgEnviada.html');
?>