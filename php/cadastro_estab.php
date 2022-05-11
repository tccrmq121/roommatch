<?php
require("conexao.php");

/*Coletar caminho da imagem*/

if(isset($_FILES['foto_perfil_imovel'])) { /*Verifica se um arquivo foi enviado*/
    $foto = $_FILES['foto_perfil_imovel'];

    $pasta = "../userimages/"; /*Pasta onde os arquivos vão ser salvos*/
    $nomefoto0 = $foto['name'];
    $nomefoto = uniqid(); /*Criar um nome aleatório para o novo arquivo*/
    $extensao = strtolower(pathinfo($nomefoto0, PATHINFO_EXTENSION)); /*Extrair extensão do arquivo*/
    $caminho = $pasta . $nomefoto . "." . $extensao; /*Concatenação gerando o nome do arquivo*/
    move_uploaded_file($foto['tmp_name'], $caminho); /*Salva foto no caminho especificado*/
    $imagem = $caminho;

    
}



$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$banheiros = $_POST["banheiros"];
$tamanho_casa = $_POST["tamanho_casa"];
$valor_aluguel= $_POST["valor_aluguel"];
$negociavel = $_POST["negociavel"];
$apartamento_ou_casa = $_POST["apartamento_ou_casa"];
$comodos= $_POST["comodos"];
$quartos= $_POST["quartos"];
$lavanderia = $_POST["lavanderia"];
$vagas_carro = $_POST["vagas_carro"];
$internet = $_POST["internet"];
/*$imagem*/
$descricao = $_POST["descricao"];
$id_locador = intval($_POST["ide"]);

/*
echo "<p>1 $cep</p>";
echo "<p>2 $endereco </p>";
echo "<p>3 $complemento</p>";
echo "<p>4 $bairro</p>";
echo "<p>5 $cidade</p>";
echo "<p>6 $estado</p>";
echo "<p>7 $banheiros</p>";
echo "<p>8 $tamanho_casa</p>";
echo "<p>9 $valor_aluguel</p>";
echo "<p>10 $negociavel</p>";
echo "<p>11 $apartamento_ou_casa</p>";
echo "<p>12 $comodos</p>";
echo "<p>13 $quartos</p>";
echo "<p>14 $lavanderia</p>";
echo "<p>15 $vagas_carro</p>";
echo "<p>16 $internet</p>";
echo "<p>17 $imagem</p>";
echo "<p>18 $descricao</p>";
echo "<p>19 $id_locador</p>";*/











$stmt = mysqli_prepare($mysqli, "INSERT INTO estabelecimentos (CEP, endereco, complemento, bairro, cidade, estado, quartos, tamanho_casa, valor, negociavel, descricao, ap_ou_casa, vagas_carro, comodos, banheiros, lavanderia, internet, id_locador, foto_perfil_casa) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
 
mysqli_stmt_bind_param($stmt,"ssssssiiiisiiiiiiis", $pcep, $pendereco, $pcomplemento, $pbairro, $pcidade, $pestado, $pquartos, $ptamanho_casa, $pvalor_aluguel, $pnegociavel , $pdescricao, $papartamento_ou_casa, $pvagas_carro, $pcomodos, $pbanheiros, $plavanderia, $pinternet, $pidl, $pfoto);

$pcep = $cep;
$pendereco = $endereco;
$pcomplemento = $complemento;
$pbairro = $bairro;
$pcidade = $cidade;
$pestado = $estado;
$pquartos = $quartos;
$ptamanho_casa = $tamanho_casa;
$pvalor_aluguel = $valor_aluguel;
$pnegociavel  = $negociavel;
$pdescricao = $descricao;
$papartamento_ou_casa = $apartamento_ou_casa;
$pvagas_carro = $vagas_carro;
$pcomodos = $comodos;
$pbanheiros = $banheiros;
$plavanderia = $lavanderia;
$pinternet = $internet;
$pidl = $id_locador;
$pfoto = $imagem;

/* Execute the statement */

mysqli_stmt_execute($stmt);

$last_id2 = mysqli_insert_id($mysqli);

header('location: ../Cadastro quarto/index.php?id2='.$last_id2);








?>