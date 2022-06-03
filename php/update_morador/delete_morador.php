<?php

require("conexao.php");

$idmorador =  $_SESSION['id_morador'];

$stmt mysqli_prepare('DELETE from moradores WHERE id_morador = ?');

mysqli_stmt_bind_param($stmt, "i", $pidmorador);


$pidmorador = $idmorador;
    
/* Execute the statement */
mysqli_stmt_execute($stmt);


header('location: ../../index.php');





?>