<?php

    $mysqli_connection = new mysqli("localhost", "root", "", "enigmastore");
    $result = $mysqli_connection->query("SELECT * FROM produto");
    
    while($linha = mysqli_fetch_array($result)){
        $id = $linha['id_produto'];
        $img = $linha['imgprod'];
        $nome = $linha['nomeprod'];
        $preco = $linha['precoprod'];
    }
    $mysqli_connection->close();

?>
    