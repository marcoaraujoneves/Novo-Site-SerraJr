<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Inicio.php");
    exit;
}

// Include config file
require_once __DIR__.'/connect.php';

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{

        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){

        // Prepare a select statement
        $sql = "SELECT codUsuario,login,nome,cargo,senha FROM usuario WHERE login=?";
        
        //"SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $usuario = $username;
            $stmt->bind_param("s", $usuario);
            
            // Set parameters
            
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){

                    // Bind result variables
                    $stmt->bind_result($codUsuario, $login, $nome, $cargo, $senha);
                    if($stmt->fetch()){
                        $password = md5($password);
                        if($password == $senha){
                            echo "batata";
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["codUsuario"] = $codUsuario;
                            $_SESSION["login"] = $login;  
                            $_SESSION["cargo"] = $cargo; 
                            $_SESSION["nome"] = $nome;                            
                            
                            // Redirect user to welcome page
                            header("location: Inicio.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $conn->close();
}
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="stylesheet" href="Css/Sistema.css">
    <link rel="stylesheet" href="Css/main.css">
    <link rel="stylesheet" href="Css/bootstrap/css/bootstrap.min.css">

    <title> Sistema de Gerenciamento | Girassol </title>
    <style>
        body {background-image: url("Img/madeira1.png");background-repeat: no-repeat;background-size: cover;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-auto mx-auto">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <img src="Img/logo.png" class="img-responsive" style="width:80%;margin-top:10%;margin-left:10%"><br>
                    <?= isset($_GET['erro']) ? '<span style="color:red;"> Usuário e/ou senha incorreto(s) </span> ' : "";?>
                    <br>
                    <label for="login" class="txtForm"> Login </label>
                    <input type="text" id="username" name="username" class="inpForm" required autocomplete="off"><br>

                    <label for="senha" class="txtForm"> Senha </label>
                    <input type="password" id="password" name="password" class="inpForm" required  autocomplete="off">
                    <br><br>
                    <input type="submit" class="btnForm" value="Entrar">
                </form>
            </div>
        </div>
    </div>

</body>
</html>