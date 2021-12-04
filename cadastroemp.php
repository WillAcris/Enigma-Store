<?php
    include("conexao.php");

    $nomemp=addslashes($_POST['nomemp']);
    $emailemp=addslashes($_POST['emailemp']);
    $senhaemp=addslashes(MD5($_POST['senhaemp']));
    $cepemp=addslashes($_POST['cepemp']);
    $cnpjemp=addslashes($_POST['cnpjemp']);

    $sql="INSERT INTO empresa(cnpjemp, nomemp, emailemp, senhaemp, cepemp)
        VALUES ('$cnpjemp', '$nomemp', '$emailemp', '$senhaemp', '$cepemp')";
    
    if(mysqli_query($conexao, $sql)){
        header("Location: index.html");
    }else{
        header("Location: cadastro_empresa.php");
    }
    mysqli_close($conexao);
?>