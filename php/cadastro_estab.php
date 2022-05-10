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
    
}

?>