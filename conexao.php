<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="enigmastore";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao){
        die("Erro: ".mysqli_connect_error());
    }
?>
