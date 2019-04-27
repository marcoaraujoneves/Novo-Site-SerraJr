<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Girassol Sistema</title>
    <link rel="stylesheet" href="Css/bootstrap/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/sidebar.css">
 <style>
        body {background-color: : black;}
    </style>

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Girassol</a>
        
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="Img/logo.png"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name" style="text-align: center;"><?php echo htmlspecialchars($_SESSION["nome"]); ?></span>
          <span class="user-role" style="text-align: center;"><?php echo htmlspecialchars($_SESSION["cargo"]); ?></span>
        </div>
      </div>
      <!-- sidebar-header  -->

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li >
            <a href="Inicio.php">
              <i class="fa fa-certificate" aria-hidden="true"></i>
              <span>Inicio</span>
              
            </a>
          </li>
          <li >
            <a href="Slides.php">
              <i class="fa fa-map" aria-hidden="true"></i>
              <span>Slides</span>
              
            </a>
          </li>

          <li >
            <a href="Festa.php">
              <i class="fa fa-calendar"></i>
              <span>Festas</span>
              
            </a>
          </li>

          <li >
            <a href="Fotos.php">
              <i class="fa fa-book"></i>
              <span>Gerenciar</span>
              
            </a>
          </li>
          
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentação</span>
              
            </a>
          </li>
        
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="php/finalizaLogin.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->

<!-- page-wrapper -->
 
        <script src="sidebar.js"></script>
    
