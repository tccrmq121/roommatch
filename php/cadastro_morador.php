<?php
 require("conexao.php");


$nome_completo = $_POST["nome"];
$telefone = $_POST["telefone"];    
$cpf = $_POST["cpf"];
$senha = $_POST["password"];
$data_nascimento  = $_POST["date"];
$sexo = $_POST["sexo"];
$fumante =  $_POST["fumante"];
$pet = $_POST["pet"];
$quant_pet = $_POST["qpets"];
$vegano = $_POST["vegano"];
$vegetariano  = $_POST["vegetariano"];
$faculdade = $_POST["faculdade"];
$trabalho = $_POST["trabalho"];
$tem_carro = $_POST["carro"];
$tem_vel = $_POST["moto"];
$cozinha = $_POST["cozinhar"];
$email = $_POST["email"];

/*
echo "<p> Nome: $nome_completo</p>";
echo "<p> Telefone: $telefone</p>";
echo "<p>CPF: $cpf</p>";
echo "<p>Senha: $senha</p>";
echo  "<p>Data de nascimento:  ($data_nascimento)</p>";
echo  "<p>Sexo:  $sexo</p>";
echo  "<p>É fumante?:  ($fumante)</p>";
echo  "<p>Tem pet?:  ($pet)</p>";
echo  "<p>Quantos pets?:  ($quant_pet)</p>";
echo  "<p>É vegano?:  ($vegano)</p>";
echo  "<p>É vegetariano?:  ($vegetariano)</p>";
echo  "<p>Onde  estuda?:  ($faculdade)</p>";
echo  "<p>Onde trabalha?:  ($trabalho)</p>";
echo  "<p>Tem carro?:  ($tem_carro)</p>";
echo  "<p>Tem moto?:  ($tem_vel)</p>";
echo  "<p>Sabe cozinhar?  ($cozinha)</p>";
echo  "<p>e-mail:  ($email)</p>";*/




$stmt = mysqli_prepare($mysqli, "INSERT INTO moradores (nome_completo, cpf, telefone, email, senha, data_nascimento, sexo, fumante, pet, quant_pet, vegano, vegetariano, faculdade, trabalho, tem_carro, tem_vel, cozinha) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

mysqli_stmt_bind_param($stmt, "sssssssiiiiissiii", $pnome_completo, $pcpf, $ptelefone, $pemail, $psenha, $pdata_nascimento, $psexo, $pfumante, $ppet, $pquant_pet, $pvegano, $pvegetariano, $pfaculdade, $ptrabalho, $ptem_carro, $ptem_vel, $pcozinha);




$pnome_completo = $nome_completo;
$ptelefone = $telefone ;
$pcpf = $cpf ;
$psenha = $senha;
$pdata_nascimento = $data_nascimento;
$psexo = $sexo;
$pfumante = $fumante ;
$ppet = $pet;
$pquant_pet = $quant_pet;
$pvegano = $vegano;
$pvegetariano  = $vegetariano;
$pfaculdade = $faculdade;
$ptrabalho = $trabalho;
$ptem_carro = $tem_carro;
$ptem_vel = $tem_vel;
$pcozinha = $cozinha;
$pemail   = $email;


/* Execute the statement */
mysqli_stmt_execute($stmt);

header('location: ../index.php');






?>