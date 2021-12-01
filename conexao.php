<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="enigmastore";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao){
        die("Ops... Houve um erro de conexão: ".mysqli_connect_error());
    }
?>
