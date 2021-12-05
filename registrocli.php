<?php
    include("conexao.php");

    $nomecli=addslashes($_POST['nomecli']);
    $emailcli=addslashes($_POST['emailcli']);
    $senhacli=addslashes(MD5($_POST['senhacli']));
    $cpfcli=addslashes($_POST['cpfcli']);

    $sql="INSERT INTO cliente(nomecli, emailcli, senhacli, cpfcli)
        VALUES('$nomecli', '$emailcli', '$senhacli', '$cpfcli')";

    if(mysqli_query($conexao, $sql)){
        header("Location: index.html");
    }else{
        header("Location: Registre-se.php");
    }
    mysqli_close($conexao);
?>