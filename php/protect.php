<?php


//Não deixa acessar telas sem estar logado
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_morador'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"..\index.php\">Entrar</a></p>");
}




?>