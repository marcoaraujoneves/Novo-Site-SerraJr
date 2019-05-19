<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estiloPrincipal.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/blogpagina.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <title>Ricardo milos </title>
    <script type="text/javascript" src="../js/dynamic-form.js"></script>
    <style>
        body{
        width:960px;
        margin:45px auto;
        background-color:#f9ebe8
        }
        img{
            max-width:19px;
            margin-left: 15px ;
            position: relative ;
        }
        form{
        width:330px;
        border-top:1px dotted #D9D9D9;
        margin:10px 180px
        }
        button{
        width:246px;
        height:40px;
        color:#4C4C4C;
        margin-bottom:20px;
        margin-left:20px
        }
        input{
        width:280px;
        height:40px;
        padding:5px;
        margin:20px 0 10px;
        border-radius:5px;
        border:4px solid #acbfa5
        }
        input[type = submit]{
        width:100px;
        background-color:#35c8ef;
        border-radius:5px;
        border:2px solid blue;
        color:#fff
        }
        textarea{
        width:280px;
        height:70px;
        padding:1px;
        margin:20px 0 10px;
        border-radius:5px;
        border:4px solid #acbfa5
        }
        .four p{
        text-align:center;
        color:#fff;
        padding:15px 0
        }
        .first p{
        padding:15px;
        color:#fff
        }
        .two{
        background-color:#fff;
        width:290px;
        float:left;
        height:600px
        }
        .main_content{
        width:960px;
        height:auto;
        background-color:#fff
        }
        .two h4{
        color:#4C4C4C;
        text-align:center
        }
        .three{
        text-align:center;
        width:660px;
        border-left:1px solid #D0D0D0;
        float:left;
        background-color:#fff
        }
        .four,.first{
        width:960px;
        clear:both;
        background-color:#41A2CD;
        height:55px
        }
    </style>
</head>
<body>
    <div class="main_content">
    <!--
    ========================================================================================
    Cabeçalho Div.
    ========================================================================================
    -->
    <div class="first">
    </div>
    <!--
    ======================================================================================
   Este Div é para os botões. Quando o usuário clicar nos botões, o respectivo campo aparecerá.
    =======================================================================================
    -->
    <div class="two">
    <h4>Campos para Adicionar</h4>
    <button onclick="nameFunction()">Título</button>
    <button onclick="emailFunction()">Subtítulo</button>
    <button onclick="contactFunction()">Texto</button>
    <button onclick="textareaFunction()">Imagem</button>
    <button onclick="resetElements()">Apagar tudo</button>
    </div>
    <!--
    ========================================================================================
    Este Div destina-se a exibir a forma final
    ========================================================================================
    -->
    <div class="three">
    <h2> Ordem na página </h2>
    <form action="#" id="mainform" method="get" name="mainform">
    <span id="myForm"></span>
    <p></p><input type="submit" value="Pronto!">
    </form>
    </div>
    <!--
    ========================================================================================
    Rodapé Div.
    ========================================================================================
    -->
    <div class="four">
    </div>
    </div>
</body>

</html>