<?php
    include("conexao.php");

    $usuarionome=$_POST['usuarionome'];
    $usuarioemail=$_POST['usuarioemail'];
    $usuariosenha=$_POST['usuariosenha'];

    $sql="INSERT INTO usuario(usuarionome, usuarioemail, usuariosenha) VALUES 
        ('$usuarionome', $usuarioemail', '$usuariosenha')";
    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado !";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>
