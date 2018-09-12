<?php 

/*function getPagina(){
	$url = $_SERVER['REQUEST_URI'];
	$metodo = $_SERVER['REQUEST_METHOD'];

	if($metodo == "GET"){
		switch($url){
			case "/":
				include("Paginas/home.php");
				break;
			case "/home":
				include("Paginas/home.php");
				break;
			case "/blog":
				include("Paginas/blogHome.php");
				break;
			case "/computacao":
				include("Paginas/computacao.php");
                break;
            case "/mecanica":
				include("Paginas/mecanica.php");
				break;
			case "/contato":
				include("Paginas/home.php");
				break;
			default:			
				include("Paginas/home.php");
				break;
		}
	}
}