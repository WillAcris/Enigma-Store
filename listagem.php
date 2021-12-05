<?php

    $mysqli_connection = new mysqli("localhost", "root", "", "enigmastore");
    $result = $mysqli_connection->query("SELECT nomeprod, precoprod FROM produto");
    
    while($linha=mysqli_fetch_array($result)){
        $nome = $linha['nomeprod'];
        $preco = $linha['precoprod'];
    }
    $mysqli_connection->close();

?>
    