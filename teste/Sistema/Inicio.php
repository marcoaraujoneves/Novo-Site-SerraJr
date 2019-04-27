<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Index.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/Inicio.css"/>

    <?php
        include "sidebar.php";
    ?>
    <main class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-4">
                    <img class="ImgLogoInicio" src="Img/logo.png">
                </div>
            </div>
        </div>
        
   </main>
    </body>
</html>