<?php

//Login moradores

include('php/conexao.php');

if(isset($_POST['lemail']) || isset($_POST['lsenha'])) { //Coleta email e senha digitados

    $msg = "";
    

    if(strlen($_POST['lemail']) == 0) { //Confere se e-mail e senha não estão em branco
        $msg = "Preencha seu e-mail";
    } else if(strlen($_POST['lsenha']) == 0) {
        $msg = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['lemail']); //Cria uma variavel com o valor do email
        $senha = $mysqli->real_escape_string($_POST['lsenha']); //Cria uma variavel com o valor da senha

        $sql_code = "SELECT * FROM moradores WHERE email = '$email' AND senha = '$senha'"; //Seleciona email e senha no bd
        $sql_query = $mysqli->query($sql_code);

        
        //Confere se o email e a senha batem no banco de dados
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_morador'] = $usuario['id_morador'];
            $_SESSION['nome_completo'] = $usuario['nome_completo'];

            header("Location: feed/index.php");

        } else {
            $msg= "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

// Login locadores

if(isset($_POST['loemail']) || isset($_POST['losenha'])) { //Coleta email e senha digitados

    $msg = "";
    

    if(strlen($_POST['loemail']) == 0) { //Confere se e-mail e senha não estão em branco
        $msgl = "Preencha seu e-mail";
    } else if(strlen($_POST['losenha']) == 0) {
        $msgl = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['loemail']); //Cria uma variavel com o valor do email
        $senha = $mysqli->real_escape_string($_POST['losenha']); //Cria uma variavel com o valor da senha

        $sql_code = "SELECT * FROM locadores WHERE email = '$email' AND senha = '$senha'"; //Seleciona email e senha no bd
        $sql_query = $mysqli->query($sql_code);

        
        //Confere se o email e a senha batem no banco de dados
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_locador'] = $usuario['id_locador'];
            $_SESSION['nome_completo'] = $usuario['nome_completo'];

            header("Location: feed/index-loc.php");

        } else {
            $msgl= "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Roommatch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cs/global.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"

        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <header></header>
</head>
<body>



    
    <main>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Você que voltou a nosso site </p>
                <p class="description description-primary"> continue procurando seu novo lar!</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Cadastrar Locador</h2>
             
                <p class="description description-second">Vamos começar a encontrar alguém para dividir sua casa!</p>
              
                    
                    
                <a href="Locador/index.html"><button class="btn btn-second">Cadastrar</button></a>        
                </form> 
                <h2 class="title title-second">Cadastrar Morador</h2>
             
                <p class="description description-second">Vamos começar a encontrar o seu novo lar!</p>
                <a href="Formulario/index.html"><button class="btn btn-second">Cadastrar</button></a>   
            </div>
        </div>
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá Amigo!</h2>
                <p class="description description-primary">Insira seus dados pessoais e comece 

                 
                    </p>
                <p class="description description-primary">

                    sua jornada para encontrar seu novo lar!
                    </p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Morador cadastrado:</h2>
                <p><?php echo $msg; ?></p>

                <p class="description description-second">Acesse com seu E-mail!</p>
                <form class="form" action="" method="POST">
                
                    <label class="label-input" for="lemail">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="lemail" id="lemail" placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="lsenha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="lsenha" id="lsenha" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button type="submit" class="btn btn-second">Entrar</button>
                </form>
                <h2 class="title title-second" id="locad">Locador cadastrado:</h2>
                <p><?php echo $msgl; ?></p>
                
                
                <p class="description description-second">Acesse com seu E-mail!</p>
                <form class="form" action="" method="POST">
                
                    <label class="label-input" for="loemail">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="loemail" id="loemail"placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="losenha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="losenha" id="losenha" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button type="submit" class="btn btn-second">Entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="script.js"></script>
</main>




</body>

</html>