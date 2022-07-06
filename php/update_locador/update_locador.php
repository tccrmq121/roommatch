<?php

include('../protect2.php');


require('../conexao.php');
$idloc = $_SESSION['id_locador'];

$query = 'SELECT id_locador, nome_completo, cpf, telefone, email, senha, data_nascimento, quant_pet, faculdade, trabalho FROM locadores WHERE id_locador = '.$idloc; 
$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_row($result);





?>





<!doctype html>
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <link rel="stylesheet" href="../../cs/global.css">
        


        <!--Scripts Jquery para máscaras-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


        <!-- Título da página (aparece na aba) -->
        <title>Cadastro-Locador</title>
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!-- <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="locador.html">Cadastro Locador</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="../../index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../feed/index-loc.php">Voltar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <body> 
        <div class="container contact-pop">
            <div class="row justify-content-center">
             
              <div class="col-md-10 pl-0" id="about">
                <div class="content">
                    <div> 

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div class="text-center">
            <!-- <h1 id="titulo">RoomMatch</h1> -->
            <img class="mw-100" src="img/lo.png" alt="logo">
            <p id="subtitulo">Cadastro Locador</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form id="form" action="uloc.php" method="POST">

        

        <input type="hidden" name="idloc" id="idloc" value="<?php echo $row[0]; ?>">

            <div class="row">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="col-md-6 mb-3">
                    <label for="nome"><strong>Nome Completo</strong></label>
                    <input type="text" name="nome" id="nome" class="form-control" maxlength=100 required placeholder="Digite Seu nome completo" value="<?php echo $row[1]; ?>">
                </div>
            
                <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                <div class="col-md-6 mb-3">
                    <label for="cpf"><strong>CPF</strong></label>
                    <input type="text" name="cpf" id="cpf" class="form-control" onkeypress="$(this).mask('000.000.000-00');" maxlength=14 required  placeholder="Digite Seu CPF" value="<?php echo $row[2]; ?>">
                </div>
            </div> 

            

            <!-- Campo de email com-->
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="telefone"><strong>Telefone</strong></label>
                <input type="text" name="telefone" id="telefone" class="form-control"  maxlength=15 onkeypress="$(this).mask('(00) 0000-00009')" required   placeholder="(xx) xxxxx-xxxx" value="<?php echo $row[3]; ?>">


            </div>

            <div class="col-md-6 mb-3">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email"  class="form-control"  maxlength=100 required  placeholder="Digite Seu e-mail" value="<?php echo $row[4]; ?>">
            </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password"><strong>Senha</strong></label>
                    <input type="password" name="password" id="password" class="form-control"  maxlength=12 required  placeholder="Digite Senha" value="<?php echo $row[5]; ?>">
                </div>
    
                <div class="col-md-6 mb-3">
                    <label for="password2"><strong>Confirmação Da Senha</strong></label>
                    <input type="password" name="password" id="password2" class="form-control"  maxlength=12 required  placeholder="Digite Novamente sua senha" value="<?php echo $row[5]; ?>">
                </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="date"><strong>Data de Nascimento</strong></label>
                    <input type="date" name="date" id="date" class="form-control" required  placeholder="Digite Sua Data de nascimento" value="<?php echo $row[6]; ?>">
                </div>
            
                
                    <div class="col-md-6 mb-3">
                        <label for="sexo"><strong>Sexo</strong></label>
                        <select id="sexo" name="sexo" class="form-control" required>
                          <option selected disabled value="">Selecione</option>
                          <option value="m" >Masculino</option>
                          <option  value="f">Feminino</option>
                          <option value="n" >Prefiro não responder</option>
                          
                        </select>
                    </div>
                    
                    </div>
        </div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="pet"><strong> Possui Pets?</strong></label>
                <select id="pet" name="pet" class="form-control" required>
                  <option selected disabled value="">Selecione</option>
                  <option value=0>Não</option>
                  <option value=1>Sim</option>
                  
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="qpet"><strong>Quantidade De Pets</strong></label>
                <input type="number" name="qpet" id="qpet"  class="form-control" min=0  placeholder="Quantidade de pets" value="<?php echo $row[7]; ?>">
            </div>
        </div>

            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="vegetariano"><strong>Vegetariano?</strong></label>
                    <select id="vegetariano" class="form-control"  name="vegetariano" required>
                      <option selected disabled value="">Selecione</option>
                      <option value=0>Não</option>
                      <option value=1>Sim</option>
                      
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="vegano"><strong> Vegano?</strong></label>
                    <select id="vegano" class="form-control"  name="vegano" required>
                      <option selected disabled value="">Selecione</option>
                      <option value=0>Não</option>
                      <option value=1>Sim</option>
                      
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cozinha"><strong>Sabe Cozinhar?</strong></label>
                    <select id="cozinha" class="form-control"  name="cozinha" required>
                      <option selected disabled value="">Selecione</option>
                      <option value=0>Não</option> class="form-control" 
                      <option value=1>Sim</option>
                      
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="faculdade"><strong>Faculdade/Estudos</strong></label>
                    <input type="text" name="faculdade" id="faculdade" class="form-control"  maxlength=100  placeholder="Instituição de ensino" value="<?php echo $row[8]; ?>">
                </div>
    
                <div class="col-md-6 mb-3">
                    <label for="trabalho"><strong>Onde Trabalha</strong></label>
                    <input type="text" name="trabalho" id="trabalho" class="form-control"  maxlength=100  placeholder="Digite Seu local de trabalho" value="<?php echo $row[9]; ?>" >
                </div>
                </div>

                

                
            
          

            <div class="row">
            <div class="col-md-4 mb-3">
                <label for="moto"><strong>Possui Moto?</strong></label>
                <select id="moto" class="form-control"  name="moto" >
                  <option selected disabled value="">Selecione</option>
                  <option value=0>Não</option>
                  <option value=1>Sim</option>
                  
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="carro"><strong>Possui Carro?</strong></label>
                <select id="carro" class="form-control"  name="carro" >
                  <option selected disabled value="">Selecione</option>
                  <option value=0>Não</option>
                  <option value=1>Sim</option>
                  
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="fumante"><strong>Fumante?</strong></label>
                <select id="fumante" class="form-control"  name="fumante" required>
                  <option selected disabled value="">Selecione</option>
                  <option value=0>Não</option>
                  <option value=1>Sim</option>
                  
                </select>
            </div>
            </div>


            

    <div class="row" id="botao">
        <div class="col-md-12 mb-6">
        <div>
            <button class="botao" type="submit" onclick="return valida()" id="bb">Atualizar</button>  
        </div>
        
    </div>
    </div>

    

    </form>

    <script src="validacao.js"></script>


   

        
    </body>
    <footer>
      
        <div>
        </footer>

    </div>
    </div>
            
    </div>
    </div>
    </div>
    </div>
</div>


    
</html>








